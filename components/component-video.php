<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-video.css">

<?php 
    $background = get_sub_field('background');
    $title = get_sub_field('title');
    $video = get_sub_field('video');

    if ($video) {
        echo '<div class="page-section bg-' . $background . '">';
            echo '<div class="container">';
                if ($title) {
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<h2>' . $title . '</h2>';
                        echo '</div>';
                    echo '</div>';
                }
                echo '<div class="video">';
                    echo '<video controls>';
                        echo '<source src="' . wp_get_attachment_url($video) . '" type="video/mp4">';
                        echo 'Your browser does not support the video tag.';
                    echo '</video>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>