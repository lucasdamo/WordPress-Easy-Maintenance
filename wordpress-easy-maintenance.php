<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since             2.0.0
 * @package           Wordpress_Easy_Maintenance
 *
 * @wordpress-plugin
 * Plugin Name:		  Wordpress Easy Maintenance
 * Plugin URI:
 * Description:		  Basic plugin where you can show a different page to users not logged in. Easily to use your own template or personalize the default.
 * Author:			  Lucas Damo <contact@lucasdamo.com>
 * Author URI:	      https://www.lucasdamo.com/
 * Version:			  2.0.0
 * License:           MIT
 * License URI:       https://choosealicense.com/licenses/mit/
 * Text Domain:       wordpress-easy-maintenance
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'WORDPRESS_EASY_MAINTENANCE_VERSION', '2.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_wordpress_easy_maintenance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-easy-maintenance-activator.php';
	Wordpress_Easy_Maintenance_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_wordpress_easy_maintenance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-easy-maintenance-deactivator.php';
	Wordpress_Easy_Maintenance_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress_easy_maintenance' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress_easy_maintenance' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-easy-maintenance.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 */
function run_wordpress_easy_maintenance() {

	$plugin = new Wordpress_Easy_Maintenance();
	$plugin->run();

}
run_wordpress_easy_maintenance();
