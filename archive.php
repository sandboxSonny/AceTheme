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
            <div class="col-md-6 post<?php if (has_post_thumbnail()) { echo ' post--has-image'; } ?>">
                <a href="<?php the_permalink(); ?>" class="d-block text-decoration-none">
                    <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', "", array( "class" => "img-fluid" )); ?>
                    <div class="post__content">
                        <?php
                            if (get_post_type() == 'reviews') {
                                $star_rating = get_field("star_rating");
                                echo '<span class="post_stars">';
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($star_rating >= $i) {
                                            get_template_part('includes/include', 'icon', array('icon' => 'star-solid'));
                                        } else {
                                            get_template_part('includes/include', 'icon', array('icon' => 'star-empty'));
                                        }
                                    }
                                    $i = null;
                                echo '</span>';
                            }
                        ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <span class="btn btn-primary">Read More</span>
                    </div>
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