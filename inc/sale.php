<?php 

// Register Custom Post Type Sale
function create_sale_cpt() {

	$labels = array(
		'name' => _x( 'Sales', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Sale', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Sales', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Sale', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Sale Archives', 'textdomain' ),
		'attributes' => __( 'Sale Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Sale:', 'textdomain' ),
		'all_items' => __( 'All Sales', 'textdomain' ),
		'add_new_item' => __( 'Add New Sale', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Sale', 'textdomain' ),
		'edit_item' => __( 'Edit Sale', 'textdomain' ),
		'update_item' => __( 'Update Sale', 'textdomain' ),
		'view_item' => __( 'View Sale', 'textdomain' ),
		'view_items' => __( 'View Sales', 'textdomain' ),
		'search_items' => __( 'Search Sale', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Sale', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Sale', 'textdomain' ),
		'items_list' => __( 'Sales list', 'textdomain' ),
		'items_list_navigation' => __( 'Sales list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Sales list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Sale', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-edit',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'sale', $args );

}
add_action( 'init', 'create_sale_cpt', 0 );


?>