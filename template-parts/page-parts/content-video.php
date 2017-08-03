<?php
/////////////////
//
// Video Block
// 
// Video
// 
// vid_
// 
/////////////////
$is_published = get_sub_field( 'vid_published' );
if( $is_published ): ?>
<section class="page-part">
  <div class="embed-responsive embed-responsive-16by9">
    <?php the_sub_field('vid_video'); ?>
  </div>
</section>
<?php endif; ?>