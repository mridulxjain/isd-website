<?php
/**
 * Mega Menu Component
 * Indian Shape Designer - Luxury Theme
 *
 * Data-driven, zero duplicated HTML.
 * Included inside navbar.php within the "Our Services" list item.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Centralised service data.
 * To update the menu: edit this array only.
 */
$isd_services = [
    [
        'id'          => 'vaastu',
        'title'       => 'Vaastu',
        'description' => 'Harmonise energy flow with ancient Vastu principles for balanced living spaces.',
        'icon'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'children'    => [
            [ 'title' => 'Master Bedroom',  'desc' => 'Direction & energy placement', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>' ],
            [ 'title' => 'Kitchen',         'desc' => 'Agni corner optimisation',      'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 6v6l4 2"/></svg>' ],
            [ 'title' => 'Study Room',      'desc' => 'Focus & productivity zones',    'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg>' ],
            [ 'title' => 'Kids Room',       'desc' => 'Growth & learning directions',  'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>' ],
            [ 'title' => 'Washroom',        'desc' => 'Flow & elimination zones',      'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M7 2h10a2 2 0 012 2v16a2 2 0 01-2 2H7a2 2 0 01-2-2V4a2 2 0 012-2z"/><circle cx="12" cy="16" r="1"/></svg>' ],
            [ 'title' => 'Pooja Room',      'desc' => 'Sacred space positioning',      'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15 9 22 9 16 14 18 21 12 17 6 21 8 14 2 9 9 9 12 2"/></svg>' ],
        ],
    ],
    [
        'id'          => 'design',
        'title'       => 'Design',
        'description' => 'Bespoke interior design concepts crafted for timeless elegance and comfort.',
        'icon'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>',
        'children'    => [
            [ 'title' => 'Bedroom',     'desc' => 'Serene personal sanctuaries',  'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 22V10M21 22V10M1 10h22M3 10V6a2 2 0 012-2h14a2 2 0 012 2v4"/><path d="M3 14h18"/></svg>' ],
            [ 'title' => 'Living Room', 'desc' => 'Luxurious gathering spaces',   'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="12"/></svg>' ],
            [ 'title' => 'Kitchen',     'desc' => 'Functional gourmet kitchens',  'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/></svg>' ],
            [ 'title' => 'Bathroom',    'desc' => 'Spa-grade private retreats',   'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 6 Q9 2 15 2 Q21 2 21 8 L21 17 Q21 21 17 21 L7 21 Q3 21 3 17 L3 12"/><path d="M3 12h6"/></svg>' ],
            [ 'title' => 'Kids Room',   'desc' => 'Creative, safe playspaces',    'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>' ],
            [ 'title' => 'Courtyard',   'desc' => 'Open-sky luxury courtyards',   'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.22" y1="4.22" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.78" y2="19.78"/><line x1="14.83" y1="9.17" x2="19.78" y2="4.22"/><line x1="4.22" y1="19.78" x2="9.17" y2="14.83"/></svg>' ],
        ],
    ],
    [
        'id'          => 'construction',
        'title'       => 'Construction',
        'description' => 'End-to-end construction with superior craftsmanship and premium materials.',
        'icon'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 20h20M4 20V10l8-8 8 8v10M10 20v-6h4v6"/></svg>',
        'children'    => [
            [ 'title' => 'Technical Aspects', 'desc' => 'Engineering & structural plans', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>' ],
            [ 'title' => 'Concrete Work',     'desc' => 'RCC & structural masonry',       'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><rect x="7" y="7" width="3" height="9"/><rect x="14" y="7" width="3" height="5"/></svg>' ],
            [ 'title' => 'Electrical Work',   'desc' => 'Modern smart electrical systems', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>' ],
            [ 'title' => 'Front Elevation',   'desc' => 'Stunning facade design',          'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>' ],
            [ 'title' => 'Landscaping',       'desc' => 'Lush outdoor environments',       'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22V12M9 7c0-4 6-4 6 0 0 3-3 5-3 5s-3-2-3-5z"/><path d="M6 12c-3-1-4-4-2-6 2 1 3 4 3 4s-2 2-1 2z"/><path d="M18 12c3-1 4-4 2-6-2 1-3 4-3 4s2 2 1 2z"/><line x1="12" y1="22" x2="2" y2="22"/><line x1="22" y1="22" x2="12" y2="22"/></svg>' ],
        ],
    ],
    [
        'id'          => 'exterior',
        'title'       => 'Exterior',
        'description' => 'Transform your property\'s façade into a stunning architectural statement.',
        'icon'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>',
        'children'    => [
            [ 'title' => 'Front Elevation',   'desc' => 'Landmark facade design',         'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>' ],
            [ 'title' => 'Landscaping',       'desc' => 'Garden & greenery design',       'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="6"/><path d="M8 14s1.5 2 4 2 4-2 4-2M9 20h6M12 16v4"/></svg>' ],
            [ 'title' => 'Security Lighting', 'desc' => 'Ambient exterior lighting',      'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>' ],
            [ 'title' => 'Boundary Design',   'desc' => 'Elegant boundary walls',         'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="14" width="20" height="7" rx="1"/><path d="M5 14V8M10 14V8M15 14V8M20 14V8M2 8h20"/></svg>' ],
            [ 'title' => 'Garden Design',     'desc' => 'Curated outdoor landscapes',     'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22V12M9 7c0-4 6-4 6 0 0 3-3 5-3 5s-3-2-3-5z"/><path d="M5 11c-2-1-3-3-1-5 2 1 2 4 2 4s-1 1-1 1z"/><path d="M19 11c2-1 3-3 1-5-2 1-2 4-2 4s1 1 1 1z"/></svg>' ],
        ],
    ],
    [
        'id'          => 'security',
        'title'       => 'Security',
        'description' => 'Smart, integrated security systems that protect your home in style.',
        'icon'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
        'children'    => [
            [ 'title' => 'CCTV',              'desc' => '4K surveillance systems',        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>' ],
            [ 'title' => 'Smart Locks',       'desc' => 'Fingerprint & app-based locks',  'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>' ],
            [ 'title' => 'Motion Sensors',    'desc' => 'Perimeter detection zones',      'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M6.34 6.34a8 8 0 000 11.32m11.32 0a8 8 0 000-11.32"/><path d="M2.93 2.93a14 14 0 000 18.14m18.14 0a14 14 0 000-18.14"/></svg>' ],
            [ 'title' => 'Video Door Phone',  'desc' => 'HD visual entry systems',        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.63 19.79 19.79 0 01.01 1 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>' ],
            [ 'title' => 'Perimeter Security','desc' => 'Complete boundary protection',   'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>' ],
        ],
    ],
];
?>

<!-- DESKTOP MEGA MENU -->
<div class="isd-mega" role="region" aria-label="Services Menu" id="mega-menu-desktop">
    <div class="isd-mega__inner">

        <!-- LEFT PANEL -->
        <div class="isd-mega__left">
            <span class="isd-mega__label">Services</span>
            <h2 class="isd-mega__heading">Design<br><em>Solutions</em></h2>
            <p class="isd-mega__desc">We design thoughtful interiors that combine luxury, functionality and timeless aesthetics.</p>
            <div class="isd-mega__illustration" aria-hidden="true">
                <div class="isd-mega__illustration-inner">
                    <svg class="isd-mega__illustration-svg" viewBox="0 0 280 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="280" height="180" fill="#FAF8F5"/>
                        <!-- Floor -->
                        <rect x="0" y="140" width="280" height="40" fill="#F0EBE3"/>
                        <!-- Wall -->
                        <rect x="0" y="0" width="280" height="140" fill="#FAF8F5"/>
                        <!-- Left wall art -->
                        <rect x="20" y="20" width="60" height="80" rx="4" fill="#E8E2DA" stroke="#C8A45D" stroke-width="0.5"/>
                        <line x1="35" y1="35" x2="65" y2="90" stroke="#C8A45D" stroke-width="0.5" stroke-dasharray="3,3"/>
                        <!-- Sofa -->
                        <rect x="60" y="105" width="120" height="40" rx="8" fill="#DDD5C8"/>
                        <rect x="60" y="100" width="120" height="15" rx="4" fill="#C8BBA8"/>
                        <rect x="60" y="100" width="15" height="45" rx="4" fill="#C8BBA8"/>
                        <rect x="165" y="100" width="15" height="45" rx="4" fill="#C8BBA8"/>
                        <!-- Cushions -->
                        <rect x="75" y="105" width="30" height="20" rx="4" fill="#C8A45D" opacity="0.3"/>
                        <rect x="115" y="105" width="30" height="20" rx="4" fill="#FAF8F5" opacity="0.6"/>
                        <!-- Coffee table -->
                        <rect x="95" y="130" width="60" height="8" rx="2" fill="#A89880"/>
                        <!-- Floor lamp -->
                        <line x1="210" y1="140" x2="210" y2="80" stroke="#8B7355" stroke-width="2"/>
                        <ellipse cx="210" cy="80" rx="15" ry="8" fill="none" stroke="#C8A45D" stroke-width="1.5"/>
                        <ellipse cx="210" cy="140" rx="8" ry="3" fill="#A89880"/>
                        <!-- Window -->
                        <rect x="195" y="20" width="65" height="90" rx="4" fill="#E8F4F8" stroke="#DDD5C8" stroke-width="1"/>
                        <line x1="227" y1="20" x2="227" y2="110" stroke="#DDD5C8" stroke-width="0.5"/>
                        <line x1="195" y1="65" x2="260" y2="65" stroke="#DDD5C8" stroke-width="0.5"/>
                        <!-- Gold accent strip -->
                        <rect x="0" y="138" width="280" height="2" fill="#C8A45D" opacity="0.4"/>
                    </svg>
                </div>
            </div>
            <div class="isd-mega__actions">
                <a href="#contact" class="isd-btn isd-btn--primary isd-mega__btn-primary">Book Consultation</a>
                <a href="#projects" class="isd-btn isd-btn--outline isd-mega__btn-outline">View Portfolio</a>
            </div>
        </div>

        <!-- RIGHT PANEL -->
        <div class="isd-mega__right">

            <!-- Category Cards (default view) -->
            <div class="isd-mega__categories" id="mega-categories" aria-label="Service Categories">
                <?php foreach ( $isd_services as $i => $service ) : ?>
                <button
                    class="isd-mega__cat-card"
                    data-service="<?php echo esc_attr( $service['id'] ); ?>"
                    aria-controls="mega-children-<?php echo esc_attr( $service['id'] ); ?>"
                    aria-expanded="false"
                    tabindex="0"
                >
                    <div class="isd-mega__cat-icon" aria-hidden="true">
                        <?php echo $service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                    <div class="isd-mega__cat-body">
                        <span class="isd-mega__cat-title"><?php echo esc_html( $service['title'] ); ?></span>
                        <span class="isd-mega__cat-desc"><?php echo esc_html( $service['description'] ); ?></span>
                    </div>
                    <div class="isd-mega__cat-arrow" aria-hidden="true">
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </div>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Children panels (one per service, hidden by default) -->
            <?php foreach ( $isd_services as $service ) : ?>
            <div
                class="isd-mega__children"
                id="mega-children-<?php echo esc_attr( $service['id'] ); ?>"
                aria-label="<?php echo esc_attr( $service['title'] ); ?> services"
                hidden
            >
                <button class="isd-mega__back" data-back="true" aria-label="Back to all services">
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 8H3M7 12l-4-4 4-4"/></svg>
                    Back to Services
                </button>
                <div class="isd-mega__children-grid">
                    <?php foreach ( $service['children'] as $child ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' . $service['id'] . '/' . sanitize_title( $child['title'] ) ) ); ?>" class="isd-mega__child-card">
                        <div class="isd-mega__child-icon" aria-hidden="true">
                            <?php echo $child['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                        <div class="isd-mega__child-body">
                            <span class="isd-mega__child-title"><?php echo esc_html( $child['title'] ); ?></span>
                            <span class="isd-mega__child-desc"><?php echo esc_html( $child['desc'] ); ?></span>
                        </div>
                        <div class="isd-mega__child-arrow" aria-hidden="true">
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div><!-- /.isd-mega__right -->
    </div><!-- /.isd-mega__inner -->
</div><!-- /.isd-mega -->
