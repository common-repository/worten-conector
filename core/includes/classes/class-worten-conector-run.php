<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class Worten_Conector_Run
 *
 * Thats where we bring the plugin to life
 *
 * @package		WOCONECTOR
 * @subpackage	Classes/Worten_Conector_Run
 * @author		TERACONDITION
 * @since		1.0.1
 */
class Worten_Conector_Run{

	/**
	 * Our Worten_Conector_Run constructor 
	 * to run the plugin logic.
	 *
	 * @since 1.0.1
	 */
	function __construct(){
		$this->add_hooks();
	}

	/**
	 * ######################
	 * ###
	 * #### WORDPRESS HOOKS
	 * ###
	 * ######################
	 */

	/**
	 * Registers all WordPress and plugin related hooks
	 *
	 * @access	private
	 * @since	1.0.1
	 * @return	void
	 */
	private function add_hooks(){
	
		add_action( 'plugin_action_links_' . WOCONECTOR_PLUGIN_BASE, array( $this, 'add_plugin_action_link' ), 20 );
		add_action( 'admin_bar_menu', array( $this, 'add_admin_bar_menu_items' ), 100, 1 );
	
	}

	/**
	 * ######################
	 * ###
	 * #### WORDPRESS HOOK CALLBACKS
	 * ###
	 * ######################
	 */

	/**
	* Adds action links to the plugin list table
	*
	* @access	public
	* @since	1.0.1
	*
	* @param	array	$links An array of plugin action links.
	*
	* @return	array	An array of plugin action links.
	*/
	public function add_plugin_action_link( $links ) {

		$links['our_shop'] = sprintf( '<a href="%s" title="Configurações" style="font-weight:700;">%s</a>', 'https://teracondition.outsystemscloud.com/Mirakl_Connector/', __( 'Subscribe', 'worten-conector' ) );

		return $links;
	}

	/**
	 * Add a new menu item to the WordPress topbar
	 *
	 * @access	public
	 * @since	1.0.1
	 *
	 * @param	object $admin_bar The WP_Admin_Bar object
	 *
	 * @return	void
	 */
	public function add_admin_bar_menu_items( $admin_bar ) {

		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-id', // The ID of the node.
			'title'		=> __( 'Worten Connector', 'worten-conector' ), // The text that will be visible in the Toolbar. Including html tags is allowed.
			'parent'	=> false, // The ID of the parent node.
			'href'		=> '#', // The ‘href’ attribute for the link. If ‘href’ is not set the node will be a text node.
			'group'		=> false, // This will make the node a group (node) if set to ‘true’. Group nodes are not visible in the Toolbar, but nodes added to it are.
			'meta'		=> array(
				'title'		=> __( 'Worten Conenctor', 'worten-conector' ), // The title attribute. Will be set to the link or to a div containing a text node.
				'target'	=> '_self', // The target attribute for the link. This will only be set if the ‘href’ argument is present.
				'class'		=> 'worten-conector-class', // The class attribute for the list item containing the link or text node.
				'html'		=> false, // The html used for the node.
				'rel'		=> false, // The rel attribute.
				'onclick'	=> false, // The onclick attribute for the link. This will only be set if the ‘href’ argument is present.
				'tabindex'	=> false, // The tabindex attribute. Will be set to the link or to a div containing a text node.
			),
		));

		// Submenu "About integration"
		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-sub-id',
			'title'		=> __( 'About integration', 'worten-conector' ),
			'parent'	=> 'worten-conector-id', // Make it a child of "Worten Connector"
			'href'		=> 'https://mirakl.teracondition.pt',
			'group'		=> false,
			'meta'		=> array(
				'title'		=> __( 'Learn about the integration with Worten Marketplace and Woocommerce', 'worten-conector' ),
				'target'	=> '_blank',
				'class'		=> 'worten-conector-sub-class',
				'html'		=> false,    
				'rel'		=> false,
				'onclick'	=> false,
				'tabindex'	=> false,
			),
		));

		// Submenu "Access Backoffice"
		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-sub-id2',
			'title'		=> __( 'Access Backoffice', 'worten-conector' ),
			'parent'	=> 'worten-conector-id', // Make it a child of "Worten Connector"
			'href'		=> 'https://teracondition.outsystemscloud.com/Mirakl_Connector',
			'group'		=> false,
			'meta'		=> array(
				'title'		=> __( 'Access and manage your integration', 'worten-conector' ),
				'target'	=> '_blank',
				'class'		=> 'worten-conector-sub-class',
				'html'		=> false,    
				'rel'		=> false,
				'onclick'	=> false,
				'tabindex'	=> false,
			),
		));

		// Submenu "Subscribe and Activate"
		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-sub-id3',
			'title'		=> __( 'Subscribe and Activate', 'worten-conector' ),
			'parent'	=> 'worten-conector-id', // Make it a child of "Worten Connector"
			'href'		=> 'https://teracondition.outsystemscloud.com/Mirakl_Connector/subscribe',
			'group'		=> false,
			'meta'		=> array(
				'title'		=> __( 'Subscribe and activate the Worten Marketplace Connector', 'worten-conector' ),
				'target'	=> '_blank',
				'class'		=> 'worten-conector-sub-class',
				'html'		=> false,    
				'rel'		=> false,
				'onclick'	=> false,
				'tabindex'	=> false,
			),
		));

		// Submenu "Other Solutions"
		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-other-solutions',
			'title'		=> __( 'Other Solutions', 'worten-conector' ),
			'parent'	=> 'worten-conector-id', // Make it a child of "Worten Connector"
			'group'		=> false,
			'meta'		=> array(
				'title'		=> __( 'Other integration solutions', 'worten-conector' ),
				'target'	=> '_self',
				'class'		=> 'worten-conector-other-solutions-class',
				'html'		=> false,    
				'rel'		=> false,
				'onclick'	=> false,
				'tabindex'	=> false,
			),
		));

		// Submenu "Worten Offers Export Simple Products" (inside "Other Solutions")
		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-worten-offers-export',
			'title'		=> __( 'Worten Offers Export Simple Products', 'worten-conector' ),
			'parent'	=> 'worten-conector-other-solutions', // Make it a child of "Other Solutions"
			'href'		=> 'https://wte.outsystemscloud.com/WordpressWiz/WooCommerce', // Add your URL here
			'group'		=> false,
			'meta'		=> array(
				'title'		=> __( 'Learn about Worten Offers Export', 'worten-conector' ),
				'target'	=> '_blank',
				'class'		=> 'worten-conector-worten-offers-export-class',
				'html'		=> false,    
				'rel'		=> false,
				'onclick'	=> false,
				'tabindex'	=> false,
			),
		));

		// Submenu "Leroy Merlin Export Simple Products" (inside "Other Solutions")
		$admin_bar->add_menu( array(
			'id'		=> 'worten-conector-leroy-merlin-export',
			'title'		=> __( 'Leroy Merlin Offers Export Simple Products', 'worten-conector' ),
			'parent'	=> 'worten-conector-other-solutions', // Make it a child of "Other Solutions"
			'href'		=> 'https://wte.outsystemscloud.com/WordpressWiz/WooCommerce', // Add your URL here
			'group'		=> false,
			'meta'		=> array(
				'title'		=> __( 'Learn about Leroy Merlin Export', 'worten-conector' ),
				'target'	=> '_blank',
				'class'		=> 'worten-conector-leroy-merlin-export-class',
				'html'		=> false,    
				'rel'		=> false,
				'onclick'	=> false,
				'tabindex'	=> false,
			),
		));
	}

}
