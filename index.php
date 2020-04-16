<?php
/*
Plugin Name: Easy Maintenance
Plugin URI:
Description: Basic plugin where you can show a different page to users not logged in. Easy to use your own template.
Author: Lucas Damo
Author URI: https://www.lucasdamo.com/
Version: 1.2.0
*/


// Exits if accessed directly
if (! defined ('ABSPATH')) {
	exit;
}


if (is_admin()){

	/* Register Option(s) */
	function wpem_maintenance_register_options(){
		register_setting( 'wpem_maintenance_settings_group', 'wpem_maintenance_active', 'strval' );
		register_setting( 'wpem_maintenance_settings_group', 'wpem_maintenance_page_title', 'strval' );
		register_setting( 'wpem_maintenance_settings_group', 'wpem_maintenance_h1_text', 'strval' );
		register_setting( 'wpem_maintenance_settings_group', 'wpem_maintenance_note', 'strvsal' );
		register_setting( 'wpem_maintenance_settings_group', 'wpem_maintenance_title', 'strval' );
		register_setting( 'wpem_maintenance_settings_group', 'wpem_maintenance_header_hex', 'strval' );
	}
	add_action( 'admin_init', 'wpem_maintenance_register_options');
	if (get_option('wpem_maintenance_active') == '' ) {
		update_option('wpem_maintenance_active', 'disabled');
	}
	if (get_option('wpem_maintenance_page_title') == '') {
		update_option('wpem_maintenance_page_title', 'Change Title' );
	}
	if (get_option('wpem_maintenance_header_hex') == ''){
		update_option('wpem_maintenance_header_hex', '#1df9b7' );
	}

	/* Check if wpem main external plugin is active or not */
	function wpem_maintenance_check_wpem(){
		if(function_exists('wpem_add_menu')){
			return 1; 
		}
		else {
			return 0;
		}
	}

	/* If wpem plugin is running, sets maintenance menu under it */
	function wpem_maintenance_add_menu(){
		$wpem_maintenance_slug = 'options-general';
		if (wpem_maintenance_check_wpem() === 1){$wpem_maintenance_slug = 'wpem_plugins';}
		add_submenu_page($wpem_maintenance_slug . '.php', 'wpem Maintenance', 'Maintenance', 5, 'wpem_maintenance', 'wpem_maintenance_menu');
	}

	?>
	<?php

	/* Getting admin settings page from another file */
	require('maintenance-adminpage.php');
	/* Calling it in Wordpress */
	add_action( 'admin_menu', 'wpem_maintenance_add_menu', 3);
}

/* Checks if the user is on the login page */
function wpem_is_login_page(){
	return in_array($GLOBALS['pagenow'], array('wp-login.php'));
}

/* Checks if user is logged in and has rights or is on the login page */
function wpem_check_showornot(){
	if (!is_admin() && !wpem_is_login_page() && !current_user_can('manage_options') && get_option('wpem_maintenance_active') == 'enabled') {
		return true;
	}
	else {
		return false;
	}
}

/* Calls the maintenance page and shows it to the user */
function wpem_show_maintenance(){
	if (wpem_check_showornot()){
		require('maintenance-userpage.php');
		exit();
	}
}

/* Add the plugin as a high priority action. It must be loaded before the page to work! */
add_action('init', 'wpem_show_maintenance', 1);
?>
