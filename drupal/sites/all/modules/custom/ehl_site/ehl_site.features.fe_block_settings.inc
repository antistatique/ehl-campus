<?php
/**
 * @file
 * ehl_site.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function ehl_site_default_fe_block_settings() {
  $export = array();

  $export['version'] = '1.0';

  // Theme independent visibility settings.
  $export['visibility'] = array(
    'views-school_list-block' => array(
      'delta' => 'school_list-block',
      'module' => 'views',
    ),
  );

  // bartik
  $theme = array();

  $theme['views-school_list-block'] = array(
    'module' => 'views',
    'delta' => 'school_list-block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
  );

  $export['theme']['bartik'] = $theme;

  // ehl
  $theme = array();

  $theme['views-school_list-block'] = array(
    'module' => 'views',
    'delta' => 'school_list-block',
    'theme' => 'ehl',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
  );

  $export['theme']['ehl'] = $theme;

  // seven
  $theme = array();

  $theme['views-school_list-block'] = array(
    'module' => 'views',
    'delta' => 'school_list-block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
  );

  $export['theme']['seven'] = $theme;

  $theme_default = variable_get('theme_default', 'garland');
  $themes = list_themes();
  foreach ($export as $theme_key => $settings) {
    if ($theme_key != $theme_default && empty($themes[$theme_key]->status)) {
      unset($export['theme'][$theme_key]);
    }
  }
  return $export;
}
