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

<div class="jumbotron masthead">
  <div class="container">
    <div class="logo"></div>
    <h1>Campus Development Forum</h1>
    <p>International students workshop</p>
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

    <?php print render($page['content_pre']); ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <div class="marketing" id="main-title-wrapper">
        <h1><?php print $title; ?></h1>
        <p class="marketing-byline">Lorem ipsum.</p>
        <hr>
      </div>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <div class="row-fluid">
        <nav class="tabs"><?php print render($tabs); ?></nav>
      </div>
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

<div class="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="logo"></div>
            </div>
            <div class="span6">
              <h1>Campus Development Forum</h1>
              <h2>International students workshop</h2>
              <p>A project organized by the <a href="http://ehl.edu/eng/About-us" title="About us / Home - Ecole hôtelière de Lausanne">Ecole hôtelière de Lausanne</a> to collaborate with worldwide students on building the new campus.</p>
            </div>
            <div class="span3">
                <?php print render($page['footer']); ?>
            </div>
        </div>
    </div>
</div>

