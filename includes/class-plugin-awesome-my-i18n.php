<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       malkafly
 * @since      1.0.0
 *
 * @package    Plugin_Awesome_My
 * @subpackage Plugin_Awesome_My/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Awesome_My
 * @subpackage Plugin_Awesome_My/includes
 * @author     Daniel <daniel.malk@cloudwalk.io>
 */
class Plugin_Awesome_My_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-awesome-my',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
