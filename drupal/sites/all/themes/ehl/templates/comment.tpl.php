<?php
if ($classes) {
  $classes = ' class="'. $classes . ' row-fluid comment"';
}
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- comment.tpl.php -->
<?php } ?>
<div<?php print $classes; ?><?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>


  <div class="row-fluid comment">
    <div class="span1 offset3" style="text-align: right;">
    <?php if ($new): ?>
      <mark><?php print $new; ?></mark>
    <?php endif; ?>
    
    <?php print $picture; ?>
    
  </div>



  <div class="content span8"<?php print $content_attributes; ?>>
    <h4>
      <?php print $author; ?>, <span class="date"><time><?php print $created; ?></time></span>
    </h4>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>

  </div>


  <?php // print render($content['links']) ?>
</div>
</div>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- comment.tpl.php -->
<?php } ?>

