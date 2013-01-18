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

<!-- node--article.tpl.php -->
<article <?php print $id_node . $classes .  $attributes; ?> role="article">
  <div class="span12 news-wrapper">
    <div class="row">

      <div class="span2 sidebar">
        <?php print $user_picture; ?>
        <span class="author"><?php print t('Written by'); ?> <?php print $name; ?></span><br />
        <span class="date"><?php print t('On the'); ?> <time><?php print $date; ?></time></span><br />
      </div>

      <div class="span9 offset1 news-content">
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
          <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <div class="content">
          <?php print render($content);?>
        </div>
      </div>

    </div>
  </div>
  <div class="span12 news-comments-wrapper">
    <div class="pull-right comment-options"><i class="icon-comment"></i> <?php print l($node->comment_count, 'node/' . $node->nid, array('fragment' => $node->nid . '-comments')); ?> | <?php print l('Write a comment', 'comment/reply/' . $node->nid , array('fragment' => 'comment-form')); ?> | <?php print l('See all comments', 'node/' . $node->nid, array('fragment' => $node->nid . '-comments')); ?></div>
    <?php print render($content['comments']); ?>
    <hr class="soften">
  </div>


</article>
