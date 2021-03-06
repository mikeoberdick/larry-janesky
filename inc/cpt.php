<?php
/**
 * Setup Custom Post Types
 *
 * @package understrap
 */


//Create the Speech Post Type
add_action( 'init', 'speech_post_type', 0 );
function speech_post_type() {
// Set UI labels for Speeches
	$labels = array(
		'name'                => 'Speeches',
		'singular_name'       => 'Speech',
		'menu_name'           => 'Speeches',
		'parent_item_colon'   => 'Parent Speech',
		'all_items'           => 'All Speeches',
		'view_item'           => 'View Speech',
		'add_new_item'        => 'Add New Speech',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Speech',
		'update_item'         => 'Update Speech',
		'search_items'        => 'Search Speeches',
		'not_found'           => 'No Speech Found',
		'not_found_in_trash'  => 'No Speech Found in Trash',
	);
	
// Set other options for Speeches
	$args = array(
		'label'               => 'Speech',
		'description'         => 'Speech',
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'speeches', $args );
}

//Create the Timeline Event Post Type
add_action( 'init', 'event_post_type', 0 );
function event_post_type() {
// Set UI labels for Events
	$labels = array(
		'name'                => 'Events',
		'singular_name'       => 'Event',
		'menu_name'           => 'Events',
		'parent_item_colon'   => 'Parent Event',
		'all_items'           => 'All Events',
		'view_item'           => 'View Event',
		'add_new_item'        => 'Add New Event',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Event',
		'update_item'         => 'Update Event',
		'search_items'        => 'Search Events',
		'not_found'           => 'No Event Found',
		'not_found_in_trash'  => 'No Event Found in Trash',
	);
	
// Set other options for Events
	$args = array(
		'label'               => 'Event',
		'description'         => 'Event',
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'events', $args );
}