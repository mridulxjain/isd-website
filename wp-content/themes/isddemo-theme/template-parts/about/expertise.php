<?php
/**
 * Template Part: Our Expertise
 * Editorial list layout with alternating image/text
 */
$services = [
    ['title' => 'Interior Design',      'desc' => 'Full-scope residential and commercial interior design — concept, documentation and execution.', 'img' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Exterior Design',      'desc' => 'Facades, landscaping and curb appeal that make a confident, lasting first impression.', 'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Turnkey Projects',     'desc' => 'End-to-end project delivery — design, procurement, construction and styling under one roof.', 'img' => 'https://images.unsplash.com/photo-1565182999561-18d7dc61c393?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Residential',          'desc' => 'Luxury homes, villas and apartments designed around how you actually live.', 'img' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Commercial',           'desc' => 'Offices, retail, restaurants and hospitality spaces that amplify your brand identity.', 'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Luxury Renovation',    'desc' => 'Precision transformations of existing spaces — minimal disruption, maximum impact.', 'img' => 'https://images.unsplash.com/photo-1484101403633-562f891dc89a?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Furniture Planning',   'desc' => 'Custom furniture curation and space-conscious planning that ties every room together.', 'img' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Space Planning',       'desc' => 'Intelligent layouts that maximise flow, function and natural light for every square foot.', 'img' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Lighting Design',      'desc' => 'Layered, considered lighting schemes that define mood, depth and atmosphere.', 'img' => 'https://images.unsplash.com/photo-1565538810643-b5bdb714032a?auto=format&fit=crop&w=600&q=75'],
    ['title' => 'Material Selection',   'desc' => 'Curated stone, wood, metal and textile palettes sourced for beauty, longevity and originality.', 'img' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=600&q=75'],
];
?>
<section class="isd-ab-expertise isd-section" aria-label="Our Expertise">
    <div class="isd-container">
        <div class="isd-ab-expertise__header">
            <span class="isd-label isd-fade-up">Expertise</span>
            <h2 class="isd-ab-expertise__heading isd-fade-up isd-delay-1">What We Do Best</h2>
        </div>
        <ul class="isd-ab-expertise__list" role="list">
            <?php foreach ( $services as $i => $svc ) : ?>
            <li class="isd-ab-expertise__item isd-fade-up" role="listitem">
                <div class="isd-ab-expertise__num" aria-hidden="true"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                <div class="isd-ab-expertise__item-img-wrap">
                    <img src="<?php echo esc_url($svc['img']); ?>" alt="<?php echo esc_attr($svc['title']); ?>" class="isd-ab-expertise__item-img" loading="lazy">
                </div>
                <div class="isd-ab-expertise__item-body">
                    <h3 class="isd-ab-expertise__item-title"><?php echo esc_html($svc['title']); ?></h3>
                    <p class="isd-ab-expertise__item-desc"><?php echo esc_html($svc['desc']); ?></p>
                </div>
                <div class="isd-ab-expertise__arrow" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
