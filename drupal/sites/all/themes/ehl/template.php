<?php




/*
  Preprocess
*/




function ehl_preprocess_page(&$vars,$hook) {
  
}

function ehl_breadcrumb($variables) {
  $variables['breadcrumb'][] = drupal_get_title();
  return theme_breadcrumb($variables);
}

