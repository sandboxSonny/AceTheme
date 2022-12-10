<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-flex-columns.css">

<?php 
    $background = get_sub_field('background');
    $text_alignment = get_sub_field('text_alignment');
    $icons = get_sub_field('icons');
    $columns = have_rows('columns');

    if ($columns) {
        echo '<div class="page-section bg-' . $background . ' flex-group">';
            echo '<div class="container">';
                echo '<div class="row">';
                    while ( have_rows('columns') ) : the_row();
                        $image = get_sub_field('image');
                        $image_size = 'medium';
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        $button_text = get_sub_field('button_text');
                        $button_link = get_sub_field('button_link');
                        if ($icons) {
                            $icons_class = ' flex-area--icons';
                        } else {
                            $icons_class = '';
                        }
                        echo '<div class="flex-area flex-area--alignment-' . $text_alignment . $icons_class . '">';
                            if ($image) {
                                echo wp_get_attachment_image($image, $image_size, "", array( "class" => "img-fluid flex-area__image" ));
                            }
                            echo '<h3 class="flex-area__title">' . $title . '</h3>';
                            echo ' <p>' . $content . '</p>';
                            if($button_link) {
                                echo '<a class="btn btn-' . $background . '" href="' . $button_link . '">' . $button_text . '</a>';
                            }
                        echo '</div>';
                    endwhile;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>