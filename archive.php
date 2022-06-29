<?php
    get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-archive.css">

<div class="page-section bg-primary">
    <div class="container">
        <h1><?php echo get_the_archive_title(); ?></h1>
    </div>
</div>
<div class="page-section pt-0">
    <div class="container">
        <div class="row">
            <?php
                if(have_posts()) : while(have_posts()) : the_post();
            ?>
            <div class="col-md-6 post">
                <a href="<?php the_permalink(); ?>" class="d-block text-decoration-none">
                    <?php
                        $star_rating = get_field("star_rating");
                        echo '<span class="post_stars">';
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
                        echo '</span>';
                    ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <p class="btn btn-primary">Read More</p>
                </a>
            </div>
            <?php
                endwhile; endif;
            ?>
        </div>
    </div>
</div>

<?php
    get_footer();
    wp_footer();