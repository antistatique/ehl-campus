<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php

$cover_style = '';
if(isset($field_cover_image_url)){
  $cover_style .= 'background-image:url(' . $field_cover_image_url . '); ';
}

?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
        <?php print render($page['nav_bar']); ?>
    </div>
  </div>
</div>

<div class="marketing">
    <div style="<?php print $cover_style; ?>" class="user-cover <?php print $field_school_field_slug; ?>">
      <div class="container">
        <div class="row-fluid">
          <div class="user-cover-infos span6 offset3">
            <div class="user-cover-text <?php print $field_school_field_slug; ?>">
              <div class="avatar-frame"><div class="user-picture">
                <?php print render($user_picture);?>
              </div></div>
              <h1><?php print render($user_name); ?></h1>
              <p class="marketing-byline">Student from <?php print render($field_school); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php if($page['header']): ?>
  <div class="header-wrapper">
    <div class="container">
      <header role="banner" class="row">
          <div class="header-region">
            <?php print render($page['header']); ?>
          </div>
      </header>
    </div>
  </div>
<?php endif; ?>

<div class="container">
  <div class="page row">

  <div role="main" id="main-content" class="span8">

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <div class="row-fluid">
        <nav class="tabs"><?php print render($tabs); ?></nav>
      </div>
    <?php endif; ?>

    <?php print render($page['content_pre']); ?>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
    <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
    </div>
    <?php } ?>
    <div class="row-fluid user-data">
      <h2>About me</h2>
      <?php print render($field_about_me); ?>
      <table class="table table-striped table-user">
        <tbody>
          <tr><td>Age</td><td><span class="badge badge-info"><?php print render($field_birthdate); ?></span></td></tr>
          <tr><td>University</td><td><span class="badge badge-info"><?php print render($field_school); ?></span></td></tr>
          <tr><td>Location</td><td><span class="badge badge-info"><?php print render($field_school); ?></span></td></tr>
          <tr><td>Other profiles</td><td><span class="badge badge-info"><?php print render($field_social_link); ?></span></td></tr>
        </tbody>
      </table>
    </div>

    <?php print render($page['content_post']); ?>

  </div><!--/main-->


  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
  </div><!--/page-->
</div>

