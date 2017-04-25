<div class="row row-band homeAoS grey lighten-3 noSideMargin z-depth-4">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col m6">
                    <h4 class="band-title-alt">Areas of Study & Programs</h4>
                </div>
                <div class="col m5 fullHeight">
                    <div class="input-field">
                        <input type="text" id="autocomplete-input"
                               placeholder="Search Areas of Study and Programs"
                               name="search" class="autocomplete" onkeyup="buttonUp();" required>
                    </div>
                </div>
                <div class="col m1 fullHeight">
                    <a class="waves-effect waves-light btn-large blue-grey">
                        <i class="material-icons large">search</i>
                    </a>
                </div>
            </div>
            <div class="dividerDiagGrey"></div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row noSideMargin" id="AoSgrid">
                <div class="row AoShome noSideMargin">
                    <div class="col s12 m6 AoScards">
                        <div class="valign-wrapper rectangle">
                            <div class="valign left-align row">
                                <p class="flow-text">Explore the possibilities of an ACC education with
                                    100+
                                    programs in 10
                                    areas of study and more, geared for transfer and career
                                    training.</p>
                                <p><a href="/academics">Explore All Academics ></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s6 m3 AoScards">
                        <div class="z-depth-2 card-panel square"
                             style="background-image:url('/sites/default/files/<?php print $AoSparse[0] ?>.jpg');">
                        </div>
                        <div class="AoSoverlay valign-wrapper"
                             style="background-color: rgba(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>,0.7)">
                            <div class="valign AoSinitialsHome">
                                <h6 class="aos-card white-text"><?php print $AoSHead[0][0]; ?></h6>
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