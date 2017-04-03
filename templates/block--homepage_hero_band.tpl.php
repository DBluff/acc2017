<?php
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <div class="col s12">
            <img class="responsive-img" src="<?php print $content ?>">
        </div>
    </div>
    <div class="row Title">
        <div class="col m9 s12 title lightpurple">
            <?php print render($title_prefix); ?>
            <?php if ($block->subject): ?>
                <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
            <?php endif;?>
            <?php print render($title_suffix); ?>
        </div>
        <div class="col m3 s12">
            <div class="CTAbuttons">
                <div class="topButton">
                    <a class="waves-effect waves-light btn orange">APPLY NOW</a>
                </div>
                <div class="bottomButton">
                    <a class="waves-effect waves-light btn orange">REQUEST INFO</a>
                </div>
            </div>
        </div>
    </div>
</div>