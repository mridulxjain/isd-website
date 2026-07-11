<?php
/**
 * Template Part: Why Choose Us
 */
$features = [
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 'title' => 'Premium Materials', 'desc' => 'We source only the finest materials — from Italian marble to German hardware — ensuring longevity and luxury.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>', 'title' => 'Dedicated Designer', 'desc' => 'Every project is assigned a dedicated lead designer who guides you through the entire journey personally.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>', 'title' => 'Transparent Pricing', 'desc' => 'No hidden costs. Detailed itemized quotations are provided upfront before any work commences.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>', 'title' => 'On Time Delivery', 'desc' => 'We are committed to delivering every project on schedule, without compromising on quality.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>', 'title' => '3D Visualization', 'desc' => 'See your space before it is built. Photorealistic 3D renders help you make confident design decisions.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="20 6 9 17 4 12"/></svg>', 'title' => 'Quality Assurance', 'desc' => 'Rigorous quality checks at every stage ensure the final result exceeds your expectations.' ],
];
?>
<section id="why-choose" class="isd-why isd-section">
    <div class="isd-container">
        <div class="isd-why__grid">
            <div class="isd-scale-in">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=800&q=80" alt="Luxury interior craftsmanship" class="isd-why__image" loading="lazy">
            </div>
            <div>
                <span class="isd-label isd-fade-up">Why Choose Us</span>
                <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1" style="margin-bottom:10px;">The Interior Shapes and Design Difference</h2>
                <div class="isd-why__features">
                    <?php foreach ( $features as $i => $f ) : ?>
                    <div class="isd-why-feature isd-fade-up isd-delay-<?php echo esc_attr( ( $i % 3 ) + 2 ); ?>">
                        <div class="isd-why-feature__icon"><?php echo $f['icon']; ?></div>
                        <div>
                            <div class="isd-why-feature__title"><?php echo esc_html( $f['title'] ); ?></div>
                            <p class="isd-why-feature__desc"><?php echo esc_html( $f['desc'] ); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
