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

  $export['version'] = '2.0';

  $export['views-school_list-block'] = array(
    'cache' => -1,
    'custom' => '0',
    'delta' => 'school_list-block',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => '0',
      ),
      'ehl' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'ehl',
        'weight' => '0',
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => '0',
      ),
    ),
    'title' => '',
    'visibility' => '0',
  );

  return $export;
}
