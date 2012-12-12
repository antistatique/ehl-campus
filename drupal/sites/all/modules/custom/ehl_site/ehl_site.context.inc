<?php
/**
 * @file
 * ehl_site.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function ehl_site_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'global';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'sitewide' => array(
      'values' => array(
        1 => 1,
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main-menu' => array(
          'module' => 'system',
          'delta' => 'main-menu',
          'region' => 'nav_bar',
          'weight' => '-10',
        ),
        'search-form' => array(
          'module' => 'search',
          'delta' => 'form',
          'region' => 'nav_bar',
          'weight' => '-9',
        ),
        'system-user-menu' => array(
          'module' => 'system',
          'delta' => 'user-menu',
          'region' => 'nav_bar',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['global'] = $context;

  return $export;
}
