<?php
//kpr(get_defined_vars());
//http://drupalcontrib.org/api/drupal/drupal--modules--node--node.tpl.php
//node--[CONTENT TYPE].tpl.php

if ($classes) {
  $classes = ' class="'. $classes . ' "';
}

if ($id_node) {
  $id_node = ' id="'. $id_node . '"';
}

hide($content['comments']);
hide($content['links']);
hide($content['field_logo']);
hide($content['field_badge'])
?>

<!-- node.tpl.php -->

<article <?php print $id_node . $classes .  $attributes; ?> role="article">
      <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
  <div class="row-fluid" style="text-align:left;">
    <?php print $mothership_poorthemers_helper; ?>

    <div class="span3">
      <?php print $user_picture; ?>
      <center>
        <small>
          <span class="author"><?php print t('by'); ?> <?php print $name; ?></span>
          <span class="date"><time><?php print $date; ?></time></span>
        </small>
      </center>
    </div>

    <div class="span9 content">
      <?php print render($content);?>
    </div>

    <?php print render($content['links']); ?>
  </div>

  <?php print render($content['comments']); ?>
</article>
<hr />
