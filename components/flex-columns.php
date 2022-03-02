<?php 
    $background = get_sub_field('background');
    $columns = have_rows('columns');

    if ($columns) {
        echo '<div class="page-section bg-' . $background . ' column-group">';
            echo '<div class="container">';
                echo '<div class="row">';
                    while ( have_rows('columns') ) : the_row();
                        $image = get_sub_field('image');
                        $image_alt = get_sub_field('image_alt');
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        echo '<div class="col column-area">';
                            if ($image) {
                                echo '<img class="img-fluid" src="' . $image . '" alt="' . $image_alt . '" />';
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