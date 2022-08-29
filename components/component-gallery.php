<script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js" defer></script>
<script src="<?php echo get_template_directory_uri() ?>/dist/scripts/component-gallery.js" defer></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-gallery.css">

<?php 
    $background = get_sub_field('background');
    $caption_background = get_sub_field('caption_background');
    $caption = get_sub_field('caption');
    $title = get_sub_field('title');
    $images = have_rows('images');

    if ($caption_background) {
        $caption_background_class = 'gallery__item__caption';
    } else {
        $caption_background_class = '';
    }

    if ($images) {
        echo '<div class="page-section bg-' . $background . ' step-group">';
            echo '<div class="container">';
                if ($title) {
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<h2>' . $title . '</h2>';
                        echo '</div>';
                    echo '</div>';
                }
                echo '<div class="gallery">';
                    echo '<div class="gallery__sizer"></div>';
                    echo '<div class="gallery__gutter"></div>';
                    while ( have_rows('images') ) : the_row();
                        $image = get_sub_field('image');
                        $caption = get_sub_field('caption');
                        echo '<figure class="gallery__item">';
                            echo '<a href="' . wp_get_attachment_image_src($image, 'full')[0] . '" class="glightbox" data-glightbox="description: ' . $caption . '">';
                                echo wp_get_attachment_image($image, 'large', "", array( "class" => "img-fluid" ));
                                echo '<figcaption class="' . $caption_background_class . '">';
                                    echo $caption;
                                echo '</figcaption>';
                            echo '</a>';
                        echo '</figure>';
                    endwhile;
                    $i = null;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>