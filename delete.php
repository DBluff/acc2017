<div class="row row-band lightorange lighten-1">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col m7 s12 blue white-text">
                    <h4 class="band-title">our programs & areas of study</h4>
                </div>
                <div class="col m4 s12">
                    <div class="col s12">
                        <input type="text" id="autocomplete-input" placeholder="Search Programs" name="search"
                               class="autocomplete purple white-text" onkeyup="buttonUp();" required>
                    </div>
                </div>
                <div class="col m1"><i class="material-icons large">search</i></div>
            </div>
        </div>
        <div class="row">
            <a id="searchIconGrid" class="waves-effect waves-light btn-large lightgreen"><i
                        class="material-icons">apps</i></a>
            <a id="searchIconList" class="waves-effect waves-light btn-large"><i class="material-icons">list</i></a>
        </div> <?php
        $qResult = db_query('SELECT name FROM taxonomy_term_data WHERE vid=2');
        $AoSrecord = $qResult->fetchCol();
        ?>
        <div class="row" id="AoSgrid">
            <div class="row AoShome">
                <?php
                $AoSCount = 1;
                foreach ($AoSrecord as $AoS){
                if ($AoSCount === 5 || $AoSCount === 9){ ?>
            </div>
            <div class="row AoShome"> <?php }
                $AoSparse = explode(' ', $AoS); ?>
                <div class="col m3 AoScards">
                    <div class="valign-wrapper z-depth-3 card-panel square"
                         style="background-color: <?php print str_replace('Primary', '', $AoSparse[1]); ?>">
                        <div class="valign AoSinitialsHome">
                            <?php if ($AoSparse[0] == 'DMC&AT') { ?>
                                <h4 class="aos-card"><a
                                            href="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/dmcat/weldingtechnology"><?php print $AoSparse[0]; ?></a>
                                </h4>
                            <?php } elseif ($AoSparse[0] == 'HS') { ?>
                                <h4 class="aos-card"><a
                                            href="http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/hs/nursing"><?php print $AoSparse[0]; ?></a>
                                </h4>
                            <?php } else { ?>
                                <h4 class="aos-card"><?php print $AoSparse[0]; ?></h4>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                $AoSCount++;
                } ?>
            </div>
        </div>
        <div class="row" id="AoSlist" style="display:none;">
            <div class="AoSlist">
                <ul class="collection">
                    <?php foreach ($AoSrecord as $AoS) {
                        $AoSparse = explode(' ', $AoS);
                        ?>
                        <li class="collection-item"
                            style="text-align: center; background-color: <?php print str_replace('Primary', '', $AoSparse[1]); ?>">
                            <h4><?php print $AoSparse[0]; ?></h4></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>