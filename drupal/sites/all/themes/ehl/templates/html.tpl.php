<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php print $html_attributes; ?> <?php print $rdf_namespaces; ?>> <!--<![endif]-->

<?php print $mothership_poorthemers_helper; ?>
<head>
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $appletouchicon; ?>
<?php if(theme_get_setting('mothership_mobile')){  ?>  
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true"><?php } ?>  
<?php if(theme_get_setting('mothership_viewport')){  ?><meta name="viewport" content="width=device-width, initial-scale=1"><?php } ?>  
<?php if(theme_get_setting('mothership_viewport_maximumscale')){  ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"><?php } ?>  
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php print $styles; ?>
<!--[if lt IE 9]>
  <script src="<?php print $mothership_path; ?>/js/html5.js"></script>
<![endif]-->
<?php print $selectivizr; ?>

</head>
<body class="default <?php print $classes; ?>" <?php print $attributes;?>
<div><div id="texture-wrapper"><div id="color-wrapper"><div id="object-wrapper">
<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
<?php print $page_top; //stuff from modules always render first ?>
<?php print $page; // uses the page.tpl ?>
<?php  print $scripts; ?>
<?php print $page_bottom; //stuff from modules always render last ?>
</div></div></div></div>
</body>
</html>

