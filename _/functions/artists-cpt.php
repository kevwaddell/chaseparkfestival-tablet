<?php 
add_action( 'init', 'register_cpt_artist_page' );

function register_cpt_artist_page() {

	$labels = array(
		'name' => __( 'Artists', 'artist_page' ),
		'singular_name' => __( 'Artist', 'artist_page' ),
		'add_new' => __( 'Add New', 'artist_page' ),
		'add_new_item' => __( 'Add New Artist', 'artist_page' ),
		'edit_item' => __( 'Edit Artist', 'artist_page' ),
		'new_item' => __( 'New Artist', 'artist_page' ),
		'view_item' => __( 'View Artist', 'artist_page' ),
		'search_items' => __( 'Search Artists', 'artist_page' ),
		'not_found' => __( 'No artists found', 'artist_page' ),
		'not_found_in_trash' => __( 'No artists found in Trash', 'artist_page' ),
		'parent_item_colon' => __( 'Parent Artist:', 'artist_page' ),
		'menu_name' => __( 'Artists', 'artist_page' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Chase Park Festival - Artist custom post type',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-microphone',
		'show_in_nav_menus' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => 'artist',
		'can_export' => true,
		'rewrite' => array(
			'slug' => 'artists',
			'with_front' => false,
			'feeds' => true,
			'pages' => false
		),
		'capability_type' => 'page'
	);

	register_post_type( 'artist_page', $args );
}	
?>