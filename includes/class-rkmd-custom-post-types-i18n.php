<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://rkmediadesign.nl
 * @since      1.0.0
 *
 * @package    RKMD_Custom_Post_Types
 * @subpackage RKMD_Custom_Post_Types/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    RKMD_Custom_Post_Types
 * @subpackage RKMD_Custom_Post_Types/includes
 * @author     RK Mediadesign <info@rkmediadesign.nl>
 */
class RKMD_Custom_Post_Types_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-name',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
