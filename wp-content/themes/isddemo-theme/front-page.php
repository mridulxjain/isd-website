<?php
/**
 * The template for the front page
 */

get_header();
?>

<style>
/* Front Page Specific Styles */
.hero-section {
	padding: 120px 0;
	background: linear-gradient(135deg, rgba(253,253,253,0.9), rgba(245,245,245,0.9)), url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&q=80') no-repeat center center/cover;
	text-align: center;
	border-bottom: 1px solid #eee;
}

.hero-title {
	font-size: 4rem;
	margin-bottom: 20px;
	background: linear-gradient(90deg, var(--color-purple), var(--color-blue));
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	font-weight: 700;
}

.hero-subtitle {
	font-size: 1.25rem;
	color: var(--color-text-light);
	max-width: 600px;
	margin: 0 auto 40px;
}

.services-section {
	padding: 100px 0;
	background-color: var(--color-white);
}

.section-title {
	text-align: center;
	font-size: 2.5rem;
	margin-bottom: 60px;
	position: relative;
	color: var(--color-brown);
}

.section-title::after {
	content: '';
	display: block;
	width: 60px;
	height: 4px;
	background-color: var(--color-orange);
	margin: 15px auto 0;
	border-radius: 2px;
}

.services-grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	gap: 40px;
}

.service-card {
	background: #fff;
	padding: 40px;
	border-radius: var(--radius);
	box-shadow: var(--shadow);
	text-align: center;
	transition: transform 0.3s ease, box-shadow 0.3s ease;
	border-top: 4px solid var(--color-purple);
}

.service-card:hover {
	transform: translateY(-10px);
	box-shadow: 0 15px 40px rgba(108, 43, 140, 0.1);
}

.service-icon {
	font-size: 3rem;
	color: var(--color-blue);
	margin-bottom: 20px;
}

.service-card h3 {
	color: var(--color-purple);
}
</style>

<main id="primary" class="site-main">
	
	<!-- Hero Section -->
	<section class="hero-section">
		<div class="container">
			<h1 class="hero-title">Elevate Your Living Space</h1>
			<p class="hero-subtitle">Premium interior design services in India, specializing in modern aesthetics and timeless luxury.</p>
			<a href="#portfolio" class="btn" style="background-color: var(--color-orange); margin-right: 15px;">View Our Work</a>
			<a href="#contact" class="btn" style="background-color: transparent; border: 2px solid var(--color-purple); color: var(--color-purple);">Book Consultation</a>
		</div>
	</section>

	<!-- Services Section -->
	<section class="services-section">
		<div class="container">
			<h2 class="section-title">Our Expertise</h2>
			<div class="services-grid">
				<div class="service-card">
					<div class="service-icon">✦</div>
					<h3>Residential Design</h3>
					<p>Transform your home into a personalized sanctuary with our bespoke residential design services.</p>
				</div>
				<div class="service-card">
					<div class="service-icon" style="color: var(--color-orange);">✧</div>
					<h3>Commercial Spaces</h3>
					<p>Create inspiring and productive workspaces that reflect your brand's unique identity.</p>
				</div>
				<div class="service-card">
					<div class="service-icon" style="color: var(--color-purple);">✤</div>
					<h3>Consultation</h3>
					<p>Expert advice on color palettes, space planning, and furniture selection to guide your DIY projects.</p>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
