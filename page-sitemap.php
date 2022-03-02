<?php /* Template Name: Sitemap */ ?>

<?php get_header(); ?>

<div class="page-section">
  <div class="container">
    <h3 id="pages"><strong>Pages</strong></h3>
    <ul>
      <?php
      // Add pages you'd like to exclude in the exclude here
      wp_list_pages(
        array(
          'exclude' => '',
          'title_li' => '',
        )
      );
      ?>
    </ul>

    <h3 id="posts"><strong>Posts</strong></h3>
    <ul>
      <?php
      // Add categories you'd like to exclude in the exclude here
      $cats = get_categories('exclude=');
      foreach ($cats as $cat) {
        echo "<li><h3>".$cat->cat_name."</h3>";
        echo "<ul>";
        query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
        while(have_posts()) {
          the_post();
          $category = get_the_category();
          // Only display a post link once, even if it's in multiple categories
          if ($category[0]->cat_ID == $cat->cat_ID) {
            echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
          }
        }
        echo "</ul>";
        echo "</li>";
      }
      ?>
    </ul>
  </div>
</div>

<?php 
  get_header(); 
  wp_footer();
?>