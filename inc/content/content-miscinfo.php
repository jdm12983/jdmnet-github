<?php

/*
 * FILE:      content-miscinfo.php
 * PURPOSE:   HTML/content for misc info page.
 * LAST EDIT: Wednesday, May 06, 2026; 10:47:02 AM
 */

/* indent 6 spaces to start */

?>
      <aside class="block-center width-100-percent">
        <div class="text-align-center width-warning"><br>Page won't display properly with less than 697 px in width.</div>
      </aside>

      <main class="block-center width-100-percent">

        <article id="date_and_time">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Current Date &amp; Time;<br>&quot;America/Chicago&quot; time zone (GMT -6)
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <tr>
                <td class="left-style-a">
                  <label for="backup-one">12 Hour Clock:</label>
                </td>
                <td class="right-style-a">
                  <input type="text" id="backup-one" style="width: 400px;" tabindex="1" value="<?php echo date('l, F d, Y') . '; ' . date('h:i:s A'); ?>" readonly> <!-- OUTPUT: Saturday, October 08, 2022; 09:57:41 PM -->
                  <div class="tooltip">
                    <button type="button" onclick="jsCopy('backup-one')" class="special-button info" style="width: 50px;" tabindex="2">
                      <span class="tooltip-text">Copy to clipboard</span>
                      <i class="fa-solid fa-copy"></i>
                    </button>
                  </div>
                  <div class="tooltip">
                    <button type="button" onclick="location.reload();" class="special-button info" style="width: 50px;" tabindex="3" title="Reload page">
                      <span class="tooltip-text">Reload page</span>
                      <i class="fa-solid fa-arrow-rotate-right"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="left-style-a">
                  <label for="backup-two">24 Hour Clock:</label>
                </td>
                <td class="right-style-a">
                  <input type="text" id="backup-two" style="width: 400px;" tabindex="4" value="<?php echo date('l, F d, Y') . '; ' . date('H:i:s'); ?>" readonly> <!-- OUTPUT: Saturday, October 08, 2022; 21:57:41 -->
                  <div class="tooltip">
                    <button type="button" onclick="jsCopy('backup-two')" class="special-button info" style="width: 50px;" tabindex="5">
                      <span class="tooltip-text">Copy to clipboard</span>
                      <i class="fa-solid fa-copy"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="left-style-a">
                  <label for="backup-three">12 Hour Clock:</label>
                </td>
                <td class="right-style-a">
                  <input type="text" id="backup-three" style="width: 400px;" tabindex="6" value="<?php echo date( '--Y-m-d--h-i-s' ) . date( 'a' ); ?>" readonly> <!-- OUTPUT: --2022-10-08--09-57-41pm -->
                  <div class="tooltip">
                    <button type="button" onclick="jsCopy('backup-three')" class="special-button info" style="width: 50px;" tabindex="7">
                      <span class="tooltip-text">Copy to clipboard</span>
                      <i class="fa-solid fa-copy"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="left-style-a">
                  <label for="backup-four">24 Hour Clock:</label>
                </td>
                <td class="right-style-a">
                  <input type="text" id="backup-four" style="width: 400px;" tabindex="8" value="<?php echo date( '--Y-m-d--H-i-s' ); ?>" readonly> <!-- OUTPUT: --2022-10-08--21-57-41 -->
                  <div class="tooltip">
                    <button type="button" onclick="jsCopy('backup-four')" class="special-button info" style="width: 50px;" tabindex="9">
                    <span class="tooltip-text">Copy to clipboard</span>
                    <i class="fa-solid fa-copy"></i>
                  </button>
                </div>
              </td>
            </tr>

              <tr>
                <td class="left-style-a">
                  <label for="backup-five">12 Hour Clock:</label>
                </td>
                <td class="right-style-a">
                  <input type="text" id="backup-five" style="width: 400px;" tabindex="10" value="<?php echo date( 'm/d/Y; h:i' ) . date( ' A' ); ?>" readonly> <!-- OUTPUT: 10/08/2022; 09:57 PM -->
                  <div class="tooltip">
                    <button type="button" onclick="jsCopy('backup-five')" class="special-button info" style="width: 50px;" tabindex="11">
                      <span class="tooltip-text">Copy to clipboard</span>
                      <i class="fa-solid fa-copy"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="left-style-a">
                  <label for="backup-six">12 Hour Clock:</label>
                </td>
                <td class="right-style-a">
                  <input type="text" id="backup-six" style="width: 400px;" tabindex="12" value="<?php echo date( 'm/d/Y; h:i:s' ) . date( ' A' ); ?>" readonly> <!-- OUTPUT: 10/08/2022; 09:57:41 PM -->
                  <div class="tooltip">
                    <button type="button" onclick="jsCopy('backup-six')" class="special-button info" style="width: 50px;" tabindex="13">
                      <span class="tooltip-text">Copy to clipboard</span>
                      <i class="fa-solid fa-copy"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="left-style-a">
                  24 Hour Clock (Alt):
                </td>
                <td class="right-style-a">
                  ISO 8601 date/time: <?php echo date('c'); ?> <!-- OUTPUT: 2022-10-08T21:57:41-05:00 -->
                  
                  <br><br>
                  RFC 2822 formatted date/time: <?php echo date('r'); ?> <!-- OUTPUT: Sat, 08 Oct 2022 21:57:41 -0500 -->
                  
                  <br><br>
                  Use this timestamp at: <a href="https://dencode.com/en/date/iso8601" title="ISO8601 Date Converter Online - DenCode" target="_blank">https://dencode.com/en/date/iso8601</a>
                </td>
              </tr>
            </tbody>
          </table>

        </article>

        <br><br>

        <article id="width_and_height">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Screen Width &amp; Height Info
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <tr>
                <td class="left-style-a">Window Viewport Width (with vertical scrollbar):</td>
                <td class="right-style-a"><span id="viewport-width-sb"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Window Viewport Height (with horizontal scrollbar):</td>
                <td class="right-style-a"><span id="viewport-height-sb"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Window Viewport Width (without vertical scrollbar):</td>
                <td class="right-style-a"><span id="viewport-width"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Window Viewport Height (without horizontal scrollbar):</td>
                <td class="right-style-a"><span id="viewport-height"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Full Window Width:</td>
                <td class="right-style-a"><span id="window-width"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Full Window Height:</td>
                <td class="right-style-a"><span id="window-height"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Screen Width:</td>
                <td class="right-style-a"><span id="screen-width"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Screen Height:</td>
                <td class="right-style-a"><span id="screen-height"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Available Width:</td>
                <td class="right-style-a"><span id="screen-availwidth"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Available Height:</td>
                <td class="right-style-a"><span id="screen-availheight"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Color Depth:</td>
                <td class="right-style-a"><span id="color-depth"></span></td>
              </tr>

              <tr>
                <td class="left-style-a">Color Resolution:</td>
                <td class="right-style-a"><span id="pixel-depth"></span></td>
              </tr>
            </tbody>
          </table>

        </article>

        <br><br>

        <article id="other_info">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Other Info
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <tr>
                <td class="left-style-a">
                  IP Address:
                </td>
                <td class="right-style-a">
                  <?php echo $visitor['ip']; ?>
                  <div class="tooltip">
                    <button type="button" onclick=" window.open('https://whatismyipaddress.com/ip/<?php echo $visitor['ip']; ?>','_blank')" class="special-button info" style="width: 50px;" tabindex="14">
                      <span class="tooltip-text" id="my-tooltip">Lookup IP info</span>
                      <i class="fa-solid fa-info"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="left-style-a">Host/Internet Provider:</td>
                <td class="right-style-a"><?php echo $visitor['host']; ?></td>
              </tr>

              <tr>
                <td class="left-style-a">Browser/Agent:</td>
                <td class="right-style-a"><?php echo $visitor['agent']; ?></td>
              </tr>

              <tr>
                <td class="left-style-a">
                  Twitter Links:
                </td>
                <td class="right-style-a">
                  <a href="https://twitter.com/JDM12983?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="small" data-show-screen-name="true" data-show-count="true" tabindex="15">@JDM12983</a><br>
                  <a href="https://twitter.com/JDM12983Gaming?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="small" data-show-screen-name="true" data-show-count="true" tabindex="16">@JDM12983Gaming</a><br>
                  <a href="https://twitter.com/JDMnet1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="small" data-show-screen-name="true" data-show-count="true" tabindex="17">@JDMnet1</a><br>
                  <a href="https://twitter.com/JDMPhoto1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="small" data-show-screen-name="true" data-show-count="true" tabindex="18">@JDMPhoto1</a>
                  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </td>
              </tr>
            </tbody>
          </table>

        </article>

        <br><br>

        <article id="varibles_and_outputs">

          <div class="header-one-outline">
            <div class="header-one-background">
              <header>
                <h1 class="font-small-cap text-align-center font-expletus-sans">
                  Variables and Their Output
                </h1>
              </header>
            </div>
          </div>

          <div class="spacer-5px-h"></div>

          <table class="details-one">
            <tbody>
              <tr>
                <td colspan="3" class="pre">
                  <div class="font-bold font-italic text-align-center">control.php</div>
                </td>
              </tr>

              <tr>
                <td class="left-style-b pre">serverURL()</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(serverURL()); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">serverURLnoHTTP()</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(serverURLnoHTTP()); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlOpenPHPA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlOpenPHPA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlOpenPHPB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlOpenPHPB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$domainExtension</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($domainExtension); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlPageFullI</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullI); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlPageFullD</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">showDate('DateFullShortA')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showDate('DateFullShortA')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showDate('DateFullShortB')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showDate('DateFullShortB')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showDate('DateFullLongA')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showDate('DateFullLongA')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showDate('DateFullLongB')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showDate('DateFullLongB')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showDate('YearShort')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showDate('YearShort')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showDate('YearLong')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showDate('YearLong')); ?></td>
              </tr>

              <tr>
              <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">showTime('TimeFullLocal12')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showTime('TimeFullLocal12')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showTime('TimeFullLocal24')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showTime('TimeFullLocal24')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showTime('TimeFullGMT12')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showTime('TimeFullGMT12')); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">showTime('TimeFullGMT24')</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable(showTime('TimeFullGMT24')); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td colspan="3" class="pre">
                  <div class="font-bold font-italic text-align-center">settings.php</div>
                </td>
              </tr>

              <tr>
                <td class="left-style-b pre">$phoneNumberA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($phoneNumberA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$phoneNumberACompact</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($phoneNumberACompact); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlUpOne</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlUpOne); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlHTTP</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlHTTP); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlHTTPS</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlHTTPS); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlWWW</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlWWW); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlBaseNET</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlBaseNET); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlBaseORG</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlBaseORG); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullWWWNETaS</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullWWWNETaS); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullWWWNETa</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullWWWNETa); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullWWWORGa</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullWWWORGa); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullNETaS</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullNETaS); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullNETa</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullNETa); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullORGaS</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullORGaS); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFullORGa</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFullORGa); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrImages</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo $fldrImages; ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrImgPayPal</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($fldrImgPayPal); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrIncludes</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($fldrIncludes); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrIncContent</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($fldrIncContent); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrIncCSS</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($fldrIncCSS); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrIncJS</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($fldrIncJS); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$fldrIncSkin</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($fldrIncSkin); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrImgA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrImgA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrImgB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrImgB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrImgPayPalA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrImgPayPalA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrImgPayPalB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrImgPayPalB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncContentA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncContentA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncContentB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncContentB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncCSSA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncCSSA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncCSSB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncCSSB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncJSA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncJSA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncJSB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncJSB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncSkinA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncSkinA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlFldrIncSkinB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlFldrIncSkinB); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeImgA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeImgA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeImgB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeImgB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeImgPayPalA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeImgPayPalA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeImgPayPalB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeImgPayPalB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncContentA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncContentA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncContentB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncContentB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncCSSA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncCSSA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncCSSB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncCSSB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncJSA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncJSA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncJSB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncJSB); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncSkinA</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncSkinA); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlRelativeIncSkinB</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlRelativeIncSkinB); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$keywordHome</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($keywordHome); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$keywordContact</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($keywordContact); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$keywordBusiness</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($keywordBusiness); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$keywordPCHome</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($keywordPCHome); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlHome</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlHome); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlContact</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlContact); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlBusiness</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlBusiness); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlPCHome</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPCHome); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td class="left-style-b pre">$urlTwitter</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlTwitter); ?></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td colspan="3" class="pre">
                <div class="font-bold font-italic text-align-center">others</div>
                </td>
              </tr>

              <tr>
                <td class="left-style-b pre">$_SERVER['REQUEST_URI']</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo $_SERVER['REQUEST_URI'];?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">Other 1</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_SCHEME)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_SCHEME'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_USER)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_USER'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_PASS)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_PASS'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_HOST)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_HOST'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_PORT)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_PORT'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_PATH)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_PATH'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_QUERY)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_QUERY'); ?></td>
              </tr>

              <tr>
                <td class="left-style-b pre">parse_url($urlPageFullD, PHP_URL_FRAGMENT)</td>
                <td class="middle-style-a pre">&nbsp;=&nbsp;</td>
                <td class="right-style-b pre"><?php echo printVariable($urlPageFullD, 'parse', 'PHP_URL_FRAGMENT'); ?></td>
              </tr>
            </tbody>
          </table>

        </article>

      </main>
<?php



?>