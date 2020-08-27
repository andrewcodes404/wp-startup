<div class="b-text-editor-wrapper b-layout" id="<?php echo "b-text-editor-" . $block['id'] ?>">
  <div class="b-text-editor">
    <?php if( get_field('content') ): ?>
    <small class="b-text-editor__content"> <?php the_field('content') ?></small>
    <?php endif; ?>
  </div>
</div>