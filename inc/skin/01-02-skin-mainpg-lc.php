<?php

/*
 * FILE:      01-02-skin-mainpg-lc.php
 * PURPOSE:   HTML for entire left column and start of middle column.
 * LAST EDIT: Wednesday, May 06, 2026; 11:13:38 AM
 */

/* indent 8 spaces to start */

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
        <!-- start left column -->
        <div class="page-left-column page-left-column-secondary">
          <nav class="gold-outline width-100-percent">
            <h1 class="gold-box gold-box-h1 font-bold font-expletus-sans">NAVIGATION</h1>
            <div class="font-expletus-sans line-height-2rem"><?php echo navLinkOne( 'home', $urlHome, 'Home Page', 'Home', '', 'fa-regular fa-house' ); ?></div>
            <br>
            <div class="font-expletus-sans line-height-2rem"><?php echo navLinkOne( 'pc-home', $urlPCHome, 'Computer Related', 'Computers', '', 'fa-solid fa-computer' ); ?></div>
            <br>
            <div class="font-expletus-sans line-height-2rem"><?php echo navLinkOne( 'contact', $urlContact, 'Contact Information', 'Contact Us', '', 'fa-regular fa-message' ); ?></div>
            <div class="font-expletus-sans line-height-2rem"><?php echo navLinkOne( 'business', $urlBusinessInfo, 'Business Information', 'Business Info', '', 'fa-regular fa-building' ); ?></div>
          </nav>
        </div>
        <!-- end left column -->

        <!-- start middle column -->
        <div class="page-middle-column page-middle-column-secondary">
          <!-- start page content -->
<?php



?>