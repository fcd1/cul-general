      <?php echo head(array('title' => metadata('exhibit', 'title'),
			    'bodyclass'=>'exhibits summary')); ?>

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

    <?
    // This is a choice of overlay style, modifying the base to set the color scheme
    // The color scheme is set when the theme is configure via the Omeka admin interface
    // The setting is stored in the config.ini file
    // $color_scheme will be used as a class attribute where needed to set the colors and other associated
    // characteristics
    $color_scheme = get_theme_option('Color Scheme');
?>
      <table>
        <tr>
          <?php
            // fcd1, 7/29/13: First table, first row, first cell contains lhs vertical nav bar
          ?>
          <td class="cul-general-exhibit-nav-td">
            <div class="cul-general-exhibit-nav-div">
              <ul class="exhibit-page-nav navigation">
                <li id="cul-general-exhibit-nav-title">
                  <?php
                    $title = exhibit_builder_link_to_exhibit(get_current_record('exhibit'),'Home',
							     array('class' => 'exhibit-title'));
                    echo $title;
                  ?>
                </li>
                <?php set_exhibit_pages_for_loop_by_exhibit(); ?>
                <?php foreach (loop('exhibit_page') as $exhibitPage): ?>
                  <?php 
                    $html = '<li class="cul-general-exhibit-nav-parent">' . '<a href="' . 
                            exhibit_builder_exhibit_uri(get_current_record('exhibit'), 
							$exhibitPage) .
                            '">'. metadata($exhibitPage, 'title') .'</a>';
                    echo $html;
                  ?>
                <?php endforeach; ?>
              </ul>
            </div> <!--end class="cul-general-exhibit-nav-div"-->
          </td>
          <td class="cul-general-content-td">
            <div id="primary">
              <div class="cul-general-solid-block">
                <?php
                  echo cul_theme_logo(metadata('exhibit','title'));
                ?>
              </div><!--end id="cul-general-solid-block"-->
              <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
                <div class="exhibit-description">
                  <?php echo $exhibitDescription; ?>
                </div> <!--end class="exhibit-description"-->
              <?php endif; ?>
              <?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
                <div class="exhibit-credits">
                  <h3><?php echo 'Exhibit Curator' ?></h3>
                  <p><?php echo $exhibitCredits; ?></p>
                </div> <!--end class="exhibit-credits"-->
              <?php endif; ?>
            </div> <!--end id="primary"-->
          </td>
        </tr>
      </table>
      <?php echo foot(); ?>
