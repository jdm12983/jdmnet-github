<?php

/*
 * FILE:      01-04-skin-mainpg-bottom.php
 * PURPOSE:   HTML for the end of the main pages/site.
 * LAST EDIT: Thursday, February 15, 2024; 11:19:53 PM
 */

/* indent 6 spaces to start */

?>

      <div class="spacer-10px-h"></div> <!-- spacer -->

      <footer class="page-footer page-footer-secondary copyright-text font-expletus-sans">
        Copyright &#169; <time datetime="1999-01-01 00:00:00-06:00">1999</time> &#8211; <time datetime="<?php echo showDate('YearLong'); ?>-12-31 23:59:59-06:00"><?php echo showDate('YearLong'); ?></time>, by JDMnet.<br>All Rights Reserved.
      </footer>

      <br><br>

      <button onclick="topFunction()" id="my-btn" title="Go to top" class="font-bold"><i class="fa-solid fa-angles-up"></i></button>
    </div>
    <!-- end site container -->

    <!-- AddToAny BEGIN [customize: https://www.addtoany.com/buttons/customize/] -->
    <div class="a2a_kit a2a_kit_size_24 a2a_floating_style a2a_vertical_style" style="bottom:10px; right:10px;">
      <a class="a2a_button_x"></a>
      <a class="a2a_button_reddit"></a>
      <a class="a2a_button_facebook"></a>
      <a class="a2a_button_print"></a>
      <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    </div>

    <script async src="./inc/js/a2a-config.js"></script>

    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <!-- AddToAny END -->

    <script src="<?php echo $urlFldrIncJSA; ?>/vendor/jquery-3.7.1.min.js"></script>
    <script src="<?php echo $urlFldrIncJSA; ?>/jdmnet-js.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133836544-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-133836544-1');
    </script>

    <!-- PLEASE NOTE: The web site is currently under major development as of now. Please keep checking back as we add new sections; and improve existing areas. -->
  </body>

</html>
<?php



?>