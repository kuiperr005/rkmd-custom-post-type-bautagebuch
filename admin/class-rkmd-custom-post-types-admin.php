<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://rkmediadesign.nl
 * @since      1.0.0
 *
 * @package    RKMD_Custom_Post_Types 
 * @subpackage RKMD_Custom_Post_Types/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    RKMD_Custom_Post_Types
 * @subpackage RKMD_Custom_Post_Types/admin
 * @author     RK Mediadesign <info@rkmediadesign.nl>
 */
class RKMD_Custom_Post_Types_Admin {

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rkmd-custom-post-types-admin.css', array(), $this->version, 'all' );

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rkmd-custom-post-types-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Create CPT for Activity
	 * @return function creates custom post type
	 */
	public function create_cpt_activity() {
	    register_post_type( 'activity',
	        array(
	            'labels' => array(
	                'name' => 'Activiteiten',
	                'singular_name' => 'Activiteit',
	                'add_new' => 'Nieuwe activiteit',
	                'add_new_item' => 'Nieuwe activiteit toevoegen',
	                'edit' => 'Bewerken',
	                'edit_item' => 'Bewerk Activiteit',
	                'new_item' => 'Nieuwe Activiteit',
	                'view' => 'Bekijken',
	                'view_item' => 'Bekijk Activiteit',
	                'search_items' => 'Zoek Activiteiten',
	                'not_found' => 'Geen Activiteiten gevonden',
	                'not_found_in_trash' => 'Geen Activiteiten gevonden in de prullenbak',
	                'parent' => 'Hoofdactiviteit'
	            ),
	            'public' => true,
	            'menu_position' => 4,
	            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
	            'taxonomies' => array( '' ),
	            'menu_icon' => 'dashicons-megaphone',
	            'has_archive' => true,

	            // The rewrite handles the URL structure.
				'rewrite' => array(
					'slug'       => 'activiteiten',
					'with_front' => false,
					'pages'      => true,
					'feeds'      => true,
					'ep_mask'    => EP_PERMALINK,
				)
	        )
	    );
	}

}
