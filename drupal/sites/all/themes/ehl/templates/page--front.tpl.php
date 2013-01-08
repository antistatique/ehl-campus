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

<div id="global-map">
  <div class="map">
    <?php $path = drupal_get_path('theme', 'ehl'); ?>
    <div id="usa-marker" class="marker" data-coords="280, 450">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="spain-marker" class="marker" data-coords="613, 420">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="southkorea-marker" class="marker" data-coords="1135, 435">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="slovenia-marker" class="marker" data-coords="685, 385">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="portugal-marker" class="marker" data-coords="595, 415">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="india-marker" class="marker" data-coords="933, 520">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="switzerland-marker" class="marker" data-coords="666, 387">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="chile-marker" class="marker" data-coords="360, 785">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <div id="argentina-marker" class="marker" data-coords="378, 795">
      <a href="#">
        <h4>New Post</h4>
        <div class="map-post-data">
          <strong>Yago Tsumabuki</strong> from Korea just posted an message.
        </div>
      </a>
      <div class="triangle"></div>
    </div>
    <img class="imgMap" src="<?php echo $image_path = $path . '/img/carte_opacity40.png'; ?>" alt="Global white map" />
  </div>
  <div class="controls" id="global-map-controls">
    <a rel="usa-marker" href="#">USA</a>
    <a rel="spain-marker" href="#">Spain</a>
    <a rel="southkorea-marker" href="#">South Korea</a>
    <a rel="slovenia-marker" href="#">Slovenia</a>
    <a rel="portugal-marker" href="#">Portugal</a>
    <a rel="india-marker" href="#">India</a>
    <a rel="switzerland-marker" href="#">Switzerland</a>
    <a rel="chile-marker" href="#">Chile</a>
    <a rel="argentina-marker" href="#">Argentina</a>
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

  <div id="toggle-button">
    
  </div>

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

