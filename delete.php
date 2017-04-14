<!--home aos-->
<div class="row row-band homeAoS grey lighten-3 noSideMargin">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4 class="band-title-alt">Areas of Study & Programs</h4>
                    <div class="dividerDiagGrey"></div>
                </div>
            </div>
            <!--  <div class="row">
                  <div class="col s12"><p class="flow-text">Explore the possibilities of an ACC education with <strong>100+ programs</strong> in 10 areas of study and more, geared for transfer and career training.</p>
                      <div class="col s11 AoSearch">
                          <input type="text" id="autocomplete-input" placeholder="Search Areas of Study and Programs" name="search" class="autocomplete" onkeyup="buttonUp();" required>
                      </div>
                          <div class="col s1 AoSearch">
                              <a class="waves-effect waves-light btn-large">
                                  <i class="material-icons large">search</i>
                              </a>
                          </div>
                  </div>-->
            <form class="col s12">
                <div class="row">
                    <div class="col s12 m6">
                        <p class="flow-text">Explore the possibilities of an ACC education with 100+ programs in 10
                            areas of study and more, geared for transfer and career training.</p>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" id="autocomplete-input" placeholder="Search Areas of Study and Programs"
                               name="search" class="autocomplete" onkeyup="buttonUp();" required><span>  <a
                                    class="waves-effect waves-light btn-large">
                                    <i class="material-icons large">search</i>
                                </a></span>
                        <label for="first_name">Find your program.</label>
                    </div>
                </div>
        </div>
        <div class="row">
            <!--  <a id="searchIconGrid" class="waves-effect waves-light btn-large lightgreen"><i
                            class="material-icons">apps</i></a>
                <a id="searchIconList" class="waves-effect waves-light btn-large"><i class="material-icons">list</i></a>
            </div>-->
            <?php $qResult = db_query('SELECT name FROM taxonomy_term_data WHERE vid=2');
            $AoSrecord = $qResult->fetchCol();
            ?>
            <div class="container">
                <div class="row noSideMargin" id="AoSgrid">
                    <div class="row AoShome noSideMargin">
                        <div class="col m6 AoScards">
                            <div class="valign-wrapper z-depth-3 card-panel rectangle"
                                 style="background-color: #37474F">
                                <div class="valign AoSinitialsHome">
                                    <h4 class="aos-card"><a href="/academics/">All Academic Choices</a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                        $AoSCount = 1;
                        $strain = '/(?<=full\:)(.*)(?=\-\-)/U';
                        foreach ($AoSrecord as $AoS){
                        preg_match($strain, $AoS, $AoSHead, PREG_OFFSET_CAPTURE, 0);
                        $imgIdent = str_pad(mt_rand(1, 15), 3, 0, STR_PAD_LEFT);
                        if ($AoSCount === 3 || $AoSCount === 7){ ?>
                    </div>
                    <div class="row AoShome"> <?php }
                        $AoSparse = explode(' ', $AoS); ?>
                        <div class="col m3 AoScards">
                            <div class="valign-wrapper z-depth-3 card-panel square"
                                 style="background-image:url('/sites/default/files/sq-student-<?php print $imgIdent ?>.jpg');">
                                <div class="valign AoSinitialsHome">
                                    <h5 class="aos-card white-text"><?php print $AoSHead[0][0]; ?></h5>
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
    </div>
</div>