<?php 

// Register Custom Post Type testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'testimonial Archives', 'textdomain' ),
		'attributes' => __( 'testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent testimonial:', 'textdomain' ),
		'all_items' => __( 'All testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit testimonial', 'textdomain' ),
		'update_item' => __( 'Update testimonial', 'textdomain' ),
		'view_item' => __( 'View testimonial', 'textdomain' ),
		'view_items' => __( 'View testimonials', 'textdomain' ),
		'search_items' => __( 'Search testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'textdomain' ),
		'items_list' => __( 'testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'testimonial', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
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
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );