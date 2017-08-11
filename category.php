<?php
/**
 * The template for displaying category pages.
 *
 * 
 * @package sth
 */
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <header>
            <h1 class="page-title"><?php single_cat_title();?></h1>
          </header>
      </div>
      
      <div class="col-md-12">
         <?php sth_breadcrumbs(); ?>
      </div>
      
      <div class="col-md-12">
        <?php the_archive_description( '<p class="lead taxonomy-description">', '</p>' );?>
        
        <?php /*
        *  Loop through post objects to get featured posts
        *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
        *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
        */
        // get the category ID then combine it with a string so that it can be injected into the get_field stuff... taxonomies need this!
        $category = get_category( get_query_var( 'cat' ) );
        $cat_id = 'category_' . $category->cat_ID;

        $is_published = get_field( 'cat_published', $cat_id );
        $post_objects = get_field( 'cat_cards', $cat_id );
        if( $is_published ): ?>
          <?php if( $post_objects ): ?>
              <div class="row">
              <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                  <article class="col-md-4">
              
                    <?php if ( has_post_thumbnail($post->ID) ):?>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php echo get_the_post_thumbnail( $post->ID, 'marketing-cropped', array( 'class' => 'img-full' ) );?>
                      </a>
                    <?php else: ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                      <img class="img-full" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="<?php the_title(); ?>">
                    </a>
                    <?php endif; ?>
                    <div class="block">
                      <a class="single-line-heading" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                      
                  </article>
              <?php endforeach; ?>
              </div>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

	<div id="primary" class="container">
    
    <div class="row">
      <main id="main" class="col-md-7 col-sm-8" role="main">
      <?php if ( have_posts() ) : ?>        
      
			  <?php /* Start the Loop */ ?>
			  <?php while ( have_posts() ) : the_post(); ?>

				<?php
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'category' );
				?>

			<?php endwhile; ?>

          <?php the_posts_navigation(array(
                'prev_text' => __( '&larr; Older posts', 'textdomain' ),
                'next_text' => __( 'Newer posts &rarr;', 'textdomain' ),
                )); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

        </main><!-- #main .container -->
      
      <aside class="col-md-4 col-md-offset-1 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
	</div><!-- #primary-->

<?php get_footer(); ?>