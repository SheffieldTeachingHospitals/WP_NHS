<?php
// Page parts
// 

// check if the flexible content field has rows of data
if( have_rows('marketing_parts') ):

     // loop through the rows of data
    while ( have_rows('marketing_parts') ) : the_row();

        if( get_row_layout() == 'feature_with_feed' ):

        	get_template_part( 'template-parts/marketing-parts/content', 'feature-with-feed' );

        elseif( get_row_layout() == 'three_card_row' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'three-card-row' );

        elseif( get_row_layout() == 'picture_card' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'feature-picture-card' );

        endif;

    endwhile;

else :

    // no layouts found

endif;