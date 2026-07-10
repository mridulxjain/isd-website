<?php
/**
 * Custom Routing
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register custom rewrite rule for /contact route
 */
add_action( 'init', function() {
    add_rewrite_rule( '^contact/?$', 'index.php?isd_contact=1', 'top' );
} );

/**
 * Add custom query var
 */
add_filter( 'query_vars', function( $query_vars ) {
    $query_vars[] = 'isd_contact';
    return $query_vars;
} );

/**
 * Template include for contact page
 */
add_action( 'template_include', function( $template ) {
    if ( get_query_var( 'isd_contact' ) ) {
        $contact_template = get_stylesheet_directory() . '/page-contact.php';
        if ( file_exists( $contact_template ) ) {
            return $contact_template;
        }
    }
    return $template;
} );
