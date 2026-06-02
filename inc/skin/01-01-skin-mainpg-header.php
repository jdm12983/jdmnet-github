<?php

/*
 * FILE:      01-01-skin-mainpg-header.php
 * PURPOSE:   HTML for the header/start of the site.
 * LAST EDIT: Wednesday, May 06, 2026; 04:21:19 AM
 */

?>
<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/WebPage">

  <head>
    <!-- character encoding -->
    <meta charset="utf-8">

    <!-- decide what url/site all links are based from (if a full/exact url isn't used) -->
    <base href="<?php echo $urlB; ?>">

    <!-- stylesheet link -->
    <link href="<?php echo $urlFldrIncA; ?>/fa-720/css/all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $urlFldrIncCSSA; ?>/main-styling-0022-0011.css" rel="stylesheet" media="all">

    <!-- search engine "robot" related tags -->
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="1 days">

    <!-- other meta tags -->
    <meta name="description" content="JDMnet is a site for web and computer related support and design.">
    <meta name="image" content="<?php echo $urlFldrImgA; ?>/jdmnet-socialmedia-01-filled-1200x630.png">
    <meta name="keywords" content="design, support, web sites, logos, graphics, php, html, dreamweaver, adobe, photoshop, fireworks, pc, computers, repair, upgrade">
    <meta name="rating" content="General">
    <meta name="author" content="Danny">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="<?php echo $urlA; ?>/<?php echo $pg; ?>">

    <!-- favicon info -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $urlA; ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $urlA; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $urlA; ?>/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $urlA; ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $urlA; ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $urlA; ?>/safari-pinned-tab.svg" color="#b89b38">
    <meta name="apple-mobile-web-app-title" content="JDMnet">
    <meta name="application-name" content="JDMnet">
    <meta name="msapplication-TileColor" content="#b89b38">
    <meta name="msapplication-TileImage" content="<?php echo $urlA; ?>/mstile-144x144.png">
    <meta name="theme-color" content="#b89b38">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="JDMnet | Design and Support">
    <meta itemprop="description" content="JDMnet is a site for web and computer related support and design.">
    <meta itemprop="image" content="<?php echo $urlFldrImgA; ?>/jdmnet-socialmedia-01-filled-1200x630.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="JDMnet | Design and Support">
    <meta name="twitter:description" content="JDMnet is a site for web and computer related support and design.">
    <meta name="twitter:site" content="@JDMnet1">
    <meta name="twitter:creator" content="@JDMnet1">
    <meta name="twitter:image:src" content="<?php echo $urlFldrImgA; ?>/jdmnet-socialmedia-01-filled-1200x630.png">
    <meta name="twitter:image:alt" content="JDMnet Social Media Logo">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="JDMnet | Design and Support">
    <meta property="og:description" content="JDMnet is a site for web and computer related support and design.">
    <meta property="og:image" content="<?php echo $urlFldrImgA; ?>/jdmnet-socialmedia-01-filled-1200x630.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="<?php echo $urlA; ?>/<?php echo $pg; ?>">
    <meta property="og:site_name" content="JDMnet | Design and Support">
    <meta property="og:locale" content="en_US">
    <meta property="fb:admins" content="551288938">
    <meta property="fb:app_id" content="2235869766425107">
    <meta property="og:type" content="website">
    <meta property="og:type" content="article">

    <!-- preload to help speeds -->
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://stats.g.doubleclick.net">

    <title><?php echo $docTitle; ?></title>
  </head>

<?php

if ( isset( $docBodyExtras ) && $docBodyExtras != '' ) {
  echo '  <body ' . $docBodyExtras . '>' . PHP_EOL;
} else {
  echo '  <body>' . PHP_EOL;
}

?>

    <!-- start site container -->
    <div class="site-container">

      <!-- start page header/"title" bar -->
      <header class="page-header">
        <h1 class="gold-box gold-box-h1 font-expletus-sans font-bold"><?php echo $docTitleBar; ?></h1>
      </header>
      <!-- end page header/"title" bar -->

      <div class="spacer-10px-h"></div> <!-- spacer -->

      <!-- start main site flex box -->
      <div class="page-flex-container">

<?php

/*
 * PHP_EOL <- will do a line break/carriage return properly whether on Linux or Windows systems.
 */

?>