<?php

/*
 * FILE:      content-miscinfo2-pg2.php
 * PURPOSE:   HTML/content for misc info page 2.
 * LAST EDIT: Wednesday, May 06, 2026; 10:56:41 AM
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
              <tr>
               <td>
                 <p>"Breaking apart" this line:</p>
                 <pre style="border: 0;">http://username:password@hostname:9090/path?arg=value#anchor</pre>
                 <p>Using "<code>var_dump</code>" and "<code>parse_url</code>".</p>
               </td>
              </tr>
              <tr>
                <td>
                  <pre style="margin: 0; padding: 0; border: 0;">
<?php

  echo var_dump(parse_url($urlTestOne)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_SCHEME)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_USER)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_PASS)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_HOST)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_PORT)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_PATH)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_QUERY)) . PHP_EOL;
  echo var_dump(parse_url($urlTestOne, PHP_URL_FRAGMENT));

?>
                  </pre>
                </td>
              </tr>
            </tbody>
          </table>

        </article>

      </main>
<?php



?>