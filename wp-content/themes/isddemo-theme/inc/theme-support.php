<?php
/**
 * Theme Support Features
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function isddemo_theme_setup() {
    // Title tag managed by WordPress
    add_theme_support( 'title-tag' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'isd-hero',      1920, 1080, true );
    add_image_size( 'isd-project',    800,  600, true );
    add_image_size( 'isd-blog-card',  600,  400, true );
    add_image_size( 'isd-about',      800,  700, true );

    // RSS feeds
    add_theme_support( 'automatic-feed-links' );

    // HTML5 markup
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ] );

    // Custom logo
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => [ 'isd-navbar__logo-text', 'isd-footer__logo-text' ],
    ] );

    // WooCommerce support
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Block editor
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'isddemo_theme_setup' );

/**
 * Content width
 */
function isddemo_content_width() {
    $GLOBALS['content_width'] = 1280;
}
add_action( 'after_setup_theme', 'isddemo_content_width', 0 );
