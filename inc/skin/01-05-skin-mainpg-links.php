<?php

/*
 * FILE:      01-05-skin-mainpg-links.php
 * PURPOSE:   HTML for the main links/nav used for the site.
 * LAST EDIT: Thursday, February 15, 2024; 11:19:53 PM
 */

?>
          <div class="header-two-outline">
            <div class="header-two-background">
              <h1 class="header-one-h1 font-expletus-sans font-bold">NAVIGATION</h1>
            </div>
            <nav class="font-expletus-sans">
<?php
/*
 *  " navLinkOne " short explanation; see " control.php " file for more
 *
 *    navLinkOne( '1', '2', '3', '4', '5', '6' )
 *
 *      '1' <= $navTag ----- "Tag" for page; part of its URL. ------------------------------- <REQUIRED>
 *      '2' <= $navURL ----- URL for the page; look to " settings.php ". -------------------- <REQUIRED>
 *      '3' <= $navTitle --- Title of link displayed when hovered over. --------------------- <OPTIONAL>
 *      '4' <= $navText ---- Text on the page/clickable part of link. ----------------------- <REQUIRED>
 *      '5' <= $navTarget -- Wether to open the link in a new page or not. ------------------ <OPTIONAL>
 *      '6' <= $navFAIcon -- To use a FontAwesome "icon" or not. See: " control.php " file -- <OPTIONAL>
 */
?>
              <?php echo navLinkOne( 'home', $urlHome, 'Home Page', 'Home', '', '' ); ?>
              <?php echo navLinkOne( 'pc', $urlPCHome, 'Computer Specs', 'PC Specs', '', '' ); ?>
              <br>
              <?php echo navLinkOne( 'elite', $urlEDHome, 'Elite Dangerous', 'Elite Dangerous', '', '' ); ?>
              <br>
              <?php echo navLinkOne( 'youtube', $urlYoutube, 'YouTube Channel', 'YouTube', 'blank', '' ); ?>
              <?php echo navLinkOne( 'twitch', $urlTwitch, 'Twitch Channel', 'Twitch', 'blank', '' ); ?>
              <?php echo navLinkOne( 'twitter', $urlTwitter, 'Twitter Account', 'Twitter', 'blank', '' ); ?>
              <?php echo navLinkOne( 'steamgroup', $urlSteamGroup, 'Steam Group', 'Steam', 'blank', '' ); ?>
            </nav>
          </div>
<?php

?>