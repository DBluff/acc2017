<?php

/**
 * @file
 * Materialize theme implementation to display the basic html structure.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"
      class="no-js" <?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>

<div id="skip-link">
    <a href="#middle-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<?php print $scripts; ?>
<?php
$alertRows = db_query('SELECT entity_id, field_alert_active__value FROM field_data_field_alert_active_ WHERE field_alert_active__value=1 ORDER BY entity_id DESC');
$alerts = $alertRows->fetchCol();
if ($alerts) {
    foreach ($alerts as $alert) {
        $alertDisplay = entity_load_single('node', $alert);
        if ($alertDisplay->field_alert_type[LANGUAGE_NONE][0]['tid'] === '11') {
            $alertColor = 'bluegrey lighten-3';
            $alertBar = '#607D8B';
        }
        if ($alertDisplay->field_alert_type[LANGUAGE_NONE][0]['tid'] === '12') {
            $alertColor = 'green lighten-3';
            $alertBar = '#17A589';
        }
        if ($alertDisplay->field_alert_type[LANGUAGE_NONE][0]['tid'] === '13') {
            $alertColor = 'blue lighten-3';
            $alertBar = '#2E86C1';
        }
        if ($alertDisplay->field_alert_type[LANGUAGE_NONE][0]['tid'] === '14') {
            $alertColor = 'orange lighten-3';
            $alertBar = '#FFD420';
        }
        if ($alertDisplay->field_alert_type[LANGUAGE_NONE][0]['tid'] === '15') {
            $alertColor = 'red lighten-3';
            $alertBar = '#FF5252';
        }
        if ($alertDisplay->field_alert_type[LANGUAGE_NONE][0]['tid'] === '16') {
            $alertColor = 'purple lighten-3';
            $alertBar = '#7D3C98';
        }
    }
}
//Youtube Video ID Query
$vidID = db_query("SELECT field_video_id_value FROM field_data_field_video_id where bundle='youtube_video'");
$videoID = $vidID->fetchCol();
?>
</body>
<script>
    jQuery(document).ready(function () {
        jQuery('.button-collapse').sideNav({
                menuWidth: 300,
                edge: 'right',
                closeOnClick: true,
                draggable: false
            }
        );
        jQuery('.modal').modal();
        jQuery('.carousel.carousel-slider').carousel({fullWidth: true, indicators: false, noWrap: false});
        jQuery('input.autocomplete').autocomplete({
            data: {
                "Welding Technology": 'http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/sites/all/themes/acc2017/img/AoSicons/DMC&AT.png',
                "Nursing": 'http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/sites/all/themes/acc2017/img/AoSicons/HS.png'
            },
            limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
            onAutocomplete: function (val) {
                if (val == "Nursing") {
                    window.location.href = "http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/hs/nursing";
                } else {
                    window.location.href = "http://ec2-52-34-230-137.us-west-2.compute.amazonaws.com/areasofstudy/dmcat/weldingtechnology";
                }
            },
            minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });
        <?php
        if ($alerts) { ?>
        var $toastContent = jQuery('<div class="row alertToast <?php print $alertColor; ?>" style="border-left:solid 30px <?php print $alertBar; ?>"><div class="alertTitle"><p class="flow-text"><?php print $alertDisplay->title; ?></p></div><div class="alertBody"><p><?php print $alertDisplay->field_alert_message[LANGUAGE_NONE][0]['value']; ?></p></div></div></div>');
        Materialize.toast($toastContent, 999999);
        <?php } ?>
    });
    window.onload = function () {
        var options = [
            {
                selector: '#scrollFire1', offset: 50, callback: function (el) {
                jQuery('.counter').each(function () {
                    var $this = jQuery(this),
                        countTo = $this.attr('data-count');
                    jQuery({countNum: $this.text()}).animate({
                        countNum: countTo
                    }, {
                        duration: 3000,
                        easing: 'linear',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        }
                    });
                });
            }
            }
        ];
        jQuery('.row.aud_menu a').each(function () {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        })
        jQuery('.primaryMenu a').each(function () {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        })
        jQuery('.footMenu a').each(function () {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        })
        jQuery('.sideNav a').each(function () {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        })
        Materialize.scrollFire(options);
    }
    jQuery(window).resize(function () {
        if (jQuery(window).width() > 600) {
            jQuery('#fullHeight1').height(jQuery('#fullHeight1').width());
            jQuery('#fullHeight2').height(jQuery('#fullHeight2').width());
            jQuery('#fullHeight3').height(jQuery('#fullHeight3').width());
            jQuery('#fullHeight4').height(jQuery('#fullHeight4').width());
            jQuery('#fullHeight5').height(jQuery('#fullHeight5').width());
            jQuery('#halfHeight1').height(jQuery('#halfHeight1').width() / 2);
            jQuery('#halfHeight2').height(jQuery('#halfHeight2').width() / 2);
        }
        var elementHeights = jQuery('.card').map(function() {
            return jQuery(this).height();
        }).get();
        var minHeight = Math.max.apply(null, elementHeights);
        var height = minHeight + 'px';
        var targetDiv = jQuery('.carousel','#spotCar');
        jQuery(targetDiv).css('height', height);
    }).resize();
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: 'auto',
            width: '100%',
            videoId: '<?php print $videoID[0] ?>',
            events: {
                'onStateChange': onPlayerStateChange
            },
            playerVars: {
                autoplay: 0
            }
        });
    }
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 5);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
    document.getElementById('leftArrow').addEventListener('click', function() {
        jQuery('.carousel').carousel('prev');
    }, false);
    document.getElementById('rightArrow').addEventListener('click', function() {
        jQuery('.carousel').carousel('next');
    }, false);
</script>
</html>