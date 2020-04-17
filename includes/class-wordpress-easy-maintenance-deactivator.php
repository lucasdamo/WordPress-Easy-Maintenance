<?php

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since      2.0.0
 *
 * @package    Wordpress_Easy_Maintenance
 * @subpackage Wordpress_Easy_Maintenance/includes
 * @author     Lucas Damo <contact@lucasdamo.com>
 */

class Wordpress_Easy_Maintenance_Deactivator {

  /**
   * Delete the plugin settings
   *
   * @since    2.0.0
   */


  /**
  * Called upon plugin's deactivation
  *
  * TODO: Refactor changing for a loop through all options
  * @since 2.0.0
  */
	public static function deactivate() {
    delete_option('wordpress_easy_maintenance_active');
    delete_option('wordpress_easy_maintenance_page_title');
    delete_option('wordpress_easy_maintenance_h1_text');
    delete_option('wordpress_easy_maintenance_note');
    delete_option('wordpress_easy_maintenance_title');
    delete_option('wordpress_easy_maintenance_header_hex');
	}

}
