<?php
/*
Plugin Name: Gravity From - Google Spreadsheet Save Data
Description: Plugin will add option to save the form data into google spread sheet
Version: 1.0.0
Author: Muhammad Atiq
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	exit;
}

define( 'GFGSS_PLUGIN_NAME', 'Google Spreadsheet Save Data' );
define( 'GFGSS_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'GFGSS_PLUGIN_URL', plugin_dir_url(__FILE__) );
define( 'GFGSS_SITE_BASE_URL',get_bloginfo('url'));

require(GFGSS_PLUGIN_PATH.'includes/gfgss_functions.php');
?>