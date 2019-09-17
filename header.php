<!doctype html>
<!--
     _                    _
    | |__   ___ _   _    (_) ___   ___
    | '_ \ / _ \ | | |   | |/ _ \ / _ \
    | | | |  __/ |_| |   | | (_) |  __/
    |_| |_|\___|\__, |  _/ |\___/ \___|
                |___/  |__/

    Design, Front-end
    & Wordpress Development:

    JONATHAN BELTRÁN
    http://heyjoe.com.co
    Email: hola@heyjoe.com.co
    Location: Bogotá, Colombia

-->
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAO - Del Llano Alto Oleico</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->

    <?php wp_head(); ?>
  </head>
  <body class="dao fade-out">
  <div id="scrolTop"></div>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-expand-lg fixed-top" role="navigation">
      <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/daoLogo.png" alt="DAO - Del LLano Alto Oléico">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
        <?php
        wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'main-nav',
          'menu_class'        => 'navbar-nav ml-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </div>
    </nav>

