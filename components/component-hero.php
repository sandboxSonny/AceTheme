<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-hero.css">

<?php
  $background = get_sub_field('background');
  $image = get_sub_field('image');
  $image_size = get_sub_field('image_size');
  $content = get_sub_field('content');
  if ($image) {
    echo wp_get_attachment_image($image, 'full', "", array( "class" => "img-fluid hero_image hero_image--size-" . $image_size ));
  }
  if ($content) {
    echo '<div class="bg-' . $background . ' hero_content">';
      echo '<div class="container">';
        echo $content;
      echo '</div>';
    echo '</div>';
  }
?>