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
            'name'    => 'NEW DELHI',
            'address' => 'A-21, Second Floor, Okhla Phase 1,<br>New Delhi 110020',
            'phone'   => '+91 98765 43210',
            'email'   => 'delhi@indianshapedesigner.com',
            'link'    => 'https://maps.google.com'
        ],
        [
            'name'    => 'Lucknow',
            'address' => 'Gomti Nagar, Vibhuti Khand,<br>Lucknow 226010',
            'phone'   => '+91 98765 43211',
            'email'   => 'lucknow@indianshapedesigner.com',
            'link'    => 'https://maps.google.com'
        ],
        [
            'name'    => 'Saharanpur',
            'address' => 'Court Road, Civil Lines,<br>Saharanpur 247001',
            'phone'   => '+91 98765 43212',
            'email'   => 'saranpur@indianshapedesigner.com',
            'link'    => 'https://maps.google.com'
        ],
        [
            'name'    => 'USA Office',
            'address' => '100 Park Avenue, 16th Floor,<br>New York, NY 10017',
            'phone'   => '+1 212 555 0199',
            'email'   => 'usa@indianshapedesigner.com',
            'link'    => 'https://maps.google.com'
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
                        <div class="isd-location-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <h3 class="isd-location-card__name"><?php echo esc_html($office['name']); ?></h3>
                    </div>
                    <div class="isd-location-card__details">
                        <div class="isd-location-card__address">
                            <?php echo wp_kses_post($office['address']); ?>
                        </div>
                        <div class="isd-location-card__contact">
                            <span class="isd-location-card__phone"><?php echo esc_html($office['phone']); ?></span>
                            <span class="isd-location-card__email"><?php echo esc_html($office['email']); ?></span>
                        </div>
                    </div>
                    <div class="isd-location-card__link">
                        View on Google Maps
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" width="14" height="14"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
