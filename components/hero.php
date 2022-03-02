<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-hero.css">

<?php
  $image = get_sub_field('image');
  $image_alt = get_sub_field('image_alt');
  $content = get_sub_field('content');
  if ($image) {
    echo '<img class="img-fluid" src="' . $image . '" alt="' . $image_alt . '">';
  }
  if ($content) {
    echo '<div class="hero_content">';
      echo '<div class="container">';
        echo $content;
      echo '</div>';
    echo '</div>';
  }
?>