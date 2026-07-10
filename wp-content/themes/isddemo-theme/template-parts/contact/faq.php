<?php
/**
 * Template Part: FAQ Accordion
 */
$faqs = [
    [
        'q' => 'How do I book a consultation?',
        'a' => 'Simply fill out the consultation form on this page with your project details and budget. Our team will get back to you within 24 hours to schedule a meeting at a time that suits you — either in-person at our office or via video call.',
    ],
    [
        'q' => 'How long does an interior project take?',
        'a' => 'Project timelines vary based on scope. A single room typically takes 4–8 weeks, a full home renovation 3–6 months, and commercial projects 2–12 months. We provide a detailed timeline at the start of every project so there are never any surprises.',
    ],
    [
        'q' => 'Do you provide 3D designs before execution?',
        'a' => 'Absolutely. We provide photorealistic 3D renders and virtual walkthroughs before any work begins. This allows you to see and approve the exact look, feel, material, and colour palette of your space before a single nail is driven.',
    ],
    [
        'q' => 'Do you undertake commercial projects?',
        'a' => 'Yes. We have extensive experience in commercial interior design including offices, restaurants, retail stores, hotels, and clinics. Our commercial projects follow the same luxury standard as our residential work.',
    ],
    [
        'q' => 'Can you work outside Delhi?',
        'a' => 'Yes. We have branch offices in Lucknow, Saharanpur, and New York, and we regularly take on projects across India and internationally. For remote projects we leverage detailed consultations, mood boards, and 3D visualisations to deliver the same quality experience.',
    ],
];
?>
<section class="isd-faq-minimal isd-section" id="faq" aria-label="Frequently Asked Questions">
    <div class="isd-container" style="max-width: 900px;">
        <div class="isd-faq-minimal__header">
            <span class="isd-label isd-fade-up">FAQ</span>
            <h2 class="isd-faq-minimal__heading isd-fade-up isd-delay-1">Common Questions</h2>
        </div>
        <div class="isd-faq-minimal__list" role="list">
            <?php foreach ( $faqs as $i => $faq ) :
                $id = 'faq-' . ( $i + 1 );
                $panel_id = 'faq-panel-' . ( $i + 1 );
            ?>
            <div class="isd-faq-minimal__item isd-fade-up isd-delay-<?php echo esc_attr( $i + 1 ); ?>" role="listitem">
                <button
                    class="isd-faq-minimal__trigger"
                    id="<?php echo esc_attr( $id ); ?>"
                    aria-expanded="false"
                    aria-controls="<?php echo esc_attr( $panel_id ); ?>"
                >
                    <span class="isd-faq-minimal__question"><?php echo esc_html( $faq['q'] ); ?></span>
                    <span class="isd-faq-minimal__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div
                    class="isd-faq-minimal__panel"
                    id="<?php echo esc_attr( $panel_id ); ?>"
                    role="region"
                    aria-labelledby="<?php echo esc_attr( $id ); ?>"
                    hidden
                >
                    <p class="isd-faq-minimal__answer"><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
