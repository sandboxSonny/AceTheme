<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-articles.css">

<?php 
    $post_type = get_sub_field('post_type');
    $args = array( 
        'orderby' => 'title',
        'post_type' => $post_type,
    );
    $the_query = new WP_Query( $args );
    $background = get_sub_field('background');
    $heading = get_sub_field('heading');
    $shadow = get_sub_field('enable_shadow');
    $article_spacing = get_sub_field('article_spacing');
    $article_border = get_sub_field('article_border');

    echo '<div class="page-section bg-' . $background . '">';
        echo '<div class="container">';
            echo '<h2>' . $heading . '</h2>';
            if ( $the_query->have_posts() ) :
                echo '<div class="articles">';
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $star_rating = get_field("star_rating");
                        if ($shadow) {
                            $shadow_class = ' articles_item-shadow';
                        } else {
                            $shadow_class = '';
                        }

                        if ($article_spacing) {
                            $article_spacing = ' articles_item--spacing';
                        } else {
                            $article_spacing = '';
                        }

                        if ($article_border) {
                            $article_border = ' articles_item--border';
                        } else {
                            $article_border = '';
                        }
                        echo '<div class="articles_item' . $shadow_class . $article_spacing . $article_border . '">';
                            echo '<a href="' . get_the_permalink() . '" class="d-block text-decoration-none">';
                                the_post_thumbnail('medium', array( 'class' => 'img-fluid' ));
                                echo '<h3>' . get_the_title() . '</h3>';
                                echo '<div>' . get_the_excerpt() . '</div>';
                                echo '<span class="btn btn-primary">Read More</span>';
                            echo '</a>';
                        echo '</div>';
                    endwhile;
                echo '</div>';
            endif;
        echo '</div>';
    echo '</div>';

    wp_reset_query();
?>