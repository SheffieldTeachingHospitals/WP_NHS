<?php
/////////////////
//
// Full width content
// 
// Section title, body
// 
// Prefix: fwc
// 
/////////////////
$is_published = get_sub_field( 'fwc_published' );
if( $is_published ): ?>

<section class="full-width-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if( get_sub_field( 'fwc_section_title' ) ): ?>
          <h2 class="subtle"><?php the_sub_field('fwc_section_title'); ?></h2>
        <?php endif; ?>
        <?php the_sub_field( 'fwc_body' );?>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>