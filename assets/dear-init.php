<?php
/**
 * Dear Plugin Initializer
 *
 * Initializes everything for the plugin.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * WP_DEARTWO Class.
 */
if ( file_exists( DEARTWO_DIR . '/assets/class-dear.php' ) ) {
	require_once( DEARTWO_DIR . '/assets/class-dear.php' );
}


/**
 * Actions/Filters.
 */

if ( class_exists( 'WP_DEARTWO' ) ) {
	/**
	 * Object for `WP_DEARTWO` class.
	 *
	 * @var 	object
	 */
	$deartwo_obj = new WP_DEARTWO();

	// Hook the deartwo to head.
	// add_action( 'wp_enqueue_scripts', array( $deartwo_obj, 'deartwo' ) );
	add_action( 'wp_head', array( $deartwo_obj, 'dear_power' ) );



	// Register the shortcode [deartwo]
	add_action( 'init', array( $deartwo_obj, 'shortcode' ) );


} // class_exits() ended.

