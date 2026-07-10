<?php
/**
 * Template Part: All Projects Grid
 * Masonry layout with data attributes for live JS filtering
 */

// Generate 20 placeholder projects for demonstration
$all_projects = [];
$cats    = ['residential', 'commercial', 'turnkey', 'luxury-villas', 'apartments', 'restaurants', 'retail', 'office'];
$rooms   = ['living-room', 'bedroom', 'master-bedroom', 'kitchen', 'bathroom', 'dining-room', 'exterior'];
$styles  = ['modern', 'minimal', 'luxury', 'contemporary', 'classic', 'scandinavian'];
$consts  = ['front-elevation', 'lighting', 'furniture', 'vaastu'];
$imgs    = [
    'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=75',
    'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=800&q=75',
    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=75',
    'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=800&q=75',
    'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=800&q=75',
    'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=75',
];

for ( $i = 1; $i <= 20; $i++ ) {
    $cat = $cats[ array_rand($cats) ];
    $rm  = $rooms[ array_rand($rooms) ];
    $st  = $styles[ array_rand($styles) ];
    $co  = $consts[ array_rand($consts) ];
    $all_projects[] = [
        'title' => 'Project ' . str_pad($i, 3, '0', STR_PAD_LEFT),
        'cat'   => $cat,
        'room'  => $rm,
        'style' => $st,
        'const' => $co,
        'loc'   => 'Delhi NCR',
        'year'  => rand(2018, 2024),
        'img'   => $imgs[ array_rand($imgs) ],
        'aspect'=> rand(0,1) ? 'aspect-tall' : 'aspect-square', // For masonry variance
    ];
}
?>
<section id="projects" class="isd-pf-grid isd-section" aria-label="All Projects">
    <div class="isd-container">
        
        <!-- Live status -->
        <div class="isd-pf-grid__status" aria-live="polite">
            <p id="pf-results-count">Showing <strong><?php echo count($all_projects); ?></strong> projects</p>
        </div>

        <div class="isd-pf-masonry" id="pf-masonry">
            <?php foreach ( $all_projects as $p ) : ?>
            <article 
                class="isd-pf-card <?php echo esc_attr($p['aspect']); ?>" 
                data-category="<?php echo esc_attr($p['cat']); ?>"
                data-room="<?php echo esc_attr($p['room']); ?>"
                data-style="<?php echo esc_attr($p['style']); ?>"
                data-construction="<?php echo esc_attr($p['const']); ?>"
                data-title="<?php echo esc_attr(strtolower($p['title'])); ?>"
            >
                <div class="isd-pf-card__media">
                    <img src="<?php echo esc_url($p['img']); ?>" alt="<?php echo esc_attr($p['title']); ?>" loading="lazy">
                    <div class="isd-pf-card__overlay">
                        <div class="isd-pf-card__overlay-content">
                            <a href="#" class="isd-btn isd-btn--white">View Details</a>
                            <a href="<?php echo esc_url(home_url('/contact?project=' . urlencode($p['title']))); ?>" class="isd-btn isd-btn--primary">Get Quote</a>
                        </div>
                    </div>
                </div>
                <div class="isd-pf-card__body">
                    <div class="isd-pf-card__meta">
                        <span><?php echo esc_html(ucwords(str_replace('-', ' ', $p['cat']))); ?></span>
                        <span class="dot"></span>
                        <span><?php echo esc_html($p['year']); ?></span>
                    </div>
                    <h3 class="isd-pf-card__title">
                        <a href="#"><?php echo esc_html($p['title']); ?></a>
                    </h3>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <!-- Empty State -->
        <div id="pf-no-results" class="isd-pf-empty" hidden>
            <div class="isd-pf-empty__content">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>
                <h3>No projects found</h3>
                <p>We couldn't find any projects matching your current filters. Try adjusting your selection or search term.</p>
                <button class="isd-btn isd-btn--primary" id="pf-reset-empty">Clear All Filters</button>
            </div>
        </div>

    </div>
</section>
