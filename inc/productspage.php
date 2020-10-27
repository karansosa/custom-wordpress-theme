<?php
// Register Custom Post Type productpage
function create_productpage_cpt() {

	$labels = array(
		'name' => _x( 'prodcutpages', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'productpage', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'prodcutpages', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'productpage', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'productpage Archives', 'textdomain' ),
		'attributes' => __( 'productpage Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent productpage:', 'textdomain' ),
		'all_items' => __( 'All prodcutpages', 'textdomain' ),
		'add_new_item' => __( 'Add New productpage', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New productpage', 'textdomain' ),
		'edit_item' => __( 'Edit productpage', 'textdomain' ),
		'update_item' => __( 'Update productpage', 'textdomain' ),
		'view_item' => __( 'View productpage', 'textdomain' ),
		'view_items' => __( 'View prodcutpages', 'textdomain' ),
		'search_items' => __( 'Search productpage', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into productpage', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this productpage', 'textdomain' ),
		'items_list' => __( 'prodcutpages list', 'textdomain' ),
		'items_list_navigation' => __( 'prodcutpages list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter prodcutpages list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'productpage', 'textdomain' ),
		'description' => __( 'Products inside of product page', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site',
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
	register_post_type( 'productpage', $args );

}
add_action( 'init', 'create_productpage_cpt', 0 );