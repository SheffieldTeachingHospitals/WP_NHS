<?php
/////////////////
//
// Picture card/block with heading, text and buttons
// 
// Title, Image, Title, Text body and buttons
// 
// Prefix: pc
// 
/////////////////
$is_published = get_sub_field( 'pc_published' );
if( $is_published ): ?>

<section class="featured-picture-card">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <article class="block block-with-image block-with-headroom">
          <div class="row">
            <?php if( get_sub_field( 'pc_image_alignment' ) == 'Left' ):
            
              get_template_part( 'template-parts/marketing-parts/sub-parts/picture', 'card-image' ) ;  
              get_template_part( 'template-parts/marketing-parts/sub-parts/picture', 'card-body' ) ;
              
            else: 
            
              get_template_part( 'template-parts/marketing-parts/sub-parts/picture', 'card-body' ) ;
              get_template_part( 'template-parts/marketing-parts/sub-parts/picture', 'card-image' ) ;
            
            endif;?>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>


<?php endif; ?>