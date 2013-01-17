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
hide($content['field_badge']);
?>

<!-- node.tpl.php -->

<article data-school="<?php print $school_slug; ?>" data-school-nid="<?php print $school_nid; ?>" <?php print $id_node . $classes .  $attributes; ?> role="article">
      <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
  <div class="row" style="text-align:left;">
    <?php print $mothership_poorthemers_helper; ?>

    <div class="span3">
      <?php print $user_picture; ?>
      <center>
        <small>
          <span class="author"><?php print t('by'); ?> <?php print $name; ?></span><br />
          <span class="date"><time><?php print $date; ?></time></span>
        </small>
      </center>
    </div>

    <div class="span9 content">
      <?php print render($content);?>
    </div>
  </div>
  
  <a name="<?php print $node->nid . '-comments'; ?>"></a>

  <div class="pull-right comment-options"><i class="icon-comment"></i> <?php print l($node->comment_count, 'node/' . $node->nid, array('fragment' => $node->nid . '-comments')); ?> | <?php print l('Write a comment', 'node/' . $node->nid . '/reply', array('fragment' => 'comment-form')); ?> | <?php print l('See all comments', 'node/' . $node->nid, array('fragment' => $node->nid . '-comments')); ?></div>

  <?php print render($content['comments']); ?>

</article>
<hr class="soften" />
