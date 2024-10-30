<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://owlpixel.com
 * @since             1.0.1
 * @package           Lorem_Carousel
 *
 * @wordpress-plugin
 * Plugin Name:       Lorem Carousel
 * Plugin URI:        https://wpditto.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.2.2
 * Author:            Anowar Hossen
 * Author URI:        https://owlpixel.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lorem-carousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LOREM_CAROUSEL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lorem-carousel-activator.php
 */
function activate_lorem_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lorem-carousel-activator.php';
	Lorem_Carousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lorem-carousel-deactivator.php
 */
function deactivate_lorem_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lorem-carousel-deactivator.php';
	Lorem_Carousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lorem_carousel' );
register_deactivation_hook( __FILE__, 'deactivate_lorem_carousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lorem-carousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lorem_carousel() {

	$plugin = new Lorem_Carousel();
	$plugin->run();

}
run_lorem_carousel();




// Add the custom columns to the lorem carousel post type:
add_filter( 'manage_lorem_carousel_posts_columns', 'set_custom_edit_book_columns' );
function set_custom_edit_book_columns($columns) {
    unset( $columns['author'] );
    $columns['shortcode'] = __( 'Shortcode', 'your_text_domain' );

    return $columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_lorem_carousel_posts_custom_column' , 'custom_book_column', 10, 2 );
function custom_book_column( $column, $post_id ) {
    switch ( $column ) {

        case 'shortcode' :
                _e( '<input style="width:100%;border:none;box-shadow:none" value="[lorem-carousel carousel_id='.$post_id.']" readonly>', 'your_text_domain' );
            break;

    }
}