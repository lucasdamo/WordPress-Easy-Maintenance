<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @link       https://github.com/lucasdamo/WordPress-Easy-Maintenance
 * @since      2.0.0
 *
 * @package    Wordpress_Easy_Maintenance
 * @subpackage Wordpress_Easy_Maintenance/admin
 * @author     Lucas Damo <contact@lucasdamo.com>
 */

class Wordpress_Easy_Maintenance_Public {

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
	 * @param    string    $plugin_name       The name of the plugin.
	 * @param    string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wordpress-easy-maintenance-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wordpress-easy-maintenance-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Check which page was requested and if it is whitelisted
	 *
	 * @since    2.0.0
	 * @access   private
	 * @return   false if page is not whitelisted
	 *
	 * TODO: Enable pages selection on admin page
	 */
  private function in_whitelisted_page(){
    if (in_array($GLOBALS['pagenow'], array('wp-login.php') ) ) {
      return True;
    }
    return False;
  }

	/**
	 * Check user's role rights
	 *
	 * @since    2.0.0
	 * @access   private
	 * @return   false if user does not have manage_options
	 *
	 * TODO: Enable rights selection on admin page
	 */
  private function user_has_rights(){
    if (current_user_can('manage_options')) {
      return True;
    }
    return False;
  }

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 * @return   false if user should have no access
	 */
  private function allow_access(){
    if(get_option('wordpress_easy_maintenance_active') == 'disabled' || $this->in_whitelisted_page() || $this->user_has_rights() ){
      return true;
    }
    return false;
  }

	/**
	 * Block user's access if he has no rights to access website and show
	 * the maintenance page instead
	 *
	 * @since    2.0.0
	 * @access   public
	 */
  public function block_user(){
    if(!$this->allow_access()){

			// TODO: Study other workarounds to enable other .css to load:
			$wp_styles = WP_Styles();
			$this->enqueue_styles();
			$this->enqueue_scripts();
			$wp_styles->do_items();
      require_once dirname( __FILE__ ) . '/partials/wordpress-easy-maintenance-public-display.php';
			die();
    }
  }

}
