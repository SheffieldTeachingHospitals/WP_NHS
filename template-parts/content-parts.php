<?php
// Page parts
// 

// check if the flexible content field has rows of data
if( have_rows('page_parts') ):

     // loop through the rows of data
    while ( have_rows('page_parts') ) : the_row();

        if( get_row_layout() == 'wysiwyg' ):

        	get_template_part( 'template-parts/page-parts/content', 'wysiwyg' );

        elseif( get_row_layout() == 'download' ): 

        	$file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;