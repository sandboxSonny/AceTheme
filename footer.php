    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-footer.css">
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
          </div>
        </div>
      </div>
    </footer>

    <?php if(get_field('enable_popup', 'option')) {
      get_template_part('components/component', 'popup');
    } ?>

    <div id="overlay" class="overlay"></div>

    <?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri() ?>/dist/scripts/main.js"></script>
  </body>
</html>
