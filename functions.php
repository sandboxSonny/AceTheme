<?php
// Action Hooks
add_action( 'wp_head', 'ag_head' );
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu',
	) );
}

add_theme_support('post-thumbnails');
$post_types = have_rows('custom_post_types', 'option');
if ($post_types) {
	while ( have_rows('custom_post_types', 'option') ) : the_row();
		$args = array (
			'name' => get_sub_field('name'),
			'handle' => get_sub_field('handle'),
			'icon' => get_sub_field('icon'),
		);

		add_action( 'init', function() use ( $args ) {
			if (get_sub_field('handle') == 'reviews') {
				register_post_type($args['name'],
					array(
						'labels' => array(
							'name' => __( $args['name'] ),
							'singular_name' => __( $args['handle'] )
						),
						'public' => true,
						'has_archive' => true,
						'menu_icon' => $args['icon'],
						'supports' => array('title', 'editor', 'custom-fields')
					)
				);
			} else {
				register_post_type($args['name'],
					array(
						'labels' => array(
							'name' => __( $args['name'] ),
							'singular_name' => __( $args['handle'] )
						),
						'public' => true,
						'has_archive' => true,
						'menu_icon' => $args['icon'],
						'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
					)
				);
			}
		});
	endwhile;
}


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' 		=> 2
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Analytics',
		'menu_title'	=> 'Analytics',
		'parent_slug'	=> 'general-settings',
		'position' 		=> 3
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Colours',
		'menu_title'	=> 'Colours',
		'parent_slug'	=> 'general-settings',
		'position' 		=> 4
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Typography Settings',
		'menu_title'	=> 'Typography',
		'parent_slug'	=> 'general-settings',
		'position' 		=> 5
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Announcement Settings',
		'menu_title'	=> 'Announcement',
		'parent_slug'	=> 'general-settings',
		'position' 		=> 6
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Custom Posts Settings',
		'menu_title'	=> 'Custom Posts',
		'parent_slug'	=> 'general-settings',
		'position' 		=> 7
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'general-settings',
		'position' 		=> 8
	));
}

function change_my_title( $title ){
    $title = str_replace('Archives: ', '', $title) ;
    return $title;
}
add_filter( "get_the_archive_title", "change_my_title" );