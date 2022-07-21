<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-hero.css">

<?php
  $background = get_sub_field('background');
  $image = get_sub_field('image');
  $image_size = 'full';
  $content = get_sub_field('content');
  if ($image) {
    echo wp_get_attachment_image($image, $image_size, "", array( "class" => "img-fluid" ));
  }
  if ($content) {
    echo '<div class="bg-' . $background . ' hero_content">';
      echo '<div class="container">';
        echo $content;
      echo '</div>';
    echo '</div>';
  }
?>