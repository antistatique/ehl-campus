<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php

$cover_style = '';
if(isset($page_user['field_cover_image_url'])){
  $cover_style .= 'background-image:url(' . $page_user['field_cover_image_url'] . '); ';
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
    <div style="<?php print $cover_style; ?>" id="user-cover">
      <div class="container">
        <div class="row-fluid">
          <div id="user-cover-infos">
            <div style="text-align:left;" id="user-cover-text">
              <img width="180" height="180" id="user-cover-image" alt="Marc" src="assets/img/marc.png">
              <h1>Marc Friederich</h1>
              <p class="marketing-byline">Architect student from <a href="./school.html">HEPIA, Geneva</a> </p>
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

  <div role="main" id="main-content" class="span12">

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <div class="row-fluid">
        <nav class="tabs"><?php print render($tabs); ?></nav>
      </div>
    <?php endif; ?>

    <?php print render($page['content_pre']); ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <h2><?php print $title; ?></h2>
        <br />
    <?php endif; ?>
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
    <div class="row-fluid">
      <?php print render($page['content']); ?>
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

