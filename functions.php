<?php
function proform_theme_setup() {
    // Title tag support
    add_theme_support('title-tag');
    
    // Featured images support
    add_theme_support('post-thumbnails');
    
    // Navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));

    // WooCommerce support (jab aap baad mein activate karenge)
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'proform_theme_setup');

function proform_enqueue_styles() {
    // Main stylesheet link
    wp_enqueue_style('proform-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'proform_enqueue_styles');
?>