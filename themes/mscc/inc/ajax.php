<?php
// File that contains the callback for ajax

// users not logged in
add_action( 'wp_ajax_nopriv_ajaxdemo', 'rr_minimal_ajax_callback' );
//users logged in
add_action( 'wp_ajax_ajaxdemo', 'rr_minimal_ajax_callback' );

function rr_minimal_ajax_callback(){
    
    $args = array(
        'post_type' => 'post',
        'orderby' => 'rand',
        'posts_per_page' => (int) $_POST['numposts']
    );
    
    $results = new WP_Query( $args );

    $output = array();
    
    if( $results->have_posts() ){
        while( $results->have_posts() ){
            $results->the_post();
            $output[] = sprintf( '<a href="%s">%s</a>', get_permalink(), get_the_title() );
        }
    }
    
    exit( json_encode( $output ) );
}