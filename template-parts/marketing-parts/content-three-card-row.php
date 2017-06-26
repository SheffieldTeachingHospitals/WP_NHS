<?php
/////////////////
//
// Three card row
// 
// Title, Featured Image, URL, WYSIWYG x3 repeater
// 
// Prefix: tcr
// 
/////////////////
$is_published = get_sub_field( 'tcr_published' );
if( $is_published ): ?>

<section class="three-card-row">
  <div class="container">
    <div class="row">
      <?php if( get_sub_field( 'tcr_section_title' ) ): ?>
      <div class="col-md-12">
        <h2 class="subtle"><?php the_sub_field( 'tcr_section_title' );?></h2>
      </div>
      <?php endif;?>
      
      <?php if( have_rows( 'tcr_card_row' ) ): ?>
      <div class="row">
        <?php while( have_rows( 'tcr_card_row' ) ) : the_row(); ?>
        
        
        
        <?php $tcr_block_one_url_id = get_sub_field( 'tcr_block_one_link' ); ?>      
        <div class="col-md-4">
          <?php if( get_sub_field( 'tcr_block_one_image' ) ): ?>
            <?php if( $tcr_block_one_url_id ): ?>
              <a href="<?php echo $tcr_block_one_url_id['url']; ?>" target="<?php echo $tcr_block_one_url_id['target']; ?>" title="<?php echo $tcr_block_one_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'tcr_block_one_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $tcr_block_one_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block">
            <h3>
              <?php if( $tcr_block_one_url_id ): ?>
                <a href="<?php echo $tcr_block_one_url_id['url']; ?>" target="<?php echo $tcr_block_one_url_id['target']; ?>" title="<?php echo $tcr_block_one_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'tcr_block_one_title' );?>
              <?php if( $tcr_block_one_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'tcr_block_one_text' ): ?>
              <?php the_sub_field( 'tcr_block_one_text' );?>
            <?php endif; ?>
          </div>
        </div>     
        
        <?php $tcr_block_two_url_id = get_sub_field( 'tcr_block_two_link' ); ?>   
        <div class="col-md-4">
          <?php if( get_sub_field( 'tcr_block_two_image' ) ): ?>
            <?php if( $tcr_block_two_url_id ): ?>
              <a href="<?php echo $tcr_block_two_url_id['url']; ?>" target="<?php echo $tcr_block_two_url_id['target']; ?>" title="<?php echo $tcr_block_two_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'tcr_block_two_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $tcr_block_two_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block">
            <h3>
              <?php if( $tcr_block_two_url_id ): ?>
                <a href="<?php echo $tcr_block_two_url_id['url']; ?>" target="<?php echo $tcr_block_two_url_id['target']; ?>" title="<?php echo $tcr_block_two_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'tcr_block_two_title' );?>
              <?php if( $tcr_block_two_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'tcr_block_two_text' ): ?>
              <?php the_sub_field( 'tcr_block_two_text' );?>
            <?php endif; ?>
          </div>
        </div>
        
        <?php $tcr_block_three_url_id = get_sub_field( 'tcr_block_three_link' ); ?>   
        <div class="col-md-4">
          <?php if( get_sub_field( 'tcr_block_three_image' ) ): ?>
            <?php if( $tcr_block_three_url_id ): ?>
              <a href="<?php echo $tcr_block_three_url_id['url']; ?>" target="<?php echo $tcr_block_three_url_id['target']; ?>" title="<?php echo $tcr_block_three_url_id['title']; ?>">
            <?php endif; ?>
              <?php echo wp_get_attachment_image( get_sub_field( 'tcr_block_three_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
            <?php if( $tcr_block_three_url_id ): ?>
              </a>
            <?php endif; ?>
          <?php endif;?>
          
          <div class="block">
            <h3>
              <?php if( $tcr_block_three_url_id ): ?>
                <a href="<?php echo $tcr_block_three_url_id['url']; ?>" target="<?php echo $tcr_block_three_url_id['target']; ?>" title="<?php echo $tcr_block_three_url_id['title']; ?>">
              <?php endif; ?>
                  <?php the_sub_field( 'tcr_block_three_title' );?>
              <?php if( $tcr_block_three_url_id ): ?>
                </a>
              <?php endif; ?>
            </h3>
            <?php if( get_sub_field( 'tcr_block_three_text' ): ?>
              <?php the_sub_field( 'tcr_block_three_text' );?>
            <?php endif; ?>
          </div>
        </div>
      

        <?php endwhile; ?>
      </div>
      <?php endif; ?>
      
    </div>
  </div>
</section>

<?php endif; ?>