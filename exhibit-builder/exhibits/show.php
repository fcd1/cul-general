      <?php
        echo head(array('title' => metadata('exhibit', 'title'),
			'bodyclass' => 'exhibits show'));
      ?>

      <?php
        // Following piece of code creates exhibition title block, black background, lhs color rectangle
        // This code can also be moved to common/header.php to display the title block on
        // all three pages (summary.php, show.php, and item.php)
      ?>
      <h1 class="head">
        <span class="keycolor" style="height:30px;min-width:30px;display:inline">
          &nbsp;
        </span>
        &nbsp;
        <?php
          $title = exhibit_builder_link_to_exhibit();
          echo $title;
        ?>
      </h1>

      <table>
        <tr>
          <td class="cul-general-exhibit-nav-td">
            <div class="cul-general-exhibit-nav-div">
              <?php
                echo cul_general_legacy_exhibit_builder_page_nav('Home');
              ?>
            </div> <!--end class="cul-general-exhibit-nav-div" -->
          </td>
          <td class="cul-general-content-td">
            <div id="content">
              <?php
                echo culWritePrevNext();
              ?>
              <?php echo flash(); ?>
              <div id="primary">
                <div class="exhibit-content">
                  <?
                    echo cul_general_breadcrumb(); 
// cul_legacy_exhibit_builder_render_exhibit_page();
exhibit_builder_render_exhibit_page();
                  ?>
                </div> <!-- end class="exhibit-content"-->
              </div> <!-- end id="primary" -->
              <?php
                echo culWritePrevNext();
              ?>
            </div><!-- end id="content" -->
          </td>
        </tr>
      </table>
      <?php echo foot(); ?>
