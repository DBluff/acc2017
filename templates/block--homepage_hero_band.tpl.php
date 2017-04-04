<?php
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <div class="col s12">
            <img class="responsive-img" src="<?php print $content ?>">
        </div>
    </div>
    <div class="row Title">
        <div class="col m7 s12 offset-m1 title lightpurple">
            <?php print render($title_prefix); ?>
            <?php if ($block->subject): ?>
                <h1<?php print $title_attributes; ?>><?php print $block->subject ?></h1>
            <?php endif;?>
            <?php print render($title_suffix); ?>
        </div>
    </div>
</div>