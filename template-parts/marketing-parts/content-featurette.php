<?php
/////////////////
//
// Featurette
// 
// Section title, colour, featurette -title -body -image -link
// 
// Prefix: feat
// 
/////////////////
$is_published = get_sub_field( 'feat_published' );
if( $is_published ): ?>

<section class="page-featurette-section <?php the_sub_field( 'feat_background_colour' );?>-section">
  <div class="container">
    
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h2><?php the_sub_field( 'feat_section_title' );?></h2>
        <hr>
      </div>
    </div>
    
    <?php if( have_rows('feat_inner') ): ?>
      <?php while( have_rows('feat_inner') ): the_row();?>
    
        <?php $is_inner_published = get_sub_field( 'feat_inner_published' );
        if( $is_inner_published ): ?>
    
        <div class="row">
          <div class="col-md-12">
            <div class="page-featurette-section-inner">

              <div class="row">
                <div class="col-md-12">
                  <h3><?php the_sub_field( 'feat_title' );?></h3>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <?php // Image
                  $feat_button = get_sub_field('feat_button', false, false);?>

                    <?php if( $feat_button ): ?>
                      <a href="<?php echo $feat_button['url']; ?>" target="<?php echo $feat_button['target']; ?>" title="<?php echo $feat_button['title']; ?>">
                    <?php endif; ?>
                     <?php echo wp_get_attachment_image( get_sub_field( 'feat_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
                    <?php if( $feat_button ): ?>
                      </a>
                    <?php endif; ?>

                </div>

                <div class="col-md-8">
                  <?php the_sub_field( 'feat_body' );?>
                </div>

              </div>
              
              <?php if( $feat_button ): ?>
              <div class="row">
                <div class="col-md-8 col-md-offset-4">
                  <a class="btn btn-lg btn-success" href="<?php echo $feat_button['url']; ?>" target="<?php echo $feat_button['target']; ?>" title="<?php echo $feat_button['title']; ?>"><?php echo $feat_button['title']; ?></a>
                </div>
              </div>
              <?php endif; ?>

            </div>
          </div>
          
        </div>
        <?php endif;?>
    
      <?php endwhile ;?>
    <?php endif;?>
    
  </div>
</section>

<?php endif; ?>