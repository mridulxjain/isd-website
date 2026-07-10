<?php
/**
 * Template Part: Why Clients Choose Us
 */
$reasons = [
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="16" cy="10" r="5"/><path d="M8 26v-2a8 8 0 0116 0v2"/></svg>',
        'title' => 'Experienced Designers',
        'desc'  => 'A team of architects and interior designers with 15+ years of collective experience across residential and commercial projects.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M6 26V8l10-5 10 5v18H6z"/><rect x="12" y="14" width="8" height="12"/></svg>',
        'title' => 'Turnkey Solutions',
        'desc'  => 'One studio. One vision. Complete end-to-end delivery — from design brief through to final handover.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M16 4l2.4 7.4H26l-6.2 4.5 2.4 7.4L16 19l-6.2 4.3 2.4-7.4L6 11.4h7.6z"/></svg>',
        'title' => 'Premium Materials',
        'desc'  => 'We source only the finest materials — specified for beauty, longevity and appropriateness to each unique space.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="4" y="8" width="24" height="18" rx="2"/><path d="M4 14h24"/><path d="M10 6V4M22 6V4"/></svg>',
        'title' => 'Transparent Pricing',
        'desc'  => 'Detailed quotes, no surprises. We believe clarity in communication is the foundation of a lasting client relationship.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="16" cy="16" r="12"/><path d="M16 10v6l4 2"/></svg>',
        'title' => 'Timely Delivery',
        'desc'  => 'Project milestones are commitments, not estimates. We track every detail to ensure your space is ready when promised.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M16 4C9.4 4 4 9.4 4 16c0 4 1.8 7.6 4.6 10L16 28l7.4-2C26.2 23.6 28 20 28 16 28 9.4 22.6 4 16 4z"/><path d="M12 16l3 3 5-6"/></svg>',
        'title' => 'Client-First Approach',
        'desc'  => 'Your vision drives every decision. We listen deeply, communicate clearly and never lose sight of what matters most — you.',
    ],
];
?>
<section class="isd-about-why isd-section" aria-label="Why Clients Choose Us">
    <div class="isd-container">
        <div class="isd-about-why__header">
            <span class="isd-label isd-fade-up">Why Us</span>
            <h2 class="isd-about-why__heading isd-fade-up isd-delay-1">Why Clients Choose Us</h2>
            <p class="isd-about-why__sub isd-fade-up isd-delay-2">Six things that set every Interior Shapes & Designs project apart.</p>
        </div>
        <div class="isd-about-why__grid">
            <?php foreach ( $reasons as $i => $reason ) : ?>
            <article class="isd-about-why__card isd-fade-up isd-delay-<?php echo ( $i % 3 ) + 1; ?>" aria-label="<?php echo esc_attr( $reason['title'] ); ?>">
                <div class="isd-about-why__card-icon" aria-hidden="true">
                    <?php echo $reason['icon']; // phpcs:ignore ?>
                </div>
                <h3 class="isd-about-why__card-title"><?php echo esc_html( $reason['title'] ); ?></h3>
                <p class="isd-about-why__card-desc"><?php echo esc_html( $reason['desc'] ); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
