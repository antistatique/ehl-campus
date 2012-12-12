<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
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

<div class="header-wrapper">
  <div class="container">
    <header role="banner" class="row">
      <div class="siteinfo span4">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img id="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            <div id="logo-shape"></div>
          </a>
        <?php endif; ?>

      </div>
      <?php if($page['header']): ?>
        <div class="header-region span20">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>

    </header>
  </div>
</div>
<div class="container">
  <div class="page row">

  <div class="sidebar-first sidebar span4">
    <?php print render($page['sidebar_first']); ?>
  </div>

  <div role="main" id="main-content" class="span20">
    <?php print $breadcrumb; ?>
    <?php print render($page['content_pre']); ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <div class="row" id="main-title-wrapper"><div class="span20"><h1><?php print $title; ?></h1></div></div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($action_links): ?>
    <ul class="action-links"><?php print render($action_links); ?></ul>
  <?php endif; ?>

  <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
    <nav class="tabs"><?php print render($tabs); ?></nav>
  <?php endif; ?>

  <?php if($page['highlighted'] OR $messages){ ?>
  <div class="drupal-messages">
    <?php print render($page['highlighted']); ?>
    <?php print $messages; ?>
  </div>
  <?php } ?>

  <?php print render($page['content']); ?>

  <?php print render($page['content_post']); ?>

  </div><!--/main-->


  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
  </div><!--/page-->
</div>

