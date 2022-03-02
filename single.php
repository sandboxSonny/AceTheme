<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-singles.css">

<?php

get_header();

the_post_thumbnail('medium', array( 'class' => 'img-fluid w-100' ));

echo '<div class="container">';
    echo '<div class="row page-section">';
        echo '<div class="col-12 text-center">';
            while ( have_posts() ) : the_post();
                $star_rating = get_field("star_rating");
                if ($star_rating) {
                    echo '<div class="post_stars">';
                        for ($i = 1; $i <= 5; $i++) {
                            if ($star_rating >= $i) {
                                $icon = 'star-solid';
                                include(get_template_directory() . '/includes/icon.php');
                            } else {
                                $icon = 'star-empty';
                                include(get_template_directory() . '/includes/icon.php');
                            }
                        }
                        $i = null;
                    echo '</div>';
                }

                echo '<h1 class="text-center">' . get_the_title() . '</h1>';
                echo '<div class="post_content">';
                    echo get_post_field('post_content', $post->ID);
                echo '</div>';
                echo '<div>';
                    echo '<a class="btn" href="' . get_site_url() . '">Contact Us</a>';
                echo '</div>';
            endwhile;

            echo '<p>' . the_field('author') . '</p>';
        echo '</div>';
    echo '</div>';
echo '</div>';

get_footer();
wp_footer();