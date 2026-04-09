<?php

// ============================================================
// AFFILIATE LINK HELPERS
// ============================================================

/**
 * Build an affiliate-tracked URL by appending UTM parameters.
 * Pass $utm_source as the affiliate network name (e.g. 'viator', 'airbnb').
 */
function vidalta_affiliate_url($url, $utm_source = 'vidalta', $utm_medium = 'affiliate', $utm_campaign = 'travel') {
  if (empty($url)) return '#';
  $separator = (strpos($url, '?') !== false) ? '&' : '?';
  return esc_url(
    $url . $separator .
    'utm_source=' . rawurlencode($utm_source) .
    '&utm_medium=' . rawurlencode($utm_medium) .
    '&utm_campaign=' . rawurlencode($utm_campaign)
  );
}

/**
 * Return the display label for a known affiliate provider.
 */
function vidalta_provider_label($provider) {
  $labels = array(
    'airbnb'        => 'Airbnb',
    'vrbo'          => 'VRBO',
    'booking'       => 'Booking.com',
    'viator'        => 'Viator',
    'getyourguide'  => 'GetYourGuide',
    'tripadvisor'   => 'Tripadvisor',
    'expedia'       => 'Expedia',
  );
  return isset($labels[$provider]) ? $labels[$provider] : ucfirst($provider);
}

// ============================================================
// CUSTOM POST TYPES
// ============================================================

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

function vidalta_enqueue_scripts() {
  // Register and enqueue your stylesheet
  wp_enqueue_style('vidalta-style', get_stylesheet_uri());

  // Register and enqueue third-party scripts
  wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js', array(), '5.2.3', true);
  wp_enqueue_script('litepicker', 'https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js', array(), null, true);

  // Register and enqueue custom script
  wp_enqueue_script('ui-functions', get_template_directory_uri() . '/assets/js/ui-functions.js', array(), null, true);
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
function create_reviews_post_type()
{
  register_post_type(
    'reviews',
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

function reviews_slider_shortcode()
{
  $args = array(
    'post_type' => 'reviews',
    'posts_per_page' => -1
  );

  $reviews_query = new WP_Query($args);

  if ($reviews_query->have_posts()) {
    ob_start();
    echo '<div id="reviewSlider" class="carousel slide carousel-slider_text" data-bs-ride="carousel"><div class="carousel-inner">';

    while ($reviews_query->have_posts()) {
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

function cta_button_shortcode()
{
  $cta_button_text = get_field('cta_button_text', get_option('page_on_front'));
  $cta_button_link = get_field('cta_button_link', get_option('page_on_front'));

  if ($cta_button_text && $cta_button_link) {
    return '<a href="' . esc_url($cta_button_link) . '" class="btn btn-lg btn btn-primary px-4">' . esc_html($cta_button_text) . '</a>';
  } else {
    return '';
  }
}
add_shortcode('cta_button', 'cta_button_shortcode');

function custom_rewrite_rule()
{
  add_rewrite_rule('^property-details/([0-9]+)/?', 'index.php?pagename=property-details&property_id=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);

function custom_query_vars($vars)
{
  $vars[] = 'property_id';
  $vars[] = 'experience_id';
  return $vars;
}
add_filter('query_vars', 'custom_query_vars', 10, 1);

// This code ensures that the rewrite rules are flushed and your new rule is added.
function my_rewrite_flush()
{
  custom_rewrite_rule();
  flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'my_rewrite_flush');

// ============================================================
// EXPERIENCES POST TYPE
// ============================================================

function create_experiences_post_type()
{
  register_post_type(
    'experiences',
    array(
      'labels'      => array(
        'name'               => __('Experiences', 'vidalta'),
        'singular_name'      => __('Experience', 'vidalta'),
        'add_new_item'       => __('Add New Experience', 'vidalta'),
        'edit_item'          => __('Edit Experience', 'vidalta'),
        'new_item'           => __('New Experience', 'vidalta'),
        'view_item'          => __('View Experience', 'vidalta'),
        'search_items'       => __('Search Experiences', 'vidalta'),
        'not_found'          => __('No experiences found', 'vidalta'),
        'not_found_in_trash' => __('No experiences found in trash', 'vidalta'),
      ),
      'public'       => true,
      'has_archive'  => true,
      'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
      'menu_icon'    => 'dashicons-location-alt',
      'rewrite'      => array('slug' => 'experiences'),
    )
  );
}
add_action('init', 'create_experiences_post_type');

// ============================================================
// DESTINATIONS TAXONOMY (shared by vacation-homes & experiences)
// ============================================================

function create_destinations_taxonomy()
{
  register_taxonomy(
    'destination',
    array('vacation-homes', 'experiences'),
    array(
      'labels'       => array(
        'name'              => __('Destinations', 'vidalta'),
        'singular_name'     => __('Destination', 'vidalta'),
        'search_items'      => __('Search Destinations', 'vidalta'),
        'all_items'         => __('All Destinations', 'vidalta'),
        'edit_item'         => __('Edit Destination', 'vidalta'),
        'update_item'       => __('Update Destination', 'vidalta'),
        'add_new_item'      => __('Add New Destination', 'vidalta'),
        'new_item_name'     => __('New Destination Name', 'vidalta'),
        'menu_name'         => __('Destinations', 'vidalta'),
      ),
      'hierarchical' => true,
      'show_ui'      => true,
      'show_in_menu' => true,
      'rewrite'      => array('slug' => 'destination'),
    )
  );
}
add_action('init', 'create_destinations_taxonomy');

// ============================================================
// EXPERIENCE REWRITE RULES
// ============================================================

function experience_rewrite_rule()
{
  add_rewrite_rule('^experience-details/([0-9]+)/?', 'index.php?pagename=experience-details&experience_id=$matches[1]', 'top');
}
add_action('init', 'experience_rewrite_rule', 10, 0);

// ============================================================
// HIGHLIGHT EXPERIENCES SHORTCODE
// ============================================================

function highlight_experiences_shortcode()
{
  ob_start();
  get_template_part('sections/highlight-experiences');
  return ob_get_clean();
}
add_shortcode('highlight_experiences', 'highlight_experiences_shortcode');
