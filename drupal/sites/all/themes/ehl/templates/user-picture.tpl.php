<?php
/**
 * @file
 * Default theme implementation to present a picture configured for the
 * user's account.
 *
 * Available variables:
 * - $user_picture: Image set by the user or the site's default. Will be linked
 *   depending on the viewer's permission to view the user's profile page.
 * - $account: Array of account information. Potentially unsafe. Be sure to
 *   check_plain() before use.
 *
 * @see template_preprocess_user_picture()
 */
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- user picture.tpl.php -->
<?php } ?>
<?php if ($user_picture): ?>
  <div class="avatar-frame">
    <div class="user-picture <?php print $account->field_school_field_slug; ?> colorborder">
      <?php print $user_picture; ?>
    </div>
  </div>
<?php endif; ?>
<!-- /user picture.tpl.php -->