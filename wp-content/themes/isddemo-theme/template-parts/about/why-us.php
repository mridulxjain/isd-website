<?php
/**
 * Template Part: Why Clients Trust Us
 */
$reasons = [
    ['title' => 'Experienced Team',           'desc' => 'Architects, interior designers and craftsmen with 15+ years of collective experience across every project type.'],
    ['title' => 'Turnkey Solutions',          'desc' => 'A single studio managing design through delivery — one vision, one point of contact, zero compromises.'],
    ['title' => 'Creative Design',            'desc' => 'Original concepts rooted in your brief, not borrowed from trend boards. Every project is genuinely yours.'],
    ['title' => 'Premium Materials',          'desc' => 'Every material is sourced with purpose — chosen for beauty, durability and the way it feels underhand and underfoot.'],
    ['title' => 'Transparent Communication', 'desc' => 'Detailed proposals, honest timelines and open conversations at every stage. No surprises, ever.'],
    ['title' => 'Timely Delivery',            'desc' => 'We treat our deadlines as commitments, not estimates. Careful planning means your space is ready when promised.'],
];
?>
<section class="isd-ab-why isd-section" aria-label="Why Clients Trust Us">
    <div class="isd-container">
        <div class="isd-ab-why__header">
            <span class="isd-label isd-fade-up">Why Us</span>
            <h2 class="isd-ab-why__heading isd-fade-up isd-delay-1">Why Clients Trust Us</h2>
            <p class="isd-ab-why__intro isd-fade-up isd-delay-2">Six things that set every Interior Shapes & Designs project apart.</p>
        </div>
        <div class="isd-ab-why__grid">
            <?php foreach ( $reasons as $i => $r ) : ?>
            <article class="isd-ab-why__card isd-fade-up isd-delay-<?php echo ($i % 3) + 1; ?>" aria-label="<?php echo esc_attr($r['title']); ?>">
                <span class="isd-ab-why__num" aria-hidden="true"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                <h3 class="isd-ab-why__card-title"><?php echo esc_html($r['title']); ?></h3>
                <p class="isd-ab-why__card-desc"><?php echo esc_html($r['desc']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
