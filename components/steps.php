<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-steps.css">

<?php 
    $background = get_sub_field('background');
    $steps = have_rows('steps');

    if ($steps) {
        echo '<div class="page-section bg-' . $background . ' step-group">';
            echo '<div class="container">';
                echo '<div class="row">';
                    $i;
                    while ( have_rows('steps') ) : the_row();
                        $i++;
                        $step_title = get_sub_field('step_title');
                        $step_content = get_sub_field('step_content');
                        echo '<div class="col step-area">';
                            echo '<span class="step-area_number">' . $i . '.</span>';
                            echo '<h3>' . $step_title . '</h3>';
                           echo ' <p>' . $step_content . '</p>';
                        echo '</div>';
                    endwhile;
                    $i = null;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>