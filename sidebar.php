<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package sth
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area sidebar" role="complementary">
  
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
  
</div><!-- #secondary -->