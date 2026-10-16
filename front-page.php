<?php
/**
 * The template for displaying the Clear Water Prowash Homepage.
 *
 * @package ClearWaterProwash
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- 1. HIGH-CONVERTING HERO SECTION -->
<section class="hero-section" id="hero">
	<div class="container hero-container">
		
		<div class="hero-content">
			<!-- Verified Trust Pill -->
			<div class="trust-pill-tag">
				<span class="pill-badge">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="#f59e0b" aria-hidden="true"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
					Columbus, Ohio’s Highest-Rated Cleaners
				</span>
				<span class="pill-text">180+ Five-Star Google Reviews</span>
			</div>

			<!-- Main Hero Headline -->
			<h1 class="hero-title">
				Restore Your Home’s Curb Appeal with Columbus's <span class="text-gradient">Top-Rated Exterior Cleaners</span>
			</h1>

			<!-- Subheadline -->
			<p class="hero-subtitle">
				Gentle soft washing & professional pressure cleaning for houses, roofs, and paver patios. Safe on plants, guaranteed results with zero high-pressure siding damage.
			</p>

			<!-- Hero Dual-Action CTAs -->
			<div class="hero-cta-group">
				<a href="#quote-section" class="btn btn-primary btn-hero">
					<span class="btn-text">Instant Free Estimate</span>
					<span class="btn-subtext">Takes 60 seconds • No obligation</span>
					<svg class="btn-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
				</a>

				<a href="sms:6144259395" class="btn btn-secondary btn-hero-sms">
					<svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					<span class="btn-sms-info">
						<span class="sms-title">Text Photos for Quick Quote</span>
						<span class="sms-phone">(614) 425-9395</span>
					</span>
				</a>
			</div>

			<!-- Trust Badges Under CTAs -->
			<div class="hero-trust-row">
				<div class="trust-item">
					<div class="trust-stars" aria-label="5 out of 5 stars">
						<span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
					</div>
					<div class="trust-label">
						<strong>5.0 Google Rating</strong>
						<span>180+ Verified Reviews</span>
					</div>
				</div>

				<div class="trust-divider" aria-hidden="true"></div>

				<div class="trust-item">
					<div class="trust-icon-box eco-green">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					</div>
					<div class="trust-label">
						<strong>100% Plant Safe</strong>
						<span>Eco Neutralizing Rinse</span>
					</div>
				</div>

				<div class="trust-divider" aria-hidden="true"></div>

				<div class="trust-item">
					<div class="trust-icon-box award-gold">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
					</div>
					<div class="trust-label">
						<strong>Super Service Award</strong>
						<span>Angie's List Winner</span>
					</div>
				</div>
			</div>

		</div>

		<!-- Hero Visual Graphic / Card -->
		<div class="hero-visual">
			<div class="hero-image-wrapper">
				<img src="<?php echo esc_url( $theme_uri . '/assets/images/hero-home.jpg' ); ?>" 
				     alt="Suburban Columbus Ohio home freshly washed by Clear Water Prowash" 
				     class="hero-img" 
				     width="680" 
				     height="450" 
				     fetchpriority="high">
				
				<!-- Floating Stat Badge 1: Experience -->
				<div class="floating-badge badge-top">
					<div class="badge-icon green-bg">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
					</div>
					<div class="badge-text">
						<strong>1,200+ Homes Cleaned</strong>
						<span>Across Greater Columbus</span>
					</div>
				</div>

				<!-- Floating Stat Badge 2: Plant Protection -->
				<div class="floating-badge badge-bottom">
					<div class="badge-icon blue-bg">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
					</div>
					<div class="badge-text">
						<strong>Soft Wash Technology</strong>
						<span>Gentle on siding & roof tiles</span>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- 2. INTERACTIVE BEFORE & AFTER SHOWCASE -->
<section class="section-before-after" id="before-after">
	<div class="container">
		
		<div class="section-header text-center">
			<span class="section-badge">Real Columbus Proof</span>
			<h2 class="section-title">See the Transformation Before Your Eyes</h2>
			<p class="section-subtitle">
				Drag the comparison slider below to see how our gentle soft wash eliminates years of stubborn Ohio green algae, mildew, and black shingle streaks without damaging delicate surfaces.
			</p>
		</div>

		<!-- Interactive Draggable Split Slider -->
		<div class="slider-comparison-wrapper">
			<div class="ba-slider-container" id="interactive-ba-slider" data-start-position="50">
				
				<!-- AFTER IMAGE (Underneath, full view revealed as top shrinks) -->
				<img src="<?php echo esc_url( $theme_uri . '/assets/images/slider-after.jpg' ); ?>" 
				     alt="Siding after gentle soft washing - pristine and spotless white" 
				     class="ba-image ba-image-after"
				     loading="lazy">
				<span class="ba-badge badge-after">AFTER SOFT WASH</span>

				<!-- BEFORE IMAGE (Top clipped layer) -->
				<div class="ba-overlay-before" id="slider-before-overlay">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/slider-before.jpg' ); ?>" 
					     alt="Siding before cleaning - covered in heavy green algae and grime" 
					     class="ba-image ba-image-before"
					     loading="lazy">
					<span class="ba-badge badge-before">BEFORE WASHING</span>
				</div>

				<!-- SLIDER HANDLE -->
				<div class="ba-handle" id="slider-handle" role="slider" aria-label="Before and After comparison slider" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" tabindex="0">
					<div class="ba-handle-line"></div>
					<div class="ba-handle-button">
						<svg class="handle-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<polyline points="15 18 9 12 15 6"></polyline>
							<polyline points="9 18 3 12 9 6" style="display:none;"></polyline>
						</svg>
						<svg class="handle-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<polyline points="9 18 15 12 9 6"></polyline>
						</svg>
					</div>
					<div class="ba-handle-line"></div>
				</div>

			</div>
			
			<div class="slider-instruction">
				<span class="instruction-pill">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8L22 12L18 16"/><path d="M6 8L2 12L6 16"/><line x1="2" y1="12" x2="22" y2="12"/></svg>
					Drag slider or tap anywhere to compare siding cleaning
				</span>
			</div>
		</div>

		<!-- REAL COLUMBUS JOBS GALLERY -->
		<div class="real-jobs-header">
			<span class="section-badge">Visual Proof & Transformations</span>
			<h3 class="gallery-heading">Real Central Ohio Transformations by Clear Water Prowash</h3>
			<p class="gallery-subtext">Recent before-and-after work directly from customer properties in Dublin, Worthington, New Albany, and Columbus. Click any transformation to view full-size comparison details.</p>
			
			<!-- Interactive Gallery Filter Tabs -->
			<div class="gallery-filter-bar" role="tablist" aria-label="Filter transformations by service">
				<button type="button" class="gallery-filter-pill is-active" data-filter="all" role="tab" aria-selected="true">
					<span>All Transformations</span>
					<span class="filter-count">6</span>
				</button>
				<button type="button" class="gallery-filter-pill" data-filter="concrete" role="tab" aria-selected="false">
					<span>Concrete & Steps</span>
					<span class="filter-count">2</span>
				</button>
				<button type="button" class="gallery-filter-pill" data-filter="paver" role="tab" aria-selected="false">
					<span>Paver & Stone</span>
					<span class="filter-count">2</span>
				</button>
				<button type="button" class="gallery-filter-pill" data-filter="house" role="tab" aria-selected="false">
					<span>House & Masonry</span>
					<span class="filter-count">2</span>
				</button>
			</div>
		</div>

		<div class="real-jobs-grid" id="transformations-gallery">
			
			<!-- Card 1: New Albany Concrete -->
			<div class="real-job-card" data-category="concrete" data-transformation-index="0">
				<div class="real-job-image-wrap" 
				     role="button" 
				     tabindex="0" 
				     aria-label="View full size transformation: Concrete Steps & Walkway Cleaning in New Albany, OH"
				     data-full-img="<?php echo esc_url( $theme_uri . '/assets/images/real-concrete-new-albany.png' ); ?>"
				     data-title="Concrete Steps & Walkway Cleaning"
				     data-location="New Albany, OH"
				     data-service="Concrete Cleaning"
				     data-desc="Deep extraction of black mold, slippery green algae, and ground-in soil on front porch steps and walkway, completely restoring bright traction and safe entryway curb appeal.">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-concrete-new-albany.png' ); ?>" 
					     alt="Before and after concrete front porch and steps cleaning in New Albany, Ohio" 
					     loading="lazy">
					<span class="job-location-tag">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						New Albany, OH
					</span>
					<div class="job-zoom-overlay">
						<span class="zoom-pill">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Click for Full View
						</span>
					</div>
				</div>
				<div class="real-job-content">
					<div class="job-card-top">
						<span class="job-service-tag">Concrete Surface Wash</span>
						<button type="button" class="btn-card-expand" aria-label="Expand New Albany project details">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
							Full View
						</button>
					</div>
					<h4 class="job-title">Concrete Steps & Walkway Cleaning</h4>
					<p class="job-desc">Deep extraction of black mold and slippery green algae on entryway steps, restoring bright clean concrete traction.</p>
					<div class="job-meta">
						<span class="job-service">Rotary Surface Wash</span>
						<a href="#quote-section" class="job-link" data-service-select="Concrete Cleaning">Get Quote Like This &rarr;</a>
					</div>
				</div>
			</div>

			<!-- Card 2: Worthington Pavers -->
			<div class="real-job-card" data-category="paver" data-transformation-index="1">
				<div class="real-job-image-wrap" 
				     role="button" 
				     tabindex="0" 
				     aria-label="View full size transformation: Paver Patio Restoration & Sealing in Worthington, OH"
				     data-full-img="<?php echo esc_url( $theme_uri . '/assets/images/real-paver-worthington.jpg' ); ?>"
				     data-title="Paver Patio Restoration & Sealing"
				     data-location="Worthington, OH"
				     data-service="Paver Sealing & Restoration"
				     data-desc="Power cleaned weed-infested joints, extracted heavy organic moss, swept in high-performance polymeric joint sand, and applied wet-look protective seal.">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-paver-worthington.jpg' ); ?>" 
					     alt="Before and after brick paver restoration and sealing in Worthington, Ohio" 
					     loading="lazy">
					<span class="job-location-tag">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						Worthington, OH
					</span>
					<div class="job-zoom-overlay">
						<span class="zoom-pill">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Click for Full View
						</span>
					</div>
				</div>
				<div class="real-job-content">
					<div class="job-card-top">
						<span class="job-service-tag">Paver Restoration</span>
						<button type="button" class="btn-card-expand" aria-label="Expand Worthington paver project details">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
							Full View
						</button>
					</div>
					<h4 class="job-title">Paver Patio Restoration & Sealing</h4>
					<p class="job-desc">Power cleaned weed-infested joints, installed high-grade polymeric sand, and applied wet-look protective sealant.</p>
					<div class="job-meta">
						<span class="job-service">Poly Sand & Sealer</span>
						<a href="#quote-section" class="job-link" data-service-select="Paver Sealing & Restoration">Get Quote Like This &rarr;</a>
					</div>
				</div>
			</div>

			<!-- Card 3: Columbus Brick & Masonry -->
			<div class="real-job-card" data-category="house" data-transformation-index="2">
				<div class="real-job-image-wrap" 
				     role="button" 
				     tabindex="0" 
				     aria-label="View full size transformation: Curved Brick Retaining Wall & Urns in Columbus, OH"
				     data-full-img="<?php echo esc_url( $theme_uri . '/assets/images/real-brick-columbus.jpg' ); ?>"
				     data-title="Curved Brick Retaining Wall & Stone Urns"
				     data-location="Columbus, OH"
				     data-service="House Washing"
				     data-desc="Eliminated dark fungal staining, black lichen, and biological growth from heritage brick mortar and ornamental garden urns without pitting joints.">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-brick-columbus.jpg' ); ?>" 
					     alt="Before and after exterior brick retaining wall and masonry planters cleaning in Columbus, Ohio" 
					     loading="lazy">
					<span class="job-location-tag">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						Columbus, OH
					</span>
					<div class="job-zoom-overlay">
						<span class="zoom-pill">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Click for Full View
						</span>
					</div>
				</div>
				<div class="real-job-content">
					<div class="job-card-top">
						<span class="job-service-tag">Brick & Masonry Soft Wash</span>
						<button type="button" class="btn-card-expand" aria-label="Expand Columbus brick project details">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
							Full View
						</button>
					</div>
					<h4 class="job-title">Curved Brick Retaining Wall & Urns</h4>
					<p class="job-desc">Eliminated dark fungal staining and biological growth from heritage brick mortar without pitting or damaging joints.</p>
					<div class="job-meta">
						<span class="job-service">Gentle Soft Wash</span>
						<a href="#quote-section" class="job-link" data-service-select="House Washing">Get Quote Like This &rarr;</a>
					</div>
				</div>
			</div>

			<!-- Card 4: Clintonville Concrete Patio -->
			<div class="real-job-card" data-category="concrete" data-transformation-index="3">
				<div class="real-job-image-wrap" 
				     role="button" 
				     tabindex="0" 
				     aria-label="View full size transformation: Backyard Concrete Patio Wash in Clintonville, OH"
				     data-full-img="<?php echo esc_url( $theme_uri . '/assets/images/real-concrete-clintonville.jpg' ); ?>"
				     data-title="Backyard Concrete Patio Wash"
				     data-location="Clintonville, OH"
				     data-service="Concrete Cleaning"
				     data-desc="Heavy organic buildup, green slime, and tree tannin stain removal using specialized rotary surface cleaner and plant-safe eco neutralizing rinse.">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-concrete-clintonville.jpg' ); ?>" 
					     alt="Before and after concrete patio power washing in Clintonville, Ohio" 
					     loading="lazy">
					<span class="job-location-tag">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						Clintonville, OH
					</span>
					<div class="job-zoom-overlay">
						<span class="zoom-pill">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Click for Full View
						</span>
					</div>
				</div>
				<div class="real-job-content">
					<div class="job-card-top">
						<span class="job-service-tag">Concrete Cleaning</span>
						<button type="button" class="btn-card-expand" aria-label="Expand Clintonville patio project details">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
							Full View
						</button>
					</div>
					<h4 class="job-title">Backyard Concrete Patio Wash</h4>
					<p class="job-desc">Heavy organic buildup and tree tannin stain removal using specialized rotary surface cleaner and eco wash.</p>
					<div class="job-meta">
						<span class="job-service">Eco Surface Wash</span>
						<a href="#quote-section" class="job-link" data-service-select="Concrete Cleaning">Get Quote Like This &rarr;</a>
					</div>
				</div>
			</div>

			<!-- Card 5: Hilliard Bluestone -->
			<div class="real-job-card" data-category="paver" data-transformation-index="4">
				<div class="real-job-image-wrap" 
				     role="button" 
				     tabindex="0" 
				     aria-label="View full size transformation: Bluestone Slate Stripping & Sanding in Hilliard, OH"
				     data-full-img="<?php echo esc_url( $theme_uri . '/assets/images/real-bluestone-hilliard.jpg' ); ?>"
				     data-title="Bluestone Slate Stripping & Sanding"
				     data-location="Hilliard, OH"
				     data-service="Paver Sealing & Restoration"
				     data-desc="Stripped weathered old cloudy sealer, eradicated deep-root weeds, re-sanded outdoor fire pit patio, and enhanced rich natural multi-color slate stone tones.">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-bluestone-hilliard.jpg' ); ?>" 
					     alt="Before and after bluestone slate pavers stripping and sanding in Hilliard, Ohio" 
					     loading="lazy">
					<span class="job-location-tag">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						Hilliard, OH
					</span>
					<div class="job-zoom-overlay">
						<span class="zoom-pill">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Click for Full View
						</span>
					</div>
				</div>
				<div class="real-job-content">
					<div class="job-card-top">
						<span class="job-service-tag">Stone Restoration</span>
						<button type="button" class="btn-card-expand" aria-label="Expand Hilliard bluestone project details">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
							Full View
						</button>
					</div>
					<h4 class="job-title">Bluestone Slate Stripping & Sanding</h4>
					<p class="job-desc">Stripped weathered old sealer, eliminated weeds, re-sanded fire pit patio, and enhanced rich natural stone tones.</p>
					<div class="job-meta">
						<span class="job-service">Natural Stone Care</span>
						<a href="#quote-section" class="job-link" data-service-select="Paver Sealing & Restoration">Get Quote Like This &rarr;</a>
					</div>
				</div>
			</div>

			<!-- Card 6: Columbus House Detailing -->
			<div class="real-job-card" data-category="house" data-transformation-index="5">
				<div class="real-job-image-wrap" 
				     role="button" 
				     tabindex="0" 
				     aria-label="View full size transformation: Vinyl Siding Soft Wash & Detailing in Columbus, OH"
				     data-full-img="<?php echo esc_url( $theme_uri . '/assets/images/real-house-wash-columbus.jpg' ); ?>"
				     data-title="Vinyl Siding Soft Wash & Hand Detailing"
				     data-location="Columbus, OH"
				     data-service="House Washing"
				     data-desc="Complete exterior soft wash with careful hand detailing around outdoor lighting, mailboxes, decorative shutters, and delicate soffit fixtures with zero high pressure.">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-house-wash-columbus.jpg' ); ?>" 
					     alt="Before and after house washing and hand detailing in Columbus, Ohio" 
					     loading="lazy">
					<span class="job-location-tag">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						Columbus, OH
					</span>
					<div class="job-zoom-overlay">
						<span class="zoom-pill">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Click for Full View
						</span>
					</div>
				</div>
				<div class="real-job-content">
					<div class="job-card-top">
						<span class="job-service-tag">Soft House Wash</span>
						<button type="button" class="btn-card-expand" aria-label="Expand Columbus siding wash project details">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
							Full View
						</button>
					</div>
					<h4 class="job-title">Vinyl Siding Soft Wash & Detailing</h4>
					<p class="job-desc">Complete exterior soft wash with careful hand detailing around lights, mailboxes, and delicate trim fixtures.</p>
					<div class="job-meta">
						<span class="job-service">100% Plant Safe</span>
						<a href="#quote-section" class="job-link" data-service-select="House Washing">Get Quote Like This &rarr;</a>
					</div>
				</div>
			</div>

		</div>

		<div class="proof-cta-banner">
			<div class="banner-inner">
				<div class="banner-text">
					<h4>Have an exterior surface that looks like our "Before" photos?</h4>
					<p>Send us a photo or address and we'll text you a fast, accurate quote within 1 hour.</p>
				</div>
				<div class="banner-actions">
					<a href="sms:6144259395" class="btn btn-secondary-white">Text Photos to (614) 425-9395</a>
					<a href="#quote-section" class="btn btn-accent">Request Quote Online</a>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- 3. SERVICES GRID SECTION (CATEGORIZED RESIDENTIAL & COMMERCIAL) -->
<section class="section-services" id="services">
	<div class="container">
		
		<div class="section-header text-center">
			<span class="section-badge">Residential &amp; Commercial Solutions</span>
			<h2 class="section-title">Professional Exterior Cleaning Services</h2>
			<p class="section-subtitle">
				Specialized soft wash and high-capacity pressure cleaning tailored for Central Ohio homes, commercial properties, and HOA communities. Backed by our 100% plant &amp; property protection guarantee.
			</p>
			
			<!-- Interactive Category Filter Tabs -->
			<div class="services-filter-nav" role="tablist" aria-label="Filter services by category">
				<button type="button" class="services-filter-pill is-active" data-service-filter="all" role="tab" aria-selected="true">
					<span>All Services</span>
					<span class="filter-count">13</span>
				</button>
				<button type="button" class="services-filter-pill" data-service-filter="residential" role="tab" aria-selected="false">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
					<span>Residential Services</span>
					<span class="filter-count">7</span>
				</button>
				<button type="button" class="services-filter-pill" data-service-filter="commercial" role="tab" aria-selected="false">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
					<span>Commercial Services (B2B)</span>
					<span class="filter-count">6</span>
				</button>
			</div>
		</div>

		<!-- CATEGORY 1: RESIDENTIAL SERVICES (7 SERVICES) -->
		<div class="service-category-block" data-category="residential">
			<div class="service-category-header">
				<div class="cat-header-title-wrap">
					<div class="cat-header-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
					</div>
					<div>
						<h3 class="cat-title">Residential Services</h3>
						<p class="cat-subtitle">Gentle soft washing, non-pressure treatments, and specialized stone care for Central Ohio homeowners.</p>
					</div>
				</div>
				<span class="cat-badge">7 Homeowner Services</span>
			</div>

			<div class="services-grid">
				
				<!-- 1. House Washing -->
				<article class="service-card" id="service-house-washing">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential</span>
						<span class="service-highlight-pill">Soft Wash</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
							<polyline points="9 22 9 12 15 12 15 22"></polyline>
						</svg>
					</div>
					<h4 class="service-title">House Washing</h4>
					<p class="service-desc">
						Gentle soft wash for vinyl, brick, Hardy plank, and stucco. Completely sanitizes algae, lichen, and mildew spores up to 3 stories tall without high pressure.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Safe under 100 PSI soft-wash technology
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							100% plant &amp; landscaping rinse guarantee
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Cleans eaves, soffits, fascia, and gutters
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="House Wash">
							<span>Request House Wash Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 2. Roof Cleaning -->
				<article class="service-card" id="service-roof-cleaning">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential</span>
						<span class="service-highlight-pill">Non-Pressure</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M2 10.5L12 3l10 7.5"></path>
							<path d="M4 12v7a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-7"></path>
							<line x1="12" y1="20" x2="12" y2="10"></line>
						</svg>
					</div>
					<h4 class="service-title">Roof Cleaning</h4>
					<p class="service-desc">
						Dedicated non-pressure chemical soft wash treatment removing dark Gloeocapsa magma algae streaks and moss, restoring shingle reflectivity and roof longevity.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							ARMA recommended zero-pressure method
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Eradicates shingle-eating algae at the root
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Protects shingle granules &amp; manufacturer warranty
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Roof Cleaning">
							<span>Request Roof Wash Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 3. Stone Paver Patio Care -->
				<article class="service-card" id="service-stone-paver">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential</span>
						<span class="service-highlight-pill">Full Restoration</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="3" width="7" height="7"></rect>
							<rect x="14" y="3" width="7" height="7"></rect>
							<rect x="14" y="14" width="7" height="7"></rect>
							<rect x="3" y="14" width="7" height="7"></rect>
						</svg>
					</div>
					<h4 class="service-title">Stone Paver Patio Care</h4>
					<p class="service-desc">
						Total paver patio restoration: deep cleaning, moss &amp; weed extraction, joint cleanout, polymeric sand compaction, minor repair, and protective sealing.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Locks in polymeric sand &amp; halts weed regrowth
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Shields against Ohio freeze-thaw shifting &amp; cracking
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Choice of wet-look enhancer or natural matte seal
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Paver Patio Cleaning">
							<span>Request Paver Care Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 4. Residential Concrete Cleaning -->
				<article class="service-card" id="service-residential-concrete">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential</span>
						<span class="service-highlight-pill">Driveways &amp; Patios</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
							<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
						</svg>
					</div>
					<h4 class="service-title">Residential Concrete Cleaning</h4>
					<p class="service-desc">
						Commercial rotary surface cleaning for driveways, patios, walkways, and pool decks. Eliminates dark grime, tire marks, and slick organic build-up evenly.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							No streaking (striping) rotary surface technology
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Pre &amp; post-treatment for longest-lasting bright clean
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Driveways, sidewalks, pool decks &amp; front porches
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Concrete Driveway Power Wash">
							<span>Request Concrete Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 5. Deck, Fence & Boat Dock Cleaning -->
				<article class="service-card" id="service-deck-fence-dock">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential</span>
						<span class="service-highlight-pill">Wood &amp; Composites</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="4" width="18" height="4" rx="1"></rect>
							<rect x="3" y="10" width="18" height="4" rx="1"></rect>
							<rect x="3" y="16" width="18" height="4" rx="1"></rect>
							<line x1="7" y1="4" x2="7" y2="20"></line>
							<line x1="17" y1="4" x2="17" y2="20"></line>
						</svg>
					</div>
					<h4 class="service-title">Deck, Fence &amp; Boat Dock Cleaning</h4>
					<p class="service-desc">
						Restorative washing for wood decks, Trex/composite boards, vinyl privacy fences, and marina boat docks. Safely removes gray oxidation, mold, and slippery slime.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Restores wood grain without splintering or furring
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Safe on composite (Trex), cedar, treated pine &amp; vinyl
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Removes dangerous slip hazards on dock surfaces
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Deck Cleaning">
							<span>Request Deck &amp; Dock Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 6. Rust & Graffiti Removal -->
				<article class="service-card" id="service-rust-graffiti">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential &amp; Commercial</span>
						<span class="service-highlight-pill">Specialty Stains</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="9"></circle>
							<path d="M12 3v18"></path>
							<path d="M3 12h18"></path>
							<circle cx="12" cy="12" r="3" fill="#e0f2fe"></circle>
						</svg>
					</div>
					<h4 class="service-title">Rust &amp; Graffiti Removal</h4>
					<p class="service-desc">
						Targeted chemical restoration to dissolve unsightly fertilizer rust, well water orange staining, battery acid marks, and vandalism graffiti without etching masonry.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Dissolves stubborn irrigation &amp; fertilizer rust
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Safe for brick, stone, vinyl siding &amp; concrete
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Commercial-grade environmental stain breakers
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Other">
							<span>Request Stain Removal Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 7. Gutter Cleaning & Brightening -->
				<article class="service-card" id="service-gutter-brightening">
					<div class="service-card-meta">
						<span class="service-cat-pill">Residential</span>
						<span class="service-highlight-pill">Interior &amp; Exterior</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 2v20"></path>
							<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
						</svg>
					</div>
					<h4 class="service-title">Gutter Cleaning &amp; Brightening</h4>
					<p class="service-desc">
						Thorough debris removal, downspout clearing to prevent foundation water damage, plus optional exterior gutter face brightening to dissolve ugly black "tiger stripes".
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Downspout clear flow testing guarantee
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Removes electrostatic black oxidation tiger stripes
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Protects roof eaves, fascia boards &amp; basement
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Gutter Exterior Washing">
							<span>Request Gutter Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

			</div>
		</div>

		<!-- CATEGORY 2: COMMERCIAL SERVICES (B2B) (6 SERVICES) -->
		<div class="service-category-block" data-category="commercial">
			<div class="service-category-header commercial-header">
				<div class="cat-header-title-wrap">
					<div class="cat-header-icon commercial-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
					</div>
					<div>
						<h3 class="cat-title">Commercial Services (B2B)</h3>
						<p class="cat-subtitle">Turnkey exterior maintenance, high-traffic concrete washing, and facility restoration for Central Ohio businesses, HOAs, and institutions.</p>
					</div>
				</div>
				<span class="cat-badge commercial-badge">6 Commercial Solutions</span>
			</div>

			<div class="services-grid">

				<!-- 8. Commercial Exterior Building Cleaning -->
				<article class="service-card" id="service-commercial-building">
					<div class="service-card-meta">
						<span class="service-cat-pill commercial">Commercial B2B</span>
						<span class="service-highlight-pill">Storefronts &amp; Facades</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
							<line x1="9" y1="6" x2="9" y2="6.01"></line>
							<line x1="15" y1="6" x2="15" y2="6.01"></line>
							<line x1="9" y1="10" x2="9" y2="10.01"></line>
							<line x1="15" y1="10" x2="15" y2="10.01"></line>
							<line x1="9" y1="14" x2="9" y2="14.01"></line>
							<line x1="15" y1="14" x2="15" y2="14.01"></line>
							<path d="M10 22v-4h4v4"></path>
						</svg>
					</div>
					<h4 class="service-title">Commercial Exterior Building Cleaning</h4>
					<p class="service-desc">
						Maintain pristine storefronts, corporate offices, warehouses, and industrial facilities. Safe cleaning for EIFS, stucco, masonry, and architectural panels.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Flexible off-hours &amp; weekend night scheduling
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Fully Licensed &amp; Insured (General Liability &amp; Workers' Comp)
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Compliant with Ohio EPA surface water discharge
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Other">
							<span>Request Building Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 9. Commercial Concrete Power Washing -->
				<article class="service-card" id="service-commercial-concrete">
					<div class="service-card-meta">
						<span class="service-cat-pill commercial">Commercial B2B</span>
						<span class="service-highlight-pill">High-Traffic Pads</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
							<polyline points="2 17 12 22 22 17"></polyline>
							<polyline points="2 12 12 17 22 12"></polyline>
						</svg>
					</div>
					<h4 class="service-title">Commercial Concrete Power Washing</h4>
					<p class="service-desc">
						Industrial hot &amp; cold rotary washing for high-traffic commercial walkways, dumpster corrals, drive-thru lanes, loading docks, and curbs. Eradicates gum, grease, and oil.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Deep gum, grease, and hydraulic oil extraction
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							High-capacity multi-gun trailer units
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Scheduled recurring maintenance packages
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Concrete Driveway Power Wash">
							<span>Request Concrete Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 10. Condo & Apartment Building Power Washing -->
				<article class="service-card" id="service-condo-apartment">
					<div class="service-card-meta">
						<span class="service-cat-pill commercial">Commercial B2B</span>
						<span class="service-highlight-pill">HOAs &amp; Multi-Family</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M3 21h18"></path>
							<path d="M5 21V7l8-4v18"></path>
							<path d="M19 21V11l-6-3"></path>
							<line x1="9" y1="9" x2="9" y2="9.01"></line>
							<line x1="9" y1="13" x2="9" y2="13.01"></line>
							<line x1="9" y1="17" x2="9" y2="17.01"></line>
						</svg>
					</div>
					<h4 class="service-title">Condo &amp; Apartment Building Power Washing</h4>
					<p class="service-desc">
						Trusted exterior cleaning partner for Columbus HOA boards, property management companies, condo complexes, and multi-family residential communities.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Tenant notification &amp; schedule coordination support
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Siding, breezeways, concrete walkways &amp; clubhouses
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Competitive volume pricing on multi-building contracts
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="House Wash">
							<span>Request HOA / Complex Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 11. Banking & Financial Institution Power Washing -->
				<article class="service-card" id="service-banking-financial">
					<div class="service-card-meta">
						<span class="service-cat-pill commercial">Commercial B2B</span>
						<span class="service-highlight-pill">Financial Facilities</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M3 21h18"></path>
							<path d="M3 10h18"></path>
							<path d="M12 3l9 7H3l9-7z"></path>
							<line x1="6" y1="10" x2="6" y2="21"></line>
							<line x1="10" y1="10" x2="10" y2="21"></line>
							<line x1="14" y1="10" x2="14" y2="21"></line>
							<line x1="18" y1="10" x2="18" y2="21"></line>
						</svg>
					</div>
					<h4 class="service-title">Banking &amp; Financial Institution Power Washing</h4>
					<p class="service-desc">
						Immaculate exterior care for banks, credit unions, and financial branches. Thorough cleaning for drive-thru teller lanes, ATM kiosks, concrete bollards, and entryways.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Strict compliance with branch facility security
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Drive-thru tire black &amp; oil stain elimination
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Maintains premium executive presentation
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Other">
							<span>Request Financial Facility Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 12. Schools & Universities Power Washing -->
				<article class="service-card" id="service-schools-universities">
					<div class="service-card-meta">
						<span class="service-cat-pill commercial">Commercial B2B</span>
						<span class="service-highlight-pill">Campuses &amp; Grounds</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
							<path d="M6 12v5c3 3 9 3 12 0v-5"></path>
						</svg>
					</div>
					<h4 class="service-title">Schools &amp; Universities Power Washing</h4>
					<p class="service-desc">
						Campus-wide soft and pressure washing for Central Ohio school districts, colleges, and university complexes. Courtyards, stadiums, bleachers, and building facades.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Non-toxic, eco-friendly kid and plant-safe detergents
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Scheduled during summer, winter, and weekend breaks
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Removes slippery algae hazards on student walkways
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Other">
							<span>Request Campus Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

				<!-- 13. Church Power Washing -->
				<article class="service-card" id="service-church-power-washing">
					<div class="service-card-meta">
						<span class="service-cat-pill commercial">Commercial B2B</span>
						<span class="service-highlight-pill">Historic Masonry</span>
					</div>
					<div class="service-icon-wrap" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 2v6"></path>
							<path d="M9 5h6"></path>
							<path d="M12 8l6 5v8H6v-8l6-5z"></path>
							<path d="M10 21v-5a2 2 0 0 1 4 0v5"></path>
						</svg>
					</div>
					<h4 class="service-title">Church Power Washing</h4>
					<p class="service-desc">
						Reverent and gentle soft washing for historic steeples, sanctuaries, limestone masonry, stained glass frames, bell towers, and fellowship gathering plazas.
					</p>
					<ul class="service-features">
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Gentle low-pressure preservation methods
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Protects historic brick, mortar &amp; limestone carvings
						</li>
						<li>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							Respectfully scheduled around worship &amp; event times
						</li>
					</ul>
					<div class="service-card-action">
						<a href="#quote-section" class="btn btn-outline-service select-service-btn" data-service-name="Other">
							<span>Request Church Quote</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</a>
					</div>
				</article>

			</div>
		</div>

		<!-- Complete Package Callout -->
		<div class="package-callout">
			<div class="package-callout-inner">
				<div class="package-badge">Popular Choice</div>
				<div class="package-info">
					<h4>The Full Exterior Restoration Package</h4>
					<p>Combine House Washing, Concrete Driveway Cleaning &amp; Gutter Brightening for maximum curb appeal savings.</p>
				</div>
				<a href="#quote-section" class="btn btn-accent select-service-btn" data-service-name="Full Exterior Package">
					<span>Get Package Estimate</span>
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
				</a>
			</div>
		</div>

	</div>
</section>

<!-- 3.5 IN-DEPTH SERVICE COPY: SOFT WASHING SCIENCE & PROPERTY PROTECTION -->
<section class="section-service-depth" id="soft-wash-science">
	<div class="container">
		<div class="depth-grid">
			
			<!-- Left Column: Educational Copy & Value Props -->
			<div class="depth-content-col">
				<span class="section-badge">Cutting-Edge Soft Wash Standards</span>
				<h2 class="depth-title">
					Your Home Is One of Your Biggest Investments — <span class="text-gradient">We Protect That</span>
				</h2>
				
				<p class="depth-lead">
					Your home is one of your biggest investments, and it is our goal to protect that. We use the most cutting edge techniques in house washing, allowing us to clean residential properties up to three stories tall safely from the ground. Our state of the art equipment, combined with our eco-friendly products, are specially formulated to get the job done with industry national standards. Hands down, soft washing vs. pressure washing / power washing provides the ultimate safest clean.
				</p>

				<!-- 4 In-Depth Key Point Cards -->
				<div class="depth-points-grid">
					
					<div class="depth-point-card">
						<div class="depth-point-icon icon-blue">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
						</div>
						<div class="depth-point-body">
							<h4>Zero High-Pressure Damage</h4>
							<p>High pressure strips oxidation unevenly (leaving permanent "wand marks"), forces water behind siding, and ruptures double-pane window seals. Our low-pressure soft wash delivers under 100 PSI for complete peace of mind.</p>
						</div>
					</div>

					<div class="depth-point-card">
						<div class="depth-point-icon icon-green">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						</div>
						<div class="depth-point-body">
							<h4>Eliminates Spores at the Root (Salt in 48h)</h4>
							<p>Our specialized eco-friendly solutions destroy green algae, mildew, lichen, and moss at the cellular root rather than just blowing surface dirt. The treatment naturally biodegrades into harmless salt within 48 hours.</p>
						</div>
					</div>

					<div class="depth-point-card">
						<div class="depth-point-icon icon-amber">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>
						</div>
						<div class="depth-point-body">
							<h4>We Never Lean Ladders on Gutters</h4>
							<p>Heavy ladders leaning on thin aluminum bend gutters, loosen fascia spikes, and cause overflow leaks. Our high-reach low-pressure delivery cleans up to 3 stories high without resting equipment on your gutters.</p>
						</div>
					</div>

					<div class="depth-point-card">
						<div class="depth-point-icon icon-purple">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
						</div>
						<div class="depth-point-body">
							<h4>Certified for All Delicate Surfaces</h4>
							<p>Specially calibrated for vinyl, Dryvit, EIFS, James Hardie fiber cement, real and faux stucco, brick, natural limestone, concrete, and composite surfaces.</p>
						</div>
					</div>

				</div>

				<!-- Surface Tags Pill Row -->
				<div class="depth-surfaces-row">
					<span class="depth-surface-label">Approved Surfaces:</span>
					<div class="depth-surface-tags">
						<span class="surface-tag">Vinyl Siding</span>
						<span class="surface-tag">James Hardie</span>
						<span class="surface-tag">Dryvit &amp; EIFS</span>
						<span class="surface-tag">Stucco</span>
						<span class="surface-tag">Brick &amp; Masonry</span>
						<span class="surface-tag">Natural Stone</span>
						<span class="surface-tag">Shingle Roofs</span>
					</div>
				</div>

				<!-- Quick Action CTAs -->
				<div class="depth-actions-row">
					<a href="#quote-section" class="btn btn-primary select-service-btn" data-service-name="House Washing">
						<span>Get Free Soft Wash Estimate</span>
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
					</a>
					<a href="sms:6144259395" class="btn btn-outline-dark">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
						<span>Text Photos to Our team!</span>
					</a>
				</div>
			</div>

			<!-- Right Column: Asymmetric Image Grid & Trust Floaters -->
			<div class="depth-visual-col">
				<div class="depth-image-mosaic">
					
					<div class="mosaic-item mosaic-item-large">
						<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-house-wash-columbus.jpg' ); ?>" 
						     alt="Two-story Columbus home gently soft washed with sparkling clean siding" 
						     class="mosaic-img" 
						     loading="lazy">
						<div class="mosaic-caption">
							<span class="caption-tag">Soft Wash Certified</span>
							<span class="caption-title">Two-Story Residence • Columbus, OH</span>
						</div>
					</div>

					<div class="mosaic-subgrid">
						<div class="mosaic-item mosaic-item-small">
							<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-brick-columbus.jpg' ); ?>" 
							     alt="Clean brick and mortar entryway safely washed" 
							     class="mosaic-img" 
							     loading="lazy">
							<span class="mosaic-mini-label">Brick &amp; Stone Safe</span>
						</div>

						<div class="mosaic-item mosaic-item-small">
							<img src="<?php echo esc_url( $theme_uri . '/assets/images/real-bluestone-hilliard.jpg' ); ?>" 
							     alt="Clean patio stonework with restored color and texture" 
							     class="mosaic-img" 
							     loading="lazy">
							<span class="mosaic-mini-label">Stonework Revived</span>
						</div>
					</div>

					<!-- Floating Trust Badges -->
					<div class="depth-floating-badge badge-ground-reach">
						<div class="floating-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
						</div>
						<div class="floating-text">
							<strong>3-Story Ground Reach</strong>
							<span>Zero ladder contact on gutters</span>
						</div>
					</div>

					<div class="depth-floating-badge badge-eco-salt">
						<div class="floating-icon green-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						</div>
						<div class="floating-text">
							<strong>Eco-Friendly Formula</strong>
							<span>Biodegrades into salt in 48h</span>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

<!-- 4. THE "WHY CHOOSE US" / GUARANTEE SECTION -->
<section class="section-why-us" id="why-us">
	<div class="container">
		
		<div class="section-header text-center">
			<span class="section-badge badge-light">The Clear Water Difference</span>
			<h2 class="section-title text-white">Why Central Ohio Homeowners Choose Clear Water Prowash</h2>
			<p class="section-subtitle text-slate-300">
				High pressure can void shingle warranties and gouge soft vinyl. We do exterior cleaning the right way: with science, low pressure, and genuine care.
			</p>
		</div>

		<!-- 4-Column Value Prop Grid -->
		<div class="why-grid">
			
			<div class="why-card">
				<div class="why-icon-box">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
						<circle cx="12" cy="12" r="10"></circle>
						<path d="M8 12h8"></path>
						<path d="M12 8v8"></path>
					</svg>
				</div>
				<h3 class="why-card-title">Low-Pressure Soft Washing</h3>
				<p class="why-card-desc">
					We never blast your home with brutal 4,000 PSI pressure. Our dedicated soft-wash pumps apply gentle eco detergents at under 100 PSI, preserving siding seals and window gaskets.
				</p>
			</div>

			<div class="why-card">
				<div class="why-icon-box">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
						<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
					</svg>
				</div>
				<h3 class="why-card-title">Plant & Landscape Protection</h3>
				<p class="why-card-desc">
					We care about your landscaping as much as you do. Our team continuously pre-wets, covers delicate shrubs, and applies an eco-conscious neutralizing rinse before and after.
				</p>
			</div>

			<div class="why-card">
				<div class="why-icon-box">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
						<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
						<circle cx="9" cy="7" r="4"></circle>
						<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
						<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
					</svg>
				</div>
				<h3 class="why-card-title">Owner-Operated Care</h3>
				<p class="why-card-desc">
					You aren't dealing with a revolving subcontractor door. Our dedicated Columbus team oversees every project from first call to final walk-around inspection.
				</p>
			</div>

			<div class="why-card">
				<div class="why-icon-box">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
						<line x1="12" y1="1" x2="12" y2="23"></line>
						<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
					</svg>
				</div>
				<h3 class="why-card-title">Upfront Pricing & Guarantee</h3>
				<p class="why-card-desc">
					Zero bait-and-switch pricing or hidden travel fees. Every quote is delivered in writing, backed by our 100% satisfaction guarantee: if it's not right, we make it right.
				</p>
			</div>

		</div>

		<!-- Guarantee Callout Banner -->
		<div class="guarantee-box">
			<div class="guarantee-badge">
				<svg width="40" height="40" viewBox="0 0 24 24" fill="#10b981"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
			</div>
			<div class="guarantee-content">
				<h3>Our 100% "Peace of Mind" Plant & Property Promise</h3>
				<p>We treat every Powell, Dublin, and Columbus home as if it were our own mother's property. If you ever notice an area we missed, we'll return and re-clean it promptly at no extra charge.</p>
			</div>
			<div class="guarantee-action">
				<a href="tel:6144259395" class="btn btn-outline-white">Talk with Our Team: (614) 425-9395</a>
			</div>
		</div>

	</div>
</section>

<!-- 5. SOCIAL PROOF & REVIEWS SECTION -->
<section class="section-reviews" id="reviews">
	<div class="container">
		
		<div class="section-header text-center">
			<span class="section-badge">Verified Customer Feedback</span>
			<h2 class="section-title">Over 180+ Five-Star Reviews Across Central Ohio</h2>
			<p class="section-subtitle">
				See why your neighbors in Dublin, Powell, Worthington, and New Albany recommend Clear Water Prowash.
			</p>
		</div>

		<!-- Authentic Google Excellent Aggregate Badge -->
		<div class="google-review-badge-banner">
			<div class="google-badge-left">
				<div class="google-wordmark-wrap">
					<svg class="google-full-logo" width="92" height="30" viewBox="0 0 272 92" aria-label="Google">
						<path fill="#EA4335" d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/>
						<path fill="#FBBC05" d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/>
						<path fill="#4285F4" d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z"/>
						<path fill="#34A853" d="M225 3v65h-9.5V3h9.5z"/>
						<path fill="#EA4335" d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-13.27-8.23l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z"/>
						<path fill="#4285F4" d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.8.36 34.68S16.32 0 35.3 0c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.96-6.72-13.86 0-24.7 11.17-24.7 25.27 0 14.11 10.84 25.28 24.7 25.28 8.99 0 14.11-3.61 17.39-6.89 2.69-2.68 4.45-6.55 5.12-11.66H35.29z"/>
					</svg>
					<span class="google-badge-tag">Excellent</span>
				</div>
				<div class="google-stars-row">
					<div class="google-stars-gold" aria-label="5.0 out of 5 stars">★★★★★</div>
					<div class="google-score-text">
						<strong>5.0</strong> <span class="score-divider">|</span> <span>184 reviews</span>
					</div>
				</div>
			</div>
			<div class="google-badge-right">
				<a href="https://www.google.com/search?q=clear+water+prowash+columbus+ohio" target="_blank" rel="noopener noreferrer" class="btn btn-google-write-review">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
					<span>Write a review</span>
				</a>
			</div>
		</div>

		<!-- Genuine Google Reviews Interactive Carousel -->
		<div class="reviews-carousel-wrapper">
			
			<!-- Left Navigation Arrow Button -->
			<button type="button" class="reviews-nav-btn reviews-prev" id="reviews-carousel-prev" aria-label="Previous Reviews">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
			</button>

			<!-- Carousel Viewport & Track -->
			<div class="reviews-viewport" id="reviews-viewport">
				<div class="reviews-track" id="reviews-track">
					
					<!-- Review 1: Robert Mathis (27 September 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-robert-mathis.jpg' ); ?>" 
								     alt="Robert Mathis" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Robert Mathis</strong>
									<span class="review-date">27 September 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<div class="review-text-and-thumb">
								<p class="review-text">
									Clear Water Prowash knows what they’re doing! They are careful, thorough &amp; pay attention to every detail. I expect good work when I hire someone to do a job that I can’t do myself or don’t want to do myself. Clear Water Prowash went beyond my expectations. They cleaned not only the entrance area shown in the photos but the entire house. We thought we were gonna have to have the house painted, but when they were done, there’s no need to have it painted. It’s nice to find a team you can depend on!
								</p>
								<!-- Customer Photo Proof Thumbnail (Clickable to Lightbox) -->
								<div class="review-photo-proof review-inline-thumb" 
								     role="button" 
								     tabindex="0" 
								     aria-label="View Robert Mathis's review photo in full size"
								     data-review-photo-src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-robert-mathis.jpg' ); ?>" 
								     data-review-photo-title="Robert Mathis • House Wash &amp; Entrance Walkway"
								     data-review-photo-location="Columbus, OH"
								     data-review-photo-desc="Customer submitted photo proof from Robert Mathis showing restored entrance area, clean masonry walkway, and whole house wash.">
									<img src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-robert-mathis.jpg' ); ?>" 
									     alt="Robert Mathis customer review photo proof" 
									     class="customer-review-thumbnail"
									     loading="lazy">
									<span class="thumb-zoom-badge" aria-hidden="true">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</span>
								</div>
							</div>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 2: Dan Roberts (20 September 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-dan-roberts.jpg' ); ?>" 
								     alt="Dan Roberts" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Dan Roberts</strong>
									<span class="review-date">20 September 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<p class="review-text">
								Clear Water Prowash does a great job! Will definitely use this business in the future.
							</p>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 3: Lars Mahler (1 August 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-lars-mahler.jpg' ); ?>" 
								     alt="Lars Mahler" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Lars Mahler</strong>
									<span class="review-date">1 August 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<div class="review-text-and-thumb">
								<p class="review-text">
									We were very happy with Clear Water Prowash. They cleaned and resealed our patio, and the visual difference was dramatic (see before and after images attached). We feel like we have a brand new patio. Clear Water Prowash was great to work with as well. Great communication. We strongly recommend Clear Water Prowash for anyone who needs patio cleaning and resealing.
								</p>
								<!-- Customer Photo Proof Thumbnail (Clickable to Lightbox) -->
								<div class="review-photo-proof review-inline-thumb" 
								     role="button" 
								     tabindex="0" 
								     aria-label="View Lars Mahler's review photo in full size"
								     data-review-photo-src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-lars-mahler.jpg' ); ?>" 
								     data-review-photo-title="Lars Mahler • Patio Cleaning &amp; Resealing"
								     data-review-photo-location="Central Ohio"
								     data-review-photo-desc="Customer submitted photo proof from Lars Mahler showing dramatic before/after visual difference on cleaned and resealed patio pavers and wall.">
									<img src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-lars-mahler.jpg' ); ?>" 
									     alt="Lars Mahler customer review photo proof" 
									     class="customer-review-thumbnail"
									     loading="lazy">
									<span class="thumb-zoom-badge" aria-hidden="true">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</span>
								</div>
							</div>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 4: Griffin Jones (29 July 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-griffin-jones.jpg' ); ?>" 
								     alt="Griffin Jones" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Griffin Jones</strong>
									<span class="review-date">29 July 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<p class="review-text">
								I 100% recommend everyone to Clear Water Prowash! Their knowledge with pavers is over the top! They’re who you need for all of your exterior cleaning needs! Their team is so professional and will explain everything in detail to ensure that you are satisfied with everything before they even start! Again, they’re awesome and I’m blessed to work with a team like them! -
							</p>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 5: Brad Schimmoeller (20 September 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-brad-schimmoeller.jpg' ); ?>" 
								     alt="Brad Schimmoeller" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Brad Schimmoeller</strong>
									<span class="review-date">20 September 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<p class="review-text">
								The Clear Water Prowash team did very great work from start to finish! They explained everything in detail and followed through with exactly what they said they would do. I will definitely use them again in the future
							</p>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 6: Loren (7 September 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-loren.jpg' ); ?>" 
								     alt="Loren" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Loren</strong>
									<span class="review-date">7 September 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<div class="review-text-and-thumb">
								<p class="review-text">
									From the first meeting where we discussed our needs - power washing our rail, deck, brick sidewalk and patio, paver restoration, impervious sand fill and seal - we learned quickly that the 5-star rating that Clear Water Prowash possessed was well deserved. The Clear Water Prowash team shared various products and services possible then customized our contract with clarity and thoroughness. When an unexpected drainage issue was identified, CWPW’s work was paused until our landscaper repaired it. In the end, CWPW provided all expected services with integrity, perseverance and expertise. We highly recommend Clear Water Prowash for your power wash needs.
								</p>
								<!-- Customer Photo Proof Thumbnail (Clickable to Lightbox) -->
								<div class="review-photo-proof review-inline-thumb" 
								     role="button" 
								     tabindex="0" 
								     aria-label="View Loren's review photo in full size"
								     data-review-photo-src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-loren.jpg' ); ?>"
								     data-review-photo-title="Loren • Paver Restoration &amp; Brick Sidewalk"
								     data-review-photo-location="Columbus, OH"
								     data-review-photo-desc="Customer submitted photo proof from Loren showing brick sidewalk, rail, deck, and paver restoration with impervious sand fill and seal.">
									<img src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-loren.jpg' ); ?>" 
									     alt="Loren customer review photo proof" 
									     class="customer-review-thumbnail"
									     loading="lazy">
									<span class="thumb-zoom-badge" aria-hidden="true">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</span>
								</div>
							</div>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 7: Donna (6 September 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-donna.jpg' ); ?>" 
								     alt="Donna" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Donna</strong>
									<span class="review-date">6 September 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<div class="review-text-and-thumb">
								<p class="review-text">
									I highly recommend this company. The service needed to remove lichen and mold from the below ground window wells was a difficult task. The PROWASH gals did an outstanding power wash job.
								</p>
								<!-- Customer Photo Proof Thumbnail (Clickable to Lightbox) -->
								<div class="review-photo-proof review-inline-thumb" 
								     role="button" 
								     tabindex="0" 
								     aria-label="View Donna's review photo in full size"
								     data-review-photo-src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-donna.jpg' ); ?>"
								     data-review-photo-title="Donna • Lichen &amp; Mold Window Well Washing"
								     data-review-photo-location="Central Ohio"
								     data-review-photo-desc="Customer submitted photo proof from Donna showing below-ground window well mold and lichen power wash job.">
									<img src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-donna.jpg' ); ?>" 
									     alt="Donna customer review photo proof" 
									     class="customer-review-thumbnail"
									     loading="lazy">
									<span class="thumb-zoom-badge" aria-hidden="true">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</span>
								</div>
							</div>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

					<!-- Review 8: Denese Zarich (12 August 2026) -->
					<div class="google-review-card">
						<div class="review-card-top">
							<div class="reviewer-profile">
								<img src="<?php echo esc_url( $theme_uri . '/assets/images/avatar-denese-zarich.jpg' ); ?>" 
								     alt="Denese Zarich" 
								     class="reviewer-avatar" 
								     width="46" 
								     height="46">
								<div class="reviewer-info">
									<strong class="reviewer-name">Denese Zarich</strong>
									<span class="review-date">12 August 2026</span>
								</div>
							</div>
							<div class="google-corner-icon" aria-hidden="true">
								<svg width="22" height="22" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
							</div>
						</div>
						<div class="review-stars-row">
							<span class="stars-gold">★★★★★</span>
							<span class="google-verified-badge" title="Verified Customer Review">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							</span>
						</div>
						<div class="review-content-body">
							<div class="review-text-and-thumb">
								<p class="review-text">
									Just had my home power washed along with my porch/walkway ! Thank you to Clear Water Prowash and your team for doing an excellent job !! I’m amazed at how great everything looks !
								</p>
								<!-- Customer Photo Proof Thumbnail (Clickable to Lightbox) -->
								<div class="review-photo-proof review-inline-thumb" 
								     role="button" 
								     tabindex="0" 
								     aria-label="View Denese Zarich's review photo in full size"
								     data-review-photo-src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-denese-zarich.jpg' ); ?>"
								     data-review-photo-title="Denese Zarich • Home Soft Wash &amp; Porch/Walkway"
								     data-review-photo-location="Central Ohio"
								     data-review-photo-desc="Customer submitted photo proof from Denese Zarich showing home vinyl corner and porch/walkway power wash.">
									<img src="<?php echo esc_url( $theme_uri . '/assets/images/review-photo-denese-zarich.jpg' ); ?>" 
									     alt="Denese Zarich customer review photo proof" 
									     class="customer-review-thumbnail"
									     loading="lazy">
									<span class="thumb-zoom-badge" aria-hidden="true">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
									</span>
								</div>
							</div>
						</div>
						<div class="review-card-footer">
							<span class="review-verified-text">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#10b981" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
								Google Verified Review
							</span>
						</div>
					</div>

				</div>
			</div>

			<!-- Right Navigation Arrow Button -->
			<button type="button" class="reviews-nav-btn reviews-next" id="reviews-carousel-next" aria-label="Next Reviews">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
			</button>

		</div>

		<!-- Carousel Pagination Dots -->
		<div class="reviews-dots" id="reviews-dots" role="tablist" aria-label="Reviews Carousel Navigation"></div>

	</div>
</section>

<!-- 6. FRICTION-FREE INSTANT QUOTE FORM SECTION -->
<section class="section-quote" id="quote-section">
	<div class="container quote-container">
		
		<div class="quote-header-wrap text-center">
			<span class="section-badge badge-accent">Skip The 9-Step Forms</span>
			<h2 class="section-title">Get Your Free Instant Exterior Estimate</h2>
			<p class="section-subtitle">
				No complicated questionnaires or phone tag. Select your services below and our Columbus team will inspect your property virtually and text/call you an upfront price within 60 minutes.
			</p>
		</div>

		<div class="quote-card-layout">
			
			<!-- QUICK QUOTE FORM CARD -->
			<div class="quote-form-card">
				<div class="form-header">
					<div class="form-title-group">
						<h3 class="form-title">Fast Estimate Request</h3>
						<span class="form-time-tag">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
							Takes 45 seconds
						</span>
					</div>
					<p class="form-desc">Select the services you need below for guaranteed upfront pricing:</p>
				</div>

				<form id="instant-quote-form" class="instant-form" novalidate>
					<?php wp_nonce_field( 'clearwater_quote_action', 'quote_nonce' ); ?>
					
					<!-- Top Contact Inputs -->
					<div class="form-grid">
						
						<!-- Field 1: Full Name -->
						<div class="form-group">
							<label for="quote-name" class="form-label">
								Your Full Name <span class="required">*</span>
							</label>
							<div class="input-icon-wrap">
								<svg class="field-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<input type="text" 
								       id="quote-name" 
								       name="fullname" 
								       class="form-control" 
								       placeholder="e.g. John Smith" 
								       required>
							</div>
						</div>

						<!-- Field 2: Phone / Text -->
						<div class="form-group">
							<label for="quote-phone" class="form-label">
								Phone Number (for fast text quote) <span class="required">*</span>
							</label>
							<div class="input-icon-wrap">
								<svg class="field-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								<input type="tel" 
								       id="quote-phone" 
								       name="phone" 
								       class="form-control" 
								       placeholder="(614) 000-0000" 
								       required>
							</div>
						</div>

					</div>

					<!-- Field 3: Property Address or Zip Code -->
					<div class="form-group form-group-address">
						<label for="quote-address" class="form-label">
							Property Address or Columbus Zip Code <span class="required">*</span>
						</label>
						<div class="input-icon-wrap">
							<svg class="field-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
							<input type="text" 
							       id="quote-address" 
							       name="address" 
							       class="form-control" 
							       placeholder="e.g. 2667 Sawbury Blvd, Dublin, OH or 43235" 
							       required>
						</div>
					</div>

					<!-- Field 4: Exact 14 Service Checkboxes Selection -->
					<div class="form-group services-selection-group">
						<div class="services-label-row">
							<label class="form-label">
								Services Needed <span class="required">*</span>
							</label>
							<span class="services-hint-pill">Select all that apply</span>
						</div>

						<div class="services-checkbox-grid" role="group" aria-label="Select exterior cleaning services">
							
							<!-- 1. House Wash -->
							<label class="service-check-item" for="svc-house-wash">
								<input type="checkbox" name="services[]" value="House Wash" id="svc-house-wash" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">House Wash</span>
							</label>

							<!-- 2. Gutter Exterior Washing -->
							<label class="service-check-item" for="svc-gutter-wash">
								<input type="checkbox" name="services[]" value="Gutter Exterior Washing" id="svc-gutter-wash" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Gutter Exterior Washing</span>
							</label>

							<!-- 3. Screen Enclosure Cleaning -->
							<label class="service-check-item" for="svc-screen-enclosure">
								<input type="checkbox" name="services[]" value="Screen Enclosure Cleaning" id="svc-screen-enclosure" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Screen Enclosure Cleaning</span>
							</label>

							<!-- 4. Roof Cleaning -->
							<label class="service-check-item" for="svc-roof-cleaning">
								<input type="checkbox" name="services[]" value="Roof Cleaning" id="svc-roof-cleaning" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Roof Cleaning</span>
							</label>

							<!-- 5. Concrete Driveway Power Wash -->
							<label class="service-check-item" for="svc-driveway-wash">
								<input type="checkbox" name="services[]" value="Concrete Driveway Power Wash" id="svc-driveway-wash" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Concrete Driveway Power Wash</span>
							</label>

							<!-- 6. Concrete Front Porch & Sidewalk Power Washing -->
							<label class="service-check-item" for="svc-porch-sidewalk">
								<input type="checkbox" name="services[]" value="Concrete Front Porch & Sidewalk Power Washing" id="svc-porch-sidewalk" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Concrete Front Porch &amp; Sidewalk Power Washing</span>
							</label>

							<!-- 7. Concrete Patio Pad Power Washing -->
							<label class="service-check-item" for="svc-patio-pad">
								<input type="checkbox" name="services[]" value="Concrete Patio Pad Power Washing" id="svc-patio-pad" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Concrete Patio Pad Power Washing</span>
							</label>

							<!-- 8. Concrete Sealing -->
							<label class="service-check-item" for="svc-concrete-sealing">
								<input type="checkbox" name="services[]" value="Concrete Sealing" id="svc-concrete-sealing" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Concrete Sealing</span>
							</label>

							<!-- 9. Paver Patio Cleaning -->
							<label class="service-check-item" for="svc-paver-cleaning">
								<input type="checkbox" name="services[]" value="Paver Patio Cleaning" id="svc-paver-cleaning" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Paver Patio Cleaning</span>
							</label>

							<!-- 10. Paver Patio Joint Sanding & Sealing -->
							<label class="service-check-item" for="svc-paver-sanding-sealing">
								<input type="checkbox" name="services[]" value="Paver Patio Joint Sanding & Sealing" id="svc-paver-sanding-sealing" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Paver Patio Joint Sanding &amp; Sealing</span>
							</label>

							<!-- 11. Paver Patio Maintenance Plan -->
							<label class="service-check-item" for="svc-paver-maintenance">
								<input type="checkbox" name="services[]" value="Paver Patio Maintenance Plan" id="svc-paver-maintenance" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Paver Patio Maintenance Plan</span>
							</label>

							<!-- 12. Deck Cleaning -->
							<label class="service-check-item" for="svc-deck-cleaning">
								<input type="checkbox" name="services[]" value="Deck Cleaning" id="svc-deck-cleaning" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Deck Cleaning</span>
							</label>

							<!-- 13. Fence Washing -->
							<label class="service-check-item" for="svc-fence-washing">
								<input type="checkbox" name="services[]" value="Fence Washing" id="svc-fence-washing" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Fence Washing</span>
							</label>

							<!-- 14. Other -->
							<label class="service-check-item" for="svc-other">
								<input type="checkbox" name="services[]" value="Other" id="svc-other" class="service-checkbox-input">
								<span class="custom-checkbox-box" aria-hidden="true">
									<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
								</span>
								<span class="service-check-title">Other</span>
							</label>

						</div>

						<!-- Conditional Detail for Other -->
						<div id="service-other-wrap" class="service-other-wrap" style="display: none;">
							<input type="text" 
							       name="service_other_note" 
							       id="service-other-note" 
							       class="form-control" 
							       placeholder="Please specify what you would like cleaned (e.g. retaining wall, garage floor)...">
						</div>
					</div>

					<!-- Form Submit Button -->
					<div class="form-submit-row">
						<button type="submit" id="quote-submit-btn" class="btn btn-primary btn-submit-quote">
							<span class="btn-spinner" aria-hidden="true"></span>
							<span class="btn-text">Get My Free Quote Now</span>
							<svg class="btn-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
						</button>
					</div>

					<div class="form-privacy-note">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
						<span>Your info is 100% private. Our team will never spam or share your details.</span>
					</div>

					<!-- Live Status / Feedback Banner -->
					<div id="quote-feedback" class="quote-feedback-box" style="display:none;" role="alert"></div>

				</form>
			</div>

			<!-- DIRECT SMS ALTERNATIVE BANNER -->
			<div class="quote-sms-sidebar">
				<div class="sms-highlight-card">
					<div class="sms-card-badge">Prefer Texting?</div>
					<div class="sms-icon-bubble">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</div>
					<h3 class="sms-card-title">Snap Photos of Your House & Text Our Team</h3>
					<p class="sms-card-desc">
						Skip typing forms entirely! Just snap 2 or 3 quick pictures of your dirty siding, patio, or roof and text them straight to our shop cell:
					</p>
					
					<a href="sms:6144259395" class="btn btn-sms-large">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<span>Text (614) 425-9395</span>
					</a>

					<div class="sms-perks">
						<div class="perk-item">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<span>Direct reply within 1 business hour</span>
						</div>
						<div class="perk-item">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<span>Direct communication with our team</span>
						</div>
						<div class="perk-item">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<span>No in-person sales pitch required</span>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>
</section>

<!-- 6.5 COMPREHENSIVE SERVICE AREA COVERAGE -->
<section class="section-service-areas" id="service-areas">
	<div class="container">
		
		<div class="section-header text-center">
			<span class="section-badge">Central Ohio Coverage</span>
			<h2 class="section-title">Proudly Serving 21 Greater Columbus Communities</h2>
			<p class="section-subtitle">
				From Dublin and Powell to New Albany and Grove City, our team provides prompt, professional exterior cleaning with zero travel surcharges.
			</p>
		</div>

		<!-- 21 Service Areas Interactive Grid -->
		<div class="service-areas-grid" role="list" aria-label="Cities and suburbs served by Clear Water Prowash">
			<?php
			$full_service_areas = array(
				array( 'name' => 'Columbus', 'badge' => 'Franklin County' ),
				array( 'name' => 'Westerville', 'badge' => 'North Metro' ),
				array( 'name' => 'Powell', 'badge' => 'Delaware County' ),
				array( 'name' => 'Worthington', 'badge' => 'North Metro' ),
				array( 'name' => 'Dublin', 'badge' => 'Northwest' ),
				array( 'name' => 'Delaware', 'badge' => 'Delaware County' ),
				array( 'name' => 'Lewis Center', 'badge' => 'Polaris Area' ),
				array( 'name' => 'Upper Arlington', 'badge' => 'West Central' ),
				array( 'name' => 'New Albany', 'badge' => 'Northeast' ),
				array( 'name' => 'Jerome Village', 'badge' => 'Union County' ),
				array( 'name' => 'Plain City', 'badge' => 'Northwest' ),
				array( 'name' => 'Grove City', 'badge' => 'Southwest' ),
				array( 'name' => 'Bexley', 'badge' => 'East Central' ),
				array( 'name' => 'Blacklick', 'badge' => 'East Metro' ),
				array( 'name' => 'Reynoldsburg', 'badge' => 'East Metro' ),
				array( 'name' => 'Gahanna', 'badge' => 'Northeast' ),
				array( 'name' => 'Pickerington', 'badge' => 'Southeast' ),
				array( 'name' => 'Hilliard', 'badge' => 'West Metro' ),
				array( 'name' => 'Galloway', 'badge' => 'West Metro' ),
				array( 'name' => 'Sunbury', 'badge' => 'Delaware County' ),
				array( 'name' => 'Galena', 'badge' => 'Delaware County' ),
			);
			foreach ( $full_service_areas as $area ) :
				?>
				<div class="service-area-card" id="area-<?php echo esc_attr( sanitize_title( $area['name'] ) ); ?>" role="listitem">
					<div class="area-card-pin">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
					</div>
					<div class="area-card-info">
						<h3 class="area-card-city"><?php echo esc_html( $area['name'] ); ?>, OH</h3>
						<span class="area-card-badge"><?php echo esc_html( $area['badge'] ); ?></span>
					</div>
					<a href="#quote-section" class="area-card-link" aria-label="Request quote in <?php echo esc_attr( $area['name'] ); ?>">
						<span>Quote</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
					</a>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Area Service Reassurance Strip -->
		<div class="service-areas-footer-bar">
			<div class="areas-guarantee-text">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
				<span>Don't see your specific neighborhood listed? If you're in Greater Central Ohio, we service your area!</span>
			</div>
			<div class="areas-guarantee-actions">
				<a href="tel:6144259395" class="btn btn-outline-dark btn-sm">
					<span>Call (614) 425-9395</span>
				</a>
				<a href="sms:6144259395" class="btn btn-primary btn-sm">
					<span>Text Your Address for Fast Quote</span>
				</a>
			</div>
		</div>

	</div>
</section>

<!-- 7. STRUCTURED FAQ ACCORDION -->
<section class="section-faq" id="faq">
	<div class="container">
		
		<div class="section-header text-center">
			<span class="section-badge">Clear Water Knowledge Base</span>
			<h2 class="section-title">Frequently Asked Questions</h2>
			<p class="section-subtitle">
				Have questions about our Columbus exterior cleaning, paver restoration, maintenance plans, or specialty stain removal? Find clear answers from our team below.
			</p>
		</div>

		<!-- Interactive FAQ Category Filter Pills -->
		<div class="faq-filter-nav" role="tablist" aria-label="FAQ Topics">
			<button type="button" class="faq-filter-pill is-active" data-faq-filter="all" role="tab" aria-selected="true">
				<span>All Questions</span>
				<span class="filter-count">22</span>
			</button>
			<button type="button" class="faq-filter-pill" data-faq-filter="power-washing" role="tab" aria-selected="false">
				<span>Power Washing</span>
				<span class="filter-count">5</span>
			</button>
			<button type="button" class="faq-filter-pill" data-faq-filter="paver-sealing" role="tab" aria-selected="false">
				<span>Pavers &amp; Sealing</span>
				<span class="filter-count">5</span>
			</button>
			<button type="button" class="faq-filter-pill" data-faq-filter="maintenance-plans" role="tab" aria-selected="false">
				<span>Maintenance Plans</span>
				<span class="filter-count">5</span>
			</button>
			<button type="button" class="faq-filter-pill" data-faq-filter="graffiti-removal" role="tab" aria-selected="false">
				<span>Graffiti Removal</span>
				<span class="filter-count">4</span>
			</button>
			<button type="button" class="faq-filter-pill" data-faq-filter="rust-removal" role="tab" aria-selected="false">
				<span>Rust Removal</span>
				<span class="filter-count">4</span>
			</button>
		</div>

		<div class="faq-accordion" id="faq-accordion-group">
			
			<!-- ==========================================
			     CATEGORY 1: POWER WASHING QUESTIONS
			     ========================================== -->
			<div class="faq-category-header" data-faq-cat="power-washing">
				<div class="faq-category-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
				</div>
				<h3 class="faq-category-title">Power Washing Questions</h3>
			</div>

			<!-- FAQ 1.1 -->
			<div class="faq-item" data-faq-cat="power-washing" id="faq-pw-1">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pw-1">
					<span class="faq-title">What surfaces can be power washed?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pw-1" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Power washing is commonly used for concrete, driveways, sidewalks, patios, and other durable exterior surfaces.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 1.2 -->
			<div class="faq-item" data-faq-cat="power-washing" id="faq-pw-2">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pw-2">
					<span class="faq-title">How often should you soft wash the exterior of your house in Columbus Ohio?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pw-2" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Most homes in Columbus should be professionally power washed once a year to remove dirt, algae, and mold buildup caused by Ohio’s seasonal weather conditions.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 1.3 -->
			<div class="faq-item" data-faq-cat="power-washing" id="faq-pw-3">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pw-3">
					<span class="faq-title">What is the difference between power washing and soft washing?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pw-3" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Power washing uses high pressure to clean hard surfaces like concrete, while soft washing uses low pressure and specialized cleaning solutions to safely clean siding, roofs, and other delicate surfaces.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 1.4 -->
			<div class="faq-item" data-faq-cat="power-washing" id="faq-pw-4">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pw-4">
					<span class="faq-title">Can you power wash granite?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pw-4" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Yes, you can power wash exterior granite.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 1.5 -->
			<div class="faq-item" data-faq-cat="power-washing" id="faq-pw-5">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pw-5">
					<span class="faq-title">Will your cleaning detergents harm my landscaping, pets, or flowers?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pw-5" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>No. Protecting your landscaping and pets is our number one priority. We saturate all plant beds with fresh water before washing, protect delicate blooms, and apply an eco-neutralizing rinse after cleaning to ensure complete plant and pet safety.</p>
					</div>
				</div>
			</div>

			<!-- ==========================================
			     CATEGORY 2: PAVER PATIO CLEANING & SEALING
			     ========================================== -->
			<div class="faq-category-header" data-faq-cat="paver-sealing">
				<div class="faq-category-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
				</div>
				<h3 class="faq-category-title">Paver Patio Cleaning, Repair, Joint Sanding, Sealing, and Maintenance Questions</h3>
			</div>

			<!-- FAQ 2.1 -->
			<div class="faq-item" data-faq-cat="paver-sealing" id="faq-pv-1">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pv-1">
					<span class="faq-title">Why is joint sanding important for pavers?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pv-1" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Joint sanding helps stabilize the pavers, reduce weed growth, and prevent shifting over time.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 2.2 -->
			<div class="faq-item" data-faq-cat="paver-sealing" id="faq-pv-2">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pv-2">
					<span class="faq-title">Should pavers be sealed after cleaning?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pv-2" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Sealing helps protect pavers from moisture, stains, fading, and wear while improving their overall appearance.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 2.3 -->
			<div class="faq-item" data-faq-cat="paver-sealing" id="faq-pv-3">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pv-3">
					<span class="faq-title">How often do pavers need maintenance?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pv-3" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Paver patios should be inspected and maintained regularly to address settling, joint sand loss, staining, and surface wear.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 2.4 -->
			<div class="faq-item" data-faq-cat="paver-sealing" id="faq-pv-4">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pv-4">
					<span class="faq-title">How long does paver sealing last?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pv-4" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Paver sealing typically lasts 3-5 years depending on weather conditions, usage, and the type of sealer used.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 2.5 -->
			<div class="faq-item" data-faq-cat="paver-sealing" id="faq-pv-5">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-pv-5">
					<span class="faq-title">What is joint sanding and why is it important?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-pv-5" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Joint sanding fills the gaps between pavers to stabilize them, prevent shifting, and reduce weed growth and insect activity.</p>
					</div>
				</div>
			</div>

			<!-- ==========================================
			     CATEGORY 3: MAINTENANCE PLANS QUESTIONS
			     ========================================== -->
			<div class="faq-category-header" data-faq-cat="maintenance-plans">
				<div class="faq-category-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
				</div>
				<h3 class="faq-category-title">Maintenance Plans Questions</h3>
			</div>

			<!-- FAQ 3.1 -->
			<div class="faq-item" data-faq-cat="maintenance-plans" id="faq-mp-1">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-mp-1">
					<span class="faq-title">What is included in a maintenance plan?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-mp-1" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Maintenance plans typically include scheduled cleanings, inspections, and preventative treatments to keep your property looking its best year-round.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 3.2 -->
			<div class="faq-item" data-faq-cat="maintenance-plans" id="faq-mp-2">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-mp-2">
					<span class="faq-title">How often should exterior cleaning maintenance be scheduled?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-mp-2" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Most properties benefit from maintenance services once or twice per year, depending on exposure to dirt, algae, and weather conditions in Columbus, Ohio.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 3.3 -->
			<div class="faq-item" data-faq-cat="maintenance-plans" id="faq-mp-3">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-mp-3">
					<span class="faq-title">Do maintenance plans help prevent costly repairs?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-mp-3" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Yes, regular maintenance helps prevent buildup, surface damage, and deterioration, reducing the need for more expensive restoration work.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 3.4 -->
			<div class="faq-item" data-faq-cat="maintenance-plans" id="faq-mp-4">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-mp-4">
					<span class="faq-title">Are maintenance plans customizable?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-mp-4" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Yes, maintenance plans can be tailored to your specific property, surfaces, and cleaning needs to ensure long-lasting results.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 3.5 -->
			<div class="faq-item" data-faq-cat="maintenance-plans" id="faq-mp-5">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-mp-5">
					<span class="faq-title">Do you offer maintenance plans in Columbus Ohio and surrounding areas?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-mp-5" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Yes, we provide customized maintenance plans for residential and commercial properties in Columbus, Dublin, Westerville, Hilliard, and surrounding areas.</p>
					</div>
				</div>
			</div>

			<!-- ==========================================
			     CATEGORY 4: GRAFFITI REMOVAL QUESTIONS
			     ========================================== -->
			<div class="faq-category-header" data-faq-cat="graffiti-removal">
				<div class="faq-category-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
				</div>
				<h3 class="faq-category-title">Graffiti Removal Questions</h3>
			</div>

			<!-- FAQ 4.1 -->
			<div class="faq-item" data-faq-cat="graffiti-removal" id="faq-gr-1">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-gr-1">
					<span class="faq-title">Can graffiti be removed without damaging the surface?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-gr-1" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Yes, professional graffiti removal methods are designed to remove paint and markings while protecting the underlying surface as much as possible.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 4.2 -->
			<div class="faq-item" data-faq-cat="graffiti-removal" id="faq-gr-2">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-gr-2">
					<span class="faq-title">What surfaces can graffiti be removed from?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-gr-2" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Graffiti can often be removed from brick, concrete, stone, metal, and other exterior surfaces depending on the type of coating and the age of the graffiti.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 4.3 -->
			<div class="faq-item" data-faq-cat="graffiti-removal" id="faq-gr-3">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-gr-3">
					<span class="faq-title">How quickly should graffiti be removed?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-gr-3" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Graffiti should be removed as soon as possible to prevent it from setting into the surface and becoming more difficult to remove.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 4.4 -->
			<div class="faq-item" data-faq-cat="graffiti-removal" id="faq-gr-4">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-gr-4">
					<span class="faq-title">Is graffiti removal permanent?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-gr-4" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Most graffiti can be fully removed, but results depend on the surface type and how long the paint has been present.</p>
					</div>
				</div>
			</div>

			<!-- ==========================================
			     CATEGORY 5: RUST REMOVAL QUESTIONS
			     ========================================== -->
			<div class="faq-category-header" data-faq-cat="rust-removal">
				<div class="faq-category-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
				</div>
				<h3 class="faq-category-title">Rust Removal Questions</h3>
			</div>

			<!-- FAQ 5.1 -->
			<div class="faq-item" data-faq-cat="rust-removal" id="faq-rr-1">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-rr-1">
					<span class="faq-title">Can rust stains be removed from concrete or siding?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-rr-1" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Yes, professional rust removal treatments can often reduce or fully remove rust stains from concrete, siding, and other exterior surfaces.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 5.2 -->
			<div class="faq-item" data-faq-cat="rust-removal" id="faq-rr-2">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-rr-2">
					<span class="faq-title">What causes rust stains on exterior surfaces?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-rr-2" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Rust stains are often caused by irrigation systems, metal furniture, batteries, fertilizer, or water with high iron content.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 5.3 -->
			<div class="faq-item" data-faq-cat="rust-removal" id="faq-rr-3">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-rr-3">
					<span class="faq-title">Are rust stains permanent?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-rr-3" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Most rust stains can be significantly reduced or removed, but results depend on how long the stain has been present and the type of surface.</p>
					</div>
				</div>
			</div>

			<!-- FAQ 5.4 -->
			<div class="faq-item" data-faq-cat="rust-removal" id="faq-rr-4">
				<button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-rr-4">
					<span class="faq-title">Can pressure washing remove rust stains?</span>
					<span class="faq-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
					</span>
				</button>
				<div id="faq-ans-rr-4" class="faq-answer" role="region">
					<div class="faq-answer-inner">
						<p>Standard pressure washing alone usually cannot remove rust stains. Specialized cleaning solutions are typically required for effective removal.</p>
					</div>
				</div>
			</div>

		</div>

		<!-- Still have questions footer -->
		<div class="faq-contact-footer">
			<p>Have a question about your specific property or need a quick consultation?</p>
			<div class="faq-buttons">
				<a href="tel:6144259395" class="btn btn-outline-dark">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span>Call (614) 425-9395</span>
				</a>
				<a href="sms:6144259395" class="btn btn-primary">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					<span>Text Photos to Our Team</span>
				</a>
			</div>
		</div>

	</div>
</section>

<!-- SEO Rich Snippet: FAQPage Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What surfaces can be power washed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Power washing is commonly used for concrete, driveways, sidewalks, patios, and other durable exterior surfaces."
      }
    },
    {
      "@type": "Question",
      "name": "How often should you soft wash the exterior of your house in Columbus Ohio?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most homes in Columbus should be professionally power washed once a year to remove dirt, algae, and mold buildup caused by Ohio’s seasonal weather conditions."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between power washing and soft washing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Power washing uses high pressure to clean hard surfaces like concrete, while soft washing uses low pressure and specialized cleaning solutions to safely clean siding, roofs, and other delicate surfaces."
      }
    },
    {
      "@type": "Question",
      "name": "Can you power wash granite?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can power wash exterior granite."
      }
    },
    {
      "@type": "Question",
      "name": "Why is joint sanding important for pavers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Joint sanding helps stabilize the pavers, reduce weed growth, and prevent shifting over time."
      }
    },
    {
      "@type": "Question",
      "name": "Should pavers be sealed after cleaning?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sealing helps protect pavers from moisture, stains, fading, and wear while improving their overall appearance."
      }
    },
    {
      "@type": "Question",
      "name": "How often do pavers need maintenance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Paver patios should be inspected and maintained regularly to address settling, joint sand loss, staining, and surface wear."
      }
    },
    {
      "@type": "Question",
      "name": "How long does paver sealing last?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Paver sealing typically lasts 3-5 years depending on weather conditions, usage, and the type of sealer used."
      }
    },
    {
      "@type": "Question",
      "name": "What is joint sanding and why is it important?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Joint sanding fills the gaps between pavers to stabilize them, prevent shifting, and reduce weed growth and insect activity."
      }
    },
    {
      "@type": "Question",
      "name": "What is included in a maintenance plan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maintenance plans typically include scheduled cleanings, inspections, and preventative treatments to keep your property looking its best year-round."
      }
    },
    {
      "@type": "Question",
      "name": "How often should exterior cleaning maintenance be scheduled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most properties benefit from maintenance services once or twice per year, depending on exposure to dirt, algae, and weather conditions in Columbus, Ohio."
      }
    },
    {
      "@type": "Question",
      "name": "Do maintenance plans help prevent costly repairs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, regular maintenance helps prevent buildup, surface damage, and deterioration, reducing the need for more expensive restoration work."
      }
    },
    {
      "@type": "Question",
      "name": "Are maintenance plans customizable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, maintenance plans can be tailored to your specific property, surfaces, and cleaning needs to ensure long-lasting results."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer maintenance plans in Columbus Ohio and surrounding areas?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide customized maintenance plans for residential and commercial properties in Columbus, Dublin, Westerville, Hilliard, and surrounding areas."
      }
    },
    {
      "@type": "Question",
      "name": "Can graffiti be removed without damaging the surface?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, professional graffiti removal methods are designed to remove paint and markings while protecting the underlying surface as much as possible."
      }
    },
    {
      "@type": "Question",
      "name": "What surfaces can graffiti be removed from?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Graffiti can often be removed from brick, concrete, stone, metal, and other exterior surfaces depending on the type of coating and the age of the graffiti."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly should graffiti be removed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Graffiti should be removed as soon as possible to prevent it from setting into the surface and becoming more difficult to remove."
      }
    },
    {
      "@type": "Question",
      "name": "Is graffiti removal permanent?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most graffiti can be fully removed, but results depend on the surface type and how long the paint has been present."
      }
    },
    {
      "@type": "Question",
      "name": "Can rust stains be removed from concrete or siding?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, professional rust removal treatments can often reduce or fully remove rust stains from concrete, siding, and other exterior surfaces."
      }
    },
    {
      "@type": "Question",
      "name": "What causes rust stains on exterior surfaces?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rust stains are often caused by irrigation systems, metal furniture, batteries, fertilizer, or water with high iron content."
      }
    },
    {
      "@type": "Question",
      "name": "Are rust stains permanent?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most rust stains can be significantly reduced or removed, but results depend on how long the stain has been present and the type of surface."
      }
    },
    {
      "@type": "Question",
      "name": "Can pressure washing remove rust stains?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard pressure washing alone usually cannot remove rust stains. Specialized cleaning solutions are typically required for effective removal."
      }
    }
  ]
}
</script>

<!-- 8. BOTTOM CALL TO ACTION STRIP -->
<section class="section-final-cta">
	<div class="container final-cta-inner">
		<div class="final-cta-content">
			<h2>Ready for a Home that Looks Like Brand New?</h2>
			<p>Join over 1,200 satisfied homeowners in Columbus, Dublin, Powell, and Worthington. Upfront pricing, plant guarantee, and 5-star results.</p>
		</div>
		<div class="final-cta-actions">
			<a href="#quote-section" class="btn btn-accent btn-large">Get Instant Free Estimate</a>
			<a href="tel:6144259395" class="btn btn-outline-white btn-large">Call (614) 425-9395</a>
		</div>
	</div>
</section>

<!-- TRANSFORMATION & REVIEW FULL-VIEW LIGHTBOX MODAL -->
<div id="transformation-lightbox" class="lightbox-modal" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="lightbox-title">
	<div class="lightbox-backdrop" id="lightbox-backdrop"></div>
	<div class="lightbox-dialog" role="document">
		
		<button type="button" class="lightbox-close-btn" id="lightbox-close" aria-label="Close full view modal (Esc)">
			<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
		</button>

		<div class="lightbox-inner">
			<!-- Image Stage with Navigation -->
			<div class="lightbox-stage">
				<button type="button" class="lightbox-nav-btn nav-prev" id="lightbox-prev" aria-label="Previous transformation (Left Arrow)">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
				</button>
				
				<div class="lightbox-img-holder">
					<img id="lightbox-img" src="" alt="Transformation photo full view" class="lightbox-main-img">
					<span id="lightbox-location" class="lightbox-location-tag"></span>
				</div>

				<button type="button" class="lightbox-nav-btn nav-next" id="lightbox-next" aria-label="Next transformation (Right Arrow)">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
				</button>
			</div>

			<!-- Details & Quote Conversion Bar -->
			<div class="lightbox-info-bar">
				<div class="lightbox-text-col">
					<div class="lightbox-header-meta">
						<span id="lightbox-counter" class="lightbox-counter-pill">Project 1 of 6</span>
						<span id="lightbox-service" class="lightbox-service-pill">Concrete Cleaning</span>
						<span class="lightbox-verified-badge">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="#0284c7"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
							Verified Columbus Transformation
						</span>
					</div>
					<h3 id="lightbox-title" class="lightbox-title-text">Concrete Steps & Walkway Cleaning</h3>
					<p id="lightbox-desc" class="lightbox-desc-text">Deep extraction of black mold and slippery green algae on entryway steps, restoring bright clean concrete traction.</p>
				</div>
				
				<div class="lightbox-actions-col">
					<a href="#quote-section" id="lightbox-quote-action" class="btn btn-accent btn-lightbox-cta">
						<span>Get Free Quote for This Service</span>
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
					</a>
					<a href="sms:6144259395" class="btn btn-outline-white btn-lightbox-sms">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
						<span>Text Photos to (614) 425-9395</span>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>

<?php
get_footer();
