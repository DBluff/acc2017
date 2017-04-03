<?php
?>
<div id="page">
    <div class="header page">
        <div id="acc-logo">
            <?php if ($logo){ ?>
                <a class="acc-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                </a>
            <?php }; ?>
        </div>
        <nav class="transparent z-depth-0 audID" id="nav" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-small-only">
                    <div class="row aud_menu lightgreen">
                        <div class="audID">
                            <?php
                            $menua = menu_navigation_links('menu-audience-identifier');
                            print theme('links__menu-audience-identifier', array('links' => $menua));?>
                        </div>
                        <div class="searchContainer" id="searchAdj">
                            <form class="searchbox">
                                <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                                <input type="submit" class="searchbox-submit" value="GO">
                                <span class="searchbox-icon"><i class="large material-icons">search</i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="transparent z-depth-0 priMenu" id="nav" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-small-only">
                    <div class="row prim_menu lightblue">
                        <div class="primaryMenu">
                            <?php
                            $menub = menu_navigation_links('menu-primary-navigation');
                            print theme('links__menu-primary-navigation', array('links' => $menub));?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="main page">
        <?php if (!empty($page['breadcrumb'])){ ?>
            <div class="breadcrumb">
                <?php print render($page['breadcrumb']); ?>
            </div>
        <?php } ?>
        <?php if (!empty($page['content'])){ ?>
            <div class="content">
                <?php print render($page['content']); ?>
            </div>
        <?php } ?>
        <?php if (!empty($page['content_band'])){ ?>
            <div class="contentBand">
                <?php print render($page['content_band']); ?>
            </div>
        <?php } ?>
    </div>
    <div class="footer page">
        <div class="valign-wrapper SocialIconBand">
            <div class="row cream darken-1 social">
                <div class="col m4 offset-m1 s12 bluegrey-text lighten-3">
                    WE'RE SOCIAL!
                </div>
                <div class="col m5 s12 white-text">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                    <i class="fa fa-flickr" aria-hidden="true"></i>
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="foot blue">
            <div class="container">
                <div class="row white-text">
                    <div class="col m1 s3">
                        <i class="material-icons">error</i>
                    </div>
                    <div class="col m3 s9">
                        General Information
                        <div class="footMenu">
                            <?php
                            $menua = menu_navigation_links('menu-general-information');
                            print theme('links__menu-general-information', array('links' => $menua));?>
                        </div>
                    </div>
                    <div class="col m1 s3">
                        <i class="material-icons">add_alert</i>
                    </div>
                    <div class="col m3 s9">
                        Safety
                        <div class="footMenu">
                            <?php
                            $menua = menu_navigation_links('menu-safety');
                            print theme('links__menu-safety', array('links' => $menua));?>
                        </div>
                    </div>
                    <div class="col m1 s3">
                        <i class="material-icons">room</i>
                        <br />
                        <br />
                        <br />
                        <br />
                        <i class="material-icons">call</i>
                    </div>
                    <div class="col m3 s9">
                        Austin Community College
                        <div class="footMenu">
                            5930 Middle Fiskville Rd <br /> Austin, Texas 78752
                        </div>
                        <br />
                        <div class="footTel">
                            512-223-4ACC (4222)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="transparent z-depth-0 audID2" id="nav" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-small-only">
                    <div class="row aud_menu bluegrey">
                        <div class="audIDbottom">
                            <?php
                            $menua = menu_navigation_links('menu-audience-identifier');
                            print theme('links__menu-audience-identifier', array('links' => $menua));?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
