<?php
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <div class="col s12">
            <img class="responsive-img" src="<?php print $content ?>">
        </div>
    </div>
    <div class="row heroInfo">
        <?php
        $node = menu_get_object();
        $AoStid = $node->field_aost[LANGUAGE_NONE][0]["tid"];
        $AoSsub = $node->field_subtitle[LANGUAGE_NONE][0]["value"];
        $qResult = db_query('SELECT name FROM taxonomy_term_data WHERE tid=:AoStid', array(':AoStid' => $AoStid));
        $AoSrecord = $qResult->fetchCol();
        $AoSpieces = explode(' ', $AoSrecord[0]);
        ?>
        <div class="col s12 AoSicon">
            <div class="valign-wrapper iconCircle" style="background-color:<?php print str_replace('Primary', '', $AoSpieces[1]);?>;">
                <div class="valign AoSinitials" style="text-shadow: 4px 4px 0px <?php print str_replace('Shadow', '', $AoSpieces[2]);?>;"><?php print $AoSpieces[0]; ?></div>
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
            foreach ($urlParts as $urlPart){
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
            <?php if ($block->subject): ?>
                <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
            <?php endif;?>
            <?php print render($title_suffix); ?>
        </div>
        <div class="col s12 AoSsub white-text">
            <h5><?php print $AoSsub; ?></h5>
        </div>
    </div>
</div>