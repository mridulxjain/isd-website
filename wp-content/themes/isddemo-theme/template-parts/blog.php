<?php
/**
 * Template Part: Blog Preview
 */
$args = [
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
];
$recent_posts = new WP_Query( $args );
$fallback_posts = [
    [ 'title' => '5 Luxury Interior Trends Dominating Delhi Homes in 2024', 'excerpt' => 'From biophilic design to japandi minimalism, discover the top trends reshaping luxury living spaces.', 'cat' => 'Trends', 'img' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=600&q=80', 'date' => 'Dec 15, 2024', 'read' => '5 min read' ],
    [ 'title' => 'How to Choose the Perfect Material Palette for Your Home', 'excerpt' => 'A guide to selecting cohesive textures, finishes, and tones that create a luxurious and harmonious space.', 'cat' => 'Design Tips', 'img' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=600&q=80', 'date' => 'Nov 28, 2024', 'read' => '7 min read' ],
    [ 'title' => 'The Complete Guide to Modular Kitchen Design', 'excerpt' => 'Everything you need to know about planning, designing, and executing the perfect modular kitchen.', 'cat' => 'Kitchen', 'img' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=600&q=80', 'date' => 'Nov 10, 2024', 'read' => '9 min read' ],
];
?>
<section id="blog" class="isd-blog isd-section">
    <div class="isd-container">
        <div class="isd-blog__header">
            <div>
                <span class="isd-label isd-fade-up">Our Journal</span>
                <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1">Design Insights</h2>
            </div>
            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog' ) ); ?>" class="isd-btn isd-btn--outline">View All Articles</a>
        </div>
        <div class="isd-blog__grid">
            <?php if ( $recent_posts->have_posts() ) :
                while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                    $cat = get_the_category();
                    $cat_name = $cat ? $cat[0]->name : 'Design';
            ?>
            <article class="isd-blog-card isd-fade-up">
                <?php if ( has_post_thumbnail() ) : ?>
                <div class="isd-blog-card__img-wrapper">
                    <?php the_post_thumbnail( 'large', [ 'class' => 'isd-blog-card__img', 'loading' => 'lazy' ] ); ?>
                </div>
                <?php endif; ?>
                <div class="isd-blog-card__content">
                    <div class="isd-blog-card__meta">
                        <span class="isd-blog-card__category"><?php echo esc_html( $cat_name ); ?></span>
                        <span class="isd-blog-card__date"><?php echo get_the_date( 'M j, Y' ); ?></span>
                    </div>
                    <h3 class="isd-blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="isd-blog-card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="isd-blog-card__link">Read More &rarr;</a>
                </div>
            </article>
            <?php endwhile; wp_reset_postdata();
            else :
                foreach ( $fallback_posts as $i => $fp ) : ?>
            <article class="isd-blog-card isd-fade-up isd-delay-<?php echo esc_attr( $i + 1 ); ?>">
                <div class="isd-blog-card__img-wrapper"><img src="<?php echo esc_url( $fp['img'] ); ?>" alt="<?php echo esc_attr( $fp['title'] ); ?>" class="isd-blog-card__img" loading="lazy"></div>
                <div class="isd-blog-card__content">
                    <div class="isd-blog-card__meta">
                        <span class="isd-blog-card__category"><?php echo esc_html( $fp['cat'] ); ?></span>
                        <span class="isd-blog-card__date"><?php echo esc_html( $fp['date'] ); ?></span>
                        <span class="isd-blog-card__reading-time"><?php echo esc_html( $fp['read'] ); ?></span>
                    </div>
                    <h3 class="isd-blog-card__title"><?php echo esc_html( $fp['title'] ); ?></h3>
                    <p class="isd-blog-card__excerpt"><?php echo esc_html( $fp['excerpt'] ); ?></p>
                    <a href="#" class="isd-blog-card__link">Read More &rarr;</a>
                </div>
            </article>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
