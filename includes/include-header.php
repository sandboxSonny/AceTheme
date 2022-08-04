<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-header.css">

<?php
    $background = get_field('background', 'option');
    $logo = get_field('logo', 'option');
    $logo_size = 'small';
    $mobile_menu_details = get_field('mobile_menu_details', 'option');
    $header_background = get_field('header_background', 'option');
    $header_details = get_field('header_details', 'option');
    $header_details_verticle = get_field('header_details_verticle', 'option');
    $header_details_icons = get_field('header_details_icons', 'option');
    $header_logo_size = get_field('header_logo_size', 'option');
    $header_site_title = get_field('header_site_title', 'option');
    $email = get_field('email', 'option');
    $primary_number = get_field('primary_number', 'option');
    $secondary_number = get_field('secondary_number', 'option');
?>

<div class="bg-<?php echo $header_background; ?>">
    <div class="container">
        <div class="row">
            <div class="col header-logo header-logo--<?php echo $header_logo_size; ?>">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <?php if ($logo) {
                            echo wp_get_attachment_image($logo, $logo_size, "", array( "class" => "img-fluid" ));
                            if ($header_site_title) {
                                echo get_bloginfo( 'name' );
                            }
                        } else {
                            echo get_bloginfo( 'name' );
                        } ?>
                    </a>
                </h1>
            </div>
            <div class="col d-flex flex-1 flex-wrap justify-content-end align-items-center">
                <div class="d-none d-md-block w-100">
                    <?php if ($header_details) {
                        if ($header_details_verticle) {
                            $header_details_verticle_class = ' header-contact--header-details-verticle';
                        } else {
                            $header_details_verticle_class = '';
                        }
                        echo '<div class="header-contact' . $header_details_verticle_class . '">';
                            if ($email) {
                                echo '<a href="mailto:' . $email  .  '">';
                                    if ($header_details_icons) {
                                        get_template_part('includes/include', 'icon', array('icon' => 'email'));
                                    }
                                    echo '<span>' . $email . '</span>';
                                echo '</a>';
                            }
                            if ($primary_number) {
                                echo '<a href="tel:' . $primary_number . '">';
                                    if ($header_details_icons) {
                                        get_template_part('includes/include', 'icon', array('icon' => 'phone'));
                                    }
                                    echo '<span>' . $primary_number . '</span>';
                                echo '</a>';
                            }
                            if ($secondary_number) {
                                echo '<a href="tel:' . $secondary_number . '">';
                                    if ($header_details_icons) {
                                        get_template_part('includes/include', 'icon', array('icon' => 'phone'));
                                    }
                                    echo '<span>' . $secondary_number . '</span>';
                                echo '</a>';
                            }
                        echo '</div>';
                    } ?>
                    <div class="header-menu d-flex align-items-center">
                        <nav id="main-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
                        </nav>
                    </div>
                </div>
                <div class="d-flex d-md-none w-100 h-100 justify-content-end align-items-center">
                    <a href="#" class="toggle_menu">
                        <div class="hamburger-icon">
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu" id="mobile_menu">
    <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
    <?php if (get_field('mobile_menu_details', 'option')) { ?>
        <ul class="mobile-menu--footer">
            <?php if (get_field('email', 'option')) { ?>
                <li><a href="mailto:<?php the_field('email', 'option'); ?>"><span class="mobile-menu--footer-icon"><?php get_template_part('includes/include', 'icon', array('icon' => 'email')); ?></span><?php the_field('email', 'option'); ?></a></li>
            <?php } ?>
            <?php if (get_field('primary_number', 'option')) { ?>
                <li><a href="<?php the_field('primary_number', 'option'); ?>"><span class="mobile-menu--footer-icon"><?php get_template_part('includes/include', 'icon', array('icon' => 'phone')); ?></span><?php the_field('primary_number', 'option'); ?></a></li>
            <?php } ?>
            <?php if (get_field('secondary_number', 'option')) { ?>
                <li><a href="<?php the_field('secondary_number', 'option'); ?>"><span class="mobile-menu--footer-icon"><?php get_template_part('includes/include', 'icon', array('icon' => 'phone')); ?></span><?php the_field('secondary_number', 'option'); ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>