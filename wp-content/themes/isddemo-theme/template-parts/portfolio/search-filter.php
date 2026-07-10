<?php
/**
 * Template Part: Search and Filters
 * A sticky toolbar for live JS filtering
 */
$categories = ['Residential', 'Commercial', 'Turnkey', 'Luxury Villas', 'Apartments', 'Restaurants', 'Retail', 'Office'];
$rooms      = ['Living Room', 'Bedroom', 'Master Bedroom', 'Kids Room', 'Study Room', 'Kitchen', 'Modular Kitchen', 'Bathroom', 'Washroom', 'Dining Room', 'Pooja Room', 'Courtyard', 'Balcony', 'Terrace', 'Exterior', 'Landscape'];
$construct  = ['Front Elevation', 'Concrete Work', 'Electrical Work', 'False Ceiling', 'Lighting', 'Furniture', 'Security', 'Vaastu'];
$styles     = ['Modern', 'Minimal', 'Luxury', 'Contemporary', 'Classic', 'Scandinavian', 'Industrial'];
?>
<section class="isd-pf-filters isd-fade-up" aria-label="Project Filters">
    <div class="isd-container">
        <div class="isd-pf-filters__bar">
            
            <!-- Search -->
            <div class="isd-pf-filters__search">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>
                <input type="text" id="pf-search" placeholder="Search projects, rooms or styles..." aria-label="Search portfolio">
            </div>

            <!-- Dropdowns -->
            <div class="isd-pf-filters__dropdowns">
                
                <div class="isd-pf-filter" data-filter-group="category">
                    <button class="isd-pf-filter__btn" aria-expanded="false">
                        <span class="isd-pf-filter__label">Category: All</span>
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
                    </button>
                    <div class="isd-pf-filter__panel" hidden>
                        <button class="isd-pf-filter__option is-active" data-val="all">All</button>
                        <?php foreach ( $categories as $opt ) : ?>
                            <button class="isd-pf-filter__option" data-val="<?php echo esc_attr(strtolower(str_replace(' ', '-', $opt))); ?>"><?php echo esc_html($opt); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="isd-pf-filter" data-filter-group="room">
                    <button class="isd-pf-filter__btn" aria-expanded="false">
                        <span class="isd-pf-filter__label">Room: All</span>
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
                    </button>
                    <div class="isd-pf-filter__panel" hidden>
                        <button class="isd-pf-filter__option is-active" data-val="all">All</button>
                        <?php foreach ( $rooms as $opt ) : ?>
                            <button class="isd-pf-filter__option" data-val="<?php echo esc_attr(strtolower(str_replace(' ', '-', $opt))); ?>"><?php echo esc_html($opt); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="isd-pf-filter" data-filter-group="style">
                    <button class="isd-pf-filter__btn" aria-expanded="false">
                        <span class="isd-pf-filter__label">Style: All</span>
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
                    </button>
                    <div class="isd-pf-filter__panel" hidden>
                        <button class="isd-pf-filter__option is-active" data-val="all">All</button>
                        <?php foreach ( $styles as $opt ) : ?>
                            <button class="isd-pf-filter__option" data-val="<?php echo esc_attr(strtolower(str_replace(' ', '-', $opt))); ?>"><?php echo esc_html($opt); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="isd-pf-filter" data-filter-group="construction">
                    <button class="isd-pf-filter__btn" aria-expanded="false">
                        <span class="isd-pf-filter__label">Construction: All</span>
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4"/></svg>
                    </button>
                    <div class="isd-pf-filter__panel" hidden>
                        <button class="isd-pf-filter__option is-active" data-val="all">All</button>
                        <?php foreach ( $construct as $opt ) : ?>
                            <button class="isd-pf-filter__option" data-val="<?php echo esc_attr(strtolower(str_replace(' ', '-', $opt))); ?>"><?php echo esc_html($opt); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button id="pf-reset" class="isd-pf-filters__reset" aria-label="Reset all filters">Reset</button>

            </div>
        </div>
    </div>
</section>
