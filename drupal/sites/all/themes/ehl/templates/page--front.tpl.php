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
    <img class="imgMap" src="<?php echo $image_path = $path . '/img/carte_opacity40.png'; ?>" alt="Global white map" />
    <div id="usa-marker" class="marker usa" data-school="usa" data-coords="280, 492">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=6">USA</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="spain-marker" class="marker spain" data-school="spain" data-coords="618, 412">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=3">Spain</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="southkorea-marker" class="marker southkorea" data-school="southkorea" data-coords="1135, 435">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=4">South Korea</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="slovenia-marker" class="marker slovenia" data-school="slovenia" data-coords="688, 388">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=11">Slovenia</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="portugal-marker" class="marker portugal" data-school="portugal" data-coords="595, 418">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=7">Portugal</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="india-marker" class="marker india" data-school="india" data-coords="918, 493">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=9">India</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="switzerland-marker" class="marker switzerland" data-school="switzerland" data-coords="666, 387">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=10">Switzerland</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="chile-marker" class="marker chile" data-school="chile" data-coords="360, 785">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=12">Chile</a>.
      </p>
      <div class="triangle"></div>
    </div>
    <div id="argentina-marker" class="marker argentina" data-school="argentina" data-coords="378, 795">
      <a href="#" class="marker-tooltip">
        <h4></h4>
      </a>
      <p class="marker-container">
        No recent activities from <a href="/projects?univeristy=5">Argentina</a>.
      </p>
      <div class="triangle"></div>
    </div>
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
    <img class="arrow" src="<?php echo $image_path = $path . '/img/arrow.jpg';?>" />
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
    <div class="row">
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
              <p>
                Campus dev forum is the place for you to collect, share and discuss your ideas and concepts with other participants from all over the world. You can even get feedback from them. We invite you to post your thoughts and inspiration about the workshop and complete your project page with your concept.
              </p>
              <p>
                Our goal is to build a campus made by students for students of <a href="http://ehl.edu/eng/About-us">Ecole hôtelière de Lausanne</a>. If you have any questions. Email us at <a href="contact@campusdevforum.net">contact@campusdevforum.net</a>. We are here to help.
              </p>
            </div>
            <div class="span4">
                <?php print render($page['footer']); ?>
            </div>
        </div>
    </div>
</div>

