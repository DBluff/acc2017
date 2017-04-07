<?php
$node = menu_get_object();
?>
<div id="page">
    <div class="header transparent">
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
        <?php
        if ($node->field_hero_image[LANGUAGE_NONE][0]['uri']) {
            $heroImg = $node->field_hero_image[LANGUAGE_NONE][0]['uri'];
            $heroImg = file_create_url($heroImg);
            ?>
            <div class="<?php print $classes; ?>">
                <div class="content">
                    <div class="col s12">
                        <img class="responsive-img" src="<?php print $heroImg ?>">
                    </div>
                </div>
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
        <?php } ?>
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
        <?php if (!empty($page['content'])) { ?>
            <div class="content">
                <?php print render($page['content']); ?>
            </div>
        <?php } ?>
        <div class="divider"></div>
        <div class="row row-band z-depth-1-half">
            <div class="container">
                <div class="section">
                    <div class="col m8 s12 blue white-text">
                        <h4 class="band-title">learn to shape the world around us</h4>
                    </div>
                </div>
                <br>
                <div class="section">
                    <p class="flow-text">
                        <strong>Whether it's joining the beams in a high-rise building, repairing pipelines, or
                            analyzing damaged structures, welders perform a critical task we rely on every
                            day. </strong></p>
                    <p class="flow-text">Austin Community College's Welding Technology Program prepares you to work in a variety of settings. Students receive hands-on training in a variety of welding techniques, including oxy/fuel, shielded metal arc, gas tungsten arc, gas metal arc, and flux-core arc. Tracks are offered in a pipe welding, inspection, ultrahigh purity piping, metalsmithing, coppersmithing, and art metals.
                    </p>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row noSideMargin">
            <div class="col m5 s12 blue white-text"><h4>skills you gain</h4></div>
            <div class="col m6 s12 offset-m1 blue white-text"><h4>possible job titles</h4></div>
        </div>
        <div class="row smallContainer">
            <div class="row">
                <div class="col m5 s12">
                    <br/>
                    <p>
                        Students build expertise in blueprint interpretation, layout and fabrication, plate and pipe
                        welding,
                        ultrasonic testing, and welding inspection (including preparation for the Certified Welding
                        Inspector
                        Exam).
                    </p>
                    <br/>
                    <p>
                        Graduates are employed in a wide range of organizations in fields such as construction,
                        engineering,
                        infrastructure, semiconductor, metallurgy, oil and gas, and industrial inspection, not to
                        mention local
                        specialty manufacturing, welding, and machine shops.
                    </p>
                    <br/>
                    <a href="#">Program Map ></a>
                </div>
                <ul class="col m6 s12 offset-m1">
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
                                            <div class="col m4 offset-m2 JRText">
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
            <div class="valign-wrapper col m7 AoStestText"
                 style="border-color:<?php print str_replace('Primary', '', $AoSpieces[1]); ?>; color:<?php print str_replace('Primary', '', $AoSpieces[1]); ?> ;">
                <div class="row testContent noSideMargin">
                    <div class="col m1 leftQuote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="col m11">
                        <h4 class="valign center-align"><?php print $testText ?>"</h4>
                    </div>
                    <div class="col m12">
                        <h3 class="right-align"><?php print $testAuth ?></h3>
                    </div>
                    <div class="col m12">
                        <h4 class="right-align"><?php print $testDeg ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row awardsPath">
            <div class="col m6">
                <div class="col m12 blue white-text"><h4>available awards</h4></div>
                <div class="col m4 valign-wrapper">
                    <div class="col m4 valign">
                        <img src="/sites/all/themes/acc2017/fonts/acc-icons/acc-aas.svg">
                    </div>
                    <div class="col m4 valign">
                        <img src="/sites/all/themes/acc2017/fonts/acc-icons/acc-c1.svg">
                    </div>
                    <div class="col m4 valign">
                        <img src="/sites/all/themes/acc2017/fonts/acc-icons/acc-os.svg">
                    </div>
                </div>
                <div class="col m8 valign-wrapper">
                    <a class="valign" href="#">Visit Awards Page ></a>
                </div>
                <div class="col m12">
                    <h5>ASSOCIATE DEGREES</h5>
                    <ul>
                        <li><a href="#">Welding Tech- Art Metals: Blacksmithing Specialization (Associate of Applied
                                Science)</a></li>
                        <li><a href="#">Welding Tech- Art Metals: Metal Sculpture Specialization (Associate of Applied
                                Science)</a></li>
                    </ul>
                </div>
                <br/>
                <br/>
                <div class="col m12">
                    <h5>WORKFORCE CERTIFICATES</h5>
                    <ul>
                        <li><a href="#">Art Metals: Blacksmithing Welding Technology (Certificate Level 1)</a></li>
                        <li><a href="#">Inspection Welding Technology (Certificate Level 1)</a></li>
                        <li><a href="#">Metal Sculpture Welding Technology (Certificate Level 1)</a></li>
                        <li><a href="#">Pipe Welding Welding Technology (Certificate Level 1)</a></li>
                        <li><a href="#">Structural Welding Welding Technology (Certificate Level 1)</a></li>
                    </ul>
                </div>
            </div>
            <div class="col m5 offset-m1 valign-wrapper blue white-text">
                <div class="valign bgQuestion" data-bg-question="?">
                    <h5>Which award path is right for you?</h5><br/>
                  <p>  ACC offers a variety of degree and certificate options to get you ready for the next step in your
                    academic and career journey. Choosing the right award path is an important first step to reach your
                    short and long-term goals. Visit our awards page to learn about the types of credentials we offer
                    and the differences between each.</p>
                </div>
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