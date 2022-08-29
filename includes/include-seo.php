<?php
    $favicon = get_field('favicon', 'option');
    $theme_color = get_field('background_colour', 'option');

    if ($favicon) {
        echo '<link rel="apple-touch-icon" sizes="180x180" href="' . wp_get_attachment_image_src($favicon, [180, 180])[0] . '">';
        echo '<link rel="icon" type="image/png" sizes="32x32" href="' . wp_get_attachment_image_src($favicon, [32, 32])[0] . '">';
        echo '<link rel="icon" type="image/png" sizes="16x16" href="' . wp_get_attachment_image_src($favicon, [16, 16])[0] . '">';
    }
    echo '<meta name="theme-color" content="' . $theme_color . '">';