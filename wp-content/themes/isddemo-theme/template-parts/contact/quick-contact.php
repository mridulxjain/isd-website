<?php
/**
 * Template Part: Quick Contact Cards
 */
$cards = [
    [
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.63 19.79 19.79 0 01.01 1 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>',
        'label'   => 'Call Us',
        'value'   => '011-27492016',
        'sub'     => '09891058527',
        'href'    => 'tel:01127492016',
        'action'  => 'Call Now',
    ],
    [
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'label'   => 'Email Us',
        'value'   => 'info@interiordesignsandshapes.com',
        'sub'     => 'We reply within 24 hours',
        'href'    => 'mailto:info@interiordesignsandshapes.com',
        'action'  => 'Send Email',
    ],
    [
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'label'   => 'Visit Office',
        'value'   => 'New Delhi',
        'sub'     => 'Shalimar Bagh (East) 110088',
        'href'    => 'https://maps.google.com/?q=Shalimar+Bagh+New+Delhi',
        'action'  => 'Get Directions',
    ],
    [
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'label'   => 'Business Hours',
        'value'   => 'Mon – Sat',
        'sub'     => '10:00 AM – 7:00 PM',
        'href'    => '#consultation',
        'action'  => 'Book Now',
    ],
];
?>
<section class="isd-quick-contact isd-section" aria-label="Quick Contact">
    <div class="isd-container">
        <div class="isd-quick-contact__grid">
            <?php foreach ( $cards as $i => $card ) : ?>
            <div class="isd-quick-contact-card isd-fade-up isd-delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="isd-quick-contact-card__icon-wrap" aria-hidden="true">
                    <?php echo $card['icon']; // phpcs:ignore ?>
                </div>
                <div class="isd-quick-contact-card__body">
                    <span class="isd-quick-contact-card__label"><?php echo esc_html( $card['label'] ); ?></span>
                    <span class="isd-quick-contact-card__value"><?php echo esc_html( $card['value'] ); ?></span>
                    <span class="isd-quick-contact-card__sub"><?php echo esc_html( $card['sub'] ); ?></span>
                </div>
                <a href="<?php echo esc_url( $card['href'] ); ?>" class="isd-quick-contact-card__action" aria-label="<?php echo esc_attr( $card['action'] . ': ' . $card['label'] ); ?>">
                    <?php echo esc_html( $card['action'] ); ?>
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
