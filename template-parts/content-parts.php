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

        elseif( get_row_layout() == 'featured_image' ): 

        	get_template_part( 'template-parts/page-parts/content', 'featured-image' );

        elseif( get_row_layout() == 'video_block' ): 

        	get_template_part( 'template-parts/page-parts/content', 'video' );

        elseif( get_row_layout() == 'two_column_block' ): 

        	get_template_part( 'template-parts/page-parts/content', 'two-col' );

        endif;

    endwhile;

else :

    // no layouts found

endif;