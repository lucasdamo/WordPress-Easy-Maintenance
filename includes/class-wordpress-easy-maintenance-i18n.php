<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since      2.0.0
 *
 * @package    Wordpress_Easy_Maintenance
 * @subpackage Wordpress_Easy_Maintenance/includes
 * @author	   Lucas Damo <contact@lucasdamo.com>
 */

class Wordpress_Easy_Maintenance_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    2.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wordpress-easy-maintenance',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
