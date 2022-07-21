<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-announcement.css">

<div class="announcement">
    <div class="container">
        <div class="row align-items-center">
            <?php
                $content = get_field('announcement_content', 'option');
                $enable_details = get_field('announcement_enable_details', 'option');
                if ($content) {
                    echo '<div class="announcement_content">';
                        echo '<span>' . $content . '</span>';
                    echo '</div>';
                }

                if ($enable_details) {
                    echo '<div class="col announcement_details flex-1">';
                        $email = get_field('email', 'option');
                        $primary_number = get_field('primary_number', 'option');
                        $secondary_number = get_field('secondary_number', 'option');
                        if ($email) {
                            echo '<a href="mailto:' . $email  .  '">' . $email . '</a>';
                        }
                        if ($primary_number) {
                            echo '<a href="tel:' . $primary_number . '">' . $primary_number . '</a>';
                        }
                        if ($secondary_number) {
                            echo '<a href="tel:' . $secondary_number . '">' . $secondary_number . '</a>';
                        }
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>