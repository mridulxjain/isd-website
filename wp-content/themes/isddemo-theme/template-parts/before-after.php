<?php
/**
 * Template Part: Before/After Slider
 */
?>
<section class="isd-section" style="background:var(--color-bg-alt);" aria-label="Before and After comparison">
    <div class="isd-container">
        <div style="text-align:center; margin-bottom:60px;">
            <span class="isd-label isd-fade-up">Transformations</span>
            <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1">Before &amp; After</h2>
            <p class="isd-body isd-fade-up isd-delay-2" style="max-width:500px;margin:0 auto;">See the remarkable difference our designers make with every project.</p>
        </div>
        <div class="isd-before-after isd-scale-in" role="slider" aria-label="Before and after comparison" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" style="position:relative;overflow:hidden;border-radius:var(--radius-img);height:500px;cursor:ew-resize;user-select:none;">
            <div class="isd-before-after__before" style="position:absolute;inset:0;">
                <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?auto=format&fit=crop&w=1200&q=80" alt="Before - Original space" style="width:100%;height:100%;object-fit:cover;display:block;">
                <span style="position:absolute;top:20px;left:20px;background:rgba(0,0,0,0.6);color:#fff;padding:6px 14px;border-radius:999px;font-size:0.75rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;">Before</span>
            </div>
            <div class="isd-before-after__after" style="position:absolute;inset:0;width:50%;overflow:hidden;">
                <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1200&q=80" alt="After - Transformed by Indian Shape Designer" style="width:100%;height:100%;object-fit:cover;display:block;min-width:200%;">
                <span style="position:absolute;top:20px;right:20px;background:var(--color-accent);color:#fff;padding:6px 14px;border-radius:999px;font-size:0.75rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;">After</span>
            </div>
            <div class="isd-before-after__handle" style="position:absolute;top:0;bottom:0;left:50%;transform:translateX(-50%);width:3px;background:white;cursor:ew-resize;z-index:10;display:flex;align-items:center;justify-content:center;">
                <div style="width:44px;height:44px;border-radius:50%;background:white;box-shadow:0 4px 20px rgba(0,0,0,0.3);display:flex;align-items:center;justify-content:center;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="2"><path d="M9 18l-6-6 6-6"/><path d="M15 6l6 6-6 6"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>
