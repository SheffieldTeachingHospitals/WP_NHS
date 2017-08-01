<?php
/////////////////
//
// Featured Image
// 
// Image, link
// 
// Namespace: fi_
// 
/////////////////
$is_published = get_sub_field( 'fi_published' );
if( $is_published ): ?>
<?php $fi_link_id = get_sub_field('fi_link', false, false); ?>
<section class="page-part">
  <?php if( $fi_link_id ): ?>
  <a href="<?php echo get_the_permalink($fi_link_id); ?>">
  <?php endif; ?>
    
    <?php echo wp_get_attachment_image( get_sub_field( 'fi_image' ), 'full', "", array( "class" => "img-full img-spacer" ) ) ;?>
    
  <?php if( $fi_link_id ): ?>
  </a>
  <?php endif; ?>
</section>
<?php endif; ?>