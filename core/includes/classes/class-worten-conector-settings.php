<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class Worten_Conector_Settings
 *
 * This class contains all of the plugin settings.
 * Here you can configure the whole plugin data.
 *
 * @package		WOCONECTOR
 * @subpackage	Classes/Worten_Conector_Settings
 * @author		TERACONDITION
 * @since		1.0.1
 */
class Worten_Conector_Settings{

	/**
	 * The plugin name
	 *
	 * @var		string
	 * @since   1.0.1
	 */
	private $plugin_name;

	/**
	 * Our Worten_Conector_Settings constructor 
	 * to run the plugin logic.
	 *
	 * @since 1.0.1
	 */
	function __construct(){

		$this->plugin_name = WOCONECTOR_NAME;
	}

	/**
	 * ######################
	 * ###
	 * #### CALLABLE FUNCTIONS
	 * ###
	 * ######################
	 */

	/**
	 * Return the plugin name
	 *
	 * @access	public
	 * @since	1.0.1
	 * @return	string The plugin name
	 */
	public function get_plugin_name(){
		return apply_filters( 'WOCONECTOR/settings/get_plugin_name', $this->plugin_name );
	}
}
