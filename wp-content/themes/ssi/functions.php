<?php 

function footer_scripts() {
	wp_register_script('jquery-cdn', 'http://code.jquery.com/jquery-1.11.0.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-cdn');
	
	wp_register_script('slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('slick');
	
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
}

function custom_stylesheets() {
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css');
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
}

add_action( 'wp_enqueue_scripts', 'custom_stylesheets');
add_action('init', 'footer_scripts');