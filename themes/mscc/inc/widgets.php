<?php
/**
 * File that defines the widgets definition for this theme
 */

add_action( 'widgets_init', 'rr_minimal_widgets' );

if ( !function_exists( 'rr_minimal_widgets' ) ) {

  /**
   * Function to declare the widget areas used in the theme.
   * We'll have two widget blocks here, one for the post type "page" and one for the other posts
   *
   * @uses register_sidebar()
   *
   * @return void
   */
  function rr_minimal_widgets() {

    /**
     * If we're not on a page, display this widget
     */
    register_sidebar( array(
      'name' => 'sidebar-not-page',
      'id' => 'sidebar1',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
    ) );


    /**
     * Display this page if we are on a "page"
     */
    register_sidebar( array(
      'name' => 'sidebar-page',
      'id' => 'sidebar2',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
    ) );
  }

}


