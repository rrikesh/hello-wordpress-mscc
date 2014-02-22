<?php
/**
 * Template Name: Ajax
 */
?>
 <!-- template file: <?php echo __FILE__; ?> -->

<?php get_header(); ?>


<!-- start blog post -->


<ul id="posts">

</ul>

<a href="#" id="call-ajax">Get some random posts</a>


</div><!-- /.blog-main -->

<?php
if ( is_page() ) {
  get_sidebar( 'mypages' ); # Calls for sidebar-mypages.php template file from the current theme's directory.
}
else {
  get_sidebar(); # Includes the sidebar.php template file from the current theme's directory.
}
?>

<?php
get_footer();

