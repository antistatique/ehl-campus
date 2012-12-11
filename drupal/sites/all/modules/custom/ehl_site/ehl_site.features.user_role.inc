<?php
/**
 * @file
 * ehl_site.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function ehl_site_user_default_roles() {
  $roles = array();

  // Exported role: administrator.
  $roles['administrator'] = array(
    'name' => 'administrator',
    'weight' => '2',
  );

  // Exported role: moderator.
  $roles['moderator'] = array(
    'name' => 'moderator',
    'weight' => '5',
  );

  // Exported role: professor.
  $roles['professor'] = array(
    'name' => 'professor',
    'weight' => '4',
  );

  // Exported role: student.
  $roles['student'] = array(
    'name' => 'student',
    'weight' => '3',
  );

  return $roles;
}
