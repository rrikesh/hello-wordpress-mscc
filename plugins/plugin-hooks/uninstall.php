<?php

/**
 * WP_UNINSTALL_PLUGIN is only defined when a uninstall.php file is found in the plugin folder. 
 */
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ){
    exit();
}


# Do your stuff here
delete_option( 'rr_value123' );