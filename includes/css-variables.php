<style>
    :root {
        --color_primary: <?php the_field('primary_colour', 'option'); ?>;
        --color_primary_text: <?php the_field('primary_colour_text', 'option'); ?>;
        --color_secondary: <?php the_field('secondary_colour', 'option'); ?>;
        --color_secondary_text: <?php the_field('secondary_colour_text', 'option'); ?>;

        --heading_one_size: <?php the_field('heading_one_size', 'option'); ?>px;
        --heading_two_size: <?php the_field('heading_two_size', 'option'); ?>px;
        --heading_three_size: <?php the_field('heading_three_size', 'option'); ?>px;
        --heading_four_size: <?php the_field('heading_four_size', 'option'); ?>px;
        --heading_five_size: <?php the_field('heading_five_size', 'option'); ?>px;
        --heading_six_size: <?php the_field('heading_six_size', 'option'); ?>px;
        --body_size: <?php the_field('body_size', 'option'); ?>px;

        --spacing_sm: 16px;
        --spacing_md: 24px;
        --spacing_lg: 32px;
    }
</style>