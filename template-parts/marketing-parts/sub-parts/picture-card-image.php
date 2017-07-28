<?php
/////////////////
//
// Picture card/block with heading, text and buttons
// 
// Image, Link
// 
// Prefix: pc
// 
/////////////////
$pc_button = get_sub_field('pc_button', false, false);
?>
<div class="col-md-7">
  <?php if( $pc_button ): ?>
    <a href="<?php echo $pc_button['url']; ?>" target="<?php echo $pc_button['target']; ?>" title="<?php echo $pc_button['title']; ?>">
  <?php endif; ?>
   <?php echo wp_get_attachment_image( get_sub_field( 'pc_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
  <?php if( $pc_button ): ?>
    </a>
  <?php endif; ?>
</div>