<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
      $font = get_field('font_family', 'option');
      $tag_manager_head = get_field('tag_manager_head_script', 'option');
      $tag_manager_body = get_field('tag_manager_body_script', 'option');

      echo $tag_manager_head;

      get_template_part('includes/include', 'seo');

      do_action('wp_head');

      echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/dist/styles/common.min.css">';
      get_template_part('includes/include', 'css-variables');

      echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
      echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

      if ($font) {
        $font = str_replace(' ', '+', $font);
      } else {
        $font = 'Mulish';
      }
      echo '<link href="https://fonts.googleapis.com/css2?family=' . $font . ':wght@300;400;600;700&display=swap" rel="stylesheet">';
    ?>
  </head>
  <body>
    <?php echo $tag_manager_body ?>

    <header>
      <?php
        if (get_field('announcement_enable', 'option')) {
          get_template_part('includes/include', 'announcement');
        }
        if (get_field('header_type', 'option') == 'inline') {
          get_template_part('includes/include', 'header-inline');
        } else {
          get_template_part('includes/include', 'header-standard');
        }
      ?>
    </header>
