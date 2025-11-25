<?php
/**
 * Enqueue theme assets properly
 */
function wp_template_replace_jquery() {
    if ( is_admin() ) return;

    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true );
    
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', false, array( 'jquery-core' ), '3.7.1', true );
    
    // Optional but recommended: keep jquery-migrate for plugin compatibility
    wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.4.1.min.js', array('jquery-core'), '3.4.1', true );
}
add_action( 'wp_enqueue_scripts', 'wp_template_replace_jquery', 5 );

function wp_template_enqueue_assets() {
    $theme_uri = get_template_directory_uri();
    $style_path = get_template_directory() . '/assets/css/style.css';
    $style_version = file_exists( $style_path ) ? filemtime( $style_path ) : '1.0.0';

    // Theme stylesheet with cache busting
    wp_enqueue_style( 
        'wp-template-style', 
        $theme_uri . '/assets/css/style.css', 
        array(), 
        $style_version 
    );

    // Bootstrap 5 CSS
    wp_enqueue_style( 
        'bootstrap-css', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', // Updated to latest 5.3.3
        array(), 
        '5.3.3' 
    );

    // Bootstrap 5 JS Bundle (includes Popper)
    wp_enqueue_script( 
        'bootstrap-js', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', 
        array('jquery'), // Now safely depends on our fixed jQuery
        '5.3.3', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'wp_template_enqueue_assets' );

function wp_template_enqueue_bootstrap_icons() {
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3' );
}
add_action( 'wp_enqueue_scripts', 'wp_template_enqueue_bootstrap_icons', 5 );