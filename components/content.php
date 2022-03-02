<?php
    $background = get_sub_field('background');
    $content = get_sub_field('content');

    echo '<div class="bg-' . $background . '">';
        echo '<div class="container">';
            echo '<div class="page-section">';
                echo $content;
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>