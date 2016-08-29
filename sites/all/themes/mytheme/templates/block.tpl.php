<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>> <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
  <h3 class="block-headline"><?php print $block->subject ?></h3>
  <span class="block-heading"></span>
  <div class="clearfix"></div>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <div<?php print $content_attributes; ?>> <?php print $content ?> </div>
</div>
