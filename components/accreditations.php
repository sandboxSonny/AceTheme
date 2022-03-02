<?php 
    $background = get_sub_field('background');
    
    if( have_rows('accreditations') ):
        echo '<div class="page-section bg-' . $background . ' logos">';
            echo '<div class="container">';
                echo '<div class="row">';
                    while ( have_rows('accreditations') ) : the_row();
                        $image = get_sub_field('image');
                        $image_alt = get_sub_field('image_alt');
                        
                        echo '<div class="col-md-4 text-center pb-4 pb-0">';
                            echo '<div class="logo">';
                                echo '<img src="' . $image . '" alt="' . $image_alt . '">';
                            echo '</div>';
                        echo '</div>';
                    endwhile;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    endif;
?>