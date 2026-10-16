<?php
/**
 * The header template for Clear Water Prowash theme.
 *
 * @package ClearWaterProwash
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="theme-color" content="#0284c7">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link sr-only" href="#main-content">
	<?php esc_html_e( 'Skip to content', 'clearwater-prowash' ); ?>
</a>

<!-- TOP ANNOUNCEMENT BAR -->
<div class="top-announcement-bar" role="region" aria-label="<?php esc_attr_e( 'Company Highlights', 'clearwater-prowash' ); ?>">
	<div class="container announcement-inner">
		<div class="announcement-badges">
			<span class="announcement-rating">
				<svg class="icon-star" width="14" height="14" viewBox="0 0 24 24" fill="#f59e0b" aria-hidden="true"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
				<strong>Top Rated Power Washer</strong> • 180+ Reviews
			</span>
			<span class="announcement-separator" aria-hidden="true">•</span>
			<a href="#service-areas" class="announcement-area-link" aria-label="<?php esc_attr_e( 'Service Area: Greater Columbus & 21 Suburbs', 'clearwater-prowash' ); ?>">
				<svg class="icon-pin" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#38bdf8" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
				<span>Service Area: <strong>Columbus &amp; 21 Suburbs</strong></span>
			</a>
			<span class="announcement-separator" aria-hidden="true">•</span>
			<span class="announcement-insured">
				<svg class="icon-shield" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
				Fully Licensed &amp; Insured
			</span>
			<span class="announcement-separator" aria-hidden="true">•</span>
			<span class="announcement-hours">
				<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
				8 AM – 7 PM Mon–Sat
			</span>
		</div>
		<div class="announcement-contact">
			<a href="tel:6144259395" class="announcement-phone-link" aria-label="<?php esc_attr_e( 'Call or text us at 614-425-9395', 'clearwater-prowash' ); ?>">
				<span class="pulse-dot" aria-hidden="true"></span>
				<span>Call or Text: <strong>(614) 425-9395</strong></span>
			</a>
		</div>
	</div>
</div>

<!-- MAIN SITE HEADER -->
<header id="masthead" class="site-header" role="banner">
	<div class="container header-container">
		
		<!-- BRAND / LOGO -->
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home">
				<div class="logo-mark">
					<div class="logo-icon-wrap" aria-hidden="true">
						<svg class="water-splash-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="24" cy="24" r="22" fill="#e0f2fe"/>
							<path d="M24 8C24 8 14 20 14 27C14 32.5228 18.4772 37 24 37C29.5228 37 34 32.5228 34 27C34 20 24 8 24 8Z" fill="#0284c7"/>
							<path d="M24 13C24 13 17 22 17 27C17 30.866 20.134 34 24 34C27.866 34 31 30.866 31 27C31 22 24 13 24 13Z" fill="#38bdf8"/>
							<circle cx="20" cy="22" r="2.5" fill="#ffffff" fill-opacity="0.9"/>
							<circle cx="10" cy="19" r="2" fill="#0284c7"/>
							<circle cx="38" cy="19" r="2" fill="#0284c7"/>
							<circle cx="36" cy="31" r="2.5" fill="#38bdf8"/>
							<circle cx="12" cy="31" r="2.5" fill="#38bdf8"/>
						</svg>
					</div>
					<div class="logo-text">
						<span class="logo-name">Clear Water</span>
						<span class="logo-sub"><span class="highlight">PRO</span>WASH</span>
					</div>
				</div>
				<span class="sr-only">Clear Water Prowash - Home</span>
			</a>
		</div>

		<!-- DESKTOP NAVIGATION -->
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'clearwater-prowash' ); ?>">
			<ul class="nav-menu">
				<li class="nav-item-dropdown">
					<button type="button" class="nav-link dropdown-toggle" id="services-menu-btn" aria-haspopup="true" aria-expanded="false">
						<span>Services</span>
						<svg class="dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="services-dropdown" aria-labelledby="services-menu-btn">
						<div class="services-dropdown-grid">
							
							<!-- Residential Services Column -->
							<div class="dropdown-category">
								<div class="dropdown-category-title">
									<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
									<span>Residential Services</span>
								</div>
								<ul class="dropdown-links">
									<li><a href="#service-house-washing"><span class="d-title">House Washing</span><span class="d-desc">Gentle soft wash for vinyl, brick, stucco</span></a></li>
									<li><a href="#service-roof-cleaning"><span class="d-title">Roof Cleaning</span><span class="d-desc">Non-pressure soft wash treatment</span></a></li>
									<li><a href="#service-stone-paver"><span class="d-title">Stone Paver Patio Care</span><span class="d-desc">Cleaning, sealing, repair &amp; maintenance</span></a></li>
									<li><a href="#service-residential-concrete"><span class="d-title">Residential Concrete Cleaning</span><span class="d-desc">Driveways, patios, walkways, pool decks</span></a></li>
									<li><a href="#service-deck-fence-dock"><span class="d-title">Deck, Fence &amp; Boat Dock Cleaning</span><span class="d-desc">Wood, vinyl, and composites</span></a></li>
									<li><a href="#service-rust-graffiti"><span class="d-title">Rust &amp; Graffiti Removal</span><span class="d-desc">Specialty stain restoration</span></a></li>
									<li><a href="#service-gutter-brightening"><span class="d-title">Gutter Cleaning &amp; Brightening</span><span class="d-desc">Downspout clearing &amp; oxidation</span></a></li>
								</ul>
							</div>

							<!-- Commercial Services Column -->
							<div class="dropdown-category">
								<div class="dropdown-category-title">
									<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
									<span>Commercial Services (B2B)</span>
								</div>
								<ul class="dropdown-links">
									<li><a href="#service-commercial-building"><span class="d-title">Commercial Exterior Building Cleaning</span><span class="d-desc">Storefronts &amp; facilities</span></a></li>
									<li><a href="#service-commercial-concrete"><span class="d-title">Commercial Concrete Power Washing</span><span class="d-desc">High-traffic walkways &amp; dumpster pads</span></a></li>
									<li><a href="#service-condo-apartment"><span class="d-title">Condo &amp; Apartment Buildings</span><span class="d-desc">HOAs &amp; multi-family complexes</span></a></li>
									<li><a href="#service-banking-financial"><span class="d-title">Banking &amp; Financial Institutions</span><span class="d-desc">Drive-thrus &amp; ATM surrounds</span></a></li>
									<li><a href="#service-schools-universities"><span class="d-title">Schools &amp; Universities</span><span class="d-desc">Campus facilities &amp; courtyards</span></a></li>
									<li><a href="#service-church-power-washing"><span class="d-title">Church Power Washing</span><span class="d-desc">Sanctuaries, steeples &amp; masonry</span></a></li>
								</ul>
							</div>

						</div>
						<div class="dropdown-bottom-bar">
							<span>Looking for a bundled price? Check out our <a href="#services">Full Exterior Package</a></span>
							<a href="#quote-section" class="dropdown-cta-link">Instant Estimate &rarr;</a>
						</div>
					</div>
				</li>
				<li class="nav-item-dropdown nav-item-areas">
					<button type="button" class="nav-link dropdown-toggle" id="areas-menu-btn" aria-haspopup="true" aria-expanded="false">
						<span>Service Areas</span>
						<svg class="dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</button>
					<div class="areas-dropdown" aria-labelledby="areas-menu-btn">
						<div class="areas-dropdown-header">
							<div class="areas-header-badge">
								<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
								<span>Central Ohio Coverage</span>
							</div>
							<h4 class="areas-header-title">Proudly Serving 21 Greater Columbus Communities</h4>
							<p class="areas-header-subtitle">Zero travel surcharges • Prompt same-week scheduling for residential &amp; commercial</p>
						</div>

						<div class="areas-dropdown-grid">
							<div class="areas-col">
								<ul class="areas-col-list">
									<li><a href="#area-columbus"><span class="city-name">Columbus, OH</span><span class="city-badge">Franklin Co.</span></a></li>
									<li><a href="#area-westerville"><span class="city-name">Westerville, OH</span><span class="city-badge">North Metro</span></a></li>
									<li><a href="#area-powell"><span class="city-name">Powell, OH</span><span class="city-badge">Delaware Co.</span></a></li>
									<li><a href="#area-worthington"><span class="city-name">Worthington, OH</span><span class="city-badge">North Metro</span></a></li>
									<li><a href="#area-dublin"><span class="city-name">Dublin, OH</span><span class="city-badge">Northwest</span></a></li>
									<li><a href="#area-delaware"><span class="city-name">Delaware, OH</span><span class="city-badge">Delaware Co.</span></a></li>
									<li><a href="#area-lewis-center"><span class="city-name">Lewis Center, OH</span><span class="city-badge">Polaris Area</span></a></li>
								</ul>
							</div>
							<div class="areas-col">
								<ul class="areas-col-list">
									<li><a href="#area-upper-arlington"><span class="city-name">Upper Arlington, OH</span><span class="city-badge">West Central</span></a></li>
									<li><a href="#area-new-albany"><span class="city-name">New Albany, OH</span><span class="city-badge">Northeast</span></a></li>
									<li><a href="#area-jerome-village"><span class="city-name">Jerome Village, OH</span><span class="city-badge">Union Co.</span></a></li>
									<li><a href="#area-plain-city"><span class="city-name">Plain City, OH</span><span class="city-badge">Northwest</span></a></li>
									<li><a href="#area-grove-city"><span class="city-name">Grove City, OH</span><span class="city-badge">Southwest</span></a></li>
									<li><a href="#area-bexley"><span class="city-name">Bexley, OH</span><span class="city-badge">East Central</span></a></li>
									<li><a href="#area-blacklick"><span class="city-name">Blacklick, OH</span><span class="city-badge">East Metro</span></a></li>
								</ul>
							</div>
							<div class="areas-col">
								<ul class="areas-col-list">
									<li><a href="#area-reynoldsburg"><span class="city-name">Reynoldsburg, OH</span><span class="city-badge">East Metro</span></a></li>
									<li><a href="#area-gahanna"><span class="city-name">Gahanna, OH</span><span class="city-badge">Northeast</span></a></li>
									<li><a href="#area-pickerington"><span class="city-name">Pickerington, OH</span><span class="city-badge">Southeast</span></a></li>
									<li><a href="#area-hilliard"><span class="city-name">Hilliard, OH</span><span class="city-badge">West Metro</span></a></li>
									<li><a href="#area-galloway"><span class="city-name">Galloway, OH</span><span class="city-badge">West Metro</span></a></li>
									<li><a href="#area-sunbury"><span class="city-name">Sunbury, OH</span><span class="city-badge">Delaware Co.</span></a></li>
									<li><a href="#area-galena"><span class="city-name">Galena, OH</span><span class="city-badge">Delaware Co.</span></a></li>
								</ul>
							</div>
						</div>

						<div class="areas-dropdown-footer">
							<div class="areas-footer-info">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<span>Don't see your town? If you're in Central Ohio, we clean it!</span>
							</div>
							<a href="#service-areas" class="areas-footer-cta">
								<span>View Full Coverage Section</span>
								<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
							</a>
						</div>
					</div>
				</li>
				<li><a href="#before-after" class="nav-link"><?php esc_html_e( 'Before & After', 'clearwater-prowash' ); ?></a></li>
				<li><a href="#why-us" class="nav-link"><?php esc_html_e( 'Why Us', 'clearwater-prowash' ); ?></a></li>
				<li><a href="#reviews" class="nav-link"><?php esc_html_e( 'Reviews', 'clearwater-prowash' ); ?></a></li>
				<li><a href="#faq" class="nav-link"><?php esc_html_e( 'FAQ', 'clearwater-prowash' ); ?></a></li>
				<li><a href="#quote-section" class="nav-link"><?php esc_html_e( 'Contact', 'clearwater-prowash' ); ?></a></li>
			</ul>
		</nav>

		<!-- HEADER ACTIONS -->
		<div class="header-actions">
			<a href="tel:6144259395" class="btn btn-call-header" aria-label="<?php esc_attr_e( 'Call 614-425-9395', 'clearwater-prowash' ); ?>">
				<svg class="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
				</svg>
				<span class="phone-text">
					<span class="phone-label">Direct Line</span>
					<span class="phone-number">(614) 425-9395</span>
				</span>
			</a>
			
			<a href="#quote-section" class="btn btn-primary btn-quote-header">
				<span>Get Free Quote</span>
				<svg class="btn-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
			</a>

			<!-- MOBILE MENU TOGGLE -->
			<button id="mobile-menu-toggle" class="mobile-toggle" aria-controls="mobile-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Navigation Menu', 'clearwater-prowash' ); ?>">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>

	</div>
</header>

<!-- MOBILE NAVIGATION DRAWER -->
<div id="mobile-navigation" class="mobile-nav-drawer" aria-hidden="true">
	<div class="mobile-nav-inner">
		
		<div class="mobile-drawer-header">
			<span class="drawer-header-title">Menu &amp; Services</span>
			<button type="button" id="mobile-drawer-close-btn" class="mobile-drawer-close" aria-label="<?php esc_attr_e( 'Close Navigation Menu', 'clearwater-prowash' ); ?>">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
			</button>
		</div>

		<ul class="mobile-menu-list">
			<li class="mobile-cat-header">Residential Services</li>
			<li><a href="#service-house-washing" class="mobile-nav-link sub-link">House Washing (Soft Wash)</a></li>
			<li><a href="#service-roof-cleaning" class="mobile-nav-link sub-link">Roof Cleaning (Non-Pressure)</a></li>
			<li><a href="#service-stone-paver" class="mobile-nav-link sub-link">Stone Paver Patio Care</a></li>
			<li><a href="#service-residential-concrete" class="mobile-nav-link sub-link">Residential Concrete Cleaning</a></li>
			<li><a href="#service-deck-fence-dock" class="mobile-nav-link sub-link">Deck, Fence &amp; Boat Dock Cleaning</a></li>
			<li><a href="#service-rust-graffiti" class="mobile-nav-link sub-link">Rust &amp; Graffiti Removal</a></li>
			<li><a href="#service-gutter-brightening" class="mobile-nav-link sub-link">Gutter Cleaning &amp; Brightening</a></li>
			
			<li class="mobile-cat-header">Commercial Services (B2B)</li>
			<li><a href="#service-commercial-building" class="mobile-nav-link sub-link">Commercial Building Cleaning</a></li>
			<li><a href="#service-commercial-concrete" class="mobile-nav-link sub-link">Commercial Concrete Power Washing</a></li>
			<li><a href="#service-condo-apartment" class="mobile-nav-link sub-link">Condo &amp; Apartment Buildings (HOAs)</a></li>
			<li><a href="#service-banking-financial" class="mobile-nav-link sub-link">Banking &amp; Financial Institutions</a></li>
			<li><a href="#service-schools-universities" class="mobile-nav-link sub-link">Schools &amp; Universities</a></li>
			<li><a href="#service-church-power-washing" class="mobile-nav-link sub-link">Church Power Washing</a></li>
			
			<li class="mobile-cat-header">Company &amp; Proof</li>
			<li><a href="#before-after" class="mobile-nav-link">Before &amp; After Proof</a></li>
			<li><a href="#why-us" class="mobile-nav-link">Why Clear Water Prowash</a></li>
			<li><a href="#reviews" class="mobile-nav-link">Customer Reviews (5.0 ★)</a></li>
			<li>
				<a href="#service-areas" class="mobile-nav-link mobile-service-area-highlight">
					<span class="mobile-area-text">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						<strong>21 Central Ohio Service Areas</strong>
					</span>
					<span class="mobile-area-badge">Zero Travel Fees</span>
				</a>
			</li>
			<li><a href="#faq" class="mobile-nav-link">Exterior Cleaning FAQ</a></li>
			<li><a href="#quote-section" class="mobile-nav-link">Instant Free Estimate</a></li>
		</ul>

		<div class="mobile-nav-actions">
			<a href="tel:6144259395" class="btn btn-call-mobile">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<span>Call (614) 425-9395</span>
			</a>
			<a href="sms:6144259395" class="btn btn-sms-mobile">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
				<span>Text Photos for Fast Quote</span>
			</a>
			<a href="#quote-section" class="btn btn-primary btn-quote-mobile">
				<span>Instant Estimate Form</span>
			</a>
		</div>

		<div class="mobile-nav-footer">
			<p>Columbus, OH • Fully Licensed &amp; Insured (General Liability &amp; Workers' Comp)</p>
			<p style="margin-top: 4px; font-size: 0.75rem; opacity: 0.85;">8 AM – 7 PM Mon–Sat • Call or Text (614) 425-9395</p>
		</div>
	</div>
</div>

<main id="main-content" class="site-main" role="main">
