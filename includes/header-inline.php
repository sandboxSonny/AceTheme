<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-header.css">

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">
                <a href="<?php echo home_url(); ?>">
                    <?php if (get_field('logo', 'option')) { ?>
                        <img style="max-width: 200px;" src="https://adamsgasengineers.co.uk/wp-content/uploads/2019/11/logo-scaled.png" />
                    <?php } else {
                        var_dump(get_current_site());
                    } ?>
                </a>
            </h1>
        </div>
        <div class="col">
            <div class="header-menu header-menu-inline w-100 pt-2 pb-2 pb-0">
                <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
            </div>
        </div>
    </div>
</div>