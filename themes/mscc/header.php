<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>
  </head>

  <body>

    <?php
    # http://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/
    $menuParameters = array(
      'container' => false,
      'echo' => false,
      'items_wrap' => '%3$s',
      'depth' => 0,
      'theme_location' => 'header-menu'
    );
    ?>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php echo strip_tags( wp_nav_menu( $menuParameters ), '<a>' ); ?>
        </nav>
      </div>
    </div>



    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
        <p class="lead blog-description"><?php bloginfo( 'description' ); ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          <!-- end template file: <?php echo __FILE__; ?> -->