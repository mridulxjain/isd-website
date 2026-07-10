<?php
/**
 * Template Part: Featured Projects
 */
$featured = [
    [
        'title' => 'The Malabar House', 'cat' => 'Luxury Villas', 'loc' => 'New Delhi', 'area' => '8,500 sq ft', 'year' => '2023',
        'desc' => 'A masterclass in tropical modernism, featuring sprawling courtyards and bespoke teak joinery.',
        'img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1200&q=80',
        'tags' => ['Exterior', 'Architecture', 'Turnkey']
    ],
    [
        'title' => 'Lumina Penthouse', 'cat' => 'Residential', 'loc' => 'Gurugram', 'area' => '4,200 sq ft', 'year' => '2024',
        'desc' => 'Minimalist luxury defined by Italian marble, panoramic city views, and integrated smart home technology.',
        'img' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200&q=80',
        'tags' => ['Minimal', 'Interior', 'Lighting']
    ],
    [
        'title' => 'Aura Corporate HQ', 'cat' => 'Commercial', 'loc' => 'Noida', 'area' => '12,000 sq ft', 'year' => '2023',
        'desc' => 'An inspiring workspace designed to foster collaboration through open plans, biophilic design, and acoustic privacy.',
        'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80',
        'tags' => ['Office', 'Furniture', 'Space Planning']
    ],
];
?>
<section class="isd-pf-featured isd-section" aria-label="Featured Projects">
    <div class="isd-container">
        <div class="isd-pf-featured__header">
            <span class="isd-label isd-fade-up">Featured Work</span>
            <h2 class="isd-pf-featured__heading isd-fade-up isd-delay-1">Select Projects</h2>
        </div>
        
        <div class="isd-pf-featured__grid">
            <?php foreach ( $featured as $i => $p ) : ?>
            <article class="isd-pf-fcard isd-fade-up isd-delay-<?php echo ($i % 3) + 1; ?>">
                <div class="isd-pf-fcard__media">
                    <img src="<?php echo esc_url($p['img']); ?>" alt="<?php echo esc_attr($p['title']); ?>" class="isd-pf-fcard__img" loading="lazy">
                    <div class="isd-pf-fcard__overlay"></div>
                    <div class="isd-pf-fcard__hover-actions">
                        <a href="#" class="isd-btn isd-btn--primary">View Project</a>
                        <a href="<?php echo esc_url(home_url('/contact?project=' . urlencode($p['title']))); ?>" class="isd-btn isd-btn--white">Get Quotation</a>
                    </div>
                </div>
                <div class="isd-pf-fcard__content">
                    <div class="isd-pf-fcard__meta">
                        <span><?php echo esc_html($p['cat']); ?></span>
                        <span class="dot"></span>
                        <span><?php echo esc_html($p['loc']); ?></span>
                    </div>
                    <h3 class="isd-pf-fcard__title">
                        <a href="#"><?php echo esc_html($p['title']); ?></a>
                    </h3>
                    <p class="isd-pf-fcard__desc"><?php echo esc_html($p['desc']); ?></p>
                    <div class="isd-pf-fcard__details">
                        <div class="isd-pf-fcard__detail">
                            <strong>Area</strong>
                            <span><?php echo esc_html($p['area']); ?></span>
                        </div>
                        <div class="isd-pf-fcard__detail">
                            <strong>Year</strong>
                            <span><?php echo esc_html($p['year']); ?></span>
                        </div>
                    </div>
                    <div class="isd-pf-fcard__tags">
                        <?php foreach ( $p['tags'] as $tag ) : ?>
                            <span class="isd-pf-fcard__tag"><?php echo esc_html($tag); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
