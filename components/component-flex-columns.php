<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-flex-columns.css">

<?php 
    $background = get_sub_field('background');
    $text_alignment = get_sub_field('text_alignment');
    $icons = get_sub_field('icons');
    $columns = have_rows('columns');

    if ($columns) {
        echo '<div class="page-section bg-' . $background . ' column-group">';
            echo '<div class="container">';
                echo '<div class="row">';
                    while ( have_rows('columns') ) : the_row();
                        $image = get_sub_field('image');
                        $image_size = 'medium';
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        if ($icons) {
                            $icons_class = ' column-area--icons';
                        } else {
                            $icons_class = '';
                        }
                        echo '<div class="col-12 col-md column-area column-area--alignment-' . $text_alignment . $icons_class . '">';
                            if ($image) {
                                echo '<div>';
                                    echo wp_get_attachment_image($image, $image_size, "", array( "class" => "img-fluid column-area__image" ));
                                echo '</div>';
                            }
                            echo '<div class="text-' . $text_alignment . '">';
                                echo '<h3>' . $title . '</h3>';
                                echo ' <p>' . $content . '</p>';
                            echo '</div>';
                        echo '</div>';
                    endwhile;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>