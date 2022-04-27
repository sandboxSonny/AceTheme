<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-header.css">

<?php
    $logo = get_field('logo', 'option');
    $logo_size = 'small';
    $email = get_field('email', 'option');
    $primary_number = get_field('primary_number', 'option');
    $secondary_number = get_field('secondary_number', 'option');
?>

<div class="container">
    <div class="row">
        <div class="col header-logo">
            <h1>
                <a href="<?php echo home_url(); ?>">
                    <?php if ($logo) {
                        echo wp_get_attachment_image($logo, $logo_size, "", array( "class" => "img-fluid" ));
                    } else {
                        echo get_bloginfo( 'name' );
                    } ?>
                </a>
            </h1>
        </div>
        <div class="col d-flex flex-1 flex-wrap justify-content-end align-items-center">
            <div class="d-none d-md-block w-100">
                <?php if (!get_field('announcement_enable', 'option')) {
                    echo '<div class="header-contact">';
                        if ($email) {
                            echo '<a href="mailto:"' . $email  .  '">' . $email . '</a>';
                        }
                        if ($primary_number) {
                            echo '<a href="tel:' . $primary_number . '">' . $primary_number . '</a>';
                        }
                        if ($secondary_number) {
                            echo '<a href="tel:' . $secondary_number . '">' . $secondary_number . '</a>';
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

<div class="mobile-menu" id="mobile_menu">
    <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
    <?php if (get_field('announcement_enable', 'option')) { ?>
        <ul class="mobile-menu--footer">
            <?php if (get_field('email', 'option')) { ?>
                <li><a href="mailto:<?php the_field('email', 'option'); ?>"><span class="mobile-menu--footer-icon"><?php $icon = 'email'; include(dirname(dirname(__FILE__)) . '/includes/icon.php'); ?></span><?php the_field('email', 'option'); ?></a></li>
            <?php } ?>
            <?php if (get_field('primary_number', 'option')) { ?>
                <li><a href="<?php the_field('primary_number', 'option'); ?>"><span class="mobile-menu--footer-icon"><?php $icon = 'phone'; include(dirname(dirname(__FILE__)) . '/includes/icon.php'); ?></span><?php the_field('primary_number', 'option'); ?></a></li>
            <?php } ?>
            <?php if (get_field('secondary_number', 'option')) { ?>
                <li><a href="<?php the_field('secondary_number', 'option'); ?>"><span class="mobile-menu--footer-icon"><?php $icon = 'phone'; include(dirname(dirname(__FILE__)) . '/includes/icon.php'); ?></span><?php the_field('secondary_number', 'option'); ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>