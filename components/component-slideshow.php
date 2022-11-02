<?php
    $height = get_sub_field('height');
    $page_width = get_sub_field('page_width');

    if (have_rows('slides')) {
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer></script>';
        echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/dist/styles/component-slideshow.css">';
        echo '<script src="' . get_template_directory_uri() . '/dist/scripts/component-slideshow.js" defer></script>';
    }

    if ($page_width) {
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-12">';
    }
    echo '<div class="slideshow slideshow--size-' . $height . '">';
        echo '<div class="slideshow__inner">';
            while ( have_rows('slides') ) : the_row();
                $image = get_sub_field('slide_image');
                if ($image) {
                    echo '<div class="slideshow__slide">';
                        echo wp_get_attachment_image($image, 'full', "", array( "class" => "img-fluid slideshow__image" ));
                    echo '</div>';
                }
            endwhile;
        echo '</div>';
        echo '<div class="slideshow__arrow__container__position">';
            echo '<div class="slideshow__arrow__container">';
                echo '<div class="slideshow__arrow slideshow__arrow--prev">';
                    get_template_part('includes/include', 'icon', array('icon' => 'chevron-left'));
                echo '</div>';
                echo '<div class="slideshow__arrow slideshow__arrow--next">';
                    get_template_part('includes/include', 'icon', array('icon' => 'chevron-right'));
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    if ($page_width) {
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>