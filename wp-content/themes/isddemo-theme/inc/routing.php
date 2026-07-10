<?php
/**
 * Custom Routing
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register custom rewrite rules
 */
add_action( 'init', function() {
    add_rewrite_rule( '^contact/?$', 'index.php?isd_contact=1', 'top' );
    add_rewrite_rule( '^about/?$',   'index.php?isd_about=1',   'top' );
    add_rewrite_rule( '^portfolio/?$', 'index.php?isd_portfolio=1', 'top' );
} );

/**
 * Add custom query vars
 */
add_filter( 'query_vars', function( $query_vars ) {
    $query_vars[] = 'isd_contact';
    $query_vars[] = 'isd_about';
    $query_vars[] = 'isd_portfolio';
    return $query_vars;
} );

/**
 * Template include for custom pages
 */
add_action( 'template_include', function( $template ) {
    if ( get_query_var( 'isd_contact' ) ) {
        $t = get_stylesheet_directory() . '/page-contact.php';
        if ( file_exists( $t ) ) return $t;
    }
    if ( get_query_var( 'isd_about' ) ) {
        $t = get_stylesheet_directory() . '/page-about.php';
        if ( file_exists( $t ) ) return $t;
    }
    if ( get_query_var( 'isd_portfolio' ) ) {
        $t = get_stylesheet_directory() . '/page-portfolio.php';
        if ( file_exists( $t ) ) return $t;
    }
    return $template;
} );
