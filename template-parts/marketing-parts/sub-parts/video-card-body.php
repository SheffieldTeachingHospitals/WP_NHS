<?php
/////////////////
//
// Video card/block with heading, text and buttons
// 
// 
// 
// Prefix: vc
// 
/////////////////
$vc_button = get_sub_field('vc_button', false, false);
$vc_button_two = get_sub_field('vc_button_second', false, false);
?>
<div class="col-md-4">
  <div class="block-with-video-inner">
    <header>
      
      <?php if( get_sub_field('vc_title_h1') ): ?>
          <h1><?php the_sub_field('vc_title'); ?></h1>
        <?php else: ?>
          <h2><?php the_sub_field('vc_title'); ?></h2>
        <?php endif; ?>

    </header>
    <?php the_sub_field( 'vc_body' );?>
    
    <p>
      <?php if( $vc_button ): ?>
      <a class="btn btn-success" role="button" href="<?php echo $vc_button['url']; ?>" target="<?php echo $vc_button['target']; ?>" title="<?php echo $vc_button['title']; ?>"><?php echo $vc_button['title']; ?></a>
      <?php endif; ?>
      
      <?php if( $vc_button_two ): ?>
      <a class="btn btn-link" role="button" href="<?php echo $vc_button_two['url']; ?>" target="<?php echo $vc_button_two['target']; ?>" title="<?php echo $vc_button_two['title']; ?>"><?php echo $vc_button_two['title']; ?></a>
      <?php endif; ?>
    </p>
    
  </div>
</div>