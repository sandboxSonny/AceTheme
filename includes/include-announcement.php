<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-announcement.css">

<?php
    $enable_details = get_field('announcement_enable_details', 'option');
    $email = get_field('email', 'option');
    $primary_number_label = get_field('primary_number_label', 'option');
    $primary_number = get_field('primary_number', 'option');
    $secondary_number_label = get_field('secondary_number_label', 'option');
    $secondary_number = get_field('secondary_number', 'option');
    $content = get_field('announcement_content', 'option');
    $background = get_field('announcement_background', 'option');
?>

<div class="announcement bg-<?php echo $background; ?>">
    <div class="container">
        <div class="row align-items-center">
            <?php
                if ($content) {
                    echo '<div class="announcement_content">';
                        echo '<span>' . $content . '</span>';
                    echo '</div>';
                }

                if ($enable_details) {
                    echo '<div class="col announcement_details flex-1">';
                        if ($email) {
                            echo '<a href="mailto:' . $email  .  '">' . $email . '</a>';
                        }
                        if ($primary_number) {
                            echo '<a href="tel:' . $primary_number . '">';
                                if ($primary_number_label) {
                                    echo '<strong>' . $primary_number_label . '</strong>';
                                }
                                echo $primary_number;
                            echo '</a>';
                        }
                        if ($secondary_number) {
                            echo '<a href="tel:' . $secondary_number . '">';
                                if ($secondary_number_label) {
                                    echo '<strong>' . $secondary_number_label . '</strong>';
                                }
                                echo $secondary_number;
                            echo '</a>';
                        }
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>