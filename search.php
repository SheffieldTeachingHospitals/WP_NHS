<?php
/**
 * The template for displaying search results pages.
 *
 * @package sth
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <header>
            <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sth' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
          </header>
      </div>
      
      <div class="col-md-12">
         <?php sth_breadcrumbs(); ?>
      </div>
    </div>
  </div>

	<section id="primary" class="container">
    
    <div class="row">
       <main id="main" class="col-md-7 col-sm-8" role="main">

      <?php if ( have_posts() ) : ?>

         <?php get_search_form(); ?>
         
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          
          <?php
          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'template-parts/content', 'search' );
          ?>
         
        <?php endwhile; ?>

         <?php the_posts_navigation(array(
                'prev_text' => __( 'Further results', 'textdomain' ),
                'next_text' => __( 'Previous results', 'textdomain' ),
                )); ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>
     

      </main><!-- #main-->
      <aside class="col-md-4 col-md-offset-1 col-sm-4" role="complimentry">
        <?php get_sidebar(); ?>
      </aside>
    </div> <!-- #primary .row -->
	</section><!-- #primary .container -->

<?php get_footer(); ?>
