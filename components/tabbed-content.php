<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-tabbed-content.css">

<?php 
    $background = get_sub_field('background');
    $title = get_sub_field('title');

    if( have_rows('tabs_content') ):
        function seoUrl($string) {
            $string = strtolower($string);
            $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
            $string = preg_replace("/[\s-]+/", " ", $string);
            $string = preg_replace("/[\s_]/", "-", $string);
            return $string;
        }
        
        echo '<div class="container">';
            echo '<div class="page-section image-text">';
                echo '<h2>' . $title . '</h2>';
                echo '<div class="row">';
                    echo '<div class="col-12 col-md-3 tabbed-content-items">';
                        echo '<ul class="list-unstyled">';
                            $i = 0;
                            while ( have_rows('tabs_content') ) : the_row(); 
                                $i++;
                                $item_text = get_sub_field('item_text');
                                $item_handle = seoUrl($item_text);
                                if($i == 1) {
                                    $active_class = ' is-active';
                                } else {
                                    $active_class = '';
                                }
                                echo '<li>';
                                    echo '<a data-tab="' . $item_handle . '" class="nav-link js-tabbedToggle' . $active_class . '">';
                                        echo $item_text;
                                    echo '</a>';
                                echo '</li>';
                            endwhile;
                            $i = null;
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="col-md-9">';
                        echo '<div class="tab-content" id="v-pills-tabContent">';
                            $i = 0;
                            while ( have_rows('tabs_content') ) : the_row(); 
                                $i++;
                                $item_text = get_sub_field('item_text');
                                $item_content = get_sub_field('item_content');
                                $item_handle = seoUrl($item_text);
                                if($i == 1) {
                                    $active_class = ' is-active';
                                } else {
                                    $active_class = '';
                                }
                                echo '<div class="tab-panel' . $active_class . '" id="tab-panel-' . $item_handle . '">';
                                    echo $item_content;
                                echo '</div>';
                            endwhile;
                            $i = null;
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    endif;
?>