<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y');?> - <?php bloginfo('name');?></p>
  <p>
    <a href="#">Back to top</a>
  </p>

  <div class="nav-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <!-- Your website Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
             wp_nav_menu( array(
             'menu'              => 'footer',
             'theme_location'    => 'footer',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => '',
             'container_id'      => '',
             'menu_class'        => 'navbar-nav mr-auto',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );
        ?>
    </div>
    <!-- End -->
</nav>
  </div>

</footer>
  <?php wp_footer();?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>
