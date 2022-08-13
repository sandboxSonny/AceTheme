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
    $primary_number_label = get_field('primary_number_label', 'option');
    $primary_number = get_field('primary_number', 'option');
    $secondary_number_label = get_field('secondary_number_label', 'option');
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
                                echo '<span>' . get_bloginfo( 'name' ) . '</span>';
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
    <?php
        wp_nav_menu( array( 'theme_location' => 'main_menu' ) );
        if ($mobile_menu_details) {
            echo '<ul class="mobile-menu--footer">';
                if ($email) {
                    echo '<li>';
                        echo '<a href="mailto:' . $email .'">';
                            echo '<span class="mobile-menu--footer-icon">';
                                get_template_part('includes/include', 'icon', array('icon' => 'email'));
                            echo '</span>';

                            echo $email;
                        echo '</a>';
                    echo '</li>';
                }
                if ($primary_number) {
                    echo '<li>';
                        echo '<a href="' . $primary_number . '">';
                            echo '<span class="mobile-menu--footer-icon">';
                                get_template_part('includes/include', 'icon', array('icon' => 'phone'));
                            echo '</span>';

                            if ($primary_number_label) {
                                echo '<strong>' . $primary_number_label . '</strong>';
                            }

                            echo $primary_number;
                        echo '</a>';
                    echo '</li>';
                }
                if ($secondary_number) {
                    echo '<li>';
                        echo '<a href="' . $secondary_number . '">';
                            echo '<span class="mobile-menu--footer-icon">';
                                get_template_part('includes/include', 'icon', array('icon' => 'phone'));
                            echo '</span>';

                            if ($secondary_number_label) {
                                echo '<strong>' . $secondary_number_label . '</strong>';
                            }

                            echo $secondary_number;
                        echo '</a>';
                    echo '</li>';
                }
            echo '</ul>';
        }
    ?>
</div>