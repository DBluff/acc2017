<?php $node = menu_get_object(); ?>
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

        <div class="row pageTitleAcademics valign-wrapper">
            <h1 class="valign blue-text text-darken-2">Academics</h1>
        </div>
        <div class="row row-band cream AcademicsWWO noSideMargin">
            <!--add background color for band color-->
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 bandTitleWrapperBlue">
                            <h4 class="band-title">what we offer</h4>
                        </div>
                    </div>

                    <div class="row">
                        <p class="flow-text">Austin Community College creates paths to personal success at every
                            point in your learning journey. Discover what ACC offers from getting
                            ready for college, to transfer, and beyond.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image">
                                    <img src="/sites/all/themes/acc2017/img/transfer.jpg">
                                    <span class="card-title orange">Transfer</span>
                                </div>
                                <div class="card-content">
                                    <p>We offer transfers.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">Learn More ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image">
                                    <img src="/sites/all/themes/acc2017/img/workforce.jpg">
                                    <span class="card-title green white-text">Workforce</span>
                                </div>
                                <div class="card-content">
                                    <p>We offer workforce stuff.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">Learn More ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image">
                                    <img src="/sites/all/themes/acc2017/img/readiness.jpg">
                                    <span class="card-title purple">Readiness</span>
                                </div>
                                <div class="card-content">
                                    <p>Get college ready.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">Learn More ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image">
                                    <img src="/sites/all/themes/acc2017/img/development.jpg">
                                    <span class="card-title blue">Professional Development</span>
                                </div>
                                <div class="card-content">
                                    <p>We offer this.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">Learn More ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--      begin aos band-->
        <div class="divider"></div>
        <div class="row row-band AcademicsAoS z-depth-2">
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 bandTitleWrapperBlue">
                            <h4 class="band-title">Area of Study Programs</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m8 s12">
                            <div class="row">
                                <p class="flow-text">
                                    Ready to earn an associate degree, career-ready certificate, or prep for transfer to
                                    a four-year university? ACC provides options to help you create a roadmap to
                                    academic and career success with a variety of programs in 10 unique areas of study.
                                </p>
                                <a href="#">EXPLORE AREAS OF STUDY AND SEARCH PROGRAMS ></a>
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <img src="/sites/all/themes/acc2017/img/placeholder5.png" class="circle z-depth-3"></div>
                    </div>
                    <div class="row">
                        <div class="col s11">
                            <input type="search" placeholder="Search Programs" name="search"
                                   class="searchInput"
                                   onkeyup="buttonUp();" required>
                        </div>
                        <div class="col s1">
                            <a class="waves-effect waves-light btn-large"><i class="material-icons large">search</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--      end aos band-->

        <!--       begin high school band-->
        <div class="divider"></div>

        <div class="row row-band acaImg AcademicsHS valign-wrapper z-depth-1 noSideMargin">
            <div class="container">
                <div class="row">
                    <div class="section">
                        <div class="col m5 offset-m7 valign blue-text">
                            <div class="card">

                                <div class="card-content">
                                    <h4>start in high school</h4>

                                    <p class="flow-text">
                                        ACC offers opportunities
                                        to earn college credits, train for in-demand careers, and even complete
                                        a degree before your high school graduation!
                                    </p>
                                </div>
                                <div class="card-action white hoverable">
                                    <a class="" href="#">EXPLORE HIGH
                                        SCHOOL PROGRAMS ></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--       end high school band-->

        <!--    begin specialty-enriched opportunities band-->
        <div class="row row-band AcademicsSTEO">
            <div class="container">
                <div class="col m6 cream ast">
                    <div class="row">
                        <div class="col s12 bandTitleWrapperBlue">
                            <h4 class="band-title">specialty tracks</h4>
                        </div>
                        <div class="divider"></div>
                        <div class="col s10 offset-s1">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hoc non est positum in nostra
                                actione. Faceres tu quidem, Torquate, haec omnia; Sed quanta sit alias, nunc tantum
                                possitne
                                esse tanta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col m6 cream lighten-1">
                    <div class="row aeo">
                        <div class="col s12 bandTitleWrapperBlue">
                            <h4 class="band-title">enriched opportunities</h4>
                        </div>
                        <div class="col s10 offset-s1"><p>
                                Enhance your academic experience at ACC with courses designed to challenge you in
                                non-traditional class formats. <a class="" href="#">Learn More > </a></p>
                            <div class="collection">
                                <a href="#!" class="collection-item">Honors Program</a>
                                <a href="#!" class="collection-item active">Study Abroad (International Programs)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--    begin ce band-->
        <div class="row row-band AcademicsCE grey lighten-3 z-depth-2">
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 bandTitleWrapperBlue">


                            <h4 class="band-title">continuing education</h4>
                        </div>
                    </div>

                    <div class="section">
                        <div class="row">

                            <div class="col m6">

                                <p>Our Continuing Education Division provides easy access to a wide range of career
                                    training
                                    certification and professional development programs as well as courses for personal
                                    enrichment.</p>
                                <a class="waves-effect purple white-text waves-light btn" href="#">VISIT CONTINUING
                                    EDUCATION ></a>
                            </div>
                            <div class="col m6">
                                <img class="responsive-img" src="/sites/all/themes/acc2017/img/beta-1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    end ce band-->

        <!--        <div class="row">-->
        <!---->
        <!--            <div class="col s12 m4 l3">-->
        <!---->
        <!--                <div class="collection">-->
        <!--                    <a href="#!" class="collection-item">High School</a>-->
        <!--                    <a href="#!" class="collection-item active">Specialty Tracks</a>-->
        <!--                    <a href="#!" class="collection-item">Enrichment Opportunitites</a>-->
        <!--                    <a href="#!" class="collection-item">Continuing Education</a>-->
        <!--                </div>-->
        <!---->
        <!--            </div>-->
        <!---->
        <!--            <div class="col s12 m8 l9">-->
        <!--        <!--        begin what we offer band-->
        <!---->
        <!--        <div class="row row-band AcademicsWWO noSideMargin">-->
        <!--<!--            <div class="container">-->
        <!--                <div class="section">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col s12 bandTitleWrapperBlue">-->
        <!--                            <h4 class="band-title">what we offer</h4>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="row">-->
        <!--                        <p class="flow-text">Austin Community College creates paths to personal success at every-->
        <!--                                             point in your learning journey. Discover what ACC offers from getting-->
        <!--                                             ready for college, to transfer, and beyond.-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="row">-->
        <!--                        <div class="col m3">-->
        <!--                            <div class="card AcademicsWWO">-->
        <!--                                <div class="card-image">-->
        <!--                                    <img src="/sites/all/themes/acc2017/img/transfer.jpg">-->
        <!--                                    <span class="card-title orange">Transfer</span>-->
        <!--                                </div>-->
        <!--                                <div class="card-content">-->
        <!--                                    <p>We offer transfers.</p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action hoverable">-->
        <!--                                    <a href="#">Learn More ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col m3">-->
        <!--                            <div class="card AcademicsWWO">-->
        <!--                                <div class="card-image">-->
        <!--                                    <img src="/sites/all/themes/acc2017/img/workforce.jpg">-->
        <!--                                    <span class="card-title green white-text">Workforce</span>-->
        <!--                                </div>-->
        <!--                                <div class="card-content">-->
        <!--                                    <p>We offer workforce stuff.</p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action hoverable">-->
        <!--                                    <a href="#">Learn More ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col m3">-->
        <!--                            <div class="card AcademicsWWO">-->
        <!--                                <div class="card-image">-->
        <!--                                    <img src="/sites/all/themes/acc2017/img/readiness.jpg">-->
        <!--                                    <span class="card-title purple">Readiness</span>-->
        <!--                                </div>-->
        <!--                                <div class="card-content">-->
        <!--                                    <p>Get college ready.</p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action hoverable">-->
        <!--                                    <a href="#">Learn More ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col m3">-->
        <!--                            <div class="card AcademicsWWO">-->
        <!--                                <div class="card-image">-->
        <!--                                    <img src="/sites/all/themes/acc2017/img/development.jpg">-->
        <!--                                    <span class="card-title blue">Professional Development</span>-->
        <!--                                </div>-->
        <!--                                <div class="card-content">-->
        <!--                                    <p>We offer this.</p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action hoverable">-->
        <!--                                    <a href="#">Learn More ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!---->
        <!--                </div>-->
        <!--<!--            </div>-->
        <!---->
        <!--        </div>-->
        <!--        <!--      begin aos band-->
        <!--        <div class="divider"></div>-->
        <!--        <div class="row row-band AcademicsAoS z-depth-2">-->
        <!--            <div class="container">-->
        <!--                <div class="section">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col s12 bandTitleWrapperBlue">-->
        <!--                            <h4 class="band-title">Area of Study Programs</h4>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="row">-->
        <!--                        <div class="col s12"><p class="flow-text">-->
        <!--                                Ready to earn an associate degree, career-ready certificate, or prep for transfer to a-->
        <!--                                four-year university? ACC provides options to help you create a roadmap to academic and-->
        <!--                                career success-->
        <!--                                with a variety of programs in 10 unique areas of study.-->
        <!--                            </p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="row">-->
        <!--                        <div class="col m6">-->
        <!--                            <p class="card-action"><a href="#">EXPLORE AREAS OF STUDY AND SEARCH PROGRAMS ></a>-->
        <!--                            </p></div>-->
        <!--                        <div class="col m6">-->
        <!--                            <div class="col s10">-->
        <!--                                <input type="search" placeholder="Search Programs" name="search" class="searchInput"-->
        <!--                                       onkeyup="buttonUp();" required>-->
        <!--                            </div>-->
        <!--                            <div class="col s2 center-align"><a class="waves-effect waves-light btn-large"><i-->
        <!--                                            class="material-icons large">search</i></a>-->
        <!--                                <!--                        <i class="material-icons large">search</i></div>-->

        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!---->
        <!--        </div>-->
        <!---->
        <!--        <!--    begin specialty tracks enriched opportunities band-->
        <!--        <div class="row row-band AcademicsSTEO noSideMargin">-->
        <!--            <div class="container">-->
        <!--                <div class="section">-->
        <!--                    <div class="row">-->
        <!--                        <div class="card horizontal purple white-text">-->
        <!--                            <div class="card-image">-->
        <!--                                <img class="responsive-img" src="/sites/all/themes/acc2017/img/placeholder4.png">-->
        <!--                            </div>-->
        <!--                            <div class="card-stacked">-->
        <!--                                <div class="card-content">-->
        <!--                                    <h4>start in high school</h4>-->
        <!---->
        <!--                                    <p>-->
        <!--                                        Jump start your college plans in high school. ACC offers opportunities-->
        <!--                                        to earn college credits, train for in-demand careers, and even complete-->
        <!--                                        a degree before your high school graduation!-->
        <!--                                    </p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action white hoverable">-->
        <!--                                    <a href="#">EXPLORE HIGH SCHOOL PROGRAMS ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="section">-->
        <!--                    <div class="row">-->
        <!--                        <div class="card horizontal blue">-->
        <!--                            <div class="card-stacked">-->
        <!--                                <div class="card-content white-text">-->
        <!--                                    <h4>Enriched Opportunities</h4>-->
        <!--                                    <p>Enhance your academic experience at ACC with courses designed to challenge you in-->
        <!--                                       non-traditional class formats.</p>-->
        <!--                                    <ul><li>Honors Program >-->
        <!--                                            </li>-->
        <!--                                    <li>Study Abroad (International Programs) ></li></ul>-->
        <!--                                </div>-->
        <!--                                <div class="card-action white hoverable">-->
        <!--                                    <a href="#"> Learn More ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="card-image">-->
        <!--                                <img class="responsive-img" src="/sites/all/themes/acc2017/img/placeholder3.png">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="section">-->
        <!--                    <div class="row">-->
        <!--                        <div class="card horizontal green">-->
        <!--                            <div class="card-image">-->
        <!--                                <img class="responsive-img"-->
        <!--                                     src="/sites/all/themes/acc2017/img/placeholder2.png">-->
        <!--                            </div>-->
        <!--                            <div class="card-stacked">-->
        <!--                                <div class="card-content white-text">-->
        <!--                                    <h4>specialty tracks</h4>-->
        <!---->
        <!--                                    <p>-->
        <!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
        <!--                                        sed do eiusmod tempor incididunt ut-->
        <!--                                        labore et dolore magna wirl aliqua. Up-->
        <!--                                    </p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action white hoverable">-->
        <!--                                    <a href="#">Learn More ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="section">-->
        <!--                    <div class="row">-->
        <!--                        <div class="card horizontal blue">-->
        <!--                            <div class="card-stacked">-->
        <!--                                <div class="card-content white-text">-->
        <!--                                    <h4>Continuing Education</h4>-->
        <!--                                    <p>Our Continuing Education Division provides easy access to a wide range of career-->
        <!--                                       training certification and professional development programs as well as courses-->
        <!--                                       for personal enrichment.-->
        <!--                                    </p>-->
        <!--                                </div>-->
        <!--                                <div class="card-action white hoverable">-->
        <!--                                    <a href="#">VISIT CONTINUING-->
        <!--                                                EDUCATION ></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="card-image">-->
        <!--                                <img class="responsive-img" src="/sites/all/themes/acc2017/img/placeholder1.png">-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!---->
        <!--            </div>-->
        <!---->
        <!--        </div>-->

        <div class="divider"></div>
    </div>
    <div class="row valign-wrapper nextStep blue lighten-1">
        <div class="col m4 s12 offset-m2 nextStepPrompt orange-text">
            <h3 class="valign right-align">Take The Next Step</h3>
        </div>
        <div class="col m4 s12 valign nextStepButtons">
            <a class="waves-effect waves-yellow btn-large orange white-text left-align">APPLY NOW</a>
            <a class="waves-effect waves-yellow btn-large orange white-text left-align">REQUEST
                INFO</a>
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