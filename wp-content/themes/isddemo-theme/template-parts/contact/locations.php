<?php
/**
 * Template Part: Office Locations
 * ACF-ready data structure.
 */

/**
 * Office locations data.
 * If ACF is active, fields can override these defaults.
 * To add ACF: get_field('isd_locations') on an options page.
 */
$isd_locations = [
    [
        'city'    => 'New Delhi',
        'badge'   => 'Head Office',
        'address' => "BH-16, IInd Floor, Krishna Apartment,\nShalimar Bagh (East),\nNew Delhi – 110088",
        'phone'   => '011-27492016',
        'mobile'  => '09891058527',
        'email'   => 'info@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=Shalimar+Bagh+East+New+Delhi+110088',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21V13h6v8"/></svg>',
    ],
    [
        'city'    => 'Lucknow',
        'badge'   => 'Branch Office',
        'address' => "18A/6, Ganeshpuri Colony,\nNear Medical College,\nLucknow – 226003",
        'phone'   => '',
        'mobile'  => '',
        'email'   => 'luck@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=Ganeshpuri+Colony+Lucknow+226003',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    ],
    [
        'city'    => 'Saharanpur',
        'badge'   => 'Branch Office',
        'address' => "Civil Hospital Chowk,\nMission Compound,\nSaharanpur – 247001",
        'phone'   => '',
        'mobile'  => '',
        'email'   => 'sre@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=Civil+Hospital+Chowk+Mission+Compound+Saharanpur',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    ],
    [
        'city'    => 'New York, USA',
        'badge'   => 'International',
        'address' => "25 Heitz Place,\nHicksville, New York – 11801,\nUnited States",
        'phone'   => '',
        'mobile'  => '',
        'email'   => 'usa@interiordesignsandshapes.com',
        'maps'    => 'https://maps.google.com/?q=25+Heitz+Place+Hicksville+New+York+11801',
        'icon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>',
    ],
];
?>
<section class="isd-locations isd-section" id="locations" aria-label="Office Locations">
    <div class="isd-container">
        <div style="text-align:center;margin-bottom:60px;">
            <span class="isd-label isd-fade-up">Find Us</span>
            <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1">Our Offices</h2>
            <p class="isd-body isd-fade-up isd-delay-2" style="max-width:480px;margin:0 auto;">Serving clients across India and internationally through our premium design consultation services.</p>
        </div>
        <div class="isd-locations__grid">
            <?php foreach ( $isd_locations as $i => $loc ) : ?>
            <div class="isd-location-card isd-fade-up isd-delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="isd-location-card__header">
                    <div class="isd-location-card__icon" aria-hidden="true">
                        <?php echo $loc['icon']; // phpcs:ignore ?>
                    </div>
                    <div>
                        <span class="isd-location-card__badge"><?php echo esc_html( $loc['badge'] ); ?></span>
                        <h3 class="isd-location-card__city"><?php echo esc_html( $loc['city'] ); ?></h3>
                    </div>
                </div>
                <div class="isd-location-card__body">
                    <p class="isd-location-card__address"><?php echo nl2br( esc_html( $loc['address'] ) ); ?></p>
                    <div class="isd-location-card__contacts">
                        <?php if ( $loc['phone'] ) : ?>
                        <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $loc['phone'] ) ); ?>" class="isd-location-card__contact-item">
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 2a1 1 0 011-1h1.5a1 1 0 01.987.836l.5 3a1 1 0 01-.54 1.06l-1 .5A8 8 0 009.604 11.55l.5-1a1 1 0 011.06-.54l3 .5A1 1 0 0115 11.5V13a1 1 0 01-1 1C6.268 14 2 9.732 2 4V2z"/></svg>
                            <?php echo esc_html( $loc['phone'] ); ?>
                        </a>
                        <?php endif; ?>
                        <?php if ( $loc['mobile'] ) : ?>
                        <a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', $loc['mobile'] ) ); ?>" class="isd-location-card__contact-item">
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="4" y="1" width="8" height="14" rx="1.5"/><circle cx="8" cy="12" r="0.75" fill="currentColor"/></svg>
                            <?php echo esc_html( $loc['mobile'] ); ?>
                        </a>
                        <?php endif; ?>
                        <button
                            class="isd-location-card__contact-item isd-copy-email"
                            data-email="<?php echo esc_attr( $loc['email'] ); ?>"
                            aria-label="Copy email address <?php echo esc_attr( $loc['email'] ); ?>"
                        >
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 2h12a1 1 0 011 1v10a1 1 0 01-1 1H2a1 1 0 01-1-1V3a1 1 0 011-1z"/><polyline points="1,3 8,9 15,3"/></svg>
                            <?php echo esc_html( $loc['email'] ); ?>
                        </button>
                    </div>
                </div>
                <div class="isd-location-card__footer">
                    <a href="<?php echo esc_url( $loc['maps'] ); ?>" class="isd-location-card__maps-btn" target="_blank" rel="noopener noreferrer" aria-label="Open <?php echo esc_attr( $loc['city'] ); ?> in Google Maps">
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M8 1a5 5 0 010 10c-2.5 0-5-2.24-5-5s2.24-5 5-5zm0 3a2 2 0 100 4 2 2 0 000-4z"/><path d="M8 11v4M5 13l3 2 3-2"/></svg>
                        Open in Google Maps
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
