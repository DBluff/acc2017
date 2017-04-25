<div id="page">
    <div class="header">
        <div id="acc-logo">
            <?php if ($logo) { ?>
                <a class="acc-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                </a>
            <?php }; ?>
        </div>
        <nav class="z-depth-0 audID hide-on-mid-and-down" id="navAud" role="navigation">
            <div class="nav-wrapper">
                <div class="row aud_menu">
                    <div class="audID" id="audIDnav">
                        <?php
                        $menua = menu_navigation_links('menu-audience-identifier');
                        print theme('links__menu-audience-identifier', array('links' => $menua)); ?>
                    </div>
                    <div class="searchContainer" id="searchAdj">
                        <form class="searchbox">
                            <input type="search" placeholder="Search ACC" name="search" class="searchbox-input"
                                   onkeyup="buttonUp();" required>
                            <input type="submit" class="searchbox-submit" value="GO">
                            <span class="searchbox-icon"><i class="large material-icons">search</i>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="z-depth-5 priMenu hide-on-mid-and-down" id="navPrim" role="navigation">
            <div class="nav-wrapper">
                <div class="row prim_menu nav-transparent">
                    <div class="primaryMenu">
                        <?php
                        $menub = menu_navigation_links('menu-primary-navigation');
                        print theme('links__menu-primary-navigation', array('links' => $menub)); ?>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="mobileNav z-depth-0 hide-on-mid-and-up blueT" id="mobNav" role="navigation">
            <a href="#" data-activates="slide-out-prim" class="button-collapse btn-large transparent"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <a href="#" data-activates="slide-out-aud" class="button-collapse btn-large transparent"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
        </nav>
    </div>
    <div class="main">
        <?php if (!empty($page['homepage_hero_band'])) { ?>
            <div class="homeHeroBand">
                <?php print render($page['homepage_hero_band']); ?>
            </div>
        <?php } ?>
        <?php if (!empty($page['content_band'])) { ?>
            <div class="contentBand">
                <?php print render($page['content_band']); ?>
            </div>
        <?php } ?>
    </div>
    <div class="row footerNextStep noSideMargin noBottomMargin">
        <div class="section">
            <div class="container">
                <div class="row nextStep">
                    <div class="col m12 center-align nextStepPrompt white-text">
                        <div class="row"><h4>GET STARTED</h4>
                        </div>
                    </div>
                    <div class="col m12 center-align nextStepButtons">
                        <div class="row">
                            <a class="waves-effect waves-light btn-large btn-reverse">APPLY NOW</a>
                            <a class="waves-effect waves-light btn-large btn-reverse">REQUEST INFO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sideNav">
        <ul id="slide-out-prim" class="side-nav">
            <?php
            $menub = menu_navigation_links('menu-primary-navigation');
            print theme('links__menu-primary-navigation', array('links' => $menub)); ?>
        </ul>
    </div>
    <div class="sideNav">
        <ul id="slide-out-aud" class="side-nav">
            <?php
            $menua = menu_navigation_links('menu-audience-identifier');
            print theme('links__menu-audience-identifier', array('links' => $menua)); ?>
        </ul>
    </div>
    <div class="footer">
        <div class="foot gradientRadBlue">
            <div class="container-wide">
                <div class="row white-text">
                    <div class="col m3 s12">
                        <div id="acc-logo-foot">
                            <a class="acc-logo-foot" href="<?php print $front_page; ?>"
                               title="<?php print t('Home'); ?>">
                                <img class="responsive-img" src="/sites/all/themes/acc2017/img/logo.png"
                                     alt="<?php print t('Home'); ?>"/>
                            </a>
                        </div>
                        <div class="col m12 center-align smiconsInv">
                            <a href="#"><i class="fa fa-facebook fa-2x white-text"></i></a>
                            <a href="#"> <i class="fa fa-twitter fa-2x white-text"></i></a>
                            <a href="#"><i class="fa fa-linkedin fa-2x white-text"></i></a>
                            <a href="#"><i class="fa fa-flickr fa-2x white-text"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-2x white-text"></i></a>
                            <a href="#"><i class="fa fa-youtube-play fa-2x white-text"></i></a>
<!--                            <a href="#"> <i class="fa fa-google-plus fa-2x white-text"></i></a>-->
                        </div>
                    </div>
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
                        <br><br><br>
                        <div class="footMenu">
                            5930 Middle Fiskville Rd <br/> Austin, Texas 78752
                            <!--                        </div>-->
                            <!--                        <div class="footTel">-->
                            <br/>512-223-4ACC (4222)
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="z-depth-0 audID2 blue" id="navFoot" role="navigation">
        <div class="nav-wrapper foot">
            <div class="hide-on-small-only">
                <div class="row aud_menu foot">
                    <div class="audIDbottom">
                        <?php
                        $menua = menu_navigation_links('menu-audience-identifier');
                        print theme('links__menu-audience-identifier', array('links' => $menua)); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="topPage">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light transparent z-depth-2"
                   onclick="topFunction()"><i class="fa fa-chevron-up" aria-hidden="true"></i></a></div>
        </div>
        <div class="searchContainer" id="searchFoot">
            <form class="searchbox-foot">
                <input type="search" placeholder="Search......" name="search" class="searchbox-input-foot"
                       onkeyup="buttonUp();" required>
                <input type="submit" class="searchbox-submit" value="GO">
                <span class="searchbox-icon-foot"><i class="large material-icons">search</i></span>
            </form>
        </div>
        <div class="dividerDiagBlue"></div>
    </nav>
</div>
</div>
