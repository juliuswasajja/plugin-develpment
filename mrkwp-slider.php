<?php
/**
 * Plugin Name:     MRKWP Slider
 * Plugin URI:      https://www.mrkwp.com
 * Description:     Block plugin that implements a carousel using ACF
 * Author:          Julius
 * Author URI:      
 * Version:         0.1.0
 * Text Domain:     mrkwp-slider-library
 * @package mrkwpslider
 * 
 */

  // If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'No Access!' );


 // Require once the Composer Autoload.
 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
     require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}
/**
 * Initialize all the core classes of the plugin.
 */
if ( class_exists( 'MRKWP_Slider\\Init' ) ) {
	MRKWP_Slider\Init::register_services();
}

