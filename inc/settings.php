<?php

/*
 * FILE:      settings.php
 * PURPOSE:   Contains any globally variables, etc. These are customized for each site.
 * LAST EDIT: Wednesday, May 06, 2026; 11:12:38 AM
 */

require_once 'control.php';

/*
 * Set the default timezone
 *
 * Reference: http://php.net/manual/en/function.date-default-timezone-set.php
 * List of Supported Timezones: https://www.php.net/manual/en/timezones.php
 */
date_default_timezone_set( 'America/Chicago' ); // "America/Chicago"/GMT -6

/*
 * Define URLs/file locations for includes, requirements, etc.
 */

/*
 * Misc. Info
 */
$phoneNumberA        = '(205) 737-3407';
$phoneNumberACompact = '2057373407';

/*
 * Misc. URL related
 */
$urlUpOne = '../'; // Go back/up one directory
$urlHTTP  = 'http://';
$urlHTTPS = 'https://';
$urlWWW   = 'www.';

/*
 * Exact URLs; use RARELY
 */
$urlBaseNET      = 'jdmnet.net';
$urlBaseORG      = 'jdmnet.org';
$urlBaseLocal    = 'jdmnet';

$urlFullWWWNETaS = $urlHTTPS . $urlWWW . $urlBaseNET . '/'; // Outputs: " https://www.jdmnet.net/ "
$urlFullWWWNETa  = $urlHTTP . $urlWWW . $urlBaseNET . '/';  // Outputs: " http://www.jdmnet.net/ "

$urlFullWWWORGa  = $urlHTTP . $urlWWW . $urlBaseORG . '/';  // Outputs: " http://www.jdmnet.org/ "

$urlFullNETaS    = $urlHTTPS . $urlBaseNET . '/'; // Outputs: " https://jdmnet.net/ "
$urlFullNETa     = $urlHTTP . $urlBaseNET . '/';  // Outputs: " http://jdmnet.net/ "

$urlFullORGaS    = $urlHTTPS . $urlBaseORG . '/'; // Outputs: " https://jdmnet.org/ "
$urlFullORGa     = $urlHTTP . $urlBaseORG . '/';  // Outputs: " http://jdmnet.org/ "

$urlFullLocal    = $urlHTTP . $urlBaseLocal . '/'; // Outputs: " http://jdmnet/ "

/*
 * Folder names used for/in the site
 */
$fldrImages = 'img'; // Main images folder

  /*
   * Folders within the " img " folder
   */
  $fldrImgPayPal = $fldrImages . '/' . 'paypal'; // PayPal related images; Outputs: img/paypal

$fldrIncludes = 'inc'; // "Included" files used within "pages"/files

  /*
   * Folders within the " inc " folder.
   */
  $fldrIncContent = $fldrIncludes . '/' . 'content'; // "Content" for pages; Outputs: inc/content
  $fldrIncCSS     = $fldrIncludes . '/' . 'css';     // CSS used for styling; Outputs: inc/css
  $fldrIncJS      = $fldrIncludes . '/' . 'js';      // Javascript used for pages; Outputs: inc/js
  $fldrIncSkin    = $fldrIncludes . '/' . 'skin';    // HTML "skins"/layout for pages; Outputs: inc/skin

/*
 * Full URLs/Location - Will change based on where the files are uploaded to
 */
