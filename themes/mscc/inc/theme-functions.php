<?php

/**
 * File that defines all the functions we are using in this theme 
 */
add_action( 'wp_enqueue_scripts', 'rr_minimal_enqueue_assets' );


if ( !function_exists( 'rr_minimal_enqueue_assets' ) ) {

  /**
   * Enqueue CSS and JS
   *
   * @uses wp_enqueue_style() to enqueue CSS
   * @uses wp_enqueue_script() to enqueue JS
   * 
   * @return void
   *
   */
  function rr_minimal_enqueue_assets() {

    # Add CSS
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'blogcss', get_template_directory_uri() . '/css/blog.css' );
    # Enqueue style.css
    wp_enqueue_style( 'minimalcss', get_stylesheet_uri() );

    # Add JS
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_script( 'minimaljs', get_template_directory_uri() . '/js/minimal.js', array('jquery') );
    wp_localize_script( 'minimaljs', 'minimal', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
  }

}

if ( !function_exists( 'rr_minimal_display_footer_copyright' ) ) {

  /**
   * Displays the copyright string in the footer
   * 
   * @return string
   */
  function rr_minimal_display_footer_copyright() {

    return 'WordPress theme by <a href="http://twitter.com/rrikesh">@RRikesh</a>.';
  }

}