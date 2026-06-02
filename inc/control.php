<?php

/*
 * FILE:      control.php
 * PURPOSE:   Contains any globally used functions, variables, etc.
 * LAST EDIT: Sunday, August 11, 2024; 08:43:46 PM
 */

/*
 * Make sure the variables are set correctly and safely
 */
function safeGet( $var ) {
  switch ( isset( $_GET[ $var ] ) ) {
    case true:
      return trim( $_GET[ $var ] );
      break;
    default:
      return false;
      break;
  }
}

function safePost( $var ) {
  switch ( isset( $_POST[ $var ] ) ) {
    case true:
      return trim( $_POST[ $var ] );
      break;
    default:
      return false;
      break;
  }
}

function safeRequest( $var ) {
  switch ( isset( $_REQUEST[ $var ] ) ) {
    case true:
      return trim( $_REQUEST[ $var ] );
      break;
    default:
      return false;
      break;
  }
}

function safeSession( $var ) {
  switch ( isset( $_SESSION[ $var ] ) ) {
    case true:
      return trim( $_SESSION[ $var ] );
      break;
    default:
      return false;
      break;
  }
}

function safeCookie( $var ) {
  switch ( isset( $_COOKIE[ $var ] ) ) {
    case true:
      return trim( $_COOKIE[ $var ] );
      break;
    default:
      return false;
      break;
  }
}

/*
 * Function serverURL() returns the current server URL.
 *
 * Will use either HTTP or HTTPS based on server/URL
 */
function serverURL() {
  switch ( isset( $_SERVER[ 'HTTPS' ] ) && $_SERVER[ 'HTTPS' ] == 'on' ) {
    case 'on':
      $https = 's';
      break;
    default:
      $https = '';
      break;
  }

  $proto = 'http' . $https . '://';

  switch ( isset( $_SERVER[ 'HTTP_HOST' ] ) ) {
    case true:
      $httpHost = $_SERVER[ 'HTTP_HOST' ];
      break;
    default:
      $httpHost = $_SERVER[ 'SERVER_NAME' ];
      break;
  }

  $server = $httpHost;

  return $proto . $server;
}

/*
 * Function serverURLnoHTTP() returns the current server URL.
 *
 * Without the HTTP/HTTPS at the beginning.
 */
function serverURLnoHTTP() {
  switch ( isset( $_SERVER[ 'HTTP_HOST' ] ) ) {
    case true:
      $httpHostB = $_SERVER[ 'HTTP_HOST' ];
      break;
    default:
      $httpHostB = $_SERVER[ 'SERVER_NAME' ];
      break;
  }

  $serverB = $httpHostB;

  return $serverB;
}

/*
 * Use the following code when you need to get a current, opened, PHP files location and file name
 */
$urlOpenPHPA = serverURL() . $_SERVER['PHP_SELF']; // Outputs: http(s)://(www.)host.com/control.php
$urlOpenPHPB = $_SERVER['DOCUMENT_ROOT'];          // website root folder the file is in; Outputs: /home/xyxfc84nv1x5/public_html

/*
 * Get the domain name extension (.com, .org, etc.) and put into a variable
 */
$domainExtension = pathinfo( $_SERVER['SERVER_NAME'], PATHINFO_EXTENSION );

/*
 * Get the current full URL to put into a variable.
 *
 * $urlPageFullI  <- Get current, full URL; NOT dependent on other functions and/or variables.
 * $urlPageFullD <- Get current, full URL; dependent on other functions and/or variables.
 */
if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ) {
  $urlPageFullI = 'https';
} else {
  $urlPageFullI = 'http';
}

$urlPageFullI .= '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$urlPageFullD = serverURL() . $_SERVER['REQUEST_URI'];

/*
 * " showDate " function
 *
 * Shows the current date (at the time the page loads) based on a variable.
 *
 * Reference: https://www.w3schools.com/php/func_date_date.asp
 *            https://www.w3schools.com/php/php_date.asp
 *            https://www.php.net/manual/en/function.date.php
 */
$sDate = '';

function showDate( $sDate = '' ) {
  switch ( $sDate ) {
    case 'DateFullShortA':
      $sDateOutput = date( 'D, M d, Y' ); // Full date; Formatted: Sun, January 03, 2016
      return $sDateOutput;
      break;
      
    case 'DateFullShortB':
      $sDateOutput = date( 'D, d M Y' ); // Full date; Formatted: Sun, 03 January 2016
      return $sDateOutput;
      break;
      
    case 'DateFullLongA':
      $sDateOutput = date( 'l, F d, Y' ); // Full date; Formatted: Sunday, January 03, 2016
      return $sDateOutput;
      break;
      
    case 'DateFullLongB':
      $sDateOutput = date( 'l, d F Y' ); // Full date; Formatted: Sunday, 03 January 2016
      return $sDateOutput;
      break;
      
    case 'YearShort':
      $sDateOutput = date( 'y' ); // Year; Formatted: 16
      return $sDateOutput;
      break;
      
    case 'YearLong':
      $sDateOutput = date( 'Y' ); // Year; Formatted: 2016
      return $sDateOutput;
      break;
      
    default:
      $sDateOutput = ''; // Returns nothing/defaults blank
      return $sDateOutput;
      break;
  }
}

