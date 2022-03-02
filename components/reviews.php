<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-reviews.css">

<?php 
    $args = array( 
        'orderby' => 'title',
        'post_type' => 'reviews',
    );
    $the_query = new WP_Query( $args );
    $background = get_sub_field('background');
    $heading = get_sub_field('heading');
    $shadow = get_sub_field('enable_shadow');

    echo '<div class="page-section bg-' . $background . '">';
        echo '<div class="container">';
            echo '<h2>' . $heading . '</h2>';
            if ( $the_query->have_posts() ) :
                echo '<div class="reviews">';
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $star_rating = get_field("star_rating");
                        if ($shadow) {
                            $shadow_class = ' reviews_item-shadow';
                        } else {
                            $shadow_class = '';
                        }
                        echo '<div class="reviews_item' . $shadow_class . '">';
                            echo '<span class="reviews_item-stars">';
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($star_rating >= $i) {
                                        $icon = 'star-solid';
                                        include(dirname(dirname(__FILE__)) . '/includes/icon.php');
                                    } else {
                                        $icon = 'star-empty';
                                        include(dirname(dirname(__FILE__)) . '/includes/icon.php');
                                    }
                                }
                                $i = null;
                            echo '</span>';
                            echo '<a href="' . get_the_permalink() . '" class="d-block text-decoration-none">';
                                the_post_thumbnail('medium', array( 'class' => 'img-fluid' ));
                                echo '<h3>' . get_the_title() . '</h3>';
                                echo '<div>' . get_the_excerpt() . '</div>';
                                echo '<span class="btn">Read More</span>';
                            echo '</a>';
                        echo '</div>';
                    endwhile;
                echo '</div>';
            endif;
        echo '</div>';
    echo '</div>';

    wp_reset_query();
?>