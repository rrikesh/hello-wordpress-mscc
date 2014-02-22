<?php
/**
 * define a custom post type and taxonomy
 */

add_action( 'init', 'rr_create_taxo' );
add_action( 'init', 'rr_create_post_type' );

function rr_create_taxo() {
  register_taxonomy(
    'genre',
    'book',
    array(
            'label' => __( 'Genre' ),
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
    )
  );
}

function rr_create_post_type() {
    $args = array(
      'public' => true,
      'label'  => 'Books'
    );
    register_post_type( 'book', $args );
}