/*
 * " showTime " function
 *
 * Displays the current time (at the time the page loads) based on a variable
 *
 * Reference: https://www.w3schools.com/php/func_date_date.asp
 *            https://www.w3schools.com/php/php_date.asp
 *            https://www.php.net/manual/en/function.date.php
 */
$sTime = '';

function showTime( $sTime = '' ) {
  switch ( $sTime ) {
    case 'TimeFullLocal12':
      $sTimeOutput = date( 'h:i:s A' ); // Full time; 12-hour clock; Formatted: 06:58:12 PM
      return $sTimeOutput;
      break;
      
    case 'TimeFullLocal24':
      $sTimeOutput = date( 'H:i:s' ); // Full time; 24-hour clock; Formatted: 18:58:12
      return $sTimeOutput;
      break;
      
    case 'TimeFullGMT12':
      $sTimeOutput = gmdate( 'h:i:s A' ); // Full time; 12-hour clock; GMT/UTC time; Formatted: 06:58:12 PM
      return $sTimeOutput;
      break;
      
    case 'TimeFullGMT24':
      $sTimeOutput = gmdate( 'H:i:s' ); // Full time; 24-hour clock; GMT/UTC time; Formatted: 18:58:12
      return $sTimeOutput;
      break;
      
    default:
      $sTimeOutput = ''; // Returns nothing/defaults blank
      return $sTimeOutput;
      break;
  }
}

/*
 * " navLinkOne " function
 *
 * This will either create a clickable link, or not, for the navigation box of the site.
 * There will only be a clickable link if the current page doesn't match with what is being linked.
 * Otherwise it will just be regular text (if the page and the text/would-be link match).
 * uses the " $pg " variable to determine if there is a match or not.
 *
 * $navTag    <- A "tag"/name for links.
 * $navURL    <- The URL for the link. This must be set.
 * $navTitle  <- A title to display when hovering over the link or text. If not set, it will use $navText .
 * $navText   <- The text to display, with or without a link. This must be set.
 * $navTarget <- If set; will tell where the link to launch/target.
 *     $navTarget option:
 *         (1) blank  <- _blank - Opens the linked document in a new window or tab
 *         (2) self   <- _self - Opens the linked document in the same window/tab as it was clicked (this is default) [should have to use this]
 *         (3) parent <- _parent - Opens the linked document in the parent frame
 *         (4) top    <- _top - Opens the linked document in the full body of the window
 * $navFAIcon <- What "FontAwsome" text icon to use; if any. Fonts/Font info can be found at: https://fontawesome.com/search?m=free
 *     Currently used text icons:  [Sunday, August 11, 2024; 08:43:46 PM]
 *         (1) fa-solid fa-house        <- "Home" / home page                             <- search " house "
 *         (2) fa-solid fa-desktop      <- "Computers" / computer related info main page  <- search " desktop "
 *         (3) fa-solid fa-comment      <- "Contact Us" / contact page                    <- search " comment "
 *         (4) fa-solid fa-circle-info  <- "Business Info" / business info page           <- search " info circle "
 *
 * PHP_EOL <- will do a line break/carriage return properly whether on Linux or Windows systems.
 */
/*
 * Possible $navTag/$pg as of Sunday, August 11, 2024; 08:43:46 PM
 * Reference "Keywords for links"/"URLs for links" section of settings.php.
 *
 *  home
 *  business
 *  contact
 *  pc
 */
