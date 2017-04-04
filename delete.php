<!--begin block-->

<div class="divider"></div>
<div class="row row-band"><!--add background color for band color-->
    <div class="container">
        <div class="section">
            <div class="col m6 s12 blue white-text">
                <h5 class="band-title">INSERT TITLE</h5>
                <?php
                $stuff = entity_load('field_collection_item', $ids = FALSE, $reset = FALSE)
                var_dump($stuff);
                ?>
            </div>
        </div>
        <div class="section">

            <!--content goes here-->
        </div>
    </div>
</div>
<div class="divider"></div>

<!--end block-->


