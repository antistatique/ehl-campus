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

/**
 * hook_form_FORM_ID_alter
 */

function ehl_form_search_block_form_alter(&$form, &$form_state, $form_id) {
	$form['#attributes']['class'] = 'navbar-search';
    $form['search_block_form']['#attributes']['class'][] = 'search-query';
} 