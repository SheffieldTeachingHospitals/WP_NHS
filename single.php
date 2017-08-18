<?php
/**
 * The template for displaying all single posts.
 *
 * @package sth
 */

get_header(); ?>

	<div id="primary" class="container">
    
    <div class="row">
      <main id="main" class="col-md-7 col-sm-8" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
        
          <header>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>
          <?php get_template_part( 'template-parts/content', 'nav' ); ?>

        <?php endwhile; // End of the loop. ?>

        </main><!-- #main .container -->
      
      <aside class="col-md-4 col-md-offset-1 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
	</div><!-- #primary-->

<?php get_template_part( 'template-parts/content', 'marketing' ); ?> 
<?php get_footer(); ?>