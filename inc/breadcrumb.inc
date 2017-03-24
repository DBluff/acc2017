<?php

/**
 * @file
 * Contains breadcrumb theme and related functions.
 */

/**
 * Implements theme_breadrumb().
 *
 * Prints breadcrumbs.
 */
function acc2017_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $title = drupal_get_title();

    $output .= '<nav class="breadcrumbNav" id="nav" role="navigation"><div class="nav-wrapper container"><div class="breadcrumb">' . implode(' » ', $breadcrumb) . '<div class="currentCrumb">' . ' » ' . $title . '</div>' . '</div></div></nav>';
    return $output;
  }
}
