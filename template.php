<?php

// Include drupal theme and helper functions.
require_once dirname(__FILE__) . '/inc/menu.inc';
require_once dirname(__FILE__) . '/inc/form.inc';
require_once dirname(__FILE__) . '/inc/breadcrumb.inc';

function acc2017_preprocess_html(&$variables) {
  drupal_add_css('https://fonts.googleapis.com/icon?family=Material+Icons' , array('type' => 'external'));
}