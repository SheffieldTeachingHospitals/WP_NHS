<?php
/////////////////
//
// Slider with text area
// 
// Section title, body
// 
// Prefix: s
// 
/////////////////
$is_published = get_sub_field( 's_published' );
if( $is_published ): ?>

<section class="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

      <?php $images = get_sub_field('s_images');
      if( $images ): ?>
        <div id="carousel" class="carousel slide" data-ride="carousel">
          
          <!-- Indicators -->
        <ol class="carousel-indicators">
          
          <?php $image_count = 0;
          foreach( $images as $image ): ?>
          <li data-target="#carousel" data-slide-to="<?php echo $image_count ;?>" class="<?php if ( $image_count == 0) echo "active" ;?>"></li>
          <?php $image_count++ ;?>
          <?php endforeach; ?>
        </ol>
          
          
            <div class="carousel-inner" role="listbox">
                <?php $image_count = 0; 
                   foreach( $images as $image ): ?>
                    <article class="item item-<?php echo $image_count ;?> <?php if ( $image_count == 0) echo "active" ;?>" id="slider-image-<?php echo $image['id'];?>">
                      <?php echo wp_get_attachment_image( ( $image['id'] ), 'marketing-5-3-cropped', "", array( "class" => "img-full" ) ) ;?>
                       
                      <div class="carousel-caption">
                        <h3><?php echo $image['title']; ?></h3>
                        <p><?php echo $image['caption']; ?></p>
                      </div>
                    </article>
                <?php $image_count++ ;?>
                <?php endforeach; ?>
            </div>
          
          
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
          
        </div>
    <?php endif; ?>
        
        
        
        
      </div>
      
      <div class="col-md-4">
        
        <?php if( get_sub_field('s_heading_h1') ): ?>
          <h1><?php the_sub_field('s_heading'); ?></h1>
        <?php else: ?>
          <h2><?php the_sub_field('s_heading'); ?></h2>
        <?php endif; ?>
        
        <?php the_sub_field( 's_text' );?>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>