<?php
/**
 * Template Part: Featured Projects
 */
$projects = [
    [ 'cat' => 'residential', 'label' => 'Residential', 'title' => 'The Oberoi Villa',       'img' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=800&q=80' ],
    [ 'cat' => 'commercial',  'label' => 'Commercial',  'title' => 'Luxe Co-Work Studio',    'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80' ],
    [ 'cat' => 'kitchen',     'label' => 'Kitchen',     'title' => 'The Chef\'s Canvas',     'img' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=800&q=80' ],
    [ 'cat' => 'bedroom',     'label' => 'Bedroom',     'title' => 'Serene Sleep Retreat',   'img' => 'https://images.unsplash.com/photo-1588046130717-0eb0c9a3ba15?auto=format&fit=crop&w=800&q=80' ],
    [ 'cat' => 'residential', 'label' => 'Residential', 'title' => 'Modern Haveli Penthouse','img' => 'https://images.unsplash.com/photo-1600607688969-a5bfcd646154?auto=format&fit=crop&w=800&q=80' ],
    [ 'cat' => 'bathroom',    'label' => 'Bathroom',    'title' => 'Spa Sanctuary Bath',     'img' => 'https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=800&q=80' ],
];
$filters = [ 'all' => 'All', 'residential' => 'Residential', 'commercial' => 'Commercial', 'kitchen' => 'Kitchen', 'bedroom' => 'Bedroom', 'bathroom' => 'Bathroom' ];
?>
<section id="projects" class="isd-projects isd-section" data-filter-section>
    <div class="isd-container">
        <div class="isd-projects__header">
            <span class="isd-label isd-fade-up">Our Portfolio</span>
            <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1">Featured Projects</h2>
        </div>
        <div class="isd-filter-tabs" role="tablist">
            <?php foreach ( $filters as $key => $label ) : ?>
            <button class="isd-filter-tab <?php echo $key === 'all' ? 'is-active' : ''; ?>" data-filter="<?php echo esc_attr( $key ); ?>" role="tab"><?php echo esc_html( $label ); ?></button>
            <?php endforeach; ?>
        </div>
        <div class="isd-projects__grid">
            <?php foreach ( $projects as $i => $p ) : ?>
            <div class="isd-project-card isd-scale-in isd-delay-<?php echo esc_attr( $i + 1 ); ?>" data-category="<?php echo esc_attr( $p['cat'] ); ?>">
                <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" class="isd-project-card__img" loading="lazy">
                <div class="isd-project-card__overlay">
                    <div class="isd-project-card__info">
                        <span class="isd-project-card__category"><?php echo esc_html( $p['label'] ); ?></span>
                        <h3 class="isd-project-card__title"><?php echo esc_html( $p['title'] ); ?></h3>
                        <a href="#contact" class="isd-project-card__link">View Project &rarr;</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
