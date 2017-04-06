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
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" class="no-js" <?php print $rdf_namespaces; ?>>
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

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<div id="skip-link">
    <a href="#middle-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<?php print $scripts; ?>
</body>
<script>
    jQuery(document).ready(function(){
        var submitIcon = jQuery('.searchbox-icon');
        var inputBox = jQuery('.searchbox-input');
        var searchBox = jQuery('.searchbox');
        var isOpen = false;
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
                document.getElementById('searchAdj').style.zIndex=999;}
            else {
                searchBox.removeClass('searchbox-open');
                document.getElementById('searchAdj').style.zIndex=1;
                inputBox.focusout();
                isOpen = false;}});
        submitIcon.mouseup(function(){
            return false;});
        searchBox.mouseup(function(){
            return false;});
        jQuery(document).mouseup(function(){
            if(isOpen == true){
                jQuery('.searchbox-icon').css('display','block');
                submitIcon.click();}});});
    function buttonUp(){
        var inputVal = jQuery('.searchbox-input').val();
        inputVal = jQuery.trim(inputVal).length;
        if( inputVal !== 0){
            jQuery('.searchbox-icon').css('display','none');
        } else {
            jQuery('.searchbox-input').val('');
            jQuery('.searchbox-icon').css('display','block');}}
    jQuery(document).ready(function(){
        jQuery("#searchIconGrid").click(function(){
            jQuery("#AoSlist").hide();
            jQuery("#AoSgrid").show();
        });
        jQuery("#searchIconList").click(function(){
            jQuery("#AoSgrid").hide();
            jQuery("#AoSlist").show();
        });
    });
    jQuery(window).resize(function(){
        jQuery('#fullHeight1').height(jQuery('#fullHeight1').width());
        jQuery('#fullHeight2').height(jQuery('#fullHeight2').width());
        jQuery('#fullHeight3').height(jQuery('#fullHeight3').width());
        jQuery('#fullHeight4').height(jQuery('#fullHeight4').width());
        jQuery('#fullHeight5').height(jQuery('#fullHeight5').width());
        jQuery('#halfHeight1').height(jQuery('#halfHeight1').width()/2);
        jQuery('#halfHeight2').height(jQuery('#halfHeight2').width()/2);
    }).resize();
</script>
</html>
