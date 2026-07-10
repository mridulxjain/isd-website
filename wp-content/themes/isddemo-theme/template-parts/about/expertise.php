<?php
/**
 * Template Part: Our Expertise
 */
$services = [
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M4 28V12l12-8 12 8v16H4z"/><rect x="11" y="18" width="10" height="10"/></svg>',          'title' => 'Residential Interiors',   'desc' => 'Luxury living spaces designed around your lifestyle — from drawing rooms to master suites.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="8" width="26" height="20" rx="2"/><path d="M3 14h26M10 8V5a2 2 0 014 0v3M18 8V5a2 2 0 014 0v3"/></svg>', 'title' => 'Commercial Interiors',   'desc' => 'Office, retail and hospitality spaces that amplify your brand and inspire productivity.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M6 26V8l10-5 10 5v18"/><rect x="12" y="14" width="8" height="8"/><path d="M3 26h26"/></svg>',             'title' => 'Turnkey Projects',         'desc' => 'Complete end-to-end execution — design, procurement, construction and final styling.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="4" y="4" width="24" height="24" rx="4"/><path d="M10 16h12M16 10v12"/></svg>',                              'title' => 'Exterior Design',          'desc' => 'Facades, landscaping and curb appeal — making a lasting first impression from the outside.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M4 12h24M4 20h24M12 4v24M20 4v24"/><rect x="4" y="4" width="24" height="24" rx="2"/></svg>',              'title' => 'Space Planning',           'desc' => 'Intelligent spatial layouts that maximise functionality, flow and natural light.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M4 28l8-8 6 4 10-14"/><circle cx="26" cy="6" r="3"/></svg>',                                              'title' => '3D Visualisation',         'desc' => 'Photorealistic renders and virtual walkthroughs — see your space before a nail is driven.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M8 24V10M16 24V6M24 24V14"/><path d="M4 28h24"/></svg>',                                                    'title' => 'Luxury Renovation',        'desc' => 'Transforming existing spaces with precision — minimal disruption, maximum impact.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="4" y="10" width="14" height="18" rx="2"/><rect x="14" y="4" width="14" height="14" rx="2"/></svg>',       'title' => 'Furniture Planning',       'desc' => 'Custom furniture selection and space-conscious planning that complements your interior.'],
    ['icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="16" cy="16" r="6"/><path d="M16 4v4M16 24v4M4 16h4M24 16h4"/></svg>',                                  'title' => 'Material Selection',       'desc' => 'Curated stone, wood, metal and textile choices sourced for beauty, durability and originality.'],
];
?>
<section class="isd-about-expertise isd-section" aria-label="Our Expertise">
    <div class="isd-container">
        <div class="isd-about-expertise__header">
            <span class="isd-label isd-fade-up">Services</span>
            <h2 class="isd-about-expertise__heading isd-fade-up isd-delay-1">Our Expertise</h2>
            <p class="isd-about-expertise__sub isd-fade-up isd-delay-2">Nine focused disciplines — one seamless creative process.</p>
        </div>
        <div class="isd-about-expertise__grid">
            <?php foreach ( $services as $i => $svc ) : ?>
            <article class="isd-about-expertise__card isd-fade-up isd-delay-<?php echo ( $i % 4 ) + 1; ?>" aria-label="<?php echo esc_attr( $svc['title'] ); ?>">
                <div class="isd-about-expertise__card-icon" aria-hidden="true">
                    <?php echo $svc['icon']; // phpcs:ignore ?>
                </div>
                <h3 class="isd-about-expertise__card-title"><?php echo esc_html( $svc['title'] ); ?></h3>
                <p class="isd-about-expertise__card-desc"><?php echo esc_html( $svc['desc'] ); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
