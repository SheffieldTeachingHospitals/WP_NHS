<?php
/////////////////
//
// Four card row
// 
// Title, Featured Image, URL, WYSIWYG, block style/type x4 repeater
// 
// Prefix: fcr
// 
/////////////////
$is_published = get_sub_field( 'fcr_published' );
if( $is_published ): ?>

<section class="three-card-row">
  <div class="container">
    <div class="row">
      <?php if( get_sub_field( 'fcr_section_title' ) ): ?>
      <div class="col-md-12">
        <h2 class="subtle"><?php the_sub_field( 'fcr_section_title' );?></h2>
      </div>
      <?php endif;?>
      
      <?php if( have_rows( 'fcr_card_row' ) ): ?>
     <div class="col-md-12">
        <?php while( have_rows( 'fcr_card_row' ) ) : the_row(); ?>
       <div class="row">  
        
        
        <?php $fcr_block_one_url_id = get_sub_field( 'fcr_block_one_link' ); ?>      
        <div class="col-md-3">
          <?php if( get_sub_field( 'fcr_block_one_image' ) ): ?>
            <?php if( $fcr_block_one_url_id ): ?>
              <a href="<?php echo $fcr_block_one_url_id['url']; ?>" target="<?php echo $fcr_block_one_url_id['target']; ?>" title="<?php echo $fcr_block_one_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'fcr_block_one_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $fcr_block_one_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block block-<?php if( get_sub_field( 'fcr_block_one_block_type' ) ):?><?php the_sub_field( 'fcr_block_one_block_type' );?><?php endif; ?>">
            <h3>
              <?php if( $fcr_block_one_url_id ): ?>
                <a href="<?php echo $fcr_block_one_url_id['url']; ?>" target="<?php echo $fcr_block_one_url_id['target']; ?>" title="<?php echo $fcr_block_one_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'fcr_block_one_title' );?>
              <?php if( $fcr_block_one_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'fcr_block_one_text' ) ): ?>
              <?php the_sub_field( 'fcr_block_one_text' );?>
            <?php endif; ?>
          </div>
        </div>     
        
        <?php $fcr_block_two_url_id = get_sub_field( 'fcr_block_two_link' ); ?>   
        <div class="col-md-3">
          <?php if( get_sub_field( 'fcr_block_two_image' ) ): ?>
            <?php if( $fcr_block_two_url_id ): ?>
              <a href="<?php echo $fcr_block_two_url_id['url']; ?>" target="<?php echo $fcr_block_two_url_id['target']; ?>" title="<?php echo $fcr_block_two_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'fcr_block_two_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $fcr_block_two_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block block-<?php if( get_sub_field( 'fcr_block_two_block_type' ) ):?><?php the_sub_field( 'fcr_block_two_block_type' );?><?php endif; ?>">
            <h3>
              <?php if( $fcr_block_two_url_id ): ?>
                <a href="<?php echo $fcr_block_two_url_id['url']; ?>" target="<?php echo $fcr_block_two_url_id['target']; ?>" title="<?php echo $fcr_block_two_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'fcr_block_two_title' );?>
              <?php if( $fcr_block_two_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'fcr_block_two_text' ) ): ?>
              <?php the_sub_field( 'fcr_block_two_text' );?>
            <?php endif; ?>
          </div>
        </div>
        
        <?php $fcr_block_three_url_id = get_sub_field( 'fcr_block_three_link' ); ?>   
        <div class="col-md-3">
          <?php if( get_sub_field( 'fcr_block_three_image' ) ): ?>
            <?php if( $fcr_block_three_url_id ): ?>
              <a href="<?php echo $fcr_block_three_url_id['url']; ?>" target="<?php echo $fcr_block_three_url_id['target']; ?>" title="<?php echo $fcr_block_three_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'fcr_block_three_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $fcr_block_three_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block block-<?php if( get_sub_field( 'fcr_block_three_block_type' ) ):?><?php the_sub_field( 'fcr_block_three_block_type' );?><?php endif; ?>">
            <h3>
              <?php if( $fcr_block_three_url_id ): ?>
                <a href="<?php echo $fcr_block_three_url_id['url']; ?>" target="<?php echo $fcr_block_three_url_id['target']; ?>" title="<?php echo $fcr_block_three_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'fcr_block_three_title' );?>
              <?php if( $fcr_block_three_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'fcr_block_three_text' ) ): ?>
              <?php the_sub_field( 'fcr_block_three_text' );?>
            <?php endif; ?>
          </div>
        </div>

         
        <?php $fcr_block_four_url_id = get_sub_field( 'fcr_block_four_link' ); ?>   
        <div class="col-md-3">
          <?php if( get_sub_field( 'fcr_block_four_image' ) ): ?>
            <?php if( $fcr_block_four_url_id ): ?>
              <a href="<?php echo $fcr_block_four_url_id['url']; ?>" target="<?php echo $fcr_block_four_url_id['target']; ?>" title="<?php echo $fcr_four_three_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'fcr_block_four_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $fcr_block_four_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block block-<?php if( get_sub_field( 'fcr_block_four_block_type' ) ):?><?php the_sub_field( 'fcr_block_four_block_type' );?><?php endif; ?>">
            <h3>
              <?php if( $fcr_block_four_url_id ): ?>
                <a href="<?php echo $fcr_block_four_url_id['url']; ?>" target="<?php echo $fcr_block_four_url_id['target']; ?>" title="<?php echo $fcr_block_four_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'fcr_block_four_title' );?>
              <?php if( $fcr_block_four_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'fcr_block_four_text' ) ): ?>
              <?php the_sub_field( 'fcr_block_four_text' );?>
            <?php endif; ?>
          </div>
        </div>
         

      </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
      
    </div>
  </div>
</section>

<?php endif; ?>