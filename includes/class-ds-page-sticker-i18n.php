<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link        @dsnger
 * @since      1.0.0
 *
 * @package    Ds_Page_Sticker
 * @subpackage Ds_Page_Sticker/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ds_Page_Sticker
 * @subpackage Ds_Page_Sticker/includes
 * @author     Daniel Sänger <mail@daniel-saenger.de>
 */
class Ds_Page_Sticker_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ds-page-sticker',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
