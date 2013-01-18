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

<?php if(!empty($banner_text)): ?>
<div class="jumbotron masthead">
  <div class="container">
    <a title="home" href='/'><div class="logo"></div></a>
    <h1>Campus Development Forum</h1>
    <p><?php print $banner_text; ?></p>
  </div>
</div>
<?php endif; ?>

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
            <div class="span6">
              <h1>Campus Development Forum</h1>
              <h2>International students workshop</h2>
              <p>
                Campus dev forum is the place for you to collect, share and discuss your ideas and concepts with other participants from all over the world. You can even get feedback from them. We invite you to post your thoughts and inspiration about the workshop and complete your project page with your concept.
              </p>
              <p>
                Our goal is to build a campus made by students for students of <a href="http://ehl.edu/eng/About-us">Ecole hôtelière de Lausanne</a>. If you have any questions. Email us at <a href="mailto:contact@campusdevforum.net">contact@campusdevforum.net</a>. We are here to help.
              </p>
            </div>
            <div class="span5 offset1">
                <?php print render($page['footer']); ?>
            </div>
        </div>
    </div>
</div>

