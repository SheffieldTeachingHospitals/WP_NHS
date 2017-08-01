<?php
/////////////////
//
// Banner image
// 
// Section title, image
// 
// Prefix: bi
// 
/////////////////
$is_published = get_sub_field( 'bi_published' );
if( $is_published ): ?>

<section class="banner-image">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if( get_sub_field( 'bi_section_title' ) ): ?>
          <h2 class="subtle"><?php the_sub_field('bi_section_title'); ?></h2>
        <?php endif; ?>
        <?php echo wp_get_attachment_image( get_sub_field( 'bi_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>