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

        elseif( get_row_layout() == 'category_feed_cards' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'category-feed-cards' );

        elseif( get_row_layout() == 'jumbotron' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'jumbotron' );

        elseif( get_row_layout() == 'video_card' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'video-card' );

        elseif( get_row_layout() == 'full_width_content' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'full-width' );

        elseif( get_row_layout() == 'banner_image' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'banner-image' );

        elseif( get_row_layout() == 'slider' ): 

        	get_template_part( 'template-parts/marketing-parts/content', 'slider' );

        endif;

    endwhile;

else :

    // no layouts found

endif;