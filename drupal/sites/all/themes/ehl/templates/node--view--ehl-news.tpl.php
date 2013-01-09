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

<!-- node--view--ehl-news.tpl.php -->
<article <?php print $id_node . $classes .  $attributes; ?> role="article">
  <div class="span12">
    <div class="row">

      <div class="span2 sidebar">
        <?php print $user_picture; ?>
        <span class="author"><?php print t('Written by'); ?> <?php print $name; ?></span><br />
        <span class="date"><?php print t('On the'); ?> <time><?php print $date; ?></time></span><br />

        <?php if(module_exists('comment')): ?>
          <span class="comments"><?php print $comment_count; ?> Comments</span>
        <?php endif; ?>
      </div>

      <div class="span9 offset1 news-content">
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
          <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <div class="content">
          <?php print render($content);?>
        </div>
        <?php print render($content['links']); ?>
        <?php print render($content['comments']); ?>
      </div>

    </div>
  </div>

</article>
