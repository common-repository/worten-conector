<?php
/**
 * Worten Conector
 *
 * @package       WOCONECTOR
 * @author        TERACONDITION
 * @license       gplv2
 * @version       2.5
 *
 * @wordpress-plugin
 * Plugin Name:   Worten Conector
 * Plugin URI:    https://mirakl.teracondition.pt
 * Description:   Catalog and orders integration between your Woocommerce Store and Worten Marketplace
 * Version:       2.5
 * Author:        TERACONDITION
 * Author URI:    https://teracondition.pt
 * Text Domain:   worten-conector
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with Worten Conector. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Plugin name
define( 'WOCONECTOR_NAME',			'Worten Conector' );

// Plugin version
define( 'WOCONECTOR_VERSION',		'2.4' );

// Plugin Root File
define( 'WOCONECTOR_PLUGIN_FILE',	__FILE__ );

// Plugin base
define( 'WOCONECTOR_PLUGIN_BASE',	plugin_basename( WOCONECTOR_PLUGIN_FILE ) );

// Plugin Folder Path
define( 'WOCONECTOR_PLUGIN_DIR',	plugin_dir_path( WOCONECTOR_PLUGIN_FILE ) );

// Plugin Folder URL
define( 'WOCONECTOR_PLUGIN_URL',	plugin_dir_url( WOCONECTOR_PLUGIN_FILE ) );

/**
 * Load the main class for the core functionality
 */
require_once WOCONECTOR_PLUGIN_DIR . 'core/class-worten-conector.php';

/**
 * The main function to load the only instance
 * of our master class.
 *
 * @author  TERACONDITION
 * @since   2.0
 * @return  object|Worten_Conector
 */
function WOCONECTOR() {
	return Worten_Conector::instance();
}

WOCONECTOR();
