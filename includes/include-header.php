<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-header.css">
<script src="<?php echo get_template_directory_uri() ?>/dist/scripts/component-header.js" defer></script>

<?php
    $background = get_field('background', 'option');
    $logo = get_field('logo', 'option');
    $logo_size = 'small';
    $mobile_menu_details = get_field('mobile_menu_details', 'option');
    $header_type = get_field('header_type', 'option');
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

    function menu() {
        $locations = get_nav_menu_locations();
        
        $menu = get_term( $locations['main_menu'], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        echo '<ul class="nav navbar-nav">';
            
            foreach( $menu_items as $menu_item ) {
                if( $menu_item->menu_item_parent == 0 ) {
                    $parent = $menu_item->ID;
                    $menu_array = array();
                    $submenu_array = array();

                    foreach( $menu_items as $submenu ) {
                        if( $submenu->menu_item_parent == $parent ) {
                            $bool = true;
                            $menu_array[] = '<li class="menu-item"><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";

                            foreach( $menu_items as $subsubmenu ) {
                                if( $submenu->menu_item_parent == $parent ) {
                                    $bool = true;
                                    $submenu_array[] = '<li class="menu-item"><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                                }
                            }
                        }
                    }

                    if( $bool == true && count( $menu_array ) > 0 ) {
                        echo '<li class="menu-item menu-item-has-children">';
                            echo '<a href="' . $menu_item->url . '">' . $menu_item->title . get_template_part('includes/include', 'icon', array('icon' => 'chevron-down')) . '</a>';
                        
                            echo '<ul class="dropdown-menu">';
                                echo implode( "\n", $menu_array );
                            echo '</ul>';
                    } else {
                        echo '<li class="menu-item">';
                            echo '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                    }
                }
                echo '</li>';
            }
        echo '</ul>';
    }
?>

<div class="bg-<?php echo $header_background; ?> header--<?php echo $header_type ?>">
    <div class="container">
        <div class="row">
            <div class="col header-logo header-logo--<?php echo $header_logo_size; ?>">
                <h1 class="header-logo__heading">
                    <a href="<?php echo home_url(); ?>" class="header-logo__link">
                        <?php if ($logo) {
                            echo wp_get_attachment_image($logo, $logo_size, "", array( "class" => "img-fluid header-logo__image" ));
                            if ($header_site_title) {
                                echo '<span class="header-logo__title">' . get_bloginfo( 'name' ) . '</span>';
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
                    <nav class="header-menu" id="main-menu">
                        <?php menu(); ?>
                    </nav>
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
        menu();

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