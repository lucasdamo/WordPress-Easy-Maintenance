<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since      2.0.0
 *
 * @package    Wordpress_Easy_Maintenance
 * @subpackage Wordpress_Easy_Maintenance/admin
 * @author     Lucas Damo <contact@lucasdamo.com>
 */

class Wordpress_Easy_Maintenance_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    2.0.0
	 * @param    string    $plugin_name       The name of this plugin.
	 * @param    string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wordpress-easy-maintenance-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wordpress-easy-maintenance-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Includes the menu page file, to be used as argument to add_submenu_page
	 *
	 * @since    2.0.0
	 */
  public function call_menu(){
    include ( plugin_dir_path(__FILE__) . 'partials/wordpress-easy-maintenance-admin-display.php' );
  }

	/**
	 * Register all options and initialize if it has not been yet
	 *
	 * TODO: Refactor
	 * @since    2.0.0
	 */
	public function register_settings(){
		/* Register all settings */
    register_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_active', 'strval' );
    register_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_page_title', 'strval' );
    register_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_h1_text', 'strval' );
    register_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_note', 'strvsal' );
    register_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_title', 'strval' );
    register_setting( 'wordpress_easy_maintenance_admin_display', 'wordpress_easy_maintenance_header_hex', 'strval' );

    /* Set settings' defaults */
		if (get_option('wordpress_easy_maintenance_active') == '' ) {
	    update_option('wordpress_easy_maintenance_active', 'disabled');
	    update_option('wordpress_easy_maintenance_page_title', 'Page Title');
	    update_option('wordpress_easy_maintenance_h1_text', 'Main Text');
	    update_option('wordpress_easy_maintenance_note', 'Note');
	    update_option('wordpress_easy_maintenance_title', 'Title');
	    update_option('wordpress_easy_maintenance_header_hex', '#8a8a8a');
		}
	}


	/**
	 * Add submenu to the wordpress submenu index
	 *
	 * @since    2.0.0
	*/
  public function add_menu(){
    add_submenu_page('options-general.php', 'Easy Maintenance', 'Easy Maintenance', 'manage_options', 'easy_maintenance_menu', array( $this, 'call_menu'));

  }


}
