<?php if ( empty($title) ): ?>
    <?php $title = $view->get_title(); ?>
  <?php endif; ?>
  <?php if ($title): ?>
<h4 class="views-title"><a href="<?php echo $nid; ?>"><?php print t($title)?></a></h4>
  <?php endif; ?>