<?php
/**
 * Template: Portfolio Page
 * Indian Shape Designer - Luxury Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

// Portfolio Sections
get_template_part( 'template-parts/portfolio/hero' );
get_template_part( 'template-parts/portfolio/overview' );
get_template_part( 'template-parts/portfolio/search-filter' );
get_template_part( 'template-parts/portfolio/featured-projects' );
get_template_part( 'template-parts/portfolio/projects-grid' );
get_template_part( 'template-parts/portfolio/why-designs' );
get_template_part( 'template-parts/portfolio/testimonials' );
get_template_part( 'template-parts/portfolio/stats' );
get_template_part( 'template-parts/portfolio/cta' );

get_footer();
