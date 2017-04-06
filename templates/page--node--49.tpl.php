<?php
$node = menu_get_object();
?>
<div id="page">
    <div class="header solidClear">
        <div id="acc-logo">
            <?php if ($logo) { ?>
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
                            print theme('links__menu-audience-identifier', array('links' => $menua)); ?>
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
        <nav class="transparent z-depth-0 priMenu" id="nav" role="navigation">
            <div class="nav-wrapper">
                <div class="hide-on-small-only">
                    <div class="row prim_menu lightblue">
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
    <div class="main page">
        <?php if (!empty($page['content'])) { ?>
            <div class="content">
                <?php print render($page['content']); ?>
            </div>
        <?php } ?>
        <?php if (!empty($page['content_band'])) { ?>
            <div class="contentBand">
                <?php print render($page['content_band']); ?>
            </div>
        <?php } ?>
        <div class="row row-band">
            <div class="container">
                <div class="col m3">
                    <img class="responsive-img" src="/sites/all/themes/acc2017/img/transfer.jpg">
                    <h6>The Austin Community College Continuing Education Division</h6>
                </div>
                <div class="col m3">
                    <img class="responsive-img" src="/sites/all/themes/acc2017/img/workforce.jpg">
                    <h6>The Austin Community College Continuing Education Division</h6>
                </div>
                <div class="col m3">
                    <img class="responsive-img" src="/sites/all/themes/acc2017/img/readiness.jpg">
                    <h6>The Austin Community College Continuing Education Division</h6>
                </div>
                <div class="col m3">
                    <img class="responsive-img" src="/sites/all/themes/acc2017/img/development.jpg">
                    <h6>The Austin Community College Continuing Education Division</h6>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row row-band grey">
            <div class="container">
                <div class="row">
                    <div class="col m8">
                        <h3>OUR PROGRAMS & AREAS OF STUDY</h3>
                    </div>
                </div>
                <div class="row">
                    <p class="flow-text">
                        The Austin Community Continuing Education Division Develops and delivers innovative and
                        accessible programs to meet the vocational, avocational and professional development needs of
                        individuals and business in the Central Texas region.
                    </p>
                </div>
                <div class="row">
                    <div class="col m10">
                        <input type="search" placeholder="Search Programs" name="search" class="searchInput"
                               onkeyup="buttonUp();" required>
                    </div>
                    <div class="col m2"><i class="material-icons large">search</i></div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row acaImg valign-wrapper">
            <div class="container">
                <div class="row">
                    <div class="topContent grey white-text">
                        <h4>HIGH SCHOOL </h4>
                    </div>
                    <div class="col m6 offset-m5 valign grey white-text">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna wirl aliqua. Up</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col m6 grey white-text">
                <div class="titleRect white grey-text">
                    <h4>SPECIALTY TRACKS</h4>
                </div>
                <p class="flow-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna wirl aliqua. Up
                </p>
            </div>
            <div class="col m6 white grey-text">
                <div class="titleRect grey white-text">
                    <h4>ENRICHED OPPORTUNITIES</h4>
                </div>
                <p class="flow-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna wirl aliqua. Up
                </p>
            </div>
        </div>
    </div>
    <div class="row row-band">
        <div class="container">
            <div class="col m7">
                <img class="responsive-img" src="/sites/all/themes/acc2017/img/workforce.jpg">
            </div>
            <div class="col m5">
                <h5>WHAT IS CE?</h5>
                <br />
                <h5>The Austin Community Continuing Education Division Develops and delivers innovative and
                    accessible programs to meet the vocational, avocational and professional development needs of individuals and business in the Central Texas region.</h5>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row valign-wrapper nextStep">
        <div class="col m4 s12 offset-m2 nextStepPrompt purple-text">
            <h4 class="valign right-align">TAKE THE NEXT STEP</h4>
        </div>
        <div class="col m4 s12 valign nextStepButtons">
            <a class="waves-effect waves-lightpurple btn-flat btn-large white purple-text left-align">APPLY NOW</a>
            <a class="waves-effect waves-lightpurple btn-flat btn-large white purple-text left-align">REQUEST
                INFO</a>
        </div>
    </div>
    <div class="footer">
        <div class="valign-wrapper SocialIconBand">
            <div class="row cream social">
                <div class="col m6 s12 bluegrey-text lighten-3">
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
                    <div class="col m4 s12">
                        <h5>General Information</h5>
                        <div class="footMenu">
                            <?php
                            $menua = menu_navigation_links('menu-general-information');
                            print theme('links__menu-general-information', array('links' => $menua)); ?>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <h5>Safety</h5>
                        <div class="footMenu">
                            <?php
                            $menua = menu_navigation_links('menu-safety');
                            print theme('links__menu-safety', array('links' => $menua)); ?>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <h5>Austin Community College</h5>
                        <div class="row">
                            <div class="col s3">
                                <i class="material-icons">room</i>
                            </div>
                            <div class="col s9 footMenu">
                                5930 Middle Fiskville Rd <br/> Austin, Texas 78752
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col s3">
                                <i class="material-icons">call</i>
                            </div>
                            <div class="col s9 footTel">
                                512-223-4ACC (4222)
                            </div>
                        </div>
                        <div id="acc-logo-foot">
                            <?php if ($logo) { ?>
                                <a class="acc-logo-foot" href="<?php print $front_page; ?>"
                                   title="<?php print t('Home'); ?>">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                </a>
                            <?php }; ?>
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
                            print theme('links__menu-audience-identifier', array('links' => $menua)); ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
