<?php
/*

Plugin Name: Copyproof Website
Plugin URI: http://www.devilhunter.net/
Description: This PlugIn makes your website copyproof. No need to edit settings or do something else. Only PlugIn activation is enough to bring change for whole website.
Version: 2.0
Author: Tawhidur Rahman Dear
Author URI: https://www.facebook.com/tawhidurrahmandear/
License: GPLv2 or later

     Author Introduction:
     Tawhidur Rahman Dear

     Founder & CEO
     Dear IT Solution
     (IT Consultancy, Web Development, AdSense, SEO, Password Recovery & Security, Online Marketing)
	 
     Mailing Address: 
     House - 304, Road - 10 Rupnagar Tinshed,
     Pallabi, Mirpur,
     Dhaka - 1216
     BANGLADESH
	
     http://www.devilhunter.net/
     dear@devilhunter.net
     tawhidurrahmandear@gmail.com
     +8801716816283, (also in Viber, DUO, WhatsApp, IMO)
     Skype & Google Hangout: tawhidurrahmandear
     Facebook: http://www.facebook.com/tawhidurrahmandear/ 
     Google Plus: http://plus.google.com/+tawhidurrahmandear/about
     LinkedIn: https://www.linkedin.com/in/tawhidurrahmandear  
	

 * @package Copyproof Website
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'DEARTWO_VERSION' ) ) {
    define( 'DEARTWO_VERSION', '1.0.0' );
}

if ( ! defined( 'DEARTWO_NAME' ) ) {
    define( 'DEARTWO_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('DEARTWO_DIR' ) ) {
    define( 'DEARTWO_DIR', WP_PLUGIN_DIR . '/' . DEARTWO_NAME );
}

if ( ! defined('DEARTWO_URL' ) ) {
    define( 'DEARTWO_URL', WP_PLUGIN_URL . '/' . DEARTWO_NAME );
}


/**
 * Plugin Initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( DEARTWO_DIR . '/assets/dear-init.php' ) ) {
    require_once( DEARTWO_DIR . '/assets/dear-init.php' );
}
