<?php
/**
 * Template Part: Office Locations Cards
 * Included inside the Book Consultation grid (Right side 40%).
 */

$isd_locations = [
    [
        'city'    => 'New Delhi',
        'address' => "BH-16, IInd Floor, Krishna Apt,\nShalimar Bagh (East), New Delhi 110088",
        'phone'   => '011-27492016',
        'email'   => 'info@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=Shalimar+Bagh+East+New+Delhi',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21V13h6v8"/></svg>',
    ],
    [
        'city'    => 'Lucknow',
        'address' => "18A/6, Ganeshpuri Colony,\nNear Medical College, Lucknow 226003",
        'phone'   => '',
        'email'   => 'luck@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=Ganeshpuri+Colony+Lucknow',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    ],
    [
        'city'    => 'Saharanpur',
        'address' => "Civil Hospital Chowk,\nMission Compound, Saharanpur 247001",
        'phone'   => '',
        'email'   => 'sre@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=Civil+Hospital+Chowk+Saharanpur',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    ],
    [
        'city'    => 'New York, USA',
        'address' => "25 Heitz Place,\nHicksville, New York 11801, USA",
        'phone'   => '',
        'email'   => 'usa@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=25+Heitz+Place+Hicksville+New+York',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>',
    ],
];
?>
<div class="isd-office-cards">
    <?php foreach ( $isd_locations as $i => $loc ) : ?>
    <div class="isd-office-card isd-fade-up isd-delay-<?php echo esc_attr( $i + 1 ); ?>">
        <div class="isd-office-card__icon" aria-hidden="true">
            <?php echo $loc['icon']; // phpcs:ignore ?>
        </div>
        <div class="isd-office-card__content">
            <h3 class="isd-office-card__city"><?php echo esc_html( $loc['city'] ); ?></h3>
            <p class="isd-office-card__address"><?php echo nl2br( esc_html( $loc['address'] ) ); ?></p>
            <div class="isd-office-card__contacts">
                <?php if ( $loc['phone'] ) : ?>
                <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $loc['phone'] ) ); ?>" class="isd-office-card__link">
                    <?php echo esc_html( $loc['phone'] ); ?>
                </a>
                <?php endif; ?>
                <button class="isd-office-card__link isd-copy-email" data-email="<?php echo esc_attr( $loc['email'] ); ?>" aria-label="Copy email">
                    <?php echo esc_html( $loc['email'] ); ?>
                </button>
            </div>
            <a href="<?php echo esc_url( $loc['maps'] ); ?>" class="isd-office-card__directions" target="_blank" rel="noopener noreferrer">
                Directions
                <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
