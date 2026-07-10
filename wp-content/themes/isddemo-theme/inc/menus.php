<?php
/**
 * Navigation Menus Registration
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register navigation menus
 */
function isddemo_register_menus() {
    register_nav_menus( [
        'menu-1'      => esc_html__( 'Primary Navigation', 'isddemo-theme' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'isddemo-theme' ),
    ] );
}
add_action( 'after_setup_theme', 'isddemo_register_menus' );

/**
 * Custom Walker for primary nav
 * Adds isd-navbar__nav-link class to anchor tags
 */
if ( ! class_exists( 'ISD_Nav_Walker' ) ) :
class ISD_Nav_Walker extends Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes   = implode( ' ', array_filter( (array) $item->classes ) );
        $is_active = in_array( 'current-menu-item', (array) $item->classes, true );

        $link_class  = 'isd-navbar__nav-link';
        $link_class .= $is_active ? ' is-active' : '';

        $output .= sprintf(
            '<a href="%s" class="%s"%s>%s</a>',
            esc_url( $item->url ),
            esc_attr( $link_class ),
            $item->target ? ' target="' . esc_attr( $item->target ) . '" rel="noopener"' : '',
            esc_html( $item->title )
        );
    }

    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_el( &$output, $item, $depth = 0, $args = null ) {}
}
endif;
