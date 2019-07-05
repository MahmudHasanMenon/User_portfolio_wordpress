<?php

// function portfoliofiles()
// {
//    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
//     // wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
//     wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());

// 	// wp_enqueue_script( 'jquery',  '//code.jquery.com/jquery-2.1.1.min.js' );	
// 	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');	
// }

// add_action('wp_enqueue_scripts', 'portfoliofiles');

function mytheme_load_bootstrap() {
    if ( is_admin() ) {
       return;
    }
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1' );
    wp_deregister_script( 'jquery' ); // Remove WP jQuery version
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_load_bootstrap' );

function theme_setup() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-background', apply_filters( 'bootstrap2wordpress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

    register_nav_menu('primary', 'Primary Header Navigation Menu');
    register_nav_menu('secondary', 'Footer Navigation Menu');
}
add_action('init', 'theme_setup');

function GoogleMapKey($api) {
    $api['key'] = 'AIzaSyBDQnrAQzneJc7RsZ2cUs33vMsyqHEMtlA';
    return $api;
}

add_filter('acf/fields/google_map/api', 'GoogleMapKey');

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function bootstrap2wordpress_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bootstrap2wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Extra Sidebar', 'bootstrap2wordpress' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'bootstrap2wordpress_widgets_init' );

 
