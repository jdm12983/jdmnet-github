<?php

/*
 * FILE:      content-miscinfo2-pg1.php
 * PURPOSE:   HTML/content for misc info page 1.
 * LAST EDIT: Wednesday, May 06, 2026; 10:53:21 AM
 */

/* indent 6 spaces to start */

?>
      <main class="block-center width-100-percent">

        <article id="section_one">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Section 1
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <?php

                foreach ( $indicesServer as $arg ) {
                  echo PHP_EOL;

                  if ( isset ( $_SERVER[$arg] ) ) {
                    ?>
              <tr>
                <td class="left-style-a"><?php echo $arg; ?></td>
                <td class="right-style-a"><?php echo $_SERVER[$arg]; ?></td>
              </tr>
                    <?php
                  } else {
                    ?>
              <tr>
                <td class="left-style-a"><?php echo $arg; ?></td>
                <td class="right-style-a"> - </td>
              </tr>
                    <?php
                  }
                }

                echo PHP_EOL;

              ?>
            </tbody>
          </table>

        </article>

        <br><br>

        <article id="section_two">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Section 2
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <?php

                foreach ( $indicesParseURL as $arg2 ) {
                  echo PHP_EOL;

                  ?>
              <tr>
                <td class="left-style-a"><?php echo $arg2; ?></td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, $arg2); ?></td>
              </tr>
                  <?php
                }

                echo PHP_EOL;

              ?>
            </tbody>
          </table>

        </article>

        <br><br>

        <article id="section_three">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Section 3
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <?php

                foreach ( $indicesParseURLB as $arg3 ) {
                  echo PHP_EOL;

                  if ( isset ( $arg3 ) ) {
                    ?>
              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo $arg3; ?></td>
              </tr>
                    <?php
                  } else {
                    ?>
              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"> - </td>
              </tr>
                    <?php
                  }

                  echo PHP_EOL;
                }

              ?>
            </tbody>
          </table>

        </article>

        <br><br>

        <article id="section_four">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Section 4
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_SCHEME) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_USER) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_PASS) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_HOST) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_PORT) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_PATH) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_QUERY) ?></td>
              </tr>

              <tr>
                <td class="left-style-a">[*]</td>
                <td class="right-style-a"><?php echo parse_url($urlPageFullD, PHP_URL_FRAGMENT) ?></td>
              </tr>

            </tbody>
          </table>

        </article>

      </main>
<?php



?>