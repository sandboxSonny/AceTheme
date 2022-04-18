<?php 
    $background = get_sub_field('background');
    
    if( have_rows('accreditations') ):
        echo '<div class="page-section bg-' . $background . ' logos">';
            echo '<div class="container">';
                echo '<div class="row">';
                    while ( have_rows('accreditations') ) : the_row();
                        $image = get_sub_field('image');
                        $image_size = 'small';
                        
                        echo '<div class="col-md-4 text-center pb-4 pb-0">';
                            echo '<div class="logo">';
                                echo wp_get_attachment_image($image, $image_size, "", array( "class" => "img-fluid" ));
                            echo '</div>';
                        echo '</div>';
                    endwhile;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    endif;
?>