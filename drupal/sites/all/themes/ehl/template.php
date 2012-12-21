<?php


// ----- Preprocess ------

/**
 * hook_preprocess_page
 */
function ehl_preprocess_page(&$vars,$hook) {
  $args = arg();

  // FRONT
  if(drupal_is_front_page()){
    $vars['banner_text'] = 'International students workshop';
  }

  // NEWS
  if($args[0] == 'news'){
    $vars['banner_text'] = 'News';
  }

  // USER PAGE
  if($args[0] === 'user' && is_numeric($args[1])) {
    // load the user of the current user page (not the current user)
    $page_user = user_load($args[1]);
    // User name
    if(!empty($page_user->name)){
      $vars['user_name'] = $page_user->name;
    }
    // FIELD  user cover image
    if(!empty($page_user->field_cover_image)) {
      // hide the field
      hide($vars['page']['content']['system_main']['field_cover_image']);
      // Load the cover image url in the page
      $field_cover_image = field_view_field('user', $page_user, 'field_cover_image','default');
      $vars['field_cover_image_url'] = image_style_url('banner', $field_cover_image['#items'][0]['uri']);
    }
    // FIELD School
    if(!empty($page_user->field_school)){
      hide($vars['page']['content']['system_main']['field_school']);
      $vars['field_school'] = field_view_field('user', $page_user, 'field_school', 'default');
    } 
    // USER Picture
    if(!empty($page_user->picture)){
      hide($vars['page']['content']['system_main']['user_picture']);

      // This is not a field, so we have to create the structure by hand.
      $vars['user_picture'] = theme('image_style',
          array(
            'style_name' => 'avatar',
            'path' =>$page_user->picture->uri,
            'alt' => $page_user->name,
            'attributes' => array(
              'class' => 'avatar user-cover-image',
            ),           
          )
        );
    }
  }
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
