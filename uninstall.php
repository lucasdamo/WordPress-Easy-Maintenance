<?php

/**
	* Provide a public-facing view for the plugin
	*
	* This file is used to markup the public-facing aspects of the plugin.
	*
	* @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
	* @since      2.1.1
	*
	* @package    Wordpress_Easy_Maintenance
	* @subpackage Wordpress_Easy_Maintenance/public/partials
	* @author     Lucas Damo <contact@lucasdamo.com>
	*
	* TODO: Documentate
 */



class Wordpress_Easy_Maintenance_Unistaller {

	public static function check_capabilities(){
		// If uninstall not called from WordPress, then exit.
		if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
		 	return False;

		// Important: Check if the file is the one
		// that was registered during the uninstall hook.
		if ( __FILE__ !== WP_UNINSTALL_PLUGIN )
			return False;

		if ( ! current_user_can( 'delete_plugins' ) )
			return False;

		return True;
	}

	public static function unregister_settings(){
		unregister_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_active');
		unregister_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_page_title');
		unregister_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_h1_text');
		unregister_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_h2_text');
	}


	public static function uninstall($request){
		if (! Wordpress_Easy_Maintenance_Unistaller::check_capabilities())
			exit;
		Wordpress_Easy_Maintenance_Unistaller::unregister_settings();
	}
}
