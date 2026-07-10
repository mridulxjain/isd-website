<?php
/**
 * Template: About Page
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

get_template_part( 'template-parts/about/hero' );
get_template_part( 'template-parts/about/company-story' );
get_template_part( 'template-parts/about/founder' );
get_template_part( 'template-parts/about/who-we-are' );
get_template_part( 'template-parts/about/expertise' );
get_template_part( 'template-parts/about/philosophy' );
get_template_part( 'template-parts/about/process' );
get_template_part( 'template-parts/about/timeline' );
get_template_part( 'template-parts/about/why-us' );
get_template_part( 'template-parts/about/stats' );
get_template_part( 'template-parts/about/cta' );

get_footer();
