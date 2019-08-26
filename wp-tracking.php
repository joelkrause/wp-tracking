<?php
/**
 * Plugin Name: WP Tracking
 * Plugin URI:  https://jkrs.me
 * Description: Gives you the ability to Add tracking scripts to your head &amp; footer
 * Version:     1.0.0
 * Author:      Joel Krause
 * Author URI:  https://jkrs.me
 * Text Domain: wp-tracking
 * Domain Path: /languages
 * License:     GPL2
 */
// Define variables
define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include(MY_PLUGIN_PATH.'assets/include.php');

// Include script imports
include(MY_PLUGIN_PATH.'lib/_head.php');
include(MY_PLUGIN_PATH.'lib/_body.php');
include(MY_PLUGIN_PATH.'lib/_footer.php');

// Include settings page
include(MY_PLUGIN_PATH.'lib/_settings.php');