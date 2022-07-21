<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php do_action('wp_head'); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/common.min.css">
    <?php get_template_part('includes/include', 'css-variables'); ?>
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
