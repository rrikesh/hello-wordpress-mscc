<!-- template file: <?php echo __FILE__; ?> -->

<?php get_header(); ?>


<!-- start blog post -->
<?php
# The WordPress Loop - http://codex.wordpress.org/The_Loop
if ( have_posts() ):
  while ( have_posts() ):
    the_post();
    ?>
    <div class="blog-post">
      <h2 class="blog-post-title"><?php the_title(); ?> <a href="<?php the_permalink(); ?>">#</a></h2>
      <p class="blog-post-meta">
        <?php echo get_the_date(); ?> by <?php the_author(); ?>
      </p>

      <?php the_content(); # the actual post ?>
    </div>
  <?php endwhile; ?>
<?php else: ?>
  <h3>No posts found!</h3>
<?php endif; ?>
<!-- end blog post -->


<?php rr_minimal_pagination(); ?>

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

