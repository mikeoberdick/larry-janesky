<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme fonts
function d4tw_enqueue_fonts () {
	wp_enqueue_style( 'LexiaDaMa', get_stylesheet_directory_uri() . '/fonts/LexiaDaMa/stylesheet.css' );
	wp_enqueue_style( 'Gotham Light', get_stylesheet_directory_uri() . '/fonts/Gotham Light/stylesheet.css' );
	wp_enqueue_style( 'Gotham Bold', get_stylesheet_directory_uri() . '/fonts/Gotham Bold/stylesheet.css' );
	wp_enqueue_style( 'Skippy Sharpie', get_stylesheet_directory_uri() . '/fonts/Skippy Sharpie/stylesheet.css' );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_fonts');

// CSS for addon functionality
function d4tw_enqueue_addons () {
    wp_enqueue_style( 'BX Slider CSS', get_stylesheet_directory_uri() . '/css/jquery.bxslider.min.css' );
    wp_enqueue_style( 'Lightbox CSS', get_stylesheet_directory_uri() . '/swipe-box/src/css/swipebox.min.css' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_addons');
