<?php
    if( have_rows('page_components') ): 
        while( have_rows('page_components') ): the_row();
            if( get_row_layout() == 'hero' ): 
                get_template_part('components/component', 'hero');
            elseif( get_row_layout() == 'image_text' ):
                get_template_part('components/component', 'image-text');
            elseif( get_row_layout() == 'steps' ):
                get_template_part('components/component', 'steps');
            elseif( get_row_layout() == 'columns' ):
                get_template_part('components/component', 'flex-columns');
            elseif( get_row_layout() == 'accreditations' ):
                get_template_part('components/component', 'accreditations');
            elseif( get_row_layout() == 'map' ):
                get_template_part('components/component', 'map');
            elseif( get_row_layout() == 'contact_text' ):
                get_template_part('components/component', 'contact-text');
            elseif( get_row_layout() == 'content' ):
                get_template_part('components/component', 'content');
            elseif( get_row_layout() == 'tabbed_content' ):
                get_template_part('components/component', 'tabbed-content');
            elseif( get_row_layout() == 'reviews' ):
                get_template_part('components/component', 'reviews');
            elseif( get_row_layout() == 'articles' ):
                get_template_part('components/component', 'articles');
            elseif( get_row_layout() == 'gallery' ):
                get_template_part('components/component', 'gallery');
            endif;
        endwhile; 
    endif; 
?>