<?php
/**
 * Plugin Init
 * 
 * @package Lap_crm
 * @author nguyenlap
 * @since 0.0.1
 */
class Lap_Crm_Init
{
    public function __construct() 
    {
        $this->load_dependencies();

        add_action('plugins_loaded', [$this, 'maybe_upgrade_db_version']);
    }

    function maybe_upgrade_db_version() {
		do_action('npn_data_update_db_actions');

		$current_version = get_site_option( LAP_CRM_VERSION_DATA_NAME );

		if ( absint($current_version) < absint(LAP_CRM_DB_VERSION) ) {
			$this->clear_all_transients();
		}

		update_site_option(LAP_CRM_VERSION_DATA_NAME, LAP_CRM_DB_VERSION);
	}

    function clear_all_transients()
    {
        global $wpdb;

		$table_name = $wpdb->prefix . 'options';
		$sql        = "DELETE FROM $table_name WHERE `option_name` LIKE ('%\_transient\_%')";

		$wpdb->query($sql);
    }

    function load_dependencies()
    {
        
    }
}