<?php
/**
 * @file
 * ehl_import_user.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function ehl_import_user_user_default_permissions() {
  $permissions = array();

  // Exported permission: import users.
  $permissions['import users'] = array(
    'name' => 'import users',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'uif',
  );

  return $permissions;
}
