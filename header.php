<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php do_action('wp_head'); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/common.min.css">
    <?php include('includes/css-variables.php'); ?>
  </head>
  <body>

  <header>
    <?php
      if (get_field('announcement_enable', 'option')) {
        include('includes/announcement.php');
      }
      if (get_field('header_type', 'option') == 'inline') {
        include('includes/header-inline.php');
      } else {
        include('includes/header-standard.php');
      }
    ?>
  </header>
