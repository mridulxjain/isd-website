<?php
/**
 * Template Part: Services Section
 */
$services = [
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>', 'title' => 'Residential Interiors', 'desc' => 'Bespoke home interiors that reflect your lifestyle and elevate everyday living.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>', 'title' => 'Commercial Interiors', 'desc' => 'Dynamic workspaces that inspire productivity and impress clients.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M5 11l7-7 7 7M5 19l7-7 7 7"/></svg>', 'title' => 'Modular Kitchen', 'desc' => 'Precision-crafted kitchens blending luxury aesthetics with practical functionality.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><rect x="3" y="3" width="7" height="18" rx="1"/><rect x="14" y="3" width="7" height="18" rx="1"/></svg>', 'title' => 'Luxury Wardrobes', 'desc' => 'Custom wardrobes with premium finishes and seamless smart storage solutions.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M2 12h20M2 12c0-5.5 4.5-10 10-10s10 4.5 10 10"/></svg>', 'title' => 'False Ceiling', 'desc' => 'Elegant ceiling designs that transform ordinary rooms into architectural masterpieces.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/></svg>', 'title' => 'Lighting Design', 'desc' => 'Curated lighting solutions that set the perfect ambiance and highlight architectural details.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M2 20h20M4 20V10a1 1 0 011-1h3a1 1 0 011 1v10M10 20V6a1 1 0 011-1h2a1 1 0 011 1v14M16 20v-5a1 1 0 011-1h2a1 1 0 011 1v5"/></svg>', 'title' => 'Furniture Design', 'desc' => 'Custom furniture marrying artisan craftsmanship with modern luxury design.' ],
    [ 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>', 'title' => 'Renovation', 'desc' => 'Complete space renovations that breathe new life into existing structures.' ],
];
?>
<section id="services" class="isd-services isd-section">
    <div class="isd-container">
        <div class="isd-services__header">
            <span class="isd-label" style="color:rgba(200,164,93,0.9);">What We Offer</span>
            <h2 class="isd-services__title isd-title isd-title--md isd-fade-up isd-delay-1">Our Services</h2>
            <p class="isd-services__subtitle isd-body isd-fade-up isd-delay-2">From concept to completion, we offer comprehensive interior design solutions tailored to your vision.</p>
        </div>
        <div class="isd-services__grid">
            <?php foreach ( $services as $i => $s ) : ?>
            <div class="isd-service-card isd-fade-up isd-delay-<?php echo esc_attr( ( $i % 4 ) + 1 ); ?>">
                <div class="isd-service-card__icon"><?php echo $s['icon']; ?></div>
                <h3 class="isd-service-card__title"><?php echo esc_html( $s['title'] ); ?></h3>
                <p class="isd-service-card__desc"><?php echo esc_html( $s['desc'] ); ?></p>
                <a href="#contact" class="isd-service-card__link">Enquire <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
