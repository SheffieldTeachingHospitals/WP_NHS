<?php
/**
 * Template part for displaying single posts.
 *
 * @package sth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <div class="entry-meta">
			<?php sth_posted_on(); ?>
		</div><!-- .entry-meta -->
    
		<?php sth_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

