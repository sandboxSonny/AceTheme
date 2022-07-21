<?php 
    $background = get_sub_field('background');
    $text_alignment = get_sub_field('text_alignment');
    $columns = have_rows('columns');

    if ($columns) {
        echo '<div class="page-section bg-' . $background . ' column-group">';
            echo '<div class="container">';
                echo '<div class="row">';
                    while ( have_rows('columns') ) : the_row();
                        $image = get_sub_field('image');
                        $image_size = 'medium';
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        echo '<div class="col-12 col-md column-area text-' . $text_alignment . '">';
                            if ($image) {
                                echo wp_get_attachment_image($image, $image_size, "", array( "class" => "img-fluid" ));
                            }
                            echo '<h3>' . $title . '</h3>';
                            echo ' <p>' . $content . '</p>';
                        echo '</div>';
                    endwhile;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>