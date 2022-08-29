<?php
    $favicon = get_field('favicon', 'option');
    $keywords = get_field('keywords', 'option');
    $author = get_field('author', 'option');
    $description = get_field('description');
    $seo_image = get_field('seo_image', 'option');
    $theme_color = get_field('background_colour', 'option');
    $page_title = get_the_title();
    $site_title = get_bloginfo( 'name' );
    $site_url = get_site_url();
    $seo_image = wp_get_attachment_image_src($seo_image, 'full')[0];

    // Gerneral SEO
    if ($favicon) {
        echo '<link rel="apple-touch-icon" sizes="180x180" href="' . wp_get_attachment_image_src($favicon, [180, 180])[0] . '">';
        echo '<link rel="icon" type="image/png" sizes="32x32" href="' . wp_get_attachment_image_src($favicon, [32, 32])[0] . '">';
        echo '<link rel="icon" type="image/png" sizes="16x16" href="' . wp_get_attachment_image_src($favicon, [16, 16])[0] . '">';
    }
    echo '<title>' . $site_title . ' - ' . $page_title . '</title>';
    if ($description) {
        echo '<meta name="description" content="' . $description . '">';
    }
    echo '<meta name="theme-color" content="' . $theme_color . '">';
    echo '<meta name="keywords" content="' . $keywords . '"/>';
    echo '<meta name="author" content="' . $author . '">';

    // Twitter SEO
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $site_title . ' - ' . $page_title . '">';
    if ($description) {
        echo '<meta name="twitter:description" content="' . $description . '">';
    }
    if ($seo_image) {
        echo '<meta property="twitter:image" content="' . $seo_image . '">';
    }

    // OG SEO
    echo '<meta property="og:type" content="website">';
    echo '<meta property="og:url" content="' . $site_url . '">';
    echo '<meta property="og:site_name" content="' . $site_title . '">';
    echo '<meta property="og:title" content="' . $site_title . ' - ' . $page_title . '">';
    if ($description) {
        echo '<meta property="og:description" content="' . $description . '">';
    }
    if ($seo_image) {
        echo '<meta property="og:image" content="' . $seo_image . '">';
        echo '<meta property="og:image:secure_url" content="' . $seo_image . '">';
    }