<?php
/**
 * 
 * Template Name: Full Width Page
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 */
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <header>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header>
      </div>
      
      <div class="col-md-12">
         <?php sth_breadcrumbs(); ?>
      </div>
    </div>
  </div>

<div id="primary" class="container">
     
    <div class="row">
      <main id="main" class="col-md-12" role="main">

			<?php while ( have_posts() ) : the_post(); ?> 

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
        <?php get_template_part( 'template-parts/content', 'parts' ); ?> 

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
	  </div><!-- #primary -->
</div>

<?php get_template_part( 'template-parts/content', 'marketing' ); ?> 

<?php get_footer(); ?>