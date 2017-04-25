<?php
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <div class="col s12">
            <img class="responsive-img" src="<?php print $content ?>">
        </div>
    </div>
    <div class="row Title">
        <div class="col m4 s12 offset-m1 title">
<!--            <div class="col m5 s12 offset-m1 title lightpurple">-->
            <?php print render($title_prefix); ?>
            <?php if ($block->subject): ?>
                <?php $titlePieces = explode(' ', $block->subject);
                foreach ($titlePieces as $piece) { ?>
                    <div class="col m12">
                        <h1<?php print $title_attributes; ?>><?php print $piece ?></h1>
                    </div>
                <?php } ?>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <div class="row nextStep heroNextStep">
                <div class="col s12 left-align nextStepButtons fixedWidth">
                    <a class="waves-effect waves-light btn-large btn-flat">APPLY NOW</a>
                    <a class="waves-effect waves-light btn-large btn-flat right">REQUEST INFO</a>
                </div>
            </div>
<!--          original for mess-ups :)  -->
<!--            <div class="row nextStep heroNextStep">-->
<!--                <div class="col s12 left-align nextStepButtons fixedWidth">-->
<!--                    <a class="waves-effect waves-light btn-large btn-reverse">APPLY NOW</a>-->
<!--                    <a class="waves-effect waves-light btn-large btn-reverse right">REQUEST INFO</a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>