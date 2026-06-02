<?php

/*
 * FILE:      02-2-skin-miscinfo-bottom.php
 * PURPOSE:   HTML for the end of the misc info page.
 * LAST EDIT: Wednesday, May 06, 2026; 05:40:09 AM
 */

/* indent 4 spaces to start */

?>

    </div>

    <div class="side-nav-txt-one">
      <div class="side-nav-txt-two font-expletus-sans font-bold text-align-right" style="cursor: pointer;" onclick="openNav()">MENU <i class="fa-solid fa-arrow-left-long"></i></div>
    </div>

    <div id="my-side-nav" class="side-nav">
      <a href="javascript:void(0)" class="font-expletus-sans font-bold text-align-left closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark"></i></a>
      <a href="miscinfo" class="font-expletus-sans font-bold text-align-left"><i class="fa-solid fa-caret-right"></i></i>Main Info</a>
      <a href="page-miscinfo2.php" class="font-expletus-sans font-bold text-align-left"><i class="fa-solid fa-caret-right"></i></i>Misc. Info</a>
    </div>

    <button onclick="topFunction()" id="my-btn" title="Go to top" class="font-bold info"><i class="fa-solid fa-hand-point-up"></i></button>

    <p>&nbsp;</p>

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

  </body>

</html>
<?php



?>