<?php
/**
 * WooCommerce Wrapper (fallback)
 * Indian Shape Designer - Luxury Theme
 */

get_header();
?>

<div class="isd-container isd-section" style="padding-top: 150px; min-height: 70vh;">
    <div class="woocommerce-custom-wrapper" style="max-width: 1200px; margin: 0 auto;">
        <?php woocommerce_content(); ?>
    </div>
</div>

<?php
get_footer();
