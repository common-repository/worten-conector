<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'Worten_Conector' ) ) :

	/**
	 * Main Worten_Conector Class.
	 *
	 * @package		WOCONECTOR
	 * @subpackage	Classes/Worten_Conector
	 * @since		2.0
	 * @author		TERACONDITION
	 */
	final class Worten_Conector {

		/**
		 * The real instance
		 *
		 * @access	private
		 * @since	2.0
		 * @var		object|Worten_Conector
		 */
		private static $instance;

		/**
		 * WOCONECTOR helpers object.
		 *
		 * @access	public
		 * @since	2.0
		 * @var		object|Worten_Conector_Helpers
		 */
		public $helpers;

		/**
		 * WOCONECTOR settings object.
		 *
		 * @access	public
		 * @since	2.0
		 * @var		object|Worten_Conector_Settings
		 */
		public $settings;

		/**
		 * Throw error on object clone.
		 *
		 * Cloning instances of the class is forbidden.
		 *
		 * @access	public
		 * @since	2.0
		 * @return	void
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'You are not allowed to clone this class.', 'worten-conector' ), '1.0.1' );
		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @access	public
		 * @since	2.0
		 * @return	void
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'You are not allowed to unserialize this class.', 'worten-conector' ), '1.0.1' );
		}

		/**
		 * Main Worten_Conector Instance.
		 *
		 * Insures that only one instance of Worten_Conector exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @access		public
		 * @since		2.0
		 * @static
		 * @return		object|Worten_Conector	The one true Worten_Conector
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Worten_Conector ) ) {
				self::$instance					= new Worten_Conector;
				self::$instance->base_hooks();
				self::$instance->includes();
				self::$instance->helpers		= new Worten_Conector_Helpers();
				self::$instance->settings		= new Worten_Conector_Settings();

				//Fire the plugin logic
				new Worten_Conector_Run();

				/**
				 * Fire a custom action to allow dependencies
				 * after the successful plugin setup
				 */
				do_action( 'WOCONECTOR/plugin_loaded' );
			}

			return self::$instance;
		}

		/**
		 * Include required files.
		 *
		 * @access  private
		 * @since   2.0
		 * @return  void
		 */
		private function includes() {
			require_once WOCONECTOR_PLUGIN_DIR . 'core/includes/classes/class-worten-conector-helpers.php';
			require_once WOCONECTOR_PLUGIN_DIR . 'core/includes/classes/class-worten-conector-settings.php';

			require_once WOCONECTOR_PLUGIN_DIR . 'core/includes/classes/class-worten-conector-run.php';
		}

		/**
		 * Add base hooks for the core functionality
		 *
		 * @access  private
		 * @since   2.0
		 * @return  void
		 */
		private function base_hooks() {
			add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
		}

		/**
		 * Loads the plugin language files.
		 *
		 * @access  public
		 * @since   2.0
		 * @return  void
		 */
		public function load_textdomain() {
			load_plugin_textdomain( 'worten-conector', FALSE, dirname( plugin_basename( WOCONECTOR_PLUGIN_FILE ) ) . '/languages/' );
		}

	}

endif; // End if class_exists check.