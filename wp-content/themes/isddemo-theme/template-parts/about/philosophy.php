<?php
/**
 * Template Part: Design Philosophy
 */
$quote = 'Great spaces are never accidental. They are carefully imagined, designed and crafted.';
$cards = [
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M16 4v24M4 16h24"/><circle cx="16" cy="16" r="12"/></svg>',
        'title' => 'Functionality',
        'desc'  => 'Every element serves a purpose. Beauty and utility are never opposites — in our work, they are inseparable.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M4 20l8-8 5 5 7-10 4 4"/></svg>',
        'title' => 'Creativity',
        'desc'  => 'We bring a fresh perspective to each brief, pushing beyond the expected to create spaces that genuinely surprise and delight.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><circle cx="16" cy="16" r="12"/><path d="M10 16l4 4 8-8"/></svg>',
        'title' => 'Timeless Elegance',
        'desc'  => 'We resist the lure of trends. Our designs are rooted in proportion, quality and restraint — built to look as beautiful in twenty years as they do today.',
    ],
];
?>
<section class="isd-about-philosophy" aria-label="Design Philosophy">
    <div class="isd-about-philosophy__bg" aria-hidden="true">
        <svg viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <rect width="1440" height="900" fill="#111110"/>
            <rect x="200" y="80" width="1040" height="740" fill="none" stroke="#C8A45D" stroke-width="0.5" opacity="0.2"/>
            <rect x="280" y="160" width="880" height="580" fill="none" stroke="#C8A45D" stroke-width="0.3" opacity="0.12"/>
            <line x1="0" y1="450" x2="1440" y2="450" stroke="#C8A45D" stroke-width="0.3" opacity="0.1"/>
        </svg>
    </div>
    <div class="isd-container isd-about-philosophy__inner">
        <div class="isd-about-philosophy__quote-wrap">
            <span class="isd-about-philosophy__quote-mark" aria-hidden="true">&ldquo;</span>
            <blockquote class="isd-about-philosophy__quote isd-fade-up"><?php echo esc_html( $quote ); ?></blockquote>
            <span class="isd-label isd-about-philosophy__quote-attr">Our Design Philosophy</span>
        </div>
        <div class="isd-about-philosophy__cards">
            <?php foreach ( $cards as $i => $card ) : ?>
            <article class="isd-about-philosophy__card isd-fade-up isd-delay-<?php echo $i + 1; ?>">
                <div class="isd-about-philosophy__card-icon" aria-hidden="true">
                    <?php echo $card['icon']; // phpcs:ignore ?>
                </div>
                <h3 class="isd-about-philosophy__card-title"><?php echo esc_html( $card['title'] ); ?></h3>
                <p class="isd-about-philosophy__card-desc"><?php echo esc_html( $card['desc'] ); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
