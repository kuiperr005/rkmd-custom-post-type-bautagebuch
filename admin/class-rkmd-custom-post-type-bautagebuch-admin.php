<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://rkmediadesign.nl
 * @since      1.0.0
 *
 * @package    RKMD_Custom_Post_Type_Bautagebuch 
 * @subpackage RKMD_Custom_Post_Type_Bautagebuch/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    RKMD_Custom_Post_Type_Bautagebuch
 * @subpackage RKMD_Custom_Post_Type_Bautagebuch/admin
 * @author     RK Mediadesign <info@rkmediadesign.nl>
 */
class RKMD_Custom_Post_Type_Bautagebuch_Admin {

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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rkmd-custom-post-type-bautagebuch-admin.css', array(), $this->version, 'all' );

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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rkmd-custom-post-type-bautagebuch-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Create CPT for Bautagebuch
	 * @return function creates custom post type
	 */
	public function create_cpt_bautagebuch() {
	    register_post_type( 'bautagebuch',
	        array(
	            'labels' => array(
	                'name' => 'Bautagebuch',
	                'singular_name' => 'Artikel',
	                'add_new' => 'Hinzufügen',
	                'add_new_item' => 'Neuen Artikel hinzufügen',
	                'edit' => 'Bearbeiten',
	                'edit_item' => 'Atrikel bearbeiten',
	                'new_item' => 'Neuen Artikel',
	                'view' => 'ansehen',
	                'view_item' => 'Artikel anzeigen',
	                'search_items' => 'Suche Artikel',
	                'not_found' => 'Keine Einträge gefunden',
	                'not_found_in_trash' => 'Keine Artikel im Müll gefunden',
	                'parent' => 'Hauptartikel'
	            ),
	            'public' => true,
	            'menu_position' => 4,
	            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
	            'taxonomies' => array( '' ),
	            'menu_icon' => 'dashicons-book-alt',
	            'has_archive' => false,

	            // The rewrite handles the URL structure.
				'rewrite' => array(
					'slug'       => 'artikel',
					'with_front' => false,
					'pages'      => true,
					'feeds'      => true,
					'ep_mask'    => EP_PERMALINK,
				)
	        )
	    );
	}

}
