<?php
/**
 * Functions and definitions for Vidalta theme
 *
 * @package WordPress
 * @subpackage Vidalta
 * @since 1.0.0
 */

/**
 * Register WordPress nav menus
 */
function register_header_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            //'other-menu' => __('Other Menu'), // Uncomment and rename if you have other menus
        )
    );
}
add_action('init', 'register_header_menus');

/**
 * Include Bootstrap navwalker class
 */
if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'vidalta'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// Add class to navigation menu list items
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Add class to navigation menu links
function add_additional_class_on_links($atts, $item, $args) {
    if (isset($args->add_link_class)) {
        $atts['class'] = $args->add_link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_links', 10, 3);

// Add properties as custom posts in wp admin
function create_property_post_type() {
    $args = array(
        'labels' => array(
            'name' => __('Properties'),
            'singular_name' => __('Property')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'properties'),
        'show_in_rest' => true, // This enables the Gutenberg editor for this post type
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'), // These are the features the post type supports
    );
    register_post_type('property', $args);
}
add_action('init', 'create_property_post_type');

// Support post thumbnails
function theme_add_support() {
    add_theme_support('post-thumbnails', array('property'));
}
add_action('after_setup_theme', 'theme_add_support');

// Add highlight values to wp admin 
add_action( 'init', 'highlight_values_post_type', 0 );

function highlight_values_post_type() {
    $args = array(
        'label'                => __( 'Highlight Values', 'text_domain' ),
        'description'          => __( 'Post Type Description', 'text_domain' ),
        'supports'             => array( 'title', 'editor' ),
        'hierarchical'         => false,
        'public'               => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'menu_position'        => 5,
        'show_in_admin_bar'    => true,
        'show_in_nav_menus'    => true,
        'can_export'           => true,
        'has_archive'          => true,        
        'exclude_from_search'  => false,
        'publicly_queryable'   => true,
        'capability_type'      => 'page',
    );
    register_post_type( 'highlight_values', $args );
}

// Add highlight CTA to wp admin 
add_action( 'init', 'highlight_cta_post_type', 0 );

function highlight_cta_post_type() {
    $args = array(
        'label'                => __( 'Highlight CTA', 'text_domain' ),
        'description'          => __( 'Post Type Description', 'text_domain' ),
        'supports'             => array( 'title', 'editor' ),
        'hierarchical'         => false,
        'public'               => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'menu_position'        => 6,
        'show_in_admin_bar'    => true,
        'show_in_nav_menus'    => true,
        'can_export'           => true,
        'has_archive'          => true,        
        'exclude_from_search'  => false,
        'publicly_queryable'   => true,
        'capability_type'      => 'page',
    );
    register_post_type( 'highlight_cta', $args );
}

// Footer settings 
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'  => 'Footer Settings',
        'menu_title'  => 'Footer Settings',
        'menu_slug'   => 'footer-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
    
}

function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Remove additional <p> tags added by Wordpress:
remove_filter( 'the_content', 'wpautop' );



// Continue adding your theme's functions below...
