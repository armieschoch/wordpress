<?php
// Register Custom Navigation Walker
  require_once('class-wp-bootstrap-navwalker.php');

  //Theme Support

  function wpb_theme_setup(){

    add_theme_support('post-thumbnails');

    //Nav Menus
    register_nav_menus(array('primary' => __('Primary Menu')
  ));

// Posts Formats

  add_theme_support('post-formats', array('aside', 'gallery'));

  register_nav_menus(array('footer' => __('Footer Menu')
));
  }
    add_action('after_setup_theme', 'wpb_theme_setup');

    function theme_scripts() {
    /*Bootstrap style reference*/
    wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/Bootstrap/bootstrap.css' );
    /*End*/

    /*Your theme stylesheet reference*/
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    /*End*/
}
  add_action( 'wp_enqueue_scripts', 'theme_scripts' );
  function theme_js () {
    /*jQuery Reference*/
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1');
    wp_enqueue_script('jquery');
    /*End*/

    /*Bootstrap js reference*/
    wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/Bootstrap/bootstrap.js', array(), '1.0.0', true );
    /*End*/
 }
add_action( 'init', 'theme_js' );

//Set Excerpt Length
  function set_excerpt_length(){
  return 45;
}

    add_filter('excerpt_length', 'set_excerpt_length');

    //Widgets Locations

   function wpb_init_widgets($id){
     register_sidebar(array(
       'name'  => 'Sidebar',
       'id'  => 'sidebar',
       'before_widget'  => '<aside class ="blog-sidebar">',
       'after_widget'   => '</aside>',
       'before_title' => '<h4>',
       'after_title'  => '</h4>'
     ));

       register_sidebar(array(
         'name'  => 'Box1',
         'id'  => 'box1',
         'before_widget'  => '<aside class ="box">',
         'after_widget'   => '</aside>',
         'before_title' => '<h3>',
         'after_title'  => '</h3>'
       ));

         register_sidebar(array(
           'name'  => 'Box2',
           'id'  => 'box2',
           'before_widget'  => '<aside class ="box">',
           'after_widget'   => '</aside>',
           'before_title' => '<h3>',
           'after_title'  => '</h3>'
         ));

           register_sidebar(array(
             'name'  => 'Box3',
             'id'  => 'box3',
             'before_widget'  => '<aside class ="box">',
             'after_widget'   => '</aside>',
             'before_title' => '<h3>',
             'after_title'  => '</h3>'
           ));
   }

   add_action('widgets_init','wpb_init_widgets');

   //Customizer File

   require get_template_directory(). '/inc/customizer.php';

 ?>
