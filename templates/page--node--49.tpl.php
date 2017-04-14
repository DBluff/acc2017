<?php $node = menu_get_object(); ?>
<div id="page">
    <div class="header">
        <div id="acc-logo">
            <?php if ($logo)
                { ?>
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
    <!--    /.header-->
    <div class="main page">
        <?php if (!empty($page['content']))
            { ?>
                <div class="content">
                    <?php print render($page['content']); ?>
                </div>
            <?php } ?>
        <?php if (!empty($page['content_band']))
            { ?>
                <div class="contentBand">
                    <?php print render($page['content_band']); ?>
                </div>
            <?php } ?>
        <!--        <div class="row pageTitleAcademics valign-wrapper">-->
        <!--            <h1 class="valign blue-text text-darken-2">Academics</h1></div>-->
        <div class="row row-band cream lighten-2 z-depth-1 AcademicsWWO noSideMargin">
            <!--add background color for band color-->
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="band-title-alt blue-text">what we offer</h4>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p class="flow-text"><strong>Austin Community College creates paths to personal success at every
                                    point
                                    in your learning journey.</strong></p>
                            <p class="flow-text"> Discover what ACC offers from getting ready for
                                college, to transfer, and beyond. </p></div>
                    </div>
                    <div class="row">
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image"><img alt="University path"
                                                             src="/sites/default/files/sq-student-012.jpg"
                                                             class="responsive-img"> <span class="card-title purple">University Transfer</span>
                                </div>
<!--                                                                <div class="card-content">-->
<!--                                                                    <p>We offer transfers.</p>-->
<!--                                                                </div>-->
<!--                                                                <div class="card-action hoverable"><a href="#">Learn More ></a></div>-->
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image"><img alt="Career and Technical Training "
                                                             src="/sites/default/files/sq-student-016.jpg"
                                                             class="responsive-img"> <span class="card-title purple">Career and Technical Training </span>
                                </div>
<!--                                                                <div class="card-content">-->
<!--                                                                    <p>We offer transfers.</p>-->
<!--                                                                </div>-->
<!--                                                                <div class="card-action hoverable"><a href="#">Learn More ></a></div>-->
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image"><img alt="College Readiness"
                                                             src="/sites/default/files/sq-student-009.jpg"
                                                             class="responsive-img"> <span class="card-title purple">College Readiness</span>
                                </div>
<!--                                                                <div class="card-content">-->
<!--                                                                    <p>We offer transfers.</p>-->
<!--                                                                </div>-->
<!--                                                                <div class="card-action hoverable"><a href="#">Learn More ></a></div>-->
                            </div>
                        </div>
                        <div class="col m3">
                            <div class="card AcademicsWWO">
                                <div class="card-image"><img alt="Professional Development"
                                                             src="/sites/default/files/sq-student-003.jpg"
                                                             class="responsive-img"> <span class="card-title purple">Professional Development</span>
                                </div>
<!--                                                                <div class="card-content">-->
<!--                                                                    <p>We offer transfers.</p>-->
<!--                                                                </div>-->
<!--                                                                <div class="card-action hoverable"><a href="#">Learn More ></a></div>-->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
<!--        end wwo band-->
        <!--      begin aos band-->

        <div class="row row-band AcademicsAoS z-depth-2">
            <div class="container">   <div class="section">

                    <div class="row">
                        <div class="col s12">
                            <h4 class="band-title-alt">explore programs</h4>
                            <div class="divider"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <p class="flow-text"> Ready to earn an associate degree, career-ready certificate, or prep
                                for
                                transfer to a four-year university? ACC provides options to help you
                                create a roadmap to academic and career success with a variety of programs
                                in 10 unique areas of study. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s11">
                            <input type="search" placeholder="Search Programs" name="search" class="searchInput"
                                   onkeyup="buttonUp();" required></div>
                        <div class="col s1"><a class="waves-effect waves-light btn-large"><i
                                        class="material-icons large">search</i>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
<!--        end Aos band-->
        <!--       begin high school band-->
<!--        <div class="row row-band AcademicsHS valign-wrapper z-depth-1 noSideMargin">-->
            <div class="row row-band acaImg AcademicsHS z-depth-1 noSideMargin">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col m5 s12">

                                    <h4 class="band-title-alt blue-text">start in high school</h4>
                                    <div class="dividerDiagPurple"></div>
                                    <p class="flow-text"> Jumpstart your college plans in high school. ACC offers opportunities to earn college credits, train for in-demand careers, and even complete a degree before your high school graduation!
                                    </p>
                                        <p>

                                            <a class="waves-effect purple white-text waves-light btn" href="#">EXPLORE
                                                HIGH
                                                SCHOOL
                                                PROGRAMS
                                                >
                                            </a></p>

                        </div>
                        <div class="col m7 s12">
<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12 m6">
                <div class="card-panel">
                    <p class="flow-text">Dual Credit</p>

                </div>
            </div>   <div class="col s12 m6">
            <div class="card-image"><img alt="Dual Credit"
                                         src="/sites/default/files/sq-student-004.jpg"
                                         class="responsive-img"> <span class="card-title purple">Dual Credit</span>
            </div>
        </div>
            <div class="col s12 m6">
                <div class="card-image"><img alt="Early College High School"
                                             src="/sites/default/files/sq-student-016.jpg"
                                             class="responsive-img"> <span class="card-title purple">Early College High School</span>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card-image"><img alt="Career Academies"
                                             src="/sites/default/files/sq-student-016.jpg"
                                             class="responsive-img"> <span class="card-title purple">Career Academies</span>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card-image"><img alt="ACCTech"
                                             src="/sites/default/files/sq-student-016.jpg"
                                             class="responsive-img"> <span class="card-title purple">ACCTech</span>
                </div>
            </div>
        </div>





    </div>
</div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!--    begin specialty-enriched opportunities band-->
        <div class="row row-band AcademicsSTEO white-text">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col m5 s12">
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="band-title-alt">specialized learning paths</h4>
                                    <div class="divider"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s10">
                                    <p class="flow-text"> Does extra support getting started sound good to you? Take
                                        advantage of a number of ACC’s specialized learning paths that offer a range of
                                        additional resources, scheduling options, and more based on your unique student
                                        needs.</p> <a
                                            class="waves-effect purple white-text waves-light btn" href="#">LEARN MORE
                                        AND EXPLORE >
                                    </a></div>
                            </div>
                        </div>


                        <div class="col m5 offset-m2 s12">
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="band-title-alt">enriched opportunities</h4>
                                    <div class="divider"></div>
                                </div>
                                <div class="col s12">
                                    <p class="flow-text"> Enhance your academic experience at ACC with courses designed
                                        to
                                        challenge you in non-traditional class formats. </p> <a
                                            class="waves-effect purple white-text waves-light btn" href="#">Honors
                                        Program >
                                    </a><a
                                            class="waves-effect purple white-text waves-light btn" href="#">Study Abroad
                                        (International Programs) >

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dividerDiagPurple"></div>
        <!--    begin ce band-->
        <div class="row row-band AcademicsCE purple-text z-depth-2">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="band-title-alt purple-text">continuing education</h4>
                            <div class="dividerDiagPurple"></div>
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col m6 s12">
                            <div class="row">
                                <div class="col s12">
                                    <p class="flow-text">Our Continuing Education Division provides easy access to a
                                        wide range of career training certification and professional
                                        development programs as well as courses for personal
                                        enrichment.</p> <a
                                            class="waves-effect purple white-text waves-light btn" href="#">VISIT
                                        CONTINUING
                                        EDUCATION
                                        ></a></div>
                            </div>
                        </div>
                        <div class="col m6 s12"><img alt="alt tag" class="responsive-img"
                                                     src="/sites/all/themes/acc2017/img/hero003.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dividerDiagBlue"></div>
    </div>


    <div class="dividerDiagBlue"></div>
    <div class="row nextStep">
        <div class="col m12 center-align nextStepPrompt orange-text">
            <h4>LET US HELP YOU</h4>
        </div>
        <div class="col m12 center-align nextStepButtons">
            <a class="waves-effect waves-light btn-large orange white-text">APPLY NOW</a>
            <a class="waves-effect waves-light btn-large orange white-text">REQUEST INFO</a>
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
                            <p> 5930 Middle Fiskville Rd <br/> Austin, Texas 78752</p>
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
            <div class="searchContainer" id="searchFoot">
                <form class="searchbox-foot">
                    <input type="search" placeholder="Search......" name="search" class="searchbox-input-foot"
                           onkeyup="buttonUp();" required>
                    <input type="submit" class="searchbox-submit" value="GO">
                    <span class="searchbox-icon-foot"><i class="large material-icons">search</i></span>
                </form>
            </div>
        </nav>
    </div>


