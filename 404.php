<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-404.css">

<?php 
get_header();

echo '<div class="page-section four-oh-four">';
    echo '<div class="container text-center">';
        echo '<h1>404</h1>';
        echo '<h3>Helful Links</h3>';
        echo '<div>';
            echo '<a class="btn btn-primary" href="/">Homepage</a>';
        echo '</div>';
    echo '</div>';
echo '</div>';

get_footer();
wp_footer();
?>
