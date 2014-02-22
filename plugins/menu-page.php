<?php
/**
 * Plugin Name: MSCC Dashboard menu page
 */

defined( 'ABSPATH' ) or die;

add_action( 'admin_menu', 'rr_menu_page' );

function rr_menu_page(){
    add_menu_page( 'Menu title', 'Custom Menu', 'manage_options', 'custompage', 'rr_menu_page_callback' ); 
}

function rr_menu_page_callback(){
    
    $option_value = get_option( 'rr_value123', 'NOT SET' );
    
    printf("<h1>%s</h1>", $option_value );	
}
