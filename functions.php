<?php
/**
 * home_services functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package home_services
 */

/**
* Enqueue Style
*/
add_action( 'wp_enqueue_scripts', 'home_services');
function home_services() {
	wp_enqueue_style( 'home-services-style', get_template_directory_uri(). '/style.css');
	wp_enqueue_style( 'home-services-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
