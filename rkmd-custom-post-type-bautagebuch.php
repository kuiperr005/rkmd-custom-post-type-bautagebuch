<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://rkmediadesign.nl
 * @since             1.0.0
 * @package           RKMD Custom Post Type Bautagebuch
 *
 * @wordpress-plugin
 * Plugin Name:       RKMD Custom Post Type Bautagebuch
 * Plugin URI:        https://rkmediadesign.nl
 * Description:       Creates some custom post types that are used for this website
 * Version:           1.0.0
 * Author:            RK Mediadesign
 * Author URI:        https://rkmediadesign.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rkmd-custom-post-type-bautagebuch
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rkmd-custom-post-type-bautagebuch-activator.php
 */
function activate_rkmd_custom_post_type_bautagebuch() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rkmd-custom-post-type-bautagebuch-activator.php';
	RKMD_Custom_Post_Type_Bautagebuch_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rkmd-custom-post-type-bautagebuch-deactivator.php
 */
function deactivate_rkmd_custom_post_type_bautagebuch() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rkmd-custom-post-type-bautagebuch-deactivator.php';
	RKMD_Custom_Post_Type_Bautagebuch_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rkmd_custom_post_type_bautagebuch' );
register_deactivation_hook( __FILE__, 'deactivate_rkmd_custom_post_type_bautagebuch' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rkmd-custom-post-type-bautagebuch.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rkmd_custom_post_type_bautagebuch() {

	$plugin = new rkmd_custom_post_type_bautagebuch;
	$plugin->run();

}
run_rkmd_custom_post_type_bautagebuch();
