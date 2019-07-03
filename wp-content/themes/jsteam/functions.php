<?php

function portfoliofiles()
{
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    // wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());

	// wp_enqueue_script( 'jquery',  '//code.jquery.com/jquery-2.1.1.min.js' );	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');	
}

add_action('wp_enqueue_scripts', 'portfoliofiles');

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
 
