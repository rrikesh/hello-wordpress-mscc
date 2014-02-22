<?php
/**
 * File that defines the pagination functions used in the theme
 *
 * Those functions have been adaped from the Twenty Thirteen theme
 */


if( !function_exists( 'rr_minimal_post_nav' ) ){

/**
 * Based on  twentythirteen_post_nav()
 * @return void
 */
function rr_minimal_post_nav() {


  $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
  $next = get_adjacent_post( false, '', false );

  if ( !$next && !$previous )
    return;
  ?>
  previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'twentythirteen' ) );
  next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'twentythirteen' ) );
  <?php
}
}



# Based on twentythirteen_paging_nav()

function rr_minimal_pagination() {
  global $wp_query;

  // Don't print empty markup if there's only one page.
  if ( $wp_query->max_num_pages < 2 )
    return;
  ?>
  <nav class="navigation paging-navigation" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentythirteen' ); ?></h1>
    <div class="nav-links">

      <?php if ( get_next_posts_link() ) : ?>
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentythirteen' ) ); ?></div>
      <?php endif; ?>

      <?php if ( get_previous_posts_link() ) : ?>
        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?></div>
  <?php endif; ?>

    </div><!-- .nav-links -->
  </nav><!-- .navigation -->
  <?php
}