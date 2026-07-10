<?php
/**
 * Template Part: Split Mega Menu (Marketing + Grid)
 */
$categories = [
    [
        'id'    => 'vaastu',
        'title' => 'Vaastu',
        'desc'  => 'Ancient Indian science of architecture',
        'icon'  => '<path d="M12 2L2 12h3v8h14v-8h3L12 2z"/>'
    ],
    [
        'id'    => 'design',
        'title' => 'Design',
        'desc'  => 'Thoughtful interiors & luxury spaces',
        'icon'  => '<path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>'
    ],
    [
        'id'    => 'construction',
        'title' => 'Construction',
        'desc'  => 'Technical execution & building',
        'icon'  => '<path d="M3 21h18M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16M9 9h6M9 13h6M9 17h6"/>'
    ],
    [
        'id'    => 'exterior',
        'title' => 'Exterior',
        'desc'  => 'Landscape & facade design',
        'icon'  => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>'
    ],
    [
        'id'    => 'security',
        'title' => 'Security',
        'desc'  => 'Smart integrated protection systems',
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'
    ]
];
?>
<div class="isd-mega" id="isd-services-dropdown" role="menu">
    <div class="isd-mega__split">
        
        <!-- Left: Marketing / Info -->
        <div class="isd-mega__marketing">
            <span class="isd-mega__marketing-eyebrow">SERVICES</span>
            <h3 class="isd-mega__marketing-title">Design<br><em>Solutions</em></h3>
            <p class="isd-mega__marketing-text">We design thoughtful interiors that combine luxury, functionality and timeless aesthetics.</p>
            
            <div class="isd-mega__marketing-actions">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="isd-mega__btn isd-mega__btn--primary">Book Consultation</a>
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="isd-mega__btn isd-mega__btn--outline">View Portfolio</a>
            </div>
        </div>

        <!-- Right: Services Grid -->
        <div class="isd-mega__services">
            <div class="isd-mega__services-header">
                <span class="isd-mega__services-title">Explore Services</span>
            </div>
            
            <div class="isd-mega__grid">
                <?php foreach ( $categories as $cat ) : ?>
                <a href="<?php echo esc_url(home_url('/services/' . $cat['id'])); ?>" class="isd-mega__card">
                    <div class="isd-mega__card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><?php echo $cat['icon']; ?></svg>
                    </div>
                    <div class="isd-mega__card-info">
                        <span class="isd-mega__card-title"><?php echo esc_html($cat['title']); ?></span>
                        <span class="isd-mega__card-desc"><?php echo esc_html($cat['desc']); ?></span>
                    </div>
                    <svg class="isd-mega__card-arrow" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6h6M7 4l2 2-2 2"/></svg>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
