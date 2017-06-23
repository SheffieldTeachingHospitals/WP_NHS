<?php
/////////////////
//
// Feature with feed
// 
// Title, Featured Image, Featured Item, Category Feed
// 
/////////////////
;?>
<section class="featured">
  <div class="container">
    <div class="row">
      <?php if( get_sub_field( 'ff_section_title' ) ): ?>
      <div class="col-md-12">
        <h2 class="subtle"><?php the_sub_field( 'ff_section_title' );?></h2>
      </div>
      <?php endif;?>
      
      <?php $featured_link_id = get_sub_field('ff_featured_link', false, false); ?>
      
      <div class="col-md-8">
        <?php if( $featured_link_id ): ?>
          <a href="<?php echo get_the_permalink($featured_link_id); ?>">
        <?php endif; ?>
          <?php echo wp_get_attachment_image( get_sub_field( 'ff_featured_image' ), 'full', "", array( "class" => "img-full" ) ) ;?>
        <?php if( $featured_link_id ): ?>
          </a>
        <?php endif; ?>
        <?php if( $featured_link_id ): ?>
        <div class="block">
          <a href="<?php echo get_the_permalink( $featured_link_id ); ?>"><?php echo get_the_title( $featured_link_id ); ?></a>
        </div>
        <?php endif; ?>
      </div>
      
      <div class="col-md-4">
        <?php if( get_sub_field( 'ff_feed_category' ) ): ?>
          <h3 class="subtle">Recent</h3>
          <?php $feed_cat = get_sub_field( 'ff_feed_category' );
                $feed_count = get_sub_field( 'ff_feed_number' );
                $featured_cat_feed = new WP_Query( array( 'cat' => $feed_cat,
                                                          'posts_per_page' => $feed_count,
                                                          'orderby'    => 'date',
                                                          'order'      => 'DESC',
                                                        ) );
                if ( $the_query->have_posts() ) : ?>

          <ol class="list-group list-feed-news">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="list-group-item">
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>
          </ol>
          <?php wp_reset_postdata(); ?>

          <?php else : ?>
          <!-- no output -->
          <?php endif; ?>
        <?php endif; ?>
      </div>
      
    </div>
  </div>
</section>