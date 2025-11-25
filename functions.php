<?php
function bootstrap_clean_scripts() {
    // Bootstrap 5 CSS (CDN)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');

    // jQuery (WordPress already includes it)
    wp_enqueue_script('jquery');

    // Bootstrap 5 JS (needs Popper, included in bundle)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);

    // Your custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);

    // Your custom CSS (optional)
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/bootstrap-custom.css', array('bootstrap-css'), '1.0');
}
add_action('wp_enqueue_scripts', 'bootstrap_clean_scripts');

// Theme support
function bootstrap_clean_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'bootstrap_clean_setup');