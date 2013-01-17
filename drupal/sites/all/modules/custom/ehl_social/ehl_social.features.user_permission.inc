<?php
/**
 * @file
 * ehl_social.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function ehl_social_user_default_permissions() {
  $permissions = array();

  // Exported permission: create post content.
  $permissions['create post content'] = array(
    'name' => 'create post content',
    'roles' => array(
      0 => 'authenticated user',
      1 => 'moderator',
      2 => 'professor',
      3 => 'student',
    ),
    'module' => 'node',
  );

  // Exported permission: create project content.
  $permissions['create project content'] = array(
    'name' => 'create project content',
    'roles' => array(
      0 => 'authenticated user',
      1 => 'moderator',
      2 => 'professor',
      3 => 'student',
    ),
    'module' => 'node',
  );

  // Exported permission: create school content.
  $permissions['create school content'] = array(
    'name' => 'create school content',
    'roles' => array(
      0 => 'administrator',
      1 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any post content.
  $permissions['delete any post content'] = array(
    'name' => 'delete any post content',
    'roles' => array(
      0 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any project content.
  $permissions['delete any project content'] = array(
    'name' => 'delete any project content',
    'roles' => array(
      0 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any school content.
  $permissions['delete any school content'] = array(
    'name' => 'delete any school content',
    'roles' => array(
      0 => 'administrator',
      1 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own post content.
  $permissions['delete own post content'] = array(
    'name' => 'delete own post content',
    'roles' => array(
      0 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own project content.
  $permissions['delete own project content'] = array(
    'name' => 'delete own project content',
    'roles' => array(
      0 => 'administrator',
      1 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own school content.
  $permissions['delete own school content'] = array(
    'name' => 'delete own school content',
    'roles' => array(
      0 => 'administrator',
      1 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any post content.
  $permissions['edit any post content'] = array(
    'name' => 'edit any post content',
    'roles' => array(
      0 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any project content.
  $permissions['edit any project content'] = array(
    'name' => 'edit any project content',
    'roles' => array(
      0 => 'administrator',
      1 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any school content.
  $permissions['edit any school content'] = array(
    'name' => 'edit any school content',
    'roles' => array(
      0 => 'administrator',
      1 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own post content.
  $permissions['edit own post content'] = array(
    'name' => 'edit own post content',
    'roles' => array(
      0 => 'moderator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own project content.
  $permissions['edit own project content'] = array(
    'name' => 'edit own project content',
    'roles' => array(
      0 => 'authenticated user',
      1 => 'moderator',
      2 => 'student',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own school content.
  $permissions['edit own school content'] = array(
    'name' => 'edit own school content',
    'roles' => array(),
    'module' => 'node',
  );

  return $permissions;
}
