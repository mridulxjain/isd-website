<?php
/**
 * Template Part: How We Work — Premium Process Timeline
 */
$steps = [
    ['num' => '01', 'title' => 'Discovery',       'desc' => 'We start by listening — deeply understanding your lifestyle, aspirations and the space we are working with.'],
    ['num' => '02', 'title' => 'Planning',         'desc' => 'A detailed project roadmap: timelines, budget frameworks, team allocation and scope definition.'],
    ['num' => '03', 'title' => 'Design',           'desc' => 'Concept boards, material palettes, furniture layouts and the architectural language of your space.'],
    ['num' => '04', 'title' => 'Visualisation',    'desc' => 'Photorealistic 3D renders and virtual walkthroughs for your approval before any work begins.'],
    ['num' => '05', 'title' => 'Execution',        'desc' => 'Expert craftsmen and project managers bring the design to life — precisely, on time and on budget.'],
    ['num' => '06', 'title' => 'Final Styling',    'desc' => 'The finishing touches: accessories, lighting, art and the last details that transform a house into a home.'],
];
?>
<section class="isd-about-process isd-section" aria-label="How We Work">
    <div class="isd-container">
        <div class="isd-about-process__header">
            <span class="isd-label isd-fade-up">Process</span>
            <h2 class="isd-about-process__heading isd-fade-up isd-delay-1">How We Work</h2>
            <p class="isd-about-process__sub isd-fade-up isd-delay-2">Six considered stages. One seamless experience from first brief to final reveal.</p>
        </div>
        <div class="isd-about-process__timeline" role="list">
            <?php foreach ( $steps as $i => $step ) : ?>
            <div class="isd-about-process__step isd-fade-up isd-delay-<?php echo $i + 1; ?>" role="listitem">
                <div class="isd-about-process__step-num" aria-hidden="true"><?php echo esc_html( $step['num'] ); ?></div>
                <div class="isd-about-process__step-content">
                    <h3 class="isd-about-process__step-title"><?php echo esc_html( $step['title'] ); ?></h3>
                    <p class="isd-about-process__step-desc"><?php echo esc_html( $step['desc'] ); ?></p>
                </div>
                <?php if ( $i < count($steps) - 1 ) : ?>
                <div class="isd-about-process__connector" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#C8A45D" stroke-width="1"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
