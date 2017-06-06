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
            <?php
              the_archive_description( '<p class="lead taxonomy-description">', '</p>' );
            ?>
          </header>
      </div>
      
      <div class="col-md-12">
         <?php sth_breadcrumbs(); ?>
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