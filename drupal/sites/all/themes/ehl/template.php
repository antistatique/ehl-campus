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

function ehl_menu_tree($variables) {
  return '<ul class="nav">' . $variables['tree'] . '</ul>';
}

function ehl_preprocess_block(&$variables) {
  if ($variables['block_html_id'] === 'block-search-form') {
    $variables['classes_array'][] = 'pull-right';
  } else if ($variables['block_html_id'] === 'block-system-user-menu') {
    $variables['classes_array'][] = 'pull-right';
  }
}