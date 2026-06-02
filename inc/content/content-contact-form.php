<?php

/*
 * FILE:      content-contact-form.php
 * PURPOSE:   HTML/Content for contact form.
 * LAST EDIT: Wednesday, May 06, 2026; 11:56:53 AM
 */

/* indent 10 spaces to start */

?>
          <main class="block-center width-100-percent">

            <article>

              <header>
                <h1 class="font-expletus-sans">Contact Information</h1>
              </header>

              <p>You can contact us on Twitter by going to <a href="<?php echo $urlTwitter; ?>" title="JDMnet Twitter" target="_blank"><?php echo $urlTwitter; ?></a>.</p>
              <p>Or contact on FaceBook by going to <a href="<?php echo $urlFaceBook; ?>" title="JDMnet FaceBook" target="_blank"><?php echo $urlFaceBook; ?></a>.</p>
              <p>If you would like to get in contact with one of our departments directly, please use the form below and we will get back to you as soon as possible.</p>

              <br>

              <div id="contact-container">

                <form id="form1" name="form1" method="post">

                  <div class="column-25-percent contact-label-a center-vertical-right-horizontal center-vertical-left-horizontalb font-bold">
                    <label for="name">Your Name:</label>&nbsp;
                  </div>

                  <div class="column-75-percent">
                    <input type="text" name="name" id="name" value="<?php echo $name; ?>" tabindex="0" class="width-75-percent" required><br>
                    <span class="error"><?php echo $nameErr; ?></span><br>
                  </div>

                  <div class="column-25-percent contact-label-a center-vertical-right-horizontal center-vertical-left-horizontalb font-bold">
                    <br><label for="email">Your Email:</label>&nbsp;
                  </div>

                  <div class="column-75-percent">
                    <input type="text" name="email" id="email" value="<?php echo $email; ?>" tabindex="0" class="width-75-percent" required><br>
                    <span class="error"><?php echo $emailErr; ?></span><br>
                  </div>

                  <div class="column-25-percent contact-label-a center-vertical-right-horizontal center-vertical-left-horizontalb font-bold">
                    <br><label for="department">Department:</label>&nbsp;
                  </div>

                  <div class="column-75-percent">
                    <select name="department" id="department" tabindex="0" class="width-75-percent" required>
                      <option value="">Choose One</option>
                      <option value="emailhelp" <?php if ( isset($department) && $department == 'emailhelp' ) echo 'selected'; ?>>General Support</option>
                      <option value="emailwebsites" <?php if ( isset($department) && $department == 'emailwebsites' ) echo 'selected'; ?>>Web Design</option>
                      <option value="emailgraphics" <?php if ( isset($department) && $department == 'emailgraphics' ) echo 'selected'; ?>>Graphical Design</option>
                      <option value="emailbilling" <?php if ( isset($department) && $department == 'emailbilling' ) echo 'selected'; ?>>Billing</option>
                    </select>
                    <br><br>
                  </div>

                  <div class="column-25-percent contact-label-a center-vertical-right-horizontal center-vertical-left-horizontalb font-bold">
                    <br><label for="comment">Comment:</label>&nbsp;
                  </div>

                  <div class="column-75-percent">
                    <span id="comment-hint" class="input-hint font-italic width-75-percent">Enter comments, questions, or concerns below.</span><br>
                    <textarea name="comment" id="comment" aria-describedby="comment-hint" tabindex="0" class="width-75-percent" style="height: 200px;" required><?php echo $comment;?></textarea><br>
                    <span class="error"><?php echo $commentErr; ?></span><br>
                  </div>

                  <div class="column-25-percent contact-label-a contact-label-b center-vertical-right-horizontal center-vertical-left-horizontalb font-bold">
                    <br><label for="antispam">Anti-spam:</label>&nbsp;
                  </div>

                  <div class="column-75-percent">
                    <span id="antispam-hint" class="input-hint font-italic width-75-percent">Using only numbers, what is 10 plus 15?</span><br>
                    <input type="text" name="antispam" id="antispam" aria-describedby="antispam-hint" tabindex="0" class="width-75-percent" required><br>
                    <span class="error"><?php echo $antispamErr; ?></span><br>
                  </div>

                  <div class="text-align-center">
                    <br><br>
                    <input type="submit" name="submit" id="submit" value="Submit" class="font-bold font-expletus-sans" tabindex="0">
                  </div>

                </form>

              </div>

            </article>

            <p>&nbsp;</p>

          </main>
<?php



?>