<?php


// ----- Preprocess ------

/**
 * hook_preprocess_page
 */
function ehl_preprocess_page(&$vars,$hook) {
  $args = arg();

  // FRONT
  if(drupal_is_front_page()) {
    $vars['banner_text'] = 'International students workshop';
  }

  // NEWS
  if($args[0] == 'news') {
    $vars['banner_text'] = 'News';
  }

  // POST PAGE
  if($args[0] === 'node' && isset($vars['node']) && $vars['node']->type == 'post'){
    $vars['title'] = 'Post';

    $vars['theme_hook_suggestions'][] = 'page__user';
    $page_user = user_load($vars['node']->uid);
  }

  // 

  // USER PAGE
  if($args[0] === 'user' && is_numeric($args[1])) {
    // load the user of the current user page (not the current user)
    $page_user = user_load($args[1]);
  }
  
  if(isset($page_user)) {
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
      // field_school
      hide($vars['page']['content']['system_main']['field_school']);
      $vars['field_school'] = field_view_field('user', $page_user, 'field_school', 'default');
    } 
    // FIELD Slug (from school)
    if(!empty($vars['field_school']['#items'][0])){
      // field_slug
      $school_fields_slug = field_get_items('node',$vars['field_school']['#items'][0]['entity'],'field_slug');
      $vars['field_school_field_slug'] = $school_fields_slug[0]['safe_value'];
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

function ehl_preprocess_user_picture(&$vars){
  if(!isset($vars['account']->field_school_field_slug)){
    $vars['account']->field_school_field_slug = '';
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


/*
 *  Bootstrap form classes
 */


function ehl_form($variables) {
  $element = $variables['element'];

  if (isset($element['#action'])) {
    $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
  }
  element_set_attributes($element, array('method', 'id'));
  if (empty($element['#attributes']['accept-charset'])) {
    $element['#attributes']['accept-charset'] = "UTF-8";
  }
  // Anonymous DIV to satisfy XHTML compliance.
  return '<div class="span10 offset1"><form class="form-horizontal" role="form"' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form></div>';
}

function ehl_form_element($variables) {
    print_r($variables);

  $element = &$variables['element'];

  // This is also used in the installer, pre-database setup.
  $t = get_t();

  // This function is invoked as theme wrapper, but the rendered form element
  // may not necessarily have been processed by form_builder().
  $element += array(
    '#title_display' => 'before',
  );

  $attributes = array();
  //shouuld we add #id to an element...
// if($element['#type'] == "checkbox" OR $element['#type'] == "radio"){

// }else{
    // Add element #id for #type 'item'.
    if (isset($element['#markup']) && !empty($element['#id'])) {
      $attributes['id'] = $element['#id'];
    }
// }


  $attributes['class'] = array('form-item control-group');

  //class form-type-[type]
  if(!theme_get_setting('ehl_classes_form_wrapper_formtype')){
    if (!empty($element['#type'])) {
      // Add element's #type and #name as class to aid with JS/CSS selectors.
      $attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
    }
  }
  //form-item-xxx
  if(!theme_get_setting('ehl_classes_form_wrapper_formname')){
    if (!empty($element['#name'])) {
      $attributes['class'][] = 'form-item-' . strtr($element['#name'], array(' ' => '-', '_' => '-', '[' => '-', ']' => ''));
    }
  }

  // Add a class for disabled elements to facilitate cross-browser styling.
  if (!empty($element['#attributes']['disabled'])) {
    $attributes['class'][] = 'form-disabled';
  }

  //freeform css class killing
  $remove_class_form = explode(", ", theme_get_setting('ehl_classes_form_freeform'));
  $attributes['class'] = array_values(array_diff($attributes['class'],$remove_class_form));

  //test to see if we have any attributes aka classes here
  if($attributes){
    $output = '<div ' . drupal_attributes($attributes) . '>' . "\n";
  }else{
    $output = "\n" . '<div>' . "\n";
  }

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }

  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

  switch ($element['#title_display']) {
    case 'before':
    case 'invisible':
      //if an elements is a checkbox or radio were wrapping the item in a label we can wrap em into an label for cleaner markup
      if(theme_get_setting('ehl_form_labelwrap') AND ($element['#type'] == "checkbox" OR $element['#type'] == "radio")){
        $output .= ' ' . $prefix . '<label>' . $element['#title'] .$element['#children'] . '</label>' . $suffix . "\n";
      }else{
        $output .= ' ' . theme('form_element_label', $variables);
        $output .= '<div class="input controls"> ' . $prefix . $element['#children'] . $suffix . "\n";
      }

      if (!empty($element['#description'])) {
        //we dont really need a class for description so lets add small instead
        if(!theme_get_setting('ehl_classes_form_description')){
          $output .= "\n" . '<div class="help-block">' . $element['#description'] . "</div>\n";
        }else{
          $output .= "\n" . '<small>' . $element['#description'] . "</small>\n";
        }
      }
      $output .= "</div>";



      break;

    case 'after':
      //if an elements is a checkbox or radio were wrapping the item in a label we can wrap em into an label for cleaner markup
      if(theme_get_setting('ehl_form_labelwrap') AND ($element['#type'] == "checkbox" OR $element['#type'] == "radio")){
        $output .= ' ' . $prefix . '<label>' .$element['#children'] . $element['#title'];
        if (!empty($element['#description'])) {
          $output .= "\n" . '<small>' . $element['#description'] . "</small>\n";
        }
        $output .= '</label>' . $suffix . "\n";
      }else{
        $output .= ' ' . $prefix . $element['#children'] . $suffix;
        $output .= ' ' . theme('form_element_label', $variables) . "\n";

        if (!empty($element['#description'])) {
          //we dont really need a class for desctioption so lets add small instead
          if(!theme_get_setting('ehl_classes_form_description')){
            $output .= "\n" . '<div class="description 2">' . $element['#description'] . "</div>\n";
          }else{
            $output .= "\n" . '<small>' . $element['#description'] . "</small>\n";
          }
        }

      }
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }

   $output .= "</div>\n";

  return $output;
}

function ehl_form_element_label($variables) {
  $element = $variables['element'];
  // This is also used in the installer, pre-database setup.
  $t = get_t();

  // If title and required marker are both empty, output no label.
  if ((!isset($element['#title']) || $element['#title'] === '') && empty($element['#required'])) {
    return '';
  }

  // If the element is required, a required marker is appended to the label.
  $required = !empty($element['#required']) ? theme('form_required_marker', array('element' => $element)) : '';

  $title = filter_xss_admin($element['#title']);

  $attributes = array();
  // Style the label as class option to display inline with the element.
  if ($element['#title_display'] == 'after') {
    $attributes['class'] = 'option';
  }
  // Show label only to screen readers to avoid disruption in visual flows.
  elseif ($element['#title_display'] == 'invisible') {
    $attributes['class'] = 'element-invisible';
  }

  if (!empty($element['#id'])) {
    $attributes['for'] = $element['#id'];
  }

  // The leading whitespace helps visually separate fields from inline labels.
  return ' <label class="control-label"' . drupal_attributes($attributes) . '>' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "</label>\n";
}




/**
 * theme_menu_local_tasks
 */

function ehl_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary nav nav-tabs">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary nav nav-tabs">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}




// -------- Alter -----

/**
 * hook_form_FORM_ID_alter
 */

function ehl_form_search_block_form_alter(&$form, &$form_state, $form_id) {
	$form['#attributes']['class'] = 'navbar-search';
    $form['search_block_form']['#attributes']['class'][] = 'search-query';
}
