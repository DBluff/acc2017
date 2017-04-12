<div id="page">
    <div class="header">
        <div id="acc-logo">
            <?php if ($logo) { ?>
                <a class="acc-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                </a>
            <?php }; ?>
        </div>
        <nav class="transparent z-depth-0 audID blue" id="navAud" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-med-and-down">
                    <div class="row aud_menu blue">
                        <div class="audID blue" id="audIDnav">
                            <?php
                            $menua = menu_navigation_links('menu-audience-identifier');
                            print strtoupper(theme('links__menu-audience-identifier', array('links' => $menua))); ?>
                        </div>
                        <div class="searchContainer" id="searchAdj">
                            <form class="searchbox">
                                <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                                       onkeyup="buttonUp();" required>
                                <input type="submit" class="searchbox-submit" value="GO">
                                <span class="searchbox-icon"><i class="large material-icons">search</i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="transparent z-depth-0 priMenu blue lighten-2" id="navPrim" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-med-and-down">
                    <div class="row prim_menu blue lighten-2">
                        <div class="primaryMenu">
                            <?php
                            $menub = menu_navigation_links('menu-primary-navigation');
                            print theme('links__menu-primary-navigation', array('links' => $menub)); ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="main">
        <?php if (!empty($page['homepage_hero_band'])) { ?>
            <div class="homeHeroBand">
                <?php print render($page['homepage_hero_band']); ?>
            </div>
        <?php } ?>
        <div class="row valign-wrapper nextStep">
            <div class="col m4 s12 offset-m2 nextStepPrompt orange-text">
                <h4 class="valign right-align">LET US HELP YOU</h4>
            </div>
            <div class="col m4 s12 valign nextStepButtons">
                <div class="row">
                    <a class="waves-effect waves-light btn-large orange white-text left-align">APPLY NOW</a>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light btn-large orange white-text left-align">REQUEST INFO</a>
                </div>
            </div>
        </div>
        <?php if (!empty($page['content_band'])) { ?>
            <div class="contentBand">
                <?php print render($page['content_band']); ?>
            </div>
        <?php } ?>
    </div>
    <div class="row valign-wrapper nextStep">
        <div class="col m4 s12 offset-m2 nextStepPrompt purple-text">
            <h4 class="valign right-align">TAKE THE NEXT STEP</h4>
        </div>
        <div class="col m4 s12 valign nextStepButtons">
            <a class="waves-effect waves-light btn-large orange white-text left-align">APPLY NOW</a>
            <a class="waves-effect waves-light btn-large orange white-text left-align">REQUEST INFO</a>
        </div>
    </div>
    <div class="footer">
        <div class="foot blue">
            <div class="container">
                <div class="row white-text">
                    <div class="col m3 s12">
                        <div class="footMenu">
                            <?php
                            $menua = menu_navigation_links('menu-general-information');
                            print theme('links__menu-general-information', array('links' => $menua)); ?>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="footMenu">
                            <?php
                            $menua = menu_navigation_links('menu-safety');
                            print theme('links__menu-safety', array('links' => $menua)); ?>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="footMenu">
                            <?php
                            $menub = menu_navigation_links('menu-primary-navigation');
                            print theme('links__menu-primary-navigation', array('links' => $menub)); ?>
                        </div>
                        <div class="divider"></div>
                        <div class="footMenu">
                            5930 Middle Fiskville Rd <br/> Austin, Texas 78752
                        </div>
                        <div class="footTel">
                            512-223-4ACC (4222)
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div id="acc-logo-foot">
                            <a class="acc-logo-foot" href="<?php print $front_page; ?>"
                               title="<?php print t('Home'); ?>">
                                <img class="responsive-img" src="/sites/all/themes/acc2017/img/logo.png"
                                     alt="<?php print t('Home'); ?>"/>
                            </a>
                        </div>
                        <div class="row social blue-text">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                        <div class="row social blue-text">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="transparent z-depth-0 audID2 bluegrey" id="navFoot" role="navigation">
            <div class="container">
                <div class="nav-wrapper foot">
                    <div class="hide-on-small-only">
                        <div class="row aud_menu">
                            <div class="audIDbottom">
                                <?php
                                $menua = menu_navigation_links('menu-audience-identifier');
                                print theme('links__menu-audience-identifier', array('links' => $menua)); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searchContainer" id="searchFoot">
                    <form class="searchbox">
                        <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                               onkeyup="buttonUp();" required>
                        <input type="submit" class="searchbox-submit" value="GO">
                        <span class="searchbox-icon"><i class="large material-icons">search</i></span>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
