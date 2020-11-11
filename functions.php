<?php 

function online_store_init()
{
    add_theme_support( 'post-thumbnails' , array( 'post' , 'product' , 'sale' , 'productpage' , 'testimonial' , 'slider' ) ); 
    add_theme_support('title-tag');	
    add_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme' , 'online_store_init' );


function online_store_scripts()
{
    wp_enqueue_style( 'style' ,  get_stylesheet_uri(), NULL, microtime() );
}
    add_action( 'wp_enqueue_scripts' , 'online_store_scripts');


//Custom header
	add_theme_support('custom-header');

    register_nav_menus( array(
        'primary' => __('Primary Menu')
	) );


  //custom footer 

  register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    register_sidebar( array(
    'name' => 'Footer Area 2',
    'id' => 'footer-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    register_sidebar( array(
    'name' => 'Footer Area 3',
    'id' => 'footer-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    

//custom post types
include get_theme_file_path( 'inc/products.php');
include get_theme_file_path( 'inc/sale.php');
include get_theme_file_path( 'inc/productspage.php');
include get_theme_file_path( 'inc/testimonials.php' );
include get_theme_file_path( 'inc/slider.php' );
include get_theme_file_path( 'inc/product-metabox.php' );



