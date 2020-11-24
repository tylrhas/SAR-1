<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="img/favicon.png">

    <title>SAR-1</title>
   <link href="<?php bloginfo('stylesheet_url');?>"rel="stylesheet" type="text/css"/>
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600,700" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
      <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" class="navbar fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" >
          <img class="logo" src="https://www.sar-1.ca/wp-content/uploads/2016/10/logo-sar.png"/>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
            <?php
            if (is_user_logged_in()) {
                $menu = 'logged-in';
            } else {
                $menu = 'logged-out';
            }

            wp_nav_menu(array(
              'menu' => $menu,
              'theme_location'  => 'main',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>
      </div>
    </div>
  </nav>
    
<div class="content">
        <!--header end-->