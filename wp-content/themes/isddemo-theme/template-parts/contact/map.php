<?php
/**
 * Template Part: Office Locations (Cards)
 * Replaces old map section with premium 2-column cards.
 */

$offices = function_exists('get_field') ? get_field('office_locations') : null;

if ( empty($offices) ) {
    // Fallback offices if ACF is empty
    $offices = [
        [
            'name'    => 'ADMIN Office',
            'address' => 'BH-16, IInd Floor, Krishna Appartment,<br>Shalimar Bagh (East), New Delhi 110088',
            'phone'   => 'Phone: 011-27492016 | Mobile: 09891058527',
            'email'   => 'info@interiordesignsandshapes.com',
            'link'    => 'https://maps.google.com/?q=Shalimar+Bagh+East+New+Delhi'
        ],
        [
            'name'    => 'LUCKNOW Office',
            'address' => '18A/6, Ganeshpuri Colony, Near Medical<br>College, LUCKNOW - 226003',
            'phone'   => '',
            'email'   => 'luck@interiordesignsandshapes.com',
            'link'    => 'https://maps.google.com/?q=Ganeshpuri+Colony+Lucknow'
        ],
        [
            'name'    => 'SAHARANPUR Office',
            'address' => 'Civil Hospital Chowk, Mission Compound,<br>Saharanpur - 247001',
            'phone'   => '',
            'email'   => 'sre@interiordesignsandshapes.com',
            'link'    => 'https://maps.google.com/?q=Civil+Hospital+Chowk+Saharanpur'
        ],
        [
            'name'    => 'USA Office',
            'address' => '25 Heitz PL., Hicksville, New York - 11801',
            'phone'   => '',
            'email'   => 'usa@interiordesignsandshapes.com',
            'link'    => 'https://maps.google.com/?q=25+Heitz+Place+Hicksville+New+York'
        ]
    ];
}
?>
<section class="isd-locations-section" aria-label="Our Offices">
    <div class="isd-container">
        <div class="isd-locations-grid">
            <?php foreach ( $offices as $office ) : ?>
                <a href="<?php echo esc_url($office['link']); ?>" target="_blank" rel="noopener" class="isd-location-card">
                    <div class="isd-location-card__header">
                        <h3 class="isd-location-card__name"><?php echo esc_html($office['name']); ?></h3>
                    </div>
                    <div class="isd-location-card__details">
                        <div class="isd-location-card__address">
                            <?php echo wp_kses_post($office['address']); ?>
                        </div>
                        <div class="isd-location-card__contact">
                            <?php if ( !empty($office['phone']) ) : ?>
                                <span class="isd-location-card__phone"><?php echo esc_html($office['phone']); ?></span>
                            <?php endif; ?>
                            <span class="isd-location-card__email">E-mail: <?php echo esc_html($office['email']); ?></span>
                        </div>
                    </div>
                    <div class="isd-location-card__link">
                        View on Google Maps
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
