<?php
/**
 * Plugin Name: MSCC CAPITALISE POSTS
 */

 add_filter( 'the_content', 'rr_action_capitalise' );
 
 function rr_action_capitalise( $content ){

    $content = strtoupper( $content );

    return $content;    
 }
 
 