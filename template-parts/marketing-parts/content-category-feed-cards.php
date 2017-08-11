<?php
/////////////////
//
// Category Feed Cards
// 
// Section title, Category
// 
// Prefix: cfc
// 
/////////////////
$is_published = get_sub_field( 'cfc_published' );
if( $is_published ): ?>
<section class="category-feed">
  <div class="container">
    <div class="row">
      
      <?php if( get_sub_field( 'cfc_section_title' ) ): ?>
      <div class="col-md-12">
        <h2 class="subtle"><?php the_sub_field( 'cfc_section_title' );?></h2>
      </div>
      <?php endif;?>
      
      
      <?php if( get_sub_field( 'cfc_category' ) ): ?>
      
        <?php $cfc_feed_cat = get_sub_field( 'cfc_category' );
              $cfc_feed_no = get_sub_field( 'cfc_number' );
              $cfc_count = 0;
              $cfc_cat_feed = new WP_Query( array( 'cat' => $cfc_feed_cat,
                                                        'posts_per_page' => $cfc_feed_no,
                                                        'orderby'    => 'date',
                                                        'order'      => 'DESC',
                                                        ) );
      if ( $cfc_cat_feed->have_posts() ) : ?>
      
      <?php while ( $cfc_cat_feed->have_posts() ) : $cfc_cat_feed->the_post(); ?>
      
      <div class="col-md-4" id="cat-card-<?php echo $cfc_count ;?>">
          <?php if ( has_post_thumbnail() ) :?>
                <a href="<?php the_permalink() ;?>">
                  <?php the_post_thumbnail('marketing-5-3-cropped', array('class' => 'img-responsive img-full')); ?>
                </a>
              <?php else :?>
                <a href="<?php the_permalink() ;?>">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="News">
                </a>
              <?php endif ;?>
          <div class="block">
              <?php the_title( sprintf( '<h3 class="category-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
              <?php the_excerpt(); ?>
          </div>
      </div>
      <?php $cfc_count++ ;?>
      <?php if ($cfc_count == 3) echo "<div class='col-md-12'></div>" ;?>
      
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif;?>
      <?php endif;?>
      
    </div>
  </div>
</section>
<?php endif; ?>