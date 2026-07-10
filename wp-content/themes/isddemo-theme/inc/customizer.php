<?php
/**
 * Theme Customizer Settings
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function isddemo_customize_register( WP_Customize_Manager $wp_customize ) {
    // Site Identity - already built in WP

    // Section: Contact Info
    $wp_customize->add_section( 'isd_contact_info', [
        'title'    => __( 'Contact Information', 'isddemo-theme' ),
        'priority' => 130,
    ] );

    $fields = [
        [ 'phone',   __( 'Phone Number', 'isddemo-theme' ),  '+91 98765 43210' ],
        [ 'email',   __( 'Email Address', 'isddemo-theme' ),  'hello@indianshapedesigner.com' ],
        [ 'address', __( 'Address', 'isddemo-theme' ),         'New Delhi, Delhi NCR, India' ],
        [ 'instagram', __( 'Instagram URL', 'isddemo-theme' ), '#' ],
        [ 'facebook',  __( 'Facebook URL', 'isddemo-theme' ),  '#' ],
    ];

    foreach ( $fields as [$key, $label, $default] ) {
        $wp_customize->add_setting( "isd_{$key}", [ 'default' => $default, 'sanitize_callback' => 'sanitize_text_field' ] );
        $wp_customize->add_control( "isd_{$key}", [ 'label' => $label, 'section' => 'isd_contact_info', 'type' => 'text' ] );
    }
}
add_action( 'customize_register', 'isddemo_customize_register' );
