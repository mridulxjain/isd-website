<?php
/**
 * Functions and definitions
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Includes
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/menus.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/routing.php';

// Disable default WooCommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Add Favicon
add_action( 'wp_head', function() {
    echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( get_template_directory_uri() . '/assets/images/favicon.svg' ) . '">';
} );

// Override Site Title
add_filter( 'option_blogname', function() {
    return 'Interior Shapes Design';
} );
