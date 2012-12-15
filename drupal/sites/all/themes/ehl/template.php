<?php


// ----- Preprocess ------

/**
 * hook_preprocess_page
 */
function ehl_preprocess_page(&$vars,$hook) {
  
}

/**
 * hook_preprocess_block
 */
function ehl_preprocess_block(&$variables) {
  if ($variables['block_html_id'] === 'block-search-form') {
    $variables['classes_array'][] = 'pull-right';
  } else if ($variables['block_html_id'] === 'block-system-user-menu') {
    $variables['classes_array'][] = 'pull-right';
  } else if ($variables['block_html_id'] === 'block-ehl-site-ehl-site-user-menu') {
    $variables['classes_array'][] = 'pull-right';
  }
}


// ------ Theme ------

/**
 * theme_breadcrumb
 */
function ehl_breadcrumb($variables) {
  $variables['breadcrumb'][] = drupal_get_title();
  return theme_breadcrumb($variables);
}

/**
 * theme_menu_tree
 */

function ehl_menu_tree($variables) {
  return '<ul class="nav">' . $variables['tree'] . '</ul>';
}



// -------- Alter -----

/**
 * hook_form_FORM_ID_alter
 */

function ehl_form_search_block_form_alter(&$form, &$form_state, $form_id) {
	$form['#attributes']['class'] = 'navbar-search';
    $form['search_block_form']['#attributes']['class'][] = 'search-query';
}
