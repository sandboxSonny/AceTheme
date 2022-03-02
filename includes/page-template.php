<?php
    if( have_rows('page_components') ): 
        while( have_rows('page_components') ): the_row();
            if( get_row_layout() == 'hero' ): 
                include(dirname(dirname(__FILE__)) . '/components/hero.php');
            elseif( get_row_layout() == 'image_text' ):
                include(dirname(dirname(__FILE__)) . '/components/image-text.php');
            elseif( get_row_layout() == 'steps' ):
                include(dirname(dirname(__FILE__)) . '/components/steps.php');
            elseif( get_row_layout() == 'columns' ):
                include(dirname(dirname(__FILE__)) . '/components/flex-columns.php');
            elseif( get_row_layout() == 'accreditations' ):
                include(dirname(dirname(__FILE__)) . '/components/accreditations.php');
            elseif( get_row_layout() == 'map' ):
                include(dirname(dirname(__FILE__)) . '/components/map.php');
            elseif( get_row_layout() == 'contact_text' ):
                include(dirname(dirname(__FILE__)) . '/components/contact-text.php');
            elseif( get_row_layout() == 'content' ):
                include(dirname(dirname(__FILE__)) . '/components/content.php');
            elseif( get_row_layout() == 'tabbed_content' ):
                include(dirname(dirname(__FILE__)) . '/components/tabbed-content.php');
            elseif( get_row_layout() == 'reviews' ):
                include(dirname(dirname(__FILE__)) . '/components/reviews.php');
            endif;
        endwhile; 
    endif; 
?>