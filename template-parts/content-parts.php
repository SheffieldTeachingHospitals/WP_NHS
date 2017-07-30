<?php
// Page parts
// 

// check if the flexible content field has rows of data
if( have_rows('page_parts') ):

     // loop through the rows of data
    while ( have_rows('page_parts') ) : the_row();

        if( get_row_layout() == 'wysiwyg_block' ):

        	get_template_part( 'template-parts/page-parts/content', 'wysiwyg' );

        elseif( get_row_layout() == 'quote_card' ): 

        	get_template_part( 'template-parts/page-parts/content', 'quote-card' );

        endif;

    endwhile;

else :

    // no layouts found

endif;