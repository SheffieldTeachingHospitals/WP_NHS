<?php
/////////////////
//
// Video card/block with heading, text and buttons
// 
// Title, Image, Title, Text body and buttons
// 
// Prefix: pc
// 
/////////////////
$is_published = get_sub_field( 'vc_published' );
if( $is_published ): ?>

<section class="featured-video-card">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <article class="block block-with-video block-with-headroom">
          <div class="row">
            <?php if( get_sub_field( 'vc_image_alignment' ) == 'Left' ):
            
              get_template_part( 'template-parts/marketing-parts/sub-parts/video', 'card-video' ) ;  
              get_template_part( 'template-parts/marketing-parts/sub-parts/video', 'card-body' ) ;
              
            else: 
            
              get_template_part( 'template-parts/marketing-parts/sub-parts/video', 'card-body' ) ;
              get_template_part( 'template-parts/marketing-parts/sub-parts/video', 'card-video' ) ;
            
            endif;?>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>