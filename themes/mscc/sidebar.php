      <!-- template file <?php echo __FILE__; ?> -->
      <?php
      /**
       * Widgetizing Themes: http://codex.wordpress.org/Widgetizing_Themes
       */
      ?>

      <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <?php if (! dynamic_sidebar('sidebar-not-page') ) : ?>
        <div class="sidebar-module">
          <h4>Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
        <?php endif;?>



      </div><!-- /.blog-sidebar -->