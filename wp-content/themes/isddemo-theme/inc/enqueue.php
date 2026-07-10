<?php
/**
 * Scripts and Styles Enqueue
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Enqueue theme styles and scripts
 */
function isddemo_enqueue_assets() {
    $ver = wp_get_theme()->get( 'Version' );
    $uri = get_template_directory_uri();

    // Google Fonts
    wp_enqueue_style(
        'isd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap',
        [],
        null
    );

    // Main stylesheet (which imports all module CSS)
    wp_enqueue_style(
        'isddemo-theme-style',
        get_stylesheet_uri(),
        [ 'isd-google-fonts' ],
        $ver
    );

    // Modular JS (deferred for performance)
    $js_files = [
        'isd-animations'    => 'assets/js/animations.js',
        'isd-navbar'        => 'assets/js/navbar.js',
        'isd-counters'      => 'assets/js/counters.js',
        'isd-slider'        => 'assets/js/slider.js',
        'isd-testimonials'  => 'assets/js/testimonials.js',
        'isd-filters'       => 'assets/js/filters.js',
        'isd-main'          => 'assets/js/main.js',
    ];

    foreach ( $js_files as $handle => $path ) {
        wp_enqueue_script(
            $handle,
            $uri . '/' . $path,
            [],
            $ver,
            true // load in footer
        );
    }

    // Contact page JS (only on contact page template)
    if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) || get_query_var( 'isd_contact' ) ) {
        wp_enqueue_script(
            'isd-contact',
            $uri . '/assets/js/contact.js',
            [],
            $ver,
            true
        );
    }

    // About page CSS & JS
    if ( get_query_var( 'isd_about' ) ) {
        wp_enqueue_style(
            'isd-about',
            $uri . '/assets/css/about.css',
            [ 'isddemo-theme-style' ],
            $ver
        );
        wp_enqueue_script(
            'isd-about',
            $uri . '/assets/js/about.js',
            [],
            $ver,
            true
        );
    }

    // Comment reply
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'isddemo_enqueue_assets' );

/**
 * Preload critical resources
 */
function isddemo_preload_resources() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="dns-prefetch" href="https://images.unsplash.com">' . "\n";
}
add_action( 'wp_head', 'isddemo_preload_resources', 1 );
