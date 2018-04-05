<?php
/**
 * Register theme scripts
 *
 * @package understrap
 */

// Add the Javascript
function d4tw_enqueue_scripts () {
   wp_enqueue_script( 'D4TW Theme JS', get_stylesheet_directory_uri() . '/js/d4tw.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'BX Slider JS', get_stylesheet_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'Fitvids JS', get_stylesheet_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'Lightbox JS', get_stylesheet_directory_uri() . '/swipe-box/src/js/jquery.swipebox.min.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'Slick Slider JS', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'Timeline JS', get_stylesheet_directory_uri() . '/js/timeline.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'd4tw_enqueue_scripts' );
