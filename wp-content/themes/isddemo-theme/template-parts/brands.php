<?php
/**
 * Template Part: Brand Partners
 */
$brands = [ 'Godrej', 'Hettich', 'Hafele', 'Asian Paints', 'Kohler', 'Jaguar', 'Duravit', 'Grohe' ];
?>
<section class="isd-brands">
    <div class="isd-container">
        <div class="isd-brands__header">
            <p class="isd-brands__label">Trusted Brand Partners</p>
        </div>
        <div class="isd-brands__track-outer">
            <div class="isd-brands__track">
                <?php foreach ( array_merge( $brands, $brands ) as $brand ) : ?>
                <div style="padding: 10px 20px; background: var(--color-bg); border-radius: var(--radius-sm); border: 1px solid var(--color-border); flex-shrink: 0;">
                    <span style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-text-light); letter-spacing: 0.05em; font-weight: 500;"><?php echo esc_html( $brand ); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
