<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-steps.css">

<?php 
    $background = get_sub_field('background');
    $title = get_sub_field('title');
    $steps = have_rows('steps');
    $step_spacing = get_sub_field('step_spacing');

    if ($steps) {
        echo '<div class="page-section bg-' . $background . ' step-group">';
            echo '<div class="container">';
                if ($title) {
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<h2>' . $title . '</h2>';
                        echo '</div>';
                    echo '</div>';
                }
                echo '<div class="row">';
                    $i;
                    while ( have_rows('steps') ) : the_row();
                        $i++;
                        $step_title = get_sub_field('step_title');
                        $step_content = get_sub_field('step_content');
                        if ($step_spacing) {
                            $step_spacing = ' reviews_item--spacing';
                        } else {
                            $step_spacing = '';
                        }
                        echo '<div class="col-12 col-md-4 step-area '. $step_spacing . '">';
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