<!-- field field-content post.tpl.php -->
<?php foreach ($items as $delta => $item) : ?>
   <blockquote><?php print render($item); ?></blockquote>
<?php endforeach; ?>