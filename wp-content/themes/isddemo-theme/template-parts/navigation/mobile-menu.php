<?php
/**
 * Template Part: Mobile Navigation Drawer
 */
$categories = [
    [
        'id'    => 'vaastu',
        'title' => 'Vaastu',
        'items' => ['Master Bedroom', 'Kitchen', 'Study Room', 'Kids Room', 'Washroom', 'Pooja Room']
    ],
    [
        'id'    => 'design',
        'title' => 'Design',
        'items' => ['Bedroom', 'Living Room', 'Kitchen', 'Bathroom', 'Kids Room', 'Courtyard']
    ],
    [
        'id'    => 'construction',
        'title' => 'Construction',
        'items' => ['Technical Aspects', 'Concrete Work', 'Electrical Work', 'Front Elevation', 'Landscaping']
    ],
    [
        'id'    => 'exterior',
        'title' => 'Exterior',
        'items' => ['Front Elevation', 'Landscape', 'Boundary Wall', 'Garden', 'Facade']
    ],
    [
        'id'    => 'security',
        'title' => 'Security',
        'items' => ['CCTV', 'Motion Sensors', 'Video Door Phone', 'Smart Locks', 'Perimeter Security']
    ]
];
?>
<div class="isd-drawer" id="isd-mobile-drawer" role="dialog" aria-modal="true" aria-label="Mobile Navigation" hidden>
    
    <div class="isd-drawer__header">
        <span class="isd-drawer__title">Menu</span>
        <button class="isd-drawer__close" id="isd-drawer-close" aria-label="Close menu">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
    </div>

    <div class="isd-drawer__body">
        <nav class="isd-drawer__nav">
            <ul class="isd-drawer__list" role="list">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-drawer__link">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="isd-drawer__link">About</a></li>
                
                <li class="isd-drawer__accordion">
                    <button class="isd-drawer__accordion-btn" aria-expanded="false" aria-controls="mobile-services-panel">
                        Our Services
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
                    </button>
                    <div class="isd-drawer__accordion-panel" id="mobile-services-panel" hidden>
                        <?php foreach ( $categories as $cat ) : ?>
                        <div class="isd-drawer__group">
                            <span class="isd-drawer__group-title"><?php echo esc_html($cat['title']); ?></span>
                            <ul class="isd-drawer__sublist">
                                <?php foreach ( $cat['items'] as $item ) : ?>
                                <li>
                                    <a href="javascript:void(0);">
                                        <?php echo esc_html($item); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </li>

                <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="isd-drawer__link">Portfolio</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="isd-drawer__link">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="isd-drawer__footer">
        <a href="<?php echo esc_url( home_url( '/contact#consultation' ) ); ?>" class="isd-btn isd-btn--primary isd-drawer__cta">Book Consultation</a>
    </div>

</div>
