<?php
/**
 * Template Part: Interactive Map
 */
?>
<section class="isd-contact-map isd-section" aria-label="Office Locations Map">
    <div class="isd-container">
        <div class="isd-contact-map__wrapper">
            <!-- Dark mode Google Maps iframe -->
            <iframe
                class="isd-contact-map__iframe"
                title="Indian Shape Designer Office Locations"
                src="https://maps.google.com/maps?q=Shalimar+Bagh+East+New+Delhi+110088&output=embed&z=13&iwloc=&t=m"
                width="100%"
                height="500"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                aria-label="Google Map showing our New Delhi office location"
            ></iframe>
            <!-- Map overlay controls -->
            <div class="isd-contact-map__pins" aria-label="Office location pins" role="list">
                <?php
                $pins = [
                    [ 'city' => 'New Delhi', 'active' => true ],
                    [ 'city' => 'Lucknow',   'active' => false ],
                    [ 'city' => 'Saharanpur','active' => false ],
                    [ 'city' => 'New York',  'active' => false ],
                ];
                foreach ( $pins as $pin ) :
                ?>
                <button
                    class="isd-contact-map__pin<?php echo $pin['active'] ? ' is-active' : ''; ?>"
                    role="listitem"
                    aria-pressed="<?php echo $pin['active'] ? 'true' : 'false'; ?>"
                >
                    <svg viewBox="0 0 12 12" fill="currentColor" aria-hidden="true"><circle cx="6" cy="6" r="4"/></svg>
                    <?php echo esc_html( $pin['city'] ); ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
        <p class="isd-contact-map__caption">
            Serving clients across India and internationally through our premium design consultation services.
        </p>
    </div>
</section>
