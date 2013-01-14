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

      <div class="span9 news-content">
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
          <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <div class="content">
          <?php print render($content['body']);?>
        </div>
        <?php print render($content['links']); ?>
      </div>

      <div class="span3 sidebar">
        <?php if(node_access('update', $node)): ?>
          <p><a class="btn" href="<?php print url('node/' . $node->nid . '/edit', array('query' => array('destination'=> $node_url))); ?>">Edit my project</a></p>
        <?php endif; ?>
        <?php print render($content['field_project_summary']); ?>
        <table class="table table-striped">
          <tbody>
            <?php if(module_exists('comment')): ?>
              <tr class="comments-count comments"><td>Comments</td><td><span class="badge badge-info"><?php print $comment_count; ?></span></td></tr>
            <?php endif; ?>
            <tr><td>Last project update</td><td><span class="badge badge-info"><?php print $date = date("d M", $revision_timestamp); ?></span></td></tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
  <div class="span12 news-comments-wrapper">
    <?php print render($content['comments']); ?>
  </div>


</article>

