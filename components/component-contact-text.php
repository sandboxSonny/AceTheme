<?php
    $background = get_sub_field('background');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $form_shortcode = get_sub_field('form_shortcode');

    echo '<div class="bg-' . $background . '">';
        echo '<div class="container">';
            echo '<div class="page-section image-text">';
                echo '<div class="row">';
                    echo '<div class="col-md-6">';
                        echo '<h2>' . $title .'</h2>';
                        if ($content) {
                            echo '<p>' . $content .'</p>';
                        }
                    echo '</div>';
                    echo '<div class="col-md-6">';
                        echo do_shortcode($form_shortcode);
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>