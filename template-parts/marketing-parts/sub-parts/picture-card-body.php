<?php
/////////////////
//
// Picture card/block with heading, text and buttons
// 
// Body
// 
// Prefix: pc
// 
/////////////////
$pc_button = get_sub_field('pc_button', false, false);
$pc_button_two = get_sub_field('pc_button_second', false, false);
?>
<div class="col-md-5">
  <div class="block-with-image-inner">
    <header>
      <?php $is_h1 = get_sub_field( 'pc_title_h1' );
            if( $is_h1 ): ?>
            <h1>
          <?php else: ?>
            <h2>
        <?php endif; ?>
          <?php the_sub_field( 'pc_title' );?>
        <?php if( $is_h1 ): ?>
            </h1>
              <?php else: ?>
            </h2>
      <?php endif; ?>
    </header>
    <?php the_sub_field( 'pc_body' );?>
    
    <p>
      <?php if( $pc_button ): ?>
      <a class="btn btn-success" role="button" href="<?php echo $pc_button['url']; ?>" target="<?php echo $pc_button['target']; ?>" title="<?php echo $pc_button['title']; ?>"><?php echo $pc_button['title']; ?></a>
      <?php endif; ?>
      
      <?php if( $pc_button_two ): ?>
      <a class="btn btn-link" role="button" href="<?php echo $pc_button_two['url']; ?>" target="<?php echo $pc_button_two['target']; ?>" title="<?php echo $pc_button_two['title']; ?>"><?php echo $pc_button_two['title']; ?></a>
      <?php endif; ?>
    </p>
    
  </div>
</div>