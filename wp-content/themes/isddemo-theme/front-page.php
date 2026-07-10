<?php
/**
 * Front Page Template
 * Indian Shape Designer - Luxury Theme
 */

get_header();

// Homepage Sections
get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/stats' );
get_template_part( 'template-parts/about' );
get_template_part( 'template-parts/services' );
get_template_part( 'template-parts/why-choose' );
get_template_part( 'template-parts/projects' );
get_template_part( 'template-parts/process' );
get_template_part( 'template-parts/before-after' );
get_template_part( 'template-parts/testimonials' );
get_template_part( 'template-parts/brands' );
get_template_part( 'template-parts/blog' );
get_template_part( 'template-parts/cta' );

get_footer();