$urlA = serverURL(); // Outputs: http(s)://(www.)host.com
$urlB = $urlA . '/'; // Outputs: http(s)://(www.)host.com/

  $urlFldrImgA = $urlA . '/' . $fldrImages; // Images Folder; Outputs: http(s)://(www.)host.com/img
  $urlFldrImgB = $urlFldrImgA . '/';        // Images Folder; Outputs: http(s)://(www.)host.com/img/

    $urlFldrImgPayPalA  = $urlA . '/' . $fldrImgPayPal; // PayPal images URL; Outputs: http(s)://(www.)host.com/img/paypal
    $urlFldrImgPayPalB  = $urlFldrImgPayPalA . '/';     // PayPal images URL; Outputs: http(s)://(www.)host.com/img/paypal/

  $urlFldrIncA = $urlA . '/' . $fldrIncludes; // Includes folder URL; Outputs: http(s)://(www.)host.com/inc
  $urlFldrIncB = $urlFldrIncA . '/';          // Includes folder URL; Outputs: http(s)://(www.)host.com/inc/

    $urlFldrIncContentA = $urlA . '/' . $fldrIncContent; // Content folder URL; Outputs: http(s)://(www.)host.com/inc/content
    $urlFldrIncContentB = $urlFldrIncContentA . '/';     // Content folder URL; Outputs: http(s)://(www.)host.com/inc/content/

    $urlFldrIncCSSA     = $urlA . '/' . $fldrIncCSS; // CSS folder URL; Outputs: http(s)://(www.)host.com/inc/css
    $urlFldrIncCSSB     = $urlFldrIncCSSA . '/';     // CSS folder URL; Outputs: http(s)://(www.)host.com/inc/css/

    $urlFldrIncJSA      = $urlA . '/' . $fldrIncJS; // JavaScript/JS folder URL; Outputs: http(s)://(www.)host.com/inc/js
    $urlFldrIncJSB      = $urlFldrIncJSA . '/';     // JavaScript/JS folder URL; Outputs: http(s)://(www.)host.com/inc/js/

    $urlFldrIncSkinA    = $urlA . '/' . $fldrIncSkin; // HTML "skins"/layout folder URL; Outputs: http(s)://(www.)host.com/inc/skin
    $urlFldrIncSkinB    = $urlFldrIncSkinA . '/';     // HTML "skins"/layout folder URL; Outputs: http(s)://(www.)host.com/inc/skin/

/*
 * Relative URLs/Paths
 *
 * This set is based on going from a "root" folder; such as: host.com/
 */
$urlRelativeImgA = $fldrImages;          // Images Folder; Outputs: img
$urlRelativeImgB = $urlRelativeImgA . '/'; // Images Folder; Outputs: img/

  $urlRelativeImgPayPalA  = $fldrImgPayPal;             // PayPal related images; Outputs: img/paypal
  $urlRelativeImgPayPalB  = $urlRelativeImgPayPalA . '/'; // PayPal related images; Outputs: img/paypal/

$urlRelativeIncA = $fldrIncludes;        // "Included" files; Outputs: inc
$urlRelativeIncB = $urlRelativeIncA . '/'; // "Included" files; Outputs: inc/

  $urlRelativeIncContentA = $fldrIncContent;             // "Content" for pages; Outputs: inc/content
  $urlRelativeIncContentB = $urlRelativeIncContentA . '/'; // "Content" for pages; Outputs: inc/content/

  $urlRelativeIncCSSA     = $fldrIncCSS;             // CSS used for styling; Outputs: inc/css
  $urlRelativeIncCSSB     = $urlRelativeIncCSSA . '/'; // CSS used for styling; Outputs: inc/css/

  $urlRelativeIncJSA      = $fldrIncJS;             // Javascript used for pages; Outputs: inc/js
  $urlRelativeIncJSB      = $urlRelativeIncJSA . '/'; // Javascript used for pages; Outputs: inc/js/

  $urlRelativeIncSkinA    = $fldrIncSkin;             // HTML "skins"/layout for pages; Outputs: inc/skin
  $urlRelativeIncSkinB    = $urlRelativeIncSkinA . '/'; // HTML "skins"/layout for pages; Outputs: inc/skin/

/*
 * Keywords for links within the site; reference the .htaccess file
 */
$keywordHome         = 'home';     // Home page/index
$keywordContact      = 'contact';  // Contact info page
$keywordBusinessInfo = 'business-info'; // Business info page
$keywordPCHome       = 'pc-home';       // PC related info main page

/*
 * URLs for links within the site; web pages, etc.
 * Reference the .htaccess file
 */
$urlHome         = $urlB . $keywordHome;    // Outputs: http(s)://(www.)host.com/home
$urlContact      = $urlB . $keywordContact; // Outputs: http(s)://(www.)host.com/contact
$urlBusinessInfo = $urlB . $keywordBusinessInfo; // Outputs: http(s)://(www.)host.com/business-info
$urlPCHome       = $urlB . $keywordPCHome;   // Outputs: http(s)://(www.)host.com/pc

/*
 * URLs for external sites
 */
$urlTwitter = 'https://x.com/JDMnet1';
$urlFaceBook = 'https://fb.me/JDMnet';

?>