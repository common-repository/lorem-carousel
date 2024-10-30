<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://owlpixel.com
 * @since      1.0.0
 *
 * @package    Lorem_Carousel
 * @subpackage Lorem_Carousel/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lorem_Carousel
 * @subpackage Lorem_Carousel/includes
 * @author     Anowar Hossen <anrctg@gmail.com>
 */
class Lorem_Carousel_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lorem-carousel',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
