<?php
/////////////////
//
// Jumbotron
// 
// Heading, body, button 1&2, background-image (URL)
// 
// Prefix: j
// 
/////////////////
$is_published = get_sub_field( 'j_published' );
if( $is_published ): ?>

<?php if( get_sub_field('j_background_image') ): ?>
<style>
  .jumbotron {
    
    background-image: url("<?php the_sub_field('j_background_image'); ?>");
    <?php if( get_sub_field('j_text_white') ): ?>
    color: white;
    <?php endif; ?>
  }
</style>
<?php endif; ?>

<section class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron"> 
        <?php if( get_sub_field('j_heading_h1') ): ?>
          <h1><?php the_sub_field('j_heading'); ?></h1>
        <?php else: ?>
          <h2><?php the_sub_field('j_heading'); ?></h2>
        <?php endif; ?>
        
        <?php if( get_sub_field('j_body') ): ?>
          <?php the_sub_field('j_body'); ?>
        <?php endif; ?>

        <?php $j_button = get_sub_field('j_button_one', false, false);
              $j_button_two = get_sub_field('j_button_two', false, false);?>
        <p>
          <?php if( $j_button ): ?>
          <a class="btn btn-lg btn-<?php if( get_sub_field( 'j_button_one_style' ) ):?><?php the_sub_field( 'j_button_one_style' );?><?php endif; ?>" role="button" href="<?php echo $j_button['url']; ?>" target="<?php echo $j_button['target']; ?>" title="<?php echo $j_button['title']; ?>"><?php echo $j_button['title']; ?></a>
          <?php endif; ?>

          <?php if( $j_button_two ): ?>
          <a class="btn btn-lg btn-<?php if( get_sub_field( 'j_button_two_style' ) ):?><?php the_sub_field( 'j_button_two_style' );?><?php endif; ?>" role="button" href="<?php echo $j_button_two['url']; ?>" target="<?php echo $j_button_two['target']; ?>" title="<?php echo $j_button_two['title']; ?>"><?php echo $j_button_two['title']; ?></a>
          <?php endif; ?>
        </p>
      </div>
     </div>
    </div>
</section>

<?php endif; ?>