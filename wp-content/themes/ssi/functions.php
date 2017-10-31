<?php 

function footer_scripts() 
{
	wp_register_script('jquery-cdn', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-cdn');
	
	wp_register_script('slider', 'http://responsiveslides.com/responsiveslides.min.js', array('jquery'), null, true);
	wp_enqueue_script('slider');
	
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
}
function main_styles() 
{
	wp_enqueue_style('lb-style', get_template_directory_uri() . '/css/lightbox.css', false, '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'main_styles');
add_action('init', 'footer_scripts');