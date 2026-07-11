<?php
/**
 * Template Part: Preloader
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div id="isd-preloader" class="isd-preloader" aria-hidden="true">
    <div class="isd-preloader__logo">
        <svg width="64" height="64" viewBox="0 0 36 36" fill="none">
            <rect width="36" height="36" rx="8" fill="var(--color-accent)"/>
            <path d="M8 28V12l10-8 10 8v16" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
            <path d="M14 28v-8h8v8" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
        </svg>
        <span class="isd-preloader__text">Interior Shapes<br><em>Design</em></span>
    </div>
</div>

<script>
    // Inline script for immediate execution
    (function() {
        const preloader = document.getElementById('isd-preloader');
        if (!preloader) return;
        
        // Ensure the preloader shows for at least 1.2 seconds, 
        // even if the page loads incredibly fast.
        const minimumTime = 1200;
        const startTime = Date.now();

        window.addEventListener('load', function() {
            const elapsed = Date.now() - startTime;
            const remainingTime = Math.max(0, minimumTime - elapsed);

            setTimeout(function() {
                preloader.classList.add('is-hidden');
                
                // Remove from DOM after fade out transition (0.6s)
                setTimeout(function() {
                    preloader.remove();
                }, 600);
            }, remainingTime);
        });
    })();
</script>
