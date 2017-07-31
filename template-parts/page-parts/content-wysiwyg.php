<?php
/////////////////
//
// WYSIWYG Block
// 
// Title, Body
// 
/////////////////
$is_published = get_sub_field( 'wb_published' );
if( $is_published ): ?>
<section class="writing-block page-part">
  <div class="row">

    <?php if( get_sub_field( 'wb_title' ) ): ?>
    <div class="col-md-12">
      <h2 class="subtle"><?php the_sub_field( 'wb_title' );?></h2>
    </div>
    <?php endif;?>

    <?php if( get_sub_field( 'wb_body' ) ): ?>
    <div class="col-md-12">
      <?php the_sub_field( 'wb_body' );?>
    </div>
    <?php endif;?>

  </div>
</section>
<?php endif; ?>