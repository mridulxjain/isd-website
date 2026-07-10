<?php
/**
 * Advanced Custom Fields (ACF) Integration
 * Indian Shape Designer - Luxury Theme
 * Registers all editable homepage fields
 */

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

/**
 * Homepage Options Field Group
 */
acf_add_local_field_group( [
    'key'      => 'group_isd_homepage',
    'title'    => 'Homepage Settings',
    'fields'   => [
        // Hero Fields
        [
            'key'   => 'field_hero_bg_image',
            'label' => 'Hero Background Image',
            'name'  => 'hero_bg_image',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ],
        [
            'key'   => 'field_hero_title',
            'label' => 'Hero Headline',
            'name'  => 'hero_title',
            'type'  => 'text',
            'default_value' => 'Crafting Timeless <em>Luxury</em> Interiors',
            'instructions'  => 'Use <em>text</em> for italic gold text.',
        ],
        [
            'key'   => 'field_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name'  => 'hero_subtitle',
            'type'  => 'textarea',
            'rows'  => 3,
        ],
        // About Fields
        [
            'key'   => 'field_about_image',
            'label' => 'About Section Image',
            'name'  => 'about_image',
            'type'  => 'image',
            'return_format' => 'array',
        ],
        [
            'key'   => 'field_about_title',
            'label' => 'About Section Title',
            'name'  => 'about_title',
            'type'  => 'text',
        ],
        [
            'key'   => 'field_about_text_1',
            'label' => 'About Paragraph 1',
            'name'  => 'about_text_1',
            'type'  => 'textarea',
            'rows'  => 4,
        ],
        [
            'key'   => 'field_about_text_2',
            'label' => 'About Paragraph 2',
            'name'  => 'about_text_2',
            'type'  => 'textarea',
            'rows'  => 4,
        ],
    ],
    'location' => [
        [
            [
                'param'    => 'page_type',
                'operator' => '==',
                'value'    => 'front_page',
            ],
        ],
    ],
    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
] );
