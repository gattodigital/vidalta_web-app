<?php

// Registers custom menus for the theme
function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_my_menus');

// Add custom class to menu links
function add_menu_link_class($atts, $item, $args)
{
  if ($args->theme_location == 'header-menu') {
    $atts['class'] = 'nav-link link-light';
  }

  if ($args->theme_location == 'footer-menu') {
    $atts['class'] = 'nav-link link-light';
  }

  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

// Add custom class to menu list items
function add_menu_list_item_class($classes, $item, $args)
{
  if ($args->theme_location == 'header-menu') {
    $classes[] = 'nav-item';
  }

  if ($args->theme_location == 'footer-menu') {
    $classes[] = 'nav-item';
  }

  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// Hero spotlights
function vidalta_enqueue_scripts()
{
  // Register and enqueue your stylesheet
  wp_enqueue_style('vidalta-style', get_stylesheet_uri());

  // If you have additional stylesheets or scripts, enqueue them here
}
add_action('wp_enqueue_scripts', 'vidalta_enqueue_scripts');

function highlight_products_shortcode()
{
  ob_start();
  get_template_part('sections/highlight-products');
  return ob_get_clean();
}
add_shortcode('highlight_products', 'highlight_products_shortcode');

// Add static Reviews
function create_reviews_post_type() {
  register_post_type('reviews',
      array(
          'labels'      => array(
              'name'          => __('Reviews', 'textdomain'),
              'singular_name' => __('Review', 'textdomain'),
          ),
          'public'      => true,
          'has_archive' => true,
          'supports'    => array('title', 'editor', 'thumbnail'),
          'menu_icon'   => 'dashicons-star-filled',  // This is the Dashicon class for a quote icon
      )
  );
}
add_action('init', 'create_reviews_post_type');

function reviews_slider_shortcode() {
  $args = array(
      'post_type' => 'reviews',
      'posts_per_page' => -1
  );

  $reviews_query = new WP_Query($args);

  if($reviews_query->have_posts()) {
      ob_start();
      echo '<div id="reviewSlider" class="carousel slide carousel-slider_text" data-bs-ride="carousel"><div class="carousel-inner">';

      while($reviews_query->have_posts()) {
          $reviews_query->the_post();
          echo '<div class="carousel-item">';
          echo '<div class="h2 text-white">';
          echo get_the_content();
          echo '</div></div>';
      }

      wp_reset_postdata();

      echo '</div></div>';
      return ob_get_clean();
  } else {
      return '<p>No reviews found.</p>';
  }
}
add_shortcode('reviews_slider', 'reviews_slider_shortcode');

function cta_button_shortcode() {
  $cta_button_text = get_field('cta_button_text', get_option('page_on_front'));
  $cta_button_link = get_field('cta_button_link', get_option('page_on_front'));

  if( $cta_button_text && $cta_button_link ) {
      return '<a href="' . esc_url($cta_button_link) . '" class="btn btn-lg btn btn-primary px-4">' . esc_html($cta_button_text) . '</a>';
  } else {
      return '';
  }
}
add_shortcode('cta_button', 'cta_button_shortcode');
