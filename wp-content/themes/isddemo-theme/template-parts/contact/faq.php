<?php
/**
 * Template Part: FAQ Accordion (Premium)
 */

$faqs = function_exists('get_field') ? get_field('contact_faqs') : null;

if ( empty($faqs) ) {
    $faqs = [
        [
            'q' => 'How do I book a consultation?',
            'a' => 'Use the contact form or call us directly. Our team will contact you within one business day.'
        ],
        [
            'q' => 'How long does an interior project take?',
            'a' => 'Project timelines depend on scale and scope. Residential projects typically range from a few weeks to several months.'
        ],
        [
            'q' => 'Do you provide 3D visualizations?',
            'a' => 'Yes. We provide detailed design concepts and 3D visualizations before execution whenever required.'
        ],
        [
            'q' => 'Do you undertake commercial projects?',
            'a' => 'Yes. We work on offices, retail spaces, restaurants, hospitality projects and commercial interiors.'
        ],
        [
            'q' => 'Can you work outside Delhi?',
            'a' => 'Absolutely. We execute projects throughout India and also undertake selected international assignments.'
        ]
    ];
}
?>
<section class="isd-faq-premium" aria-labelledby="faq-heading">
    <div class="isd-container">
        <div class="isd-faq-premium__header">
            <h2 id="faq-heading" class="isd-faq-premium__heading">Frequently Asked Questions</h2>
        </div>
        
        <div class="isd-faq-premium__list" role="list">
            <?php foreach ( $faqs as $index => $faq ) : ?>
            <div class="isd-faq-premium__item" role="listitem">
                <button class="isd-faq-premium__trigger" aria-expanded="false" aria-controls="faq-panel-<?php echo $index; ?>" id="faq-btn-<?php echo $index; ?>">
                    <span class="isd-faq-premium__question"><?php echo esc_html($faq['q']); ?></span>
                    <svg class="isd-faq-premium__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="isd-faq-premium__panel" id="faq-panel-<?php echo $index; ?>" role="region" aria-labelledby="faq-btn-<?php echo $index; ?>">
                    <div class="isd-faq-premium__panel-inner">
                        <p class="isd-faq-premium__answer"><?php echo esc_html($faq['a']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.isd-faq-premium__item');
    
    faqItems.forEach(item => {
        const trigger = item.querySelector('.isd-faq-premium__trigger');
        const panel = item.querySelector('.isd-faq-premium__panel');
        
        trigger.addEventListener('click', () => {
            const isOpen = item.classList.contains('is-open');
            
            // Close all others
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('is-open')) {
                    otherItem.classList.remove('is-open');
                    otherItem.querySelector('.isd-faq-premium__trigger').setAttribute('aria-expanded', 'false');
                    otherItem.querySelector('.isd-faq-premium__panel').style.maxHeight = null;
                }
            });
            
            // Toggle current
            if (isOpen) {
                item.classList.remove('is-open');
                trigger.setAttribute('aria-expanded', 'false');
                panel.style.maxHeight = null;
            } else {
                item.classList.add('is-open');
                trigger.setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });
});
</script>
