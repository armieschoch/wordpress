<!doctype html>

<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">

    <title>
      <?php bloginfo('name');?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!--Font Awesome-->
    <<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>

      <style>
        .showcase{
          background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/coloring.jpg'); ?>) no-repeat center center;
        }

        .blog-header-logo{
          background: url(<?php echo get_theme_mod('showcase_logo', get_bloginfo('template_url').'/img/HSChum_Logo.png'); ?>) no-repeat center center;
        }
      .blog-header-logo img{
          height: 200px;
          width: auto;
        }
    </style>
  </head>

  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-8 text-center">
        <a class="blog-header-logo text-dark" href="<?php bloginfo('url');?>">
          <?php bloginfo('name');?>
          </a>
          <p class="lead my-3"><?php bloginfo('description');?></p>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      </div>
    </div>
  </header>

  <div class="nav-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Your website Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
             wp_nav_menu( array(
             'menu'              => 'primary',
             'theme_location'    => 'primary',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => 'collapse navbar-collapse',
             'container_id'      => 'bs-example-navbar-collapse-1',
             'menu_class'        => 'navbar-nav mr-auto',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker())
             );?>
    </div>
    <!-- End -->
</nav>
  </div>

<section class="showcase">

    <h1><?php echo get_theme_mod('showcase_heading', 'Custom Wordpress Theme'); ?> </h1>
    <p><?php echo get_theme_mod('showcase_text', 'Pastrami turducken strip steak tri-tip, spare ribs pork belly short ribs turkey chuck pancetta cupim shoulder andouille pork. Burgdoggen strip steak pancetta, flank salami ham brisket venison biltong. Ball tip turducken porchetta bacon drumstick, hamburger tail pork chop shankle frankfurter cupim. Shoulder filet mignon fatback hamburger meatloaf turkey doner. Meatloaf short ribs tenderloin corned beef, flank pork kevin andouille brisket buffalo.'); ?></p>
    <a href="<?php echo get_theme_mod('showcase_btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('showcase_btn_text', 'Read More'); ?></a>

</section>
<section class="boxes">
<div class="container">
  <div class="row">
  <div class="col-md-4">
      <?php if(is_active_sidebar('box1')) : ?>
        <?php dynamic_sidebar('box1'); ?>
      <?php endif; ?>
  </div>

  <div class="col-md-4">
      <?php if(is_active_sidebar('box2')) : ?>
        <?php dynamic_sidebar('box2'); ?>
      <?php endif; ?>
  </div>

  <div class="col-md-4">
      <?php if(is_active_sidebar('box3')) : ?>
        <?php dynamic_sidebar('box3'); ?>
      <?php endif; ?>
</div>
</section>

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
