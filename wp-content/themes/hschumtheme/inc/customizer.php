<?php
  function wpb_customize_register($wp_customize){

    //Showcase section
    $wp_customize->add_section('showcase', array(
      'title'          => __('Showcase', 'hschumtheme'),
      'description'    => sprintf(__('Options for showcase', 'hschumtheme')),
      'priority'       => 130
));
    $wp_customize->add_setting('showcase_image', array(
      'default'        => get_bloginfo('template_directory').'/img/coloring.jpg',
      'type'           => 'theme_mod'
));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'      => __('Showcase Image', 'hschumtheme'),
      'section'    => 'showcase',
      'settings'   => 'showcase_image',
      'priority'   => 1
    )));

    $wp_customize->add_setting('showcase_logo', array(
      'default'        => get_bloginfo('template_directory').'/img/HSChum_Logo.png',
      'type'           => 'theme_mod'
));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_logo', array(
      'label'      => __('Showcase Logo', 'hschumtheme'),
      'section'    => 'showcase',
      'settings'   => 'showcase_logo',
      'priority'   => 2
    )));

    $wp_customize->add_setting('showcase_heading', array(
      'default'        => _x('Custom Homeschool Chum Theme', 'hschumtheme'),
      'type'           => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'      => __('Heading', 'hschumtheme'),
      'section'    => 'showcase',
      'priority'   => 3
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'        => _x('Pastrami turducken strip steak tri-tip, spare ribs pork belly short ribs turkey chuck pancetta cupim shoulder andouille pork. Burgdoggen strip steak pancetta, flank salami ham brisket venison biltong. Ball tip turducken porchetta bacon drumstick, hamburger tail pork chop shankle frankfurter cupim. Shoulder filet mignon fatback hamburger meatloaf turkey doner. Meatloaf short ribs tenderloin corned beef, flank pork kevin andouille brisket buffalo doner capicola hamburger pork chop leberkas. Leberkas landjaeger cupim, kielbasa pig frankfurter ribeye corned beef ham hock shoulder brisket.', 'hschumtheme'),
      'type'           => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'      => __('Text', 'hschumtheme'),
      'section'    => 'showcase',
      'priority'   => 4
    ));

    $wp_customize->add_setting('showcase_btn_url', array(
      'default'        => _x('http://test.com', 'hschumtheme'),
      'type'           => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_btn_url', array(
      'label'      => __('Showcase Button URL', 'hschumtheme'),
      'section'    => 'showcase',
      'priority'   => 5
    ));

    $wp_customize->add_setting('showcase_btn_text', array(
      'default'        => _x('Read More', 'hschumtheme'),
      'type'           => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_btn_text', array(
      'label'      => __('Showcase Button Text', 'hschumtheme'),
      'section'    => 'showcase',
      'priority'   => 6
    ));
  }
  add_action('customize_register', 'wpb_customize_register');
?>
