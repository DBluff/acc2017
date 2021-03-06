<?php
$node = menu_get_object();
?>
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
        <?php
        if ($node->field_hero_image[LANGUAGE_NONE][0]['uri']) {
        $heroImg = $node->field_hero_image[LANGUAGE_NONE][0]['uri'];
        $heroImg = file_create_url($heroImg);
        ?>
        <div class="<?php print $classes; ?>">
            <div class="content">
                <div class="col s12 fullWidthImg">
                    <img class="responsive-img" src="<?php print $heroImg ?>">
                </div>
            </div>
            <?php } ?>
            <div class="row heroInfo">
                <?php
                $AoStid = $node->field_aos[LANGUAGE_NONE][0]["tid"];
                $AoSsub = $node->field_sub_title[LANGUAGE_NONE][0]["value"];
                $qResult = db_query('SELECT name FROM taxonomy_term_data WHERE tid=:AoStid', array(':AoStid' => $AoStid));
                $AoSrecord = $qResult->fetchCol();
                $AoSpieces = explode(' ', $AoSrecord[0]);
                ?>
                <div class="col s12 AoSicon">
                    <div class="valign-wrapper iconCircle">
                        <div class="valign AoSinitials"><img
                                    src="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/sites/all/themes/acc2017/img/AoSicons/<?php print $AoSpieces[0]; ?>.png">
                        </div>
                    </div>
                </div>
                <div class="col s12 blockBreadcrumb">
                    <?php
                    Global $base_url;
                    $base_url;
                    $urlParts = explode('/', drupal_get_path_alias());
                    $count = count($urlParts);
                    $path = '';
                    $loopNum = 1;
                    print '<a href="' . $base_url . '">Home</a>';
                    print '   >   ';
                    foreach ($urlParts as $urlPart) {
                        $path = $path . '/' . $urlPart;
                        print '<a href="' . $base_url . $path . '">' . $urlPart . '</a>';
                        if ($loopNum !== $count) {
                            print '   >   ';
                        }
                        $loopNum++;
                    }
                    ?>
                </div>
                <div class="col s12 AoStitle white-text">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                        <h2<?php print $title_attributes; ?>><?php print $title ?></h2>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                </div>
                <div class="col s12 AoSsub white-text">
                    <h5><?php print $AoSsub; ?></h5>
                </div>
            </div>
        </div>
        <div class="row nextStep">
            <div class="col m12 center-align nextStepPrompt orange-text">
                <h4>LET US HELP YOU</h4>
            </div>
            <div class="col m12 center-align nextStepButtons">
                <a class="waves-effect waves-light btn-large orange white-text">APPLY NOW</a>
                <a class="waves-effect waves-light btn-large orange white-text">REQUEST INFO</a>
            </div>
        </div>
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
        <div class="divider"></div>
        <div class="row row-band">
            <div class="container">
                <div class="section">
                    <div class="col m8 s12 blue white-text">
                        <h5 class="band-title">Get your start in a career that gives hope</h5>
                    </div>
                </div>
                <br>
                <div class="section">
                    <p class="flow-text">
                        The one-on-one interactions and varied work environments of nursing set it apart from most other
                        healthcare professions. Austin Community College provides a path to your career as either a
                        registered or vocational nurse. In our Associate Degree Nursing Program, student learn to
                        provide complete patient care by addressing both physical symptoms and mental and emotional
                        well-being.
                    </p>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="container">
            <div class="row noSideMargin">
                <div class="col m6 s12 blue white-text nursingLeft"><h5>Nursing, R.N.</h5></div>
                <div class="col m6 s12 blue white-text nursingRight"><h5>Nursing, Vocational</h5></div>
            </div>
            <div class="row noSideMargin">
                <div class="col m6">
                    <img class="responsive-img" src="/sites/all/themes/acc2017/img/nurses.jpg">
                    <p class="flow-text">
                        Few professions offer such engaging work and varied job opportunities as nursing. Austin
                        Community College provides educational paths for both registered and vocational nursing
                        students. In the Associate Degree Nursing Program, future registered nurses learn to provide
                        complete patient care by addressing physical symptoms as well as mental and emotional
                        well-being. Upon completion, student will be ready to take the RN licensing exam and enter the
                        workforce directly or continue toward bachelor's degree in nursing.
                    </p>
                </div>
                <div class="col m6">
                    <img class="responsive-img" src="/sites/all/themes/acc2017/img/johnnurse.jpg">
                    <p class="flow-text">
                        The Vocational Nursing Program provides comprehensive classroom instruction and hands-on
                        practice in a variety of clinical and laboratory settings with duties that include assessing
                        vital signs, administering medication, evaluation patients' needs, and implementing plans of
                        care. Upon completion Vocational nursing students will be ready to take the licensure exam to
                        become a licensed vocational nurse.
                    </p>
                </div>
            </div>
        </div>
        <?php
        $entityPush = entity_load('field_collection_item', array($node->field_testimonial_info[LANGUAGE_NONE][0]['value']));
        foreach ($entityPush as $entities) {
            if (isset($entities->field_testimonial_hero[LANGUAGE_NONE][0]['uri'])) {
                $testImg = $entities->field_testimonial_hero[LANGUAGE_NONE][0]['uri'];
                $testImg = file_create_url($testImg);
            }
            if (isset($entities->field_testimonial_text[LANGUAGE_NONE][0]['value'])) {
                $testText = $entities->field_testimonial_text[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entities->field_testimonial_auth[LANGUAGE_NONE][0]['value'])) {
                $testAuth = $entities->field_testimonial_auth[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entities->field_testimonial_deg[LANGUAGE_NONE][0]['value'])) {
                $testDeg = $entities->field_testimonial_deg[LANGUAGE_NONE][0]['value'];
            }
        }
        ?>
        <div class="row testimonial noSideMargin">
            <div class="col m5 AoStestImg"> <?php if (isset($testImg)) { ?>
                    <img class="responsive-img" src="<?php print $testImg ?>"> <?php } ?>
            </div>
            <div class="valign-wrapper col m7 AoStestText white-text"
                 style="border-color:<?php print str_replace('Primary', '', $AoSpieces[1]); ?>; background-color:<?php print str_replace('Primary', '', $AoSpieces[1]); ?> ;">
                <div class="row testContent noSideMargin">
                    <div class="col m1 leftQuote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="col m11">
                        <h5 class="valign center-align"><?php print $testText ?>"</h5>
                    </div>
                    <div class="col m12">
                        <h4 class="right-align"><?php print $testAuth ?></h4>
                    </div>
                    <div class="col m12">
                        <h5 class="right-align"><?php print $testDeg ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="container">
            <div class="row noSideMargin">
                <div class="col m6 s12 blue-text"><h5>ACADEMIC AWARDS</h5></div>
                <div class="col m6 s12 blue-text"><h5>POSSIBLE JOB TITLES</h5></div>
            </div>
            <div class="row">
                <div class="col m6 s12">
                    <div class="col m12">
                        <h6>ASSOCIATE DEGREES</h6>
                        <ul>
                            <li><a href="#">Welding Tech- Art Metals: Blacksmithing Specialization (Associate of Applied
                                    Science)</a></li>
                            <li><a href="#">Welding Tech- Art Metals: Metal Sculpture Specialization (Associate of
                                    Applied
                                    Science)</a></li>
                        </ul>
                    </div>
                    <br/>
                    <br/>
                    <div class="col m12">
                        <h6>WORKFORCE CERTIFICATES</h6>
                        <ul>
                            <li><a href="#">Art Metals: Blacksmithing Welding Technology (Certificate Level 1)</a></li>
                            <li><a href="#">Inspection Welding Technology (Certificate Level 1)</a></li>
                            <li><a href="#">Metal Sculpture Welding Technology (Certificate Level 1)</a></li>
                            <li><a href="#">Pipe Welding Welding Technology (Certificate Level 1)</a></li>
                            <li><a href="#">Structural Welding Welding Technology (Certificate Level 1)</a></li>
                        </ul>
                        <br/>
                        <a class="waves-effect waves-light btn-large">Program Map ></a>
                        <br/>
                        <br/>
                    </div>
                    <div class="col m12">
                        <h5>
                            <b>Which award path is right for you?</b><br/>
                            ACC offers a variety of degree and certificate options to get you ready for the next step in
                            your
                            academic and career journey. Choosing the right award path is an important first step to
                            reach your
                            short and long-term goals. Visit our awards page to learn about the types of credentials we
                            offer
                            and the differences between each.
                        </h5>
                        <br/>
                        <a class="waves-effect waves-light btn-large">Visit Awards Page ></a>
                        <br/>
                        <br/>
                    </div>
                </div>
                <ul class="col m6 s12">
                    <?php
                    $record = array('47-1011.00', '47-2152.01', '47-2171.00');
                    if (!empty($record)){
                    $loopCount = 0;
                    foreach ($record as $onetID) {
                    $onet = $onetID;
                    if ($onet != ''){
                    if ($loopCount === 0){ ?>
                    <ul class="collapsible popout" data-collapsible="accordion">
                        <?php }
                        $jresult = file_get_contents('http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/sites/all/themes/acc2017/temp/careerCoach/' . $onet . '.json');
                        $json = json_decode($jresult, true); ?>
                        <li>
                            <div class="collapsible-header valign-wrapper noBlock">
                                <h6 class="valign truncate"><?php echo $json['data'][0]['attributes']['title'] ?></h6>
                            </div>
                            <div class="collapsible-body">
                                <h6><?php echo $json['data'][0]['attributes']['title'] ?></h6>
                                <hr>
                                <?php
                                $yearRow = 0;
                                foreach ($json['data'][0]['attributes']['employment'] as $year) {
                                    if ($json['data'][0]['attributes']['employment'][$yearRow]['year'] == date('Y')) {
                                        $employed = $json['data'][0]['attributes']['employment'][$yearRow]['number'];
                                    }
                                    if ($json['data'][0]['attributes']['employment'][$yearRow]['year'] == (date('Y', strtotime('+4 year')))) {
                                        $futureEmployed = $json['data'][0]['attributes']['employment'][$yearRow]['number'];
                                    }
                                    $yearRow++;
                                } ?>
                                <div id="limit<?php echo $loopCount ?>">
                                    <div id="jobInfo<?php echo $loopCount ?>">
                                        <div class="hourlyInfo">
                                            <b>
                                                <?php echo $json['data'][0]['attributes']['hourly-earnings'][2]['earnings'] ?></b>
                                            Hourly
                                            Wage <b><?php echo $employed ?></b> Currently Employed
                                        </div>
                                        <hr>
                                        <div class="jobDesc">
                                            <?php echo $json['data'][0]['attributes']['description'] ?>
                                        </div>
                                        <div class="col m11 offset-m1">
                                            <div id="chart_div<?php echo $loopCount ?>"></div>
                                        </div>
                                        <?php
                                        if ($futureEmployed > $employed) {
                                            $updown = 'increase by';
                                        } elseif ($futureEmployed < $employed) {
                                            $updown = 'decrease by';
                                        } else {
                                            $updown = 'remain steady with job change around';
                                        }
                                        $changePer = abs(round((($futureEmployed - $employed) / $employed) * 100, 2));
                                        ?>
                                        <div class="jobRise">
                                            <div class="col m6 JRText">
                                                <b>
                                                    <?php echo $employed ?></b>
                                                <?php echo $json['data'][0]['attributes']['title'] ?> are employed. This
                                                number is expected to
                                                <?php echo $updown ?> <b>
                                                    <?php echo $changePer ?>%</b> over the next four years.
                                            </div>
                                            <div class="col m2 offset-m2 JRMap">
                                                <img src="/sites/all/themes/acc2017/img/ACCMSA.png"
                                                     alt="Austin Community College MSA Map">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                        $final_codes[] = $onet;
                        $loopCount++;
                        } ?>
                        <?php }
                        } ?>
                    </ul>
                    <input type="hidden" id="myLoopValue" value="<?php echo $loopCount ?>"/>
                    <input type="hidden" id="myOnetCodes" value="<?php echo implode(",", $final_codes); ?>"/>
            </div>
        </div>
        <div class="container">
            <iframe width="100%" height="600px" src="https://www.youtube.com/embed/WQA9j73asMc" frameborder="0"
                    allowfullscreen></iframe>
        </div>
        <div class="container">
            <h3 class="blue-text">Additional Details</h3>
            <div class="row row-band">
                <div class="col m6 grey-text">
                    <h4>
                        SPECIAL ADMISSION REQUIREMENTS
                    </h4>
                    <p class="flow-text">
                        To apply to either the Associate Degree Nursing (Traditional) Program or Associate Degree
                        Nursing (Mobility) Program, create an account with Castle Branch.<br/>
                        Immunization documents - Use code UL64im for Traditional or Mobility ADN Nursing programs.<br/>
                        Application documents - Use code UL32im for the Traditional Associate Degree Nursing program or
                        UL30im for the Mobility Associate Degree Nursing program. Once all your documents are
                        immunizations have been cleared, turn in your application by the deadline.
                    </p>
                </div>
                <div class="col m6 grey-text">
                    <h4>PROGRAM ACCEDITATIONS</h4>
                    <h5>Accreditation Commision for Education in Nursing</h5>
                    <p class="flow-text">
                        (http://www.acenursing.org)<br/>
                        3343 Peachtree Road NE, Suite 500<br/>
                        Atlanta, GA 30326
                    </p>
                    <h5>Texas Board of Nursing</h5>
                    <p class="flow-text">
                        (www.bon.state.tx.us)<br/>
                        333 Guadalupe St., Suite 3-460<br/>
                        Austin, TX, 512-305-7400
                    </p>
                </div>


            </div>
        </div>
        <?php
        $entityLoad = entity_load('field_collection_item', array($node->field_department_contact[LANGUAGE_NONE][0]['value']));
        foreach ($entityLoad as $entity) {
            if (isset($entity->field_main_contact[LANGUAGE_NONE][0]['value'])) {
                $mainC = $entity->field_main_contact[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_street_address_1[LANGUAGE_NONE][0]['value'])) {
                $mainA = $entity->field_street_address_1[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_city_state_1[LANGUAGE_NONE][0]['value'])) {
                $mainS = $entity->field_city_state_1[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_phone_1[LANGUAGE_NONE][0]['value'])) {
                $mainP = $entity->field_phone_1[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_email_1[LANGUAGE_NONE][0]['value'])) {
                $mainE = $entity->field_email_1[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_chair[LANGUAGE_NONE][0]['value'])) {
                $chairC = $entity->field_chair[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_street_address_2[LANGUAGE_NONE][0]['value'])) {
                $chairA = $entity->field_street_address_2[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_city_state_2[LANGUAGE_NONE][0]['value'])) {
                $chairS = $entity->field_city_state_2[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_phone_2[LANGUAGE_NONE][0]['value'])) {
                $chairP = $entity->field_phone_2[LANGUAGE_NONE][0]['value'];
            }
            if (isset($entity->field_email_2[LANGUAGE_NONE][0]['value'])) {
                $chairE = $entity->field_email_2[LANGUAGE_NONE][0]['value'];
            }
        }
        ?>
        <div class="divider"></div>
        <div class="row row-band noSideMargin">
            <div class="container">
                <div class="row outerBorder">
                    <div class="section">
                        <div class="row contactHead">
                            <div class="col m8 valign-wrapper">
                                <h6 class="valign blue-text">AREA OF STUDY
                                    PROGRAM: <?php print strtoupper(drupal_get_title()) ?></h6>
                            </div>
                            <div class="col m4  valign-wrapper lightgreen blue-text">
                                <h6 class="valign right-align">CONTACT INFORMATION</h6>
                            </div>
                        </div>
                        <div class="row contactBody">
                            <div class="col m5 borderRight">
                                <div class="row">
                                    <div class="col m12">
                                        <h6 class="valign purple-text">MAIN CONTACT: <?php if (isset($mainC)) {
                                                print strtoupper($mainC);
                                            } ?></h6>
                                    </div>
                                </div>
                                <div class="row thin">
                                    <div class="col m2 lightgreen-text">
                                        <i class="material-icons">room</i>
                                    </div>
                                    <div class="col m10">
                                        <h6 class="valign"><?php if (isset($mainA)) {
                                                print $mainA;
                                            } ?></h6>
                                    </div>
                                </div>
                                <div class="row thin">
                                    <div class="col m10 offset-m2">
                                        <h6 class="valign"><?php if (isset($mainS)) {
                                                print $mainS;
                                            } ?></h6>
                                    </div>
                                </div>
                                <div class="row thin">
                                    <div class="col m2 lightgreen-text">
                                        <i class="material-icons">call</i>
                                    </div>
                                    <div class="col m10">
                                        <h6 class="valign"><a href="tel:<?php if (isset($mainP)) {
                                                print $mainP;
                                            } ?>"><?php if (isset($mainP)) {
                                                    print $mainP;
                                                } ?></a></h6>
                                    </div>
                                </div>
                                <div class="row thin">
                                    <div class="col m2 lightgreen-text">
                                        <i class="material-icons">email</i>
                                    </div>
                                    <div class="col m10">
                                        <h6 class="valign"><a href="mailto:<?php if (isset($mainE)) {
                                                print $mainE;
                                            } ?>"><?php if (isset($mainE)) {
                                                    print $mainE;
                                                } ?></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col m7">
                                <div class="col m12">
                                    <h6 class="valign purple-text">CHAIR: <?php if (isset($chairC)) {
                                            print strtoupper($chairC);
                                        } ?></h6>
                                </div>
                                <div class="col m12">
                                    <h6 class="valign"><?php if (isset($chairA)) {
                                            print $chairA;
                                        } ?></h6>
                                </div>
                                <div class="col m12">
                                    <h6 class="valign"><?php if (isset($chairS)) {
                                            print $chairS;
                                        } ?></h6>
                                </div>
                                <div class="col m12">
                                    <h6 class="valign"><a href="tel:<?php if (isset($chairP)) {
                                            print $chairP;
                                        } ?>"><?php if (isset($chairP)) {
                                                print $chairP;
                                            } ?></a></h6>
                                </div>
                                <div class="col m12">
                                    <h6 class="valign"><a href="mailto:<?php if (isset($chairE)) {
                                            print $chairE;
                                        } ?>"><?php if (isset($chairE)) {
                                                print $chairE;
                                            } ?></a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row nextStep">
            <div class="col m12 center-align nextStepPrompt orange-text">
                <h4>LET US HELP YOU</h4>
            </div>
            <div class="col m12 center-align nextStepButtons">
                <a class="waves-effect waves-light btn-large orange white-text">APPLY NOW</a>
                <a class="waves-effect waves-light btn-large orange white-text">REQUEST INFO</a>
            </div>
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
</div>