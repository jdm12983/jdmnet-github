<?php

/*
 * FILE:      content-business.php
 * PURPOSE:   HTML for Business Info page.
 * LAST EDIT: Wednesday, May 06, 2026; 11:08:42 AM
 */

/* indent 10 spaces to start */

?>
          <main class="block-center width-100-percent">

            <article>

              <header>
                <h1 class="font-expletus-sans">Business Hours</h1>
              </header>

              <p>These are our current work hours; the main times that we will take calls and provide support for clients/customers.</p>
              <p>Current Hours (which may vary):</p>

              <ul>
                <li>
                  <span class="work-day line-height-2rem font-bold">Monday:</span>
                  <time datetime="09:00:00">9:00 AM</time> to <time datetime="17:00:00">5:00 PM</time>
                </li>
                <li>
                  <span class="work-day line-height-2rem font-bold">Tuesday:</span>
                  <time datetime="09:00:00">9:00 AM</time> to <time datetime="17:00:00">5:00 PM</time>
                </li>
                <li>
                  <span class="work-day line-height-2rem font-bold">Wednesday:</span>
                  <time datetime="09:00:00">9:00 AM</time> to <time datetime="17:00:00">5:00 PM</time>
                </li>
                <li>
                  <span class="work-day line-height-2rem font-bold">Thursday:</span>
                  <time datetime="09:00:00">9:00 AM</time> to <time datetime="17:00:00">5:00 PM</time>
                </li>
                <li>
                  <span class="work-day line-height-2rem font-bold">Friday:</span>
                  <time datetime="09:00:00">9:00 AM</time> to <time datetime="17:00:00">5:00 PM</time>
                </li>
                <li>
                  <span class="work-day line-height-2rem font-bold">Saturday:</span>
                  <em>Closed</em>
                </li>
                <li>
                  <span class="work-day line-height-2rem font-bold">Sunday:</span>
                  <em>Closed</em>
                </li>
              </ul>

              <blockquote>
                <p class="font-italic">All times are based on the Central time zone.</p>
              </blockquote>

              <p>All changes to work hours; or any holiday closures; will be posted here.</p>
              <p>If you have any questions, comments, concerns, etc. feel free to go to our <a href="<?php echo  $urlContact; ?>" title="Contact Information">contact</a> page and get in touch with us.</p>

            </article>

            <br>

            <article>

              <header>
                <h2 class="font-expletus-sans">PayPal Verified!</h2>
              </header>

              <div class="paypal-info-table">
                <div class="paypal-info-tr">
                  <div class="paypal-info-td-left">
                    <!-- Official PayPal Seal -->
                    <img src="<?php echo $urlFldrImgPayPalA; ?>/paypal-seal-3.png" alt="PayPal Seal" class="paypal-info-seal" width="80" height="80">
                  </div>

                  <div class="paypal-info-td-right">
                    <p>JDMnet uses PayPal for most transactions and is a verified PayPal user.</p>
                    <p>Since we use PayPal; we can accept the following credit cards/forms of payment (also, PayPal direct payments):</p>
                    <p class="paypal-info-payments">
                      <img src="<?php echo $urlFldrImgPayPalA; ?>/visa-curved-32px-2.png" alt="Visa" width="51" height="32"> <img src="<?php echo $urlFldrImgPayPalA; ?>/mastercard-curved-32px-2.png" alt="MasterCard" width="51" height="32"> <img src="<?php echo $urlFldrImgPayPalA; ?>/discover-curved-32px-2.png" alt="Discover" width="51" height="32"> <img src="<?php echo $urlFldrImgPayPalA; ?>/american-express-curved-32px-2.png" alt="American Express" width="51" height="32">
                    </p>
                  </div>
                </div>
              </div>

            </article>

            <p>&nbsp;</p>

          </main>
<?php



?>