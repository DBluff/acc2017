<?php
?>
<div id="page">
    <div class="header">
        <div id="acc-logo">
          <?php if ($logo){ ?>
              <a class="acc-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
              </a>
          <?php }; ?>
        </div>
        <nav class="transparent z-depth-0" id="nav" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-small-only">
                    <div class="row aud_menu">
                        <div class="col m5 offset-m6 lightgreen">
                          <?php
                          $menua = menu_navigation_links('menu-audience-identifier');
                          print theme('links__menu-audience-identifier', array('links' => $menua));?>
                        </div>
                        <div class="col m1 searchContainer lightgreen">
                            <i class="large material-icons">search</i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="transparent z-depth-0" id="nav" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-small-only">
                    <div class="row prim_menu">
                        <div class="col m8 offset-m4 lightblue">
                          <?php
                          $menub = menu_navigation_links('menu-primary-navigation');
                          print theme('links__menu-primary-navigation', array('links' => $menub));?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
  <?php if (!empty($page['homepage_hero_band'])){ ?>
      <div class="homeHeroBand">
        <?php print render($page['homepage_hero_band']); ?>
      </div>
  <?php } ?>
</div>
