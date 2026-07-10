<?php
/**
 * Template Part: Design Process
 */
$steps = [
    [ 'num' => '01', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>', 'title' => 'Consultation', 'desc' => 'We listen to your vision, lifestyle needs, and design aspirations.' ],
    [ 'num' => '02', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>', 'title' => 'Planning', 'desc' => 'Detailed space planning, budgeting, and timeline creation for your project.' ],
    [ 'num' => '03', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>', 'title' => 'Concept Design', 'desc' => 'Mood boards, material palettes, and design concepts brought to life.' ],
    [ 'num' => '04', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>', 'title' => '3D Visualization', 'desc' => 'Photorealistic renders so you can visualize your space before execution.' ],
    [ 'num' => '05', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>', 'title' => 'Execution', 'desc' => 'Expert craftsmen bring the design to life with precision and care.' ],
    [ 'num' => '06', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>', 'title' => 'Final Handover', 'desc' => 'Thorough quality inspection and your dream space delivered with joy.' ],
];
?>
<section id="process" class="isd-process isd-section">
    <div class="isd-container">
        <div class="isd-process__header">
            <span class="isd-label isd-fade-up">How We Work</span>
            <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1">Our Design Process</h2>
        </div>
        <div class="isd-process__timeline">
            <?php foreach ( $steps as $i => $step ) : ?>
            <div class="isd-process__step isd-fade-up isd-delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="isd-process__step-num"><?php echo esc_html( $step['num'] ); ?></div>
                <div class="isd-process__step-icon"><?php echo $step['icon']; ?></div>
                <h3 class="isd-process__step-title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="isd-process__step-desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
