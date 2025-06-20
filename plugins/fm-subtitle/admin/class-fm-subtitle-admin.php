<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://former-model.com
 * @since      1.0.0
 *
 * @package    Fm_Subtitle
 * @subpackage Fm_Subtitle/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Fm_Subtitle
 * @subpackage Fm_Subtitle/admin
 * @author     Geoff Cordner <geoffcordner@gmail.com>
 */
class Fm_Subtitle_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->loader->add_action( 'add_meta_boxes', $plugin_admin, 'add_subtitle_meta_box' );
		$this->loader->add_action( 'save_post', $plugin_admin, 'save_subtitle_meta' );

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fm_Subtitle_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fm_Subtitle_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fm-subtitle-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fm_Subtitle_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fm_Subtitle_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fm-subtitle-admin.js', array( 'jquery' ), $this->version, false );

	}
	/**
	 * Add a meta box for the subtitle field.
	 *
	 * @return void
	 */
	public function add_subtitle_meta_box() {
	add_meta_box(
		'fm_subtitle_meta_box',
		__( 'Subtitle', 'fm-subtitle' ),
		array( $this, 'render_subtitle_meta_box' ),
		'post', // or 'page' or custom post types
		'normal',
		'default'
	);
}


	

}
