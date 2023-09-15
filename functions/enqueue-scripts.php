<?php
function site_scripts() {
    // == JS ==
    // Header
    wp_enqueue_script( 'header-js', get_template_directory_uri() . '/assets/js/header.js', array(), filemtime(get_template_directory() . '/assets/js'), true );
    // Main js
    wp_enqueue_script('main-javascript', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime(get_template_directory() . '/assets/js'), true);
    // Splide js (carousel)
    wp_enqueue_script('Splide', get_template_directory_uri() . '/assets/js/splide.min.js', array(), filemtime(get_template_directory() . '/assets/js'), true);

    // == CSS ==
    // Gotham Fonts
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    // Header - Temporary
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css');
    // Tailwind
    wp_enqueue_style( 'Tailwind', get_template_directory_uri() . '/assets/css/tailwind.css');
    // Register main stylesheet
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css');
    // Add these styles
    wp_enqueue_style( 'Splide-css', get_template_directory_uri() . '/assets/css/splide.min.css');

    // Online Courses
    require_once(get_stylesheet_directory() . '/ethos/ethos.php');
    require_once(get_stylesheet_directory() . '/post-grid/courses-post-grid.php');
    require_once(get_stylesheet_directory() . '/post-grid/resources-post-grid.php');
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
