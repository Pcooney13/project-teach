<?php
function site_scripts() {
    global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // JS - Main Site
    //=====

    // modernizr
    wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr-2.7.1.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/js'), true );
    // General
    wp_enqueue_script( 'general', get_template_directory_uri() . '/assets/js/general.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/js'), true );
    // Header
    wp_enqueue_script( 'header-js', get_template_directory_uri() . '/assets/js/header.js', array(), filemtime(get_template_directory() . '/assets/js'), true );
    // Cookie
    wp_enqueue_script( 'cookie-js', '//cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js', array(), null, true);        
    // vanilla js
    wp_enqueue_script('main-javascript', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime(get_template_directory() . '/assets/js'), true);
    // Splide js (carousel)
    wp_enqueue_script('Splide', get_template_directory_uri() . '/assets/js/splide.min.js', array(), filemtime(get_template_directory() . '/assets/js'), true);

    // CSS - Main Site
    //=====

    // Gotham Fonts
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    // Tailwind
    wp_enqueue_style( 'Tailwind', get_template_directory_uri() . '/assets/css/tailwind.css');
    // Register main stylesheet
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    // Register Header styles
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css');
    // Register Hero Banner styles
    wp_enqueue_style( 'hero', get_template_directory_uri() . '/assets/css/temp/template-hero-content.css');
    // Register Important Notice Banner styles
    wp_enqueue_style( 'important-notice', get_template_directory_uri() . '/assets/css/temp/template-important-notice.css');
    // Add these styles
    wp_enqueue_style( 'Splide-css', get_template_directory_uri() . '/assets/css/splide.min.css');
    // wp_enqueue_style( 'Blog', get_template_directory_uri() . '/assets/css/blog.css');

    // Specific Cases
    //=====

    wp_dequeue_style('post-grid-style-css');

    // Front Page
    if (is_front_page()) {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'duplicate-post' );
        wp_dequeue_style( 'heateor_sss_frontend_css' );
        wp_dequeue_style( 'heateor_sss_sharing_default_svg' );
        wp_dequeue_style( 'jquery-ui' );
        wp_dequeue_script( 'heateor_sss_sharing_js' );
        wp_dequeue_script( 'modernizr-js' );
    }
        
    // Blog Pages & Post Pages
    if (is_home() || is_category() || is_single() || is_page('covid')) {
        // Remove these styles
        wp_dequeue_style( 'jquery-ui' );
        wp_dequeue_style( 'wp-block-library' );
    }
    //  TEMP STYLES UNTIL ALL MERGED
    if (is_page('rating-scales')) {
        wp_enqueue_style( 'rating-scales', get_template_directory_uri() . '/assets/css/temp/rating-scales.css');
    }                   
    if (is_page(array('contact-us', 'parent-and-family-page'))) {
        wp_enqueue_style( 'request-service-form', get_template_directory_uri() . '/assets/css/temp/template-request-service.css');
    }
       
    if (is_page('online-courses')) {
        wp_enqueue_script( 'Online Courses', get_template_directory_uri() . '/assets/js/online-courses.js', array(), filemtime(get_template_directory() . '/assets/js'), true);
    }
    // Online Courses
    require_once(get_stylesheet_directory() . '/ethos/ethos.php');
    require_once(get_stylesheet_directory() . '/post-grid/courses-post-grid.php');
    require_once(get_stylesheet_directory() . '/post-grid/resources-post-grid.php');
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
