<div class="row row-band lightorange lighten-1">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col m7 s12 blue white-text">
                    <h4 class="band-title">our programs & areas of study</h4>
                </div>
                <div class="col m4 s12">
                    <div class="col s12">
                        <input type="text" id="autocomplete-input" placeholder="Search" name="search" class="autocomplete purple white-text" onkeyup="buttonUp();" required>
                    </div>
                </div>
                <div class="col m1"><i class="material-icons large">search</i></div>
            </div></div>
        <div class="row">
            <a id="searchIconGrid" class="waves-effect waves-light btn-large lightgreen"><i class="material-icons">apps</i></a>
            <a id="searchIconList" class="waves-effect waves-light btn-large"><i class="material-icons">list</i></a>
        </div>
        <?php
        $qResult = db_query('SELECT name FROM taxonomy_term_data');
        $AoSrecord = $qResult->fetchCol();
        ?>
        <div class="row" id="AoSgrid">
            <div class="row AoShome">
                <?php
                $AoSCount = 1;
                foreach ($AoSrecord as $AoS){
                if ($AoSCount === 5 || $AoSCount === 9){ ?>
            </div>
            <div class="row AoShome">
                <?php }
                $AoSparse = explode(' ', $AoS);
                ?>
                <?php if ($AoSparse[0] == 'DMC&AT'){ ?>
                <a href="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/dmcat/weldingtechnology"><div class="col m3 AoScards">
                        <?php } elseif ($AoSparse[0] == 'HS') { ?>
                        <a href="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/hs/nursing"><div class="col m3 AoScards">
                                <?php } else {?>
                                <div class="col m3 AoScards"> <?php } ?>
                                    <div class="valign-wrapper z-depth-3 card-panel square" style="background-color: <?php print str_replace('Primary', '', $AoSparse[1]); ?>">
                                        <div class="valign AoSinitialsHome">
                                            <?php if ($AoSparse[0] == 'DMC&AT'){ ?>
                                                <h4 class="aos-card"><a href="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/dmcat/weldingtechnology"><?php print $AoSparse[0]; ?></a></h4>
                                            <?php }
                                            elseif ($AoSparse[0] == 'HS') { ?>
                                                <h4 class="aos-card"><a href="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/hs/nursing"><?php print $AoSparse[0]; ?></a></h4>
                                            <?php }
                                            else {?>
                                                <h4 class="aos-card"><?php print $AoSparse[0]; ?></h4>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($AoSparse[0] == 'DMC&AT' || $AoSparse[0] == 'HS') { ?> </a> <?php } ?>
                        <?php
                        $AoSCount++;
                        }
                        ?>
                    </div>
            </div>
            <div class="row" id="AoSlist" style="display:none;">
                <div class="AoSlist">
                    <ul>
                        <?php foreach ($AoSrecord as $AoS) {
                            $AoSparse = explode(' ', $AoS);
                            ?>
                            <li><?php print $AoSparse[0]; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>





<?php

result_type=recent
    count=3
https://api.twitter.com/1.1/search/tweets.json?q=@accdistrict&result_type=recent&count=3
?>




https://www.instagram.com/oauth/authorize/?client_id=3cf8e05478e94b99a17d6b91d924145a&redirect_uri=http%3A%2F%2Faustincc.edu&response_type=token

#access_token=448051566.3cf8e05.f42eb9e13dd542ddb620e0f6014ff340

$str = https://api.instagram.com/v1/users/self/media/recent/?count=4&access_token=448051566.3cf8e05.f42eb9e13dd542ddb620e0f6014ff340

$re = '/standard\_resolution\"\:\ \{\"url\"\:\ \"(.*)\"\,/U';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);