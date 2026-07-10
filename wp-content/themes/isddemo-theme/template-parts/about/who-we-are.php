<?php
/**
 * Template Part: Who We Are — 2x2 grid
 */
$cards = [
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M16 4L4 12v16h24V12L16 4z"/><rect x="11" y="18" width="10" height="14"/></svg>',
        'title' => 'Who We Are',
        'desc'  => 'A New Delhi-born studio of architects, designers and craftsmen united by a passion for creating spaces that stand the test of time — and the scrutiny of the people who live in them.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="4" y="4" width="24" height="24" rx="4"/><path d="M4 14h24M14 4v24"/></svg>',
        'title' => 'What We Design',
        'desc'  => 'From luxury residences and modular kitchens to commercial offices, restaurants and full exterior transformations — we design the complete built environment.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M6 16l6 6 14-14"/><circle cx="16" cy="16" r="13"/></svg>',
        'title' => 'How We Deliver',
        'desc'  => 'Every project is handled as a turnkey engagement — from the first design brief to the final styling. You get one point of contact and zero compromise on quality.',
    ],
    [
        'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M16 4l2.8 8.6H28l-7.4 5.4 2.8 8.6L16 21.2l-7.4 5.4 2.8-8.6L4 12.6h9.2z"/></svg>',
        'title' => 'Our Promise',
        'desc'  => 'Transparent pricing, honest timelines, premium materials and a relentless focus on your satisfaction — from the first conversation to the final walk-through.',
    ],
];
?>
<section class="isd-about-who isd-section" aria-label="Who We Are">
    <div class="isd-container">
        <div class="isd-about-who__header">
            <span class="isd-label isd-fade-up">The Studio</span>
            <h2 class="isd-about-who__heading isd-fade-up isd-delay-1">Built on Trust,<br>Driven by Design.</h2>
        </div>
        <div class="isd-about-who__grid">
            <?php foreach ( $cards as $i => $card ) : ?>
            <article class="isd-about-who__card isd-fade-up isd-delay-<?php echo $i + 1; ?>" aria-labelledby="who-card-<?php echo $i; ?>">
                <div class="isd-about-who__card-icon" aria-hidden="true">
                    <?php echo $card['icon']; // phpcs:ignore ?>
                </div>
                <h3 class="isd-about-who__card-title" id="who-card-<?php echo $i; ?>"><?php echo esc_html( $card['title'] ); ?></h3>
                <p class="isd-about-who__card-desc"><?php echo esc_html( $card['desc'] ); ?></p>
                <div class="isd-about-who__card-arrow" aria-hidden="true">
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
