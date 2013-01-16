<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page--toboggan.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<div class="jumbotron masthead">
  <div class="container">
    <a title="home" href='/'><div class="logo"></div></a>
    <h1>Campus Development Forum</h1>
    <p>Personnal access page</p>
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
      <?php if($page['highlighted'] OR $messages){ ?>
          <div class="drupal-messages">
            <?php print render($page['highlighted']); ?>
            <?php print $messages; ?>
          </div>
        <?php } ?>
      <div class="row-fluid">
        <?php print render($page['content']); ?>
      </div>
    </div><!--/main-->
  </div><!--/page-->
</div>

<div class="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
              <h1>Campus Development Forum</h1>
              <h2>International students workshop</h2>
              <p>A project organized by the <a href="http://ehl.edu/eng/About-us" title="About us / Home - Ecole hôtelière de Lausanne">Ecole hôtelière de Lausanne</a> to collaborate with worldwide students on building the new campus.</p>
            </div>
            <div class="span4">
                <?php print render($page['footer']); ?>
            </div>
        </div>
    </div>
</div>

