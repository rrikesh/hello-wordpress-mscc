<?php
/**
 * Plugin name: MSCC Filter
 * Description: Example of custom filters in WordPress
 */

add_filter( 'rr_minimal_footer', 'rr_filter_footer' );

function rr_filter_footer( $footer_string ) {
  return $footer_string . " Blog powered by the awesome MSCC Filter plugin!";
}


