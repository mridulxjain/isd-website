<?php
/**
 * Template Part: Compact Mega Menu
 */
$categories = [
    [
        'id'    => 'vaastu',
        'title' => 'Vaastu',
        'icon'  => '<path d="M12 2L2 12h3v8h14v-8h3L12 2z"/>',
        'items' => ['Master Bedroom', 'Kitchen', 'Study Room', 'Kids Room', 'Washroom', 'Pooja Room']
    ],
    [
        'id'    => 'design',
        'title' => 'Design',
        'icon'  => '<path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>',
        'items' => ['Bedroom', 'Living Room', 'Kitchen', 'Bathroom', 'Kids Room', 'Courtyard']
    ],
    [
        'id'    => 'construction',
        'title' => 'Construction',
        'icon'  => '<path d="M3 21h18M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16M9 9h6M9 13h6M9 17h6"/>',
        'items' => ['Technical Aspects', 'Concrete Work', 'Electrical Work', 'Front Elevation', 'Landscaping']
    ],
    [
        'id'    => 'exterior',
        'title' => 'Exterior',
        'icon'  => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>',
        'items' => ['Front Elevation', 'Landscape', 'Boundary Wall', 'Garden', 'Facade']
    ],
    [
        'id'    => 'security',
        'title' => 'Security',
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'items' => ['CCTV', 'Motion Sensors', 'Video Door Phone', 'Smart Locks', 'Perimeter Security']
    ]
];
?>
<div class="isd-mega" id="isd-mega-menu" role="menu" hidden>
    <div class="isd-mega__inner">
        
        <!-- Left: Categories -->
        <div class="isd-mega__sidebar" role="tablist" aria-orientation="vertical">
            <?php foreach ( $categories as $index => $cat ) : ?>
                <button class="isd-mega__tab <?php echo $index === 0 ? 'is-active' : ''; ?>" role="tab" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="mega-panel-<?php echo esc_attr($cat['id']); ?>" data-target="<?php echo esc_attr($cat['id']); ?>">
                    <?php echo esc_html($cat['title']); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Right: Services Cards -->
        <div class="isd-mega__content">
            <?php foreach ( $categories as $index => $cat ) : ?>
                <div class="isd-mega__panel <?php echo $index === 0 ? 'is-active' : ''; ?>" id="mega-panel-<?php echo esc_attr($cat['id']); ?>" role="tabpanel" tabindex="0" <?php echo $index !== 0 ? 'hidden' : ''; ?>>
                    
                    <div class="isd-mega__panel-header">
                        <span class="isd-mega__panel-title"><?php echo esc_html($cat['title']); ?> Services</span>
                        <a href="<?php echo esc_url(home_url('/services/' . $cat['id'])); ?>" class="isd-mega__panel-link">View All <svg viewBox="0 0 12 12" fill="none" stroke="currentColor"><path d="M3 6h6M7 4l2 2-2 2"/></svg></a>
                    </div>
                    
                    <div class="isd-mega__grid">
                        <?php foreach ( $cat['items'] as $item ) : ?>
                        <a href="<?php echo esc_url(home_url('/services/' . $cat['id'] . '/' . sanitize_title($item))); ?>" class="isd-mega__card">
                            <div class="isd-mega__card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><?php echo $cat['icon']; // safe SVG paths ?></svg>
                            </div>
                            <div class="isd-mega__card-info">
                                <span class="isd-mega__card-title"><?php echo esc_html($item); ?></span>
                            </div>
                            <svg class="isd-mega__card-arrow" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6h6M7 4l2 2-2 2"/></svg>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
