<style>
    :root {
        --color_primary: <?php the_field('primary_colour', 'option'); ?>;
        --color_secondary: <?php the_field('secondary_colour', 'option'); ?>;
        --text_color: <?php the_field('text_colour', 'option'); ?>;

        --background_color: <?php the_field('background_colour', 'option'); ?>;
        --background_text_color: <?php the_field('background_text_colour', 'option'); ?>;
        --secondary_background_color: <?php the_field('secondary_background_colour', 'option'); ?>;
        --secondary_background_text_color: <?php the_field('secondary_background_text_colour', 'option'); ?>;
        
        --primary_button_color: <?php the_field('primary_button_colour', 'option'); ?>;
        --primary_button_text_color: <?php the_field('primary_button_text_colour', 'option'); ?>;
        --secondary_button_color: <?php the_field('secondary_button_colour', 'option'); ?>;
        --secondary_button_text_color: <?php the_field('secondary_button_text_colour', 'option'); ?>;

        --heading_one_size: <?php the_field('heading_one_size', 'option'); ?>px;
        --heading_two_size: <?php the_field('heading_two_size', 'option'); ?>px;
        --heading_three_size: <?php the_field('heading_three_size', 'option'); ?>px;
        --heading_four_size: <?php the_field('heading_four_size', 'option'); ?>px;
        --heading_five_size: <?php the_field('heading_five_size', 'option'); ?>px;
        --heading_six_size: <?php the_field('heading_six_size', 'option'); ?>px;
        --body_size: <?php the_field('body_size', 'option'); ?>px;

        --content_width: <?php the_field('content_width', 'option'); ?>;

        --spacing_sm: 16px;
        --spacing_md: 24px;
        --spacing_lg: 32px;
    }
</style>