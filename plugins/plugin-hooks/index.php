<?php
/**
 * Plugin Name: MSCC Plugin hooks
 * Description: Example of how activation, deactivation and uninstall hooks work
 */

defined( 'ABSPATH' ) or die;

register_activation_hook( __FILE__, 'myplugin_activate' );
register_deactivation_hook( __FILE__, 'myplugin_deactivate' );

function myplugin_activate() {
    update_option( 'rr_value123', 'ACTIVATED' );
}


function myplugin_deactivate() {
    update_option( 'rr_value123', 'DEACTIVATED' );
 }