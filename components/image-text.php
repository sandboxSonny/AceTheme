<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-image-text.css">

<?php
    $background = get_sub_field('background');
    $image = get_sub_field('image');
    $image_size = 'large';
    $content_align = get_sub_field('content_align');
    $title = get_sub_field('title');
    $content = get_sub_field('text');
    $button_link = get_sub_field('button_link');
    $button_text = get_sub_field('button_text');

    echo '<div class="bg-' . $background . '">';
        echo '<div class="container">';
            echo '<div class="page-section image-text">';
                echo '<div class="row">';
                    echo '<div class="col-md-6 pb-4 pb-0">';
                        if ($image) {
                            echo wp_get_attachment_image($image, $image_size, "", array( "class" => "img-fluid" ));
                        }
                    echo '</div>';
                    echo '<div class="col-md-6 image-text_content image-text_content--' . $content_align . '">';
                        echo '<div>';
                            echo '<h2>' . $title . '</h2>';
                            echo '<p>' . $content . '</p>';
                            if($button_link) {
                                echo '<a class="btn btn-primary" href="' . $button_link . '">' . $button_text . '</a>';
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
   echo ' </div>';
?>