function navLinkOne( $navTag, $navURL, $navTitle='', $navText, $navTarget='', $navFAIcon='' ) {
  $trimNavTag    = ( isset( $navTag )    && $navTag    !== '' ) ? trim( $navTag )    : '';
  $trimNavURL    = ( isset( $navURL )    && $navURL    !== '' ) ? trim( $navURL )    : '';
  $trimNavTitle  = ( isset( $navTitle )  && $navTitle  !== '' ) ? trim( $navTitle )  : trim( $navText );
  $trimNavText   = ( isset( $navText )   && $navText   !== '' ) ? trim( $navText )   : '';
  $trimNavTarget = ( isset( $navTarget ) && $navTarget !== '' ) ? trim( $navTarget ) : '';
  $trimNavFAIcon = ( isset( $navFAIcon ) && $navFAIcon !== '' ) ? trim( $navFAIcon ) : '';
  
  if ( isset( $GLOBALS['pg'] ) && $GLOBALS['pg'] != '' ) {
    $trimPG = trim( $GLOBALS['pg'] );
  } else {
    $trimPG = '';
  }
  
  switch ( $trimNavTarget ) {
    case 'blank':
      $trimNavTarget = ' target="_blank"';
      break;
      
    case 'self':
      $trimNavTarget = ' target="_self"';
      break;
      
    case 'parent':
      $trimNavTarget = ' target="_parent"';
      break;
      
    case 'top':
      $trimNavTarget = ' target="_top"';
      break;
      
    default:
      $trimNavTarget = '';
      break;
  }
  
  switch ( isset( $trimNavFAIcon ) && $trimNavFAIcon != '' ) {
    case true:
      $navFAIconOutput = '<i class="' . $trimNavFAIcon . ' fontawesome-custom-1">&nbsp;</i>';
      break;
      
    default:
      $navFAIconOutput = '';
      break;
  }
  
  switch ( isset( $trimNavTag ) && isset( $trimPG ) && $trimNavTag !== $trimPG ) {
    case true:
      $navOutput = '<a href="' . $trimNavURL . '" title="' . $trimNavTitle . '"' . $trimNavTarget . '>' . $navFAIconOutput . $trimNavText . '</a>';
      return $navOutput;
      break;
      
    case false:
      $navOutput = '<span title="' . $trimNavTitle . '">' . $navFAIconOutput . $trimNavText . '</span>';
      return $navOutput;
      break;
      
    default:
      return false;
      break;
  }
}

/* A "debugging" function */
/*
 * Simple function to display the output of variable if set.
 * 
 * $vToPrint ---- The variable to "print out"; must be supplied.
 * 
 * $vParse ------ Weather the variable needs to be "parsed" or not.
 *   "$vParse" Options:
 *     "parse" ------------------ Parse the variable
 *     "noparse" or left empty -- Do not parse the variable.
 * 
 * $vParseType -- What parse type is needed. Must be set if $vParse set to "parse"
 *   "$vParseType" Options:
 *     "PHP_URL_SCHEME"
 *     "PHP_URL_USER"
 *     "PHP_URL_PASS"
 *     "PHP_URL_HOST"
 *     "PHP_URL_PORT"
 *     "PHP_URL_PATH"
 *     "PHP_URL_QUERY"
 *     "PHP_URL_FRAGMENT"
 */
function printVariable( $vToPrint, $vParse='', $vParseType='' ) {
  
  // switch one
  switch ( isset( $vToPrint ) && $vToPrint !== '' ) {
      
    case true:
      
      //switch two
      switch ( isset( $vParse ) && $vParse != '' && $vParse != 'noparse' ) {
          
        case true:
          
          //switch three
          switch ( isset( $vParseType ) && $vParseType !== '' ) {
              
            case true:
              
              switch ( $vParseType ) {
                  
                case 'PHP_URL_SCHEME':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_SCHEME);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_USER':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_USER);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_PASS':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_PASS);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_HOST':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_HOST);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_PORT':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_PORT);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_PATH':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_PATH);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_QUERY':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_QUERY);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                case 'PHP_URL_FRAGMENT':
                  $vParsed = parse_url($GLOBALS['urlPageFullD'], PHP_URL_FRAGMENT);
                  
                  $vPrintOut = ( isset( $vParsed ) && $vParsed !== '' ) ? $vParsed : '<span class="font-bold"><em>Empty or Not Set</em></span>';
                  break;
                  
                default:
                  $vPrintOut = $vToPrint;
                  break;
                  
              }
              
              break;
              
            default:
              $vPrintOut = $vToPrint;
              break;
              
          }
          
          break;
          
        default:
          $vPrintOut = $vToPrint;
          break;
          
      }
      
      return $vPrintOut;
      break;
      
    default:
      $vPrintOut = '<span class="font-bold"><em>Empty or Not Set</em></span>';
      return $vPrintOut;
      break;
      
  }
  
}

/*
 * Redirect function
 *
 * $redirectURL       <- URL to redirect to.
 * $redirectPermanent <- Weather the redirect is a permanent one or not.
 *   "$redirectPermanent" Options:
 *     "true"  <- Permanent
 *     "false" <- Non permanent
 */
function redirect( $redirectURL, $redirectPermanent = false ) {
  if ( headers_sent() === false ) {
    header ( 'Location: ' . $redirectURL, true, ( $redirectPermanent === true ) ? 301 : 302 );
  }

  exit();
}

?>