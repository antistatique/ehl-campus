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

<div class="container">
  <div class="page row">
    <div role="main" id="main-content">
      <?php if($page['highlighted'] OR $messages){ ?>
          <div class="drupal-messages">
            <?php print render($page['highlighted']); ?>
            <?php print $messages; ?>
          </div>
        <?php } ?>
      <div id="login-wrapper">
        <?php print render($page['content']); ?>
      </div>
    </div><!--/main-->
  </div><!--/page-->
</div>

