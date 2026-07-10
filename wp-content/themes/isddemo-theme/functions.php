<?php
/**
 * Indian Shape Designer functions and definitions
 */

if ( ! function_exists( 'isddemo_theme_setup' ) ) :
	function isddemo_theme_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register menus
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'isddemo-theme' ),
				'footer' => esc_html__( 'Footer Menu', 'isddemo-theme' ),
			)
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'isddemo_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function isddemo_theme_scripts() {
	wp_enqueue_style( 'isddemo-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@400;500;600;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'isddemo_theme_scripts' );
