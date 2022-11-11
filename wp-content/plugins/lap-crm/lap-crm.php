<?php

/**
 * Lap CRM - WordPress Plugin
 *
 *
 * @link              https://lap-crm.vn
 * @since             0.0.1
 * @package           Lap_Crm
 *
 * @wordpress-plugin
 * Plugin Name:       LAP CRM - Customer relationship management
 * Plugin URI:        https://lap-crm.vn
 * Description:       Lightweight plugin to manage data in NhaPhoNet project.
 * Version:           0.0.1
 * Author:            Nguyen Lap
 * Author URI:        https://nguyenlap.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lap_crm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'LAP_CRM_VERSION', '0.0.1' );
define( 'LAP_CRM_DIR', plugin_dir_path(__FILE__) );
define( 'LAP_CRM_URI', plugin_dir_url(__FILE__) );
define( 'LAP_DB_VERSION_TABLE_NAME', 'npn_data_db_version' );
define( 'LAP_CRM_DB_VERSION', '100' );

require LAP_CRM_DIR . 'inc/plugin-init.php';

