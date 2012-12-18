<?php
/**
 * @file
 * ehl_site.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function ehl_site_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'admin_theme';
  $strongarm->value = 'seven';
  $export['admin_theme'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_page';
  $strongarm->value = 0;
  $export['comment_page'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'configurable_timezones';
  $strongarm->value = 1;
  $export['configurable_timezones'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'date_default_timezone';
  $strongarm->value = 'Europe/Zurich';
  $export['date_default_timezone'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'date_first_day';
  $strongarm->value = '1';
  $export['date_first_day'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_confirm_email_at_registration';
  $strongarm->value = '0';
  $export['logintoboggan_confirm_email_at_registration'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_immediate_login_on_register';
  $strongarm->value = 1;
  $export['logintoboggan_immediate_login_on_register'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_login_successful_message';
  $strongarm->value = '0';
  $export['logintoboggan_login_successful_message'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_login_with_email';
  $strongarm->value = '1';
  $export['logintoboggan_login_with_email'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_minimum_password_length';
  $strongarm->value = '5';
  $export['logintoboggan_minimum_password_length'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_override_destination_parameter';
  $strongarm->value = 1;
  $export['logintoboggan_override_destination_parameter'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_pre_auth_role';
  $strongarm->value = '2';
  $export['logintoboggan_pre_auth_role'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_purge_unvalidated_user_interval';
  $strongarm->value = '0';
  $export['logintoboggan_purge_unvalidated_user_interval'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_redirect_on_confirm';
  $strongarm->value = '';
  $export['logintoboggan_redirect_on_confirm'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_redirect_on_register';
  $strongarm->value = '';
  $export['logintoboggan_redirect_on_register'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'logintoboggan_unified_login';
  $strongarm->value = 0;
  $export['logintoboggan_unified_login'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_page';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_page'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_page';
  $strongarm->value = FALSE;
  $export['node_submitted_page'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_blog_pattern';
  $strongarm->value = 'blogs/[user:name]';
  $export['pathauto_blog_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_forum_pattern';
  $strongarm->value = '[term:vocabulary]/[term:name]';
  $export['pathauto_forum_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_article_pattern';
  $strongarm->value = 'news/[node:title]';
  $export['pathauto_node_article_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_page_pattern';
  $strongarm->value = '[node:title]';
  $export['pathauto_node_page_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_pattern';
  $strongarm->value = '';
  $export['pathauto_node_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_post_pattern';
  $strongarm->value = 'posts/[node:title]';
  $export['pathauto_node_post_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_project_pattern';
  $strongarm->value = 'user/[node:author:uid]/project/[node:title]';
  $export['pathauto_node_project_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_school_pattern';
  $strongarm->value = 'universities/[node:title]';
  $export['pathauto_node_school_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_punctuation_hyphen';
  $strongarm->value = 1;
  $export['pathauto_punctuation_hyphen'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_taxonomy_term_pattern';
  $strongarm->value = '[term:vocabulary]/[term:name]';
  $export['pathauto_taxonomy_term_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_taxonomy_term_tags_pattern';
  $strongarm->value = '';
  $export['pathauto_taxonomy_term_tags_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'theme_default';
  $strongarm->value = 'ehl';
  $export['theme_default'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'theme_ehl_settings';
  $strongarm->value = array(
    'toggle_logo' => 1,
    'toggle_name' => 1,
    'toggle_slogan' => 1,
    'toggle_node_user_picture' => 1,
    'toggle_comment_user_picture' => 1,
    'toggle_comment_user_verification' => 1,
    'toggle_favicon' => 1,
    'default_logo' => 1,
    'logo_path' => '',
    'logo_upload' => '',
    'default_favicon' => 1,
    'favicon_path' => '',
    'favicon_upload' => '',
    'mothership_poorthemers_helper' => 1,
    'mothership_rebuild_registry' => 0,
    'mothership_test' => 0,
    'mothership_mediaquery_indicator' => 0,
    'mothership_script_place_footer' => 1,
    'mothership_js_onefile' => 0,
    'mothership_js_jquerycdn' => 0,
    'mothership_respondjs' => 1,
    'mothership_modernizr' => 0,
    'mothership_selectivizr' => 0,
    'mothership_js_nuke_module' => 0,
    'mothership_js_nuke_module_contrib' => 0,
    'mothership_js_nuke_misc' => 0,
    'mothership_js_freeform' => '',
    'mothership_css_onefile' => 0,
    'mothership_css_reset' => 0,
    'mothership_css_reset_html5' => 0,
    'mothership_css_normalize' => 0,
    'mothership_css_layout' => 0,
    'mothership_css_default' => 1,
    'mothership_css_mothershipstyles' => 1,
    'mothership_css_nuke_book' => 0,
    'mothership_css_nuke_contextual' => 0,
    'mothership_css_nuke_theme' => 1,
    'mothership_css_nuke_admin' => 0,
    'mothership_css_nuke_module_contrib' => 0,
    'mothership_css_nuke_module_all' => 0,
    'mothership_css_nuke_systemtoolbar' => 0,
    'mothership_css_nuke_system_message' => 0,
    'mothership_css_nuke_system_menus' => 0,
    'mothership_css_nuke_system_theme' => 0,
    'mothership_css_freeform' => '',
    'mothership_classes_body_html' => 1,
    'mothership_classes_body_loggedin' => 1,
    'mothership_classes_body_front' => 0,
    'mothership_classes_body_layout' => 0,
    'mothership_classes_body_toolbar' => 0,
    'mothership_classes_body_pagenode' => 1,
    'mothership_classes_body_nodetype' => 0,
    'mothership_classes_body_path' => 0,
    'mothership_classes_body_path_first' => 0,
    'mothership_classes_body_status' => 0,
    'mothership_classes_body_freeform' => '',
    'mothership_region_wrapper' => 1,
    'mothership_classes_region' => 1,
    'mothership_classes_region_freeform' => '',
    'mothership_classes_block' => 0,
    'mothership_classes_block_id' => 1,
    'mothership_classes_block_id_as_class' => 0,
    'mothership_classes_block_contentdiv' => 1,
    'mothership_classes_block_freeform' => '',
    'mothership_classes_node' => 0,
    'mothership_classes_node_state' => 0,
    'mothership_classes_node_id' => 0,
    'mothership_classes_node_freeform' => '',
    'mothership_classes_node_links_inline' => 1,
    'mothership_classes_node_links_links' => 0,
    'mothership_classes_field_field' => 0,
    'mothership_classes_field_name' => 1,
    'mothership_classes_field_type' => 0,
    'mothership_classes_field_label' => 1,
    'mothership_classes_field_freeform' => '',
    'mothership_classes_form_container_wrapper' => 0,
    'mothership_classes_form_container_type' => 0,
    'mothership_classes_form_container_name' => 0,
    'mothership_classes_form_container_widget' => 0,
    'mothership_classes_form_container_id' => 0,
    'mothership_classes_form_wrapper_formitem' => 1,
    'mothership_classes_form_wrapper_formtype' => 1,
    'mothership_classes_form_wrapper_formname' => 1,
    'mothership_classes_form_freeform' => '',
    'mothership_classes_form_label' => 1,
    'mothership_classes_form_input' => 1,
    'mothership_form_required' => 1,
    'mothership_classes_form_description' => 1,
    'mothership_classes_form_placeholder_label' => 0,
    'mothership_classes_form_placeholder_link' => '',
    'mothership_classes_form_placeholder_email' => '',
    'mothership_classes_menu_items_mlid' => 0,
    'mothership_classes_menu_wrapper' => 1,
    'mothership_classes_menu_items_firstlast' => 1,
    'mothership_classes_menu_items_active' => 0,
    'mothership_classes_menu_collapsed' => 0,
    'mothership_classes_menu_leaf' => 1,
    'mothership_classes_view' => 1,
    'mothership_classes_view_name' => 1,
    'mothership_classes_view_view_id' => 0,
    'mothership_classes_view_row' => 1,
    'mothership_classes_view_row_count' => 1,
    'mothership_classes_view_row_first_last' => 1,
    'mothership_classes_view_row_rename' => 0,
    'mothership_classes_state' => 0,
    'mothership_404' => 0,
    'mothership_frontpage_default_message' => 1,
    'mothership_content_block_wrapper' => 1,
    'mothership_goodies_login' => 0,
    'mothership_mobile' => 0,
    'mothership_viewport' => 1,
    'mothership_viewport_maximumscale' => 0,
  );
  $export['theme_ehl_settings'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'user_pictures';
  $strongarm->value = 1;
  $export['user_pictures'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'user_picture_dimensions';
  $strongarm->value = '1024x1024';
  $export['user_picture_dimensions'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'user_picture_file_size';
  $strongarm->value = '800';
  $export['user_picture_file_size'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'user_picture_style';
  $strongarm->value = 'avatar';
  $export['user_picture_style'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'user_register';
  $strongarm->value = '2';
  $export['user_register'] = $strongarm;

  return $export;
}
