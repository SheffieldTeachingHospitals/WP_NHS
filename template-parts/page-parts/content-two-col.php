<?php
/////////////////
//
// Two column block
// 
// left and right title and WYSIWYG
// 
// twocol_
// 
/////////////////
$is_published = get_sub_field( 'twocol_published' );
if( $is_published ): ?>
<section class="page-part page-part-two-col-block">
  <div class="row">
    <div class="col-md-6">
      <?php if( get_sub_field( 'twocol_left_title' ) ): ?>
        <h3><?php the_sub_field( 'twocol_left_title' );?></h3>
      <?php endif; ?>
      <?php if( get_sub_field( 'twocol_left' ) ): ?>
        <?php the_sub_field( 'twocol_left' );?>
      <?php endif; ?>
    </div>
    <div class="col-md-6">
      <?php if( get_sub_field( 'twocol_right_title' ) ): ?>
        <h3><?php the_sub_field( 'twocol_right_title' );?></h3>
      <?php endif; ?>
      <?php if( get_sub_field( 'twocol_right' ) ): ?>
        <?php the_sub_field( 'twocol_right' );?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>