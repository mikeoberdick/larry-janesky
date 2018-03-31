<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme fonts
function d4tw_enqueue_fonts () {
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat' );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
    wp_enqueue_style( 'BX Slider CSS', get_stylesheet_directory_uri() . '/css/jquery.bxslider.min.css' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_fonts');
