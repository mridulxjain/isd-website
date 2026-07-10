<?php
/**
 * Custom Post Types Registration
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register Projects CPT
 */
function isddemo_register_cpts() {

    // Projects
    register_post_type( 'isd_project', [
        'labels' => [
            'name'               => __( 'Projects', 'isddemo-theme' ),
            'singular_name'      => __( 'Project', 'isddemo-theme' ),
            'add_new'            => __( 'Add New Project', 'isddemo-theme' ),
            'add_new_item'       => __( 'Add New Project', 'isddemo-theme' ),
            'edit_item'          => __( 'Edit Project', 'isddemo-theme' ),
            'new_item'           => __( 'New Project', 'isddemo-theme' ),
            'view_item'          => __( 'View Project', 'isddemo-theme' ),
            'search_items'       => __( 'Search Projects', 'isddemo-theme' ),
            'not_found'          => __( 'No projects found.', 'isddemo-theme' ),
            'menu_name'          => __( 'Projects', 'isddemo-theme' ),
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-portfolio',
        'menu_position'      => 5,
        'supports'           => [ 'title', 'thumbnail', 'editor', 'excerpt' ],
        'rewrite'            => [ 'slug' => 'projects' ],
        'show_in_rest'       => true,
    ] );

    // Testimonials
    register_post_type( 'isd_testimonial', [
        'labels' => [
            'name'          => __( 'Testimonials', 'isddemo-theme' ),
            'singular_name' => __( 'Testimonial', 'isddemo-theme' ),
            'add_new_item'  => __( 'Add New Testimonial', 'isddemo-theme' ),
            'menu_name'     => __( 'Testimonials', 'isddemo-theme' ),
        ],
        'public'        => false,
        'show_ui'       => true,
        'menu_icon'     => 'dashicons-format-quote',
        'menu_position' => 6,
        'supports'      => [ 'title', 'editor', 'thumbnail' ],
        'show_in_rest'  => true,
    ] );

    // Services
    register_post_type( 'isd_service', [
        'labels' => [
            'name'          => __( 'Services', 'isddemo-theme' ),
            'singular_name' => __( 'Service', 'isddemo-theme' ),
            'add_new_item'  => __( 'Add New Service', 'isddemo-theme' ),
            'menu_name'     => __( 'Services', 'isddemo-theme' ),
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-hammer',
        'menu_position' => 7,
        'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'show_in_rest'  => true,
    ] );
}
add_action( 'init', 'isddemo_register_cpts' );

/**
 * Register taxonomies
 */
function isddemo_register_taxonomies() {
    // Project Categories
    register_taxonomy( 'project_category', 'isd_project', [
        'labels' => [
            'name'          => __( 'Project Categories', 'isddemo-theme' ),
            'singular_name' => __( 'Category', 'isddemo-theme' ),
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'project-category' ],
    ] );

    // Room Type
    register_taxonomy( 'isd_room_type', 'isd_project', [
        'labels' => [
            'name'          => __( 'Room Types', 'isddemo-theme' ),
            'singular_name' => __( 'Room Type', 'isddemo-theme' ),
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'room-type' ],
    ] );

    // Design Style
    register_taxonomy( 'isd_design_style', 'isd_project', [
        'labels' => [
            'name'          => __( 'Design Styles', 'isddemo-theme' ),
            'singular_name' => __( 'Design Style', 'isddemo-theme' ),
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'design-style' ],
    ] );

    // Construction Type
    register_taxonomy( 'isd_construction_type', 'isd_project', [
        'labels' => [
            'name'          => __( 'Construction Types', 'isddemo-theme' ),
            'singular_name' => __( 'Construction Type', 'isddemo-theme' ),
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'construction-type' ],
    ] );
}
add_action( 'init', 'isddemo_register_taxonomies' );
