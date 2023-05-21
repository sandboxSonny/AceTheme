    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-footer.css">

    <?php
      $facebook_link = get_field('facebook_link', 'option');
      $twitter_link = get_field('twitter_link', 'option');
      $instagram_link = get_field('instagram_link', 'option');
      $pinterest_link = get_field('pinterest_link', 'option');
      $enable_social_links = get_field('enable_social_links', 'option');

      $column_size = $enable_social_links == '1' ? ' col-md-6' : '';
      $menu_alignment = $enable_social_link == '1' ? 'justify-content-end menu' : 'menu';
    
      echo '<footer>';
        echo '<div class="container">';
          echo '<div class="row align-items-center">';
            if ($enable_social_links) {
              echo '<div class="col-12' . $column_size . ' text-center justify-content-start footer__social">';
                if ($facebook_link) {
                  echo '<a href="' . $facebook_link . '">';
                    get_template_part('includes/include', 'icon', array('icon' => 'facebook'));
                  echo '</a>';
                }
                if ($twitter_link) {
                  echo '<a href="' . $twitter_link . '">';
                    get_template_part('includes/include', 'icon', array('icon' => 'twitter'));
                  echo '</a>';
                }
                if ($instagram_link) {
                  echo '<a href="' . $instagram_link . '">';
                    get_template_part('includes/include', 'icon', array('icon' => 'instagram'));
                  echo '</a>';
                }
                if ($pinterest_link) {
                  echo '<a href="' . $pinterest_link . '">';
                    get_template_part('includes/include', 'icon', array('icon' => 'pinterest'));
                  echo '</a>';
                }
              echo '</div>';
            }
            $menu_alignment;
            echo '<div class="col-12' . $column_size . ' text-center">';
              wp_nav_menu( array(
                'theme_location' => 'footer_menu',
                'menu_class' => $menu_alignment
              ) );
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</footer>';

      if(get_field('enable_popup', 'option')) {
        get_template_part('components/component', 'popup');
      }

      echo '<div id="overlay" class="overlay"></div>';

      wp_footer();
    ?>

    <script src="<?php echo get_template_directory_uri() ?>/dist/scripts/main.js"></script>
  </body>
</html>
