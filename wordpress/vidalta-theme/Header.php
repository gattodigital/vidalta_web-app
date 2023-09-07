<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <meta name="robots" content="noindex" />
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="author" content="<?php bloginfo('name'); ?>" />
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>

  <!-- 3rd party stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

  <!-- Theme stylesheets -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- WP Header Hook -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="web-app">

    <header class="app-header bg-dark">
      <div class="header-content container-xxl py-1">
        <div class="header-navigation navbar navbar-expand-lg">

          <!-- Header icon -->
          <div class="header-brand col py-3">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/brand/vidalta-logo_color.svg" alt="<?php bloginfo('name'); ?> Logo, color" />
            </a>
          </div>
          <!-- /.header-brand -->

          <!-- User navigation items -->
          <nav id="headerSubNav" class="col order-lg-last d-none">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link link-light" href="#"><i class=" fa-solid fa-globe me-1"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-light" href="#"><i class=" fa-regular fa-circle-question me-1"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-light" href="#"><i class=" fa-regular fa-circle-user me-1"></i></a>
              </li>
            </ul>
          </nav>
          <!-- /#headerSubNav -->

          <!-- Mobile menu button -->
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headerMainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            <span class="sr-only">Toggle navigation</span>
          </button>

          <!-- Main navigation -->
          <nav id="headerMainNav" class="collapse navbar-collapse col">
            <?php
            wp_nav_menu(array(
              'theme_location'  => 'header-menu',
              'container'       => '',
              'menu_class'      => 'navbar-nav',
              'fallback_cb'     => false,
              'depth'           => 1,
            ));
            ?>
          </nav>
          <!-- /#headerMainNav -->
        </div>
        <!-- /.header-navigation -->
      </div>
      <!-- /.header-content -->
    </header>
    <!-- /.app-header -->