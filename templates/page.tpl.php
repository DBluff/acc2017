<?php
/**
 * @file
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div id="page">
    <nav class="blue" id="nav" role="navigation">
        <div class="nav-wrapper">
            <?php if ($logo): ?>
                <a class="brand-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons mdi-navigation-menu">perm_identity</i></a>
            <?php if (!empty($primary_nav)): ?>
                <div class="right hide-on-med-and-down">
                    <?php print render($primary_nav); ?>
                </div>
            <?php endif; ?>
            <div class="searchContainer">
                <form class="searchbox">
                    <input type="search" placeholder="  Search ACC" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                    <input type="submit" class="searchbox-submit" value="GO">
                    <span class="searchbox-icon"><i class="large material-icons">search</i></span>
                </form>
            </div>
        </div>
    </nav>
    <nav class="lightbluegrey" id="nav" role="navigation">
        <div class="nav-wrapper">
            <?php if (!empty($secondary_nav)): ?>
            <div id="second_line_nav">
                <div class="hide-on-med-and-down">
                    <?php print render($secondary_nav); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </nav>
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>

    <ul id="slide-out" class="side-nav">
        <div class="blue slideoutHead">
            <div class="lightblue arbCircle">
            </div>
            <div class="slidoutTitle">
                General Information
            </div>
        </div><?php
        $menu = menu_navigation_links('menu-general-information');
        print theme('links__menu-general-information', array('links' => $menu));?>
    </ul>
    <div class="roundTab">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">input</i></a>
    </div>


    <?php if (!empty($page['header'])): ?>
    <div class="top">
        <?php print render($page['header']); ?>
    </div>
    <?php endif; ?><!-- /.header  -->

    <div class="row page grid">

        <section class=" main container" role="main">
            <?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted"><?php print render($page['highlight']); ?></div>
            <?php endif; ?>

            <?php print render($secondary_navigation); ?>

            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs['#primary'])): ?>
                <?php print render($tabs_primary); ?>
            <?php endif; ?>

            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <div class="action-links"><i class="mdi-action-note-add small"></i><?php print render($action_links); ?></div>
            <?php endif; ?>
            <?php print render($tabs_secondary); ?>
            <?php print render($page['content']); ?>
        </section>

    </div> <!-- /main  -->

    <div class="divider"></div>
    <div class="socialBar">
        <div class="row">
            <div class="col s12 m6 WereSocial">
                WE'RE SOCIAL!
            </div>
            <div class="col s12 m6 SocialButtons">
                <div class="col s1 socCircle">
                </div>
                <div class="col s1 socCircle">
                </div>
                <div class="col s1 socCircle">
                </div>
                <div class="col s1 socCircle">
                </div>
                <div class="col s1 socCircle">
                </div>
                <div class="col s1 socCircle">
                </div>
                <div class="col s1 socCircle">
                </div>
            </div>
        </div>
    </div>
    <div class="callToAction">
        <div class="row">
            <div class="col s12 m6 CTAbuttonLeft">
                <a class="waves-effect waves-light orange btn-large">Request Info<i class="material-icons right">info</i></a>
            </div>
            <div class="col s12 m6 CTAbuttonRight">
                <a class="waves-effect waves-light orange btn-large">Apply<i class="material-icons right">mode_edit</i></a>
            </div>
        </div>
    </div>
    <footer class="lightblue page-footer">
        <?php print render($page['footer']); ?>
        <div class="row">
            <div class="col s12 m4 footLeft"><?php
                print '<div class="footTitle">' . 'Safety' . '</div>';
                $menu = menu_navigation_links('menu-safety');
                print theme('links__menu-safety', array('links' => $menu));?>
            </div>
            <div class="col s12 m4 footCent"><?php
                print '<div class="footTitle">' . 'General' . ' ' . 'Information' . '</div>';
                $menu = menu_navigation_links('menu-general-information');
                print theme('links__menu-general-information', array('links' => $menu));?>
            </div>
            <div class="col s12 m4 footRight">
                <div class="footTitle">
                    Contact ACC
                </div>
                &nbsp; <br />
                <div class="footLoca">
                    5930 Middle Fiskville Rd. <br />
                    Austin, Texas 78752-4390 <br />
                    512.223.4ACC(4222)
                </div>
            </div>
        </div>

        <hr>
        <?php if (!empty($primary_nav)): ?>
            <nav class="lightblue bottomNav" id="nav" role="navigation">
                <div class="right hide-on-med-and-down">
                    <?php print render($primary_nav); ?>
                </div>
            </nav>
        <?php endif; ?>
    </footer>

</div> <!-- /#page -->
