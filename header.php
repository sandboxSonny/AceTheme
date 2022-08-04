<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php do_action('wp_head'); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/common.min.css">
    <?php get_template_part('includes/include', 'css-variables'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
      $font = get_field('font_family', 'option');
      if ($font) {
        $font = str_replace(' ', '+', $font);
      } else {
        $font = 'Mulish';
      }
      echo '<link href="https://fonts.googleapis.com/css2?family=' . $font . ':wght@300;400;600;700&display=swap" rel="stylesheet">';
    ?>
  </head>
  <body>

  <header>
    <?php
      if (get_field('announcement_enable', 'option')) {
        get_template_part('includes/include', 'announcement');
      }
      get_template_part('includes/include', 'header');
    ?>
  </header>
