<?php
/**
 * Gutenberg pattern registration for KY Vibe Enhancements.
 *
 * @package KY_Vibe_Enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Gutenberg pattern category and starter patterns.
 */
function ky_vibe_enhancements_register_patterns() {
	if ( ! function_exists( 'register_block_pattern' ) || ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	register_block_pattern_category(
		'ky-vibe-sections',
		array(
			'label' => __( 'KY Vibe Sections', 'ky-vibe-enhancements' ),
		)
	);

	register_block_pattern(
		'ky-vibe-enhancements/editorial-hero',
		array(
			'title'       => __( 'Editorial Hero', 'ky-vibe-enhancements' ),
			'description' => __( 'A refined hero section that can be inserted into Gutenberg pages while WoodMart remains active.', 'ky-vibe-enhancements' ),
			'categories'  => array( 'ky-vibe-sections' ),
			'content'     => ky_vibe_enhancements_get_editorial_hero_pattern(),
		)
	);

	register_block_pattern(
		'ky-vibe-enhancements/service-grid',
		array(
			'title'       => __( 'Service Grid', 'ky-vibe-enhancements' ),
			'description' => __( 'A three-column service section scoped with plugin classes.', 'ky-vibe-enhancements' ),
			'categories'  => array( 'ky-vibe-sections' ),
			'content'     => ky_vibe_enhancements_get_service_grid_pattern(),
		)
	);

	register_block_pattern(
		'ky-vibe-enhancements/why-teslamigo',
		array(
			'title'       => __( 'Why Teslamigo', 'ky-vibe-enhancements' ),
			'description' => __( 'A premium feature section for explaining the Teslamigo brand promise.', 'ky-vibe-enhancements' ),
			'categories'  => array( 'ky-vibe-sections' ),
			'content'     => ky_vibe_enhancements_get_why_teslamigo_pattern(),
		)
	);
}
add_action( 'init', 'ky_vibe_enhancements_register_patterns' );

/**
 * Return the editorial hero block pattern markup.
 *
 * @return string
 */
function ky_vibe_enhancements_get_editorial_hero_pattern() {
	return '<!-- wp:group {"className":"ky-vibe-section ky-vibe-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group ky-vibe-section ky-vibe-hero">
	<!-- wp:paragraph {"className":"ky-vibe-eyebrow"} -->
	<p class="ky-vibe-eyebrow">Gutenberg section</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"className":"ky-vibe-hero-title"} -->
	<h1 class="wp-block-heading ky-vibe-hero-title">A refined section system layered safely on top of WoodMart.</h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"ky-vibe-hero-copy"} -->
	<p class="ky-vibe-hero-copy">Keep your existing theme settings intact while adding custom, reusable visual sections.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"ky-vibe-button"} -->
		<div class="wp-block-button ky-vibe-button"><a class="wp-block-button__link wp-element-button" href="#ky-vibe-services">Explore sections</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->';
}

/**
 * Return the service grid block pattern markup.
 *
 * @return string
 */
function ky_vibe_enhancements_get_service_grid_pattern() {
	return '<!-- wp:group {"anchor":"ky-vibe-services","className":"ky-vibe-section ky-vibe-services","layout":{"type":"constrained"}} -->
<div id="ky-vibe-services" class="wp-block-group ky-vibe-section ky-vibe-services">
	<!-- wp:heading {"className":"ky-vibe-section-title"} -->
	<h2 class="wp-block-heading ky-vibe-section-title">Plugin-first enhancements</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"className":"ky-vibe-card-grid"} -->
	<div class="wp-block-columns ky-vibe-card-grid">
		<!-- wp:column {"className":"ky-vibe-card"} -->
		<div class="wp-block-column ky-vibe-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Patterns</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Reusable Gutenberg sections for pages that need a stronger visual rhythm.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"ky-vibe-card"} -->
		<div class="wp-block-column ky-vibe-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Shortcodes</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Embeddable modules for WoodMart layouts, Elementor areas, or classic content fields.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"ky-vibe-card"} -->
		<div class="wp-block-column ky-vibe-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Scoped CSS</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Styles are isolated under plugin classes so WoodMart settings stay in control.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->';
}

/**
 * Return the Why Teslamigo feature section block pattern markup.
 *
 * @return string
 */
function ky_vibe_enhancements_get_why_teslamigo_pattern() {
	return '<!-- wp:group {"className":"teslamigo-why","layout":{"type":"default"}} -->
<div class="wp-block-group teslamigo-why">
	<!-- wp:group {"className":"teslamigo-why__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group teslamigo-why__inner">
		<!-- wp:group {"className":"teslamigo-why__header","layout":{"type":"default"}} -->
		<div class="wp-block-group teslamigo-why__header">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"teslamigo-why__eyebrow"} -->
				<p class="teslamigo-why__eyebrow">Why Teslamigo</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"teslamigo-why__title"} -->
				<h2 class="wp-block-heading teslamigo-why__title">Made for the way Tesla owners actually live.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"teslamigo-why__intro","layout":{"type":"default"}} -->
			<div class="wp-block-group teslamigo-why__intro">
				<!-- wp:heading {"level":3,"className":"teslamigo-why__subtitle"} -->
				<h3 class="wp-block-heading teslamigo-why__subtitle">Real-life Tesla scenarios, not random accessories.</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Most accessory stores sell by product category. Teslamigo builds around real-life Tesla scenarios. From camping comfort to pet travel, cabin organization, privacy, and everyday convenience, every product is selected or designed to solve a specific owner problem with clean fitment, useful function, and a premium in-car experience.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"className":"teslamigo-why__actions"} -->
				<div class="wp-block-buttons teslamigo-why__actions">
					<!-- wp:button {"className":"teslamigo-why__button teslamigo-why__button--primary"} -->
					<div class="wp-block-button teslamigo-why__button teslamigo-why__button--primary"><a class="wp-block-button__link wp-element-button" href="#">Shop now</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"teslamigo-why__button teslamigo-why__button--secondary"} -->
					<div class="wp-block-button teslamigo-why__button teslamigo-why__button--secondary"><a class="wp-block-button__link wp-element-button" href="#">View more</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"teslamigo-why__grid","layout":{"type":"default"}} -->
		<div class="wp-block-group teslamigo-why__grid">
			<!-- wp:group {"className":"teslamigo-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group teslamigo-feature-card">
				<!-- wp:paragraph {"className":"teslamigo-feature-card__number"} -->
				<p class="teslamigo-feature-card__number">01</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Made for Real Scenarios</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Accessories built for camping, road trips, pet travel, storage, privacy, and everyday comfort.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"teslamigo-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group teslamigo-feature-card">
				<!-- wp:paragraph {"className":"teslamigo-feature-card__number"} -->
				<p class="teslamigo-feature-card__number">02</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Less DIY. More Ready.</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Simple setups that help your Tesla feel more comfortable, organized, and adventure-ready.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"teslamigo-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group teslamigo-feature-card">
				<!-- wp:paragraph {"className":"teslamigo-feature-card__number"} -->
				<p class="teslamigo-feature-card__number">03</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Tesla-Fit First</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Clean, practical products designed to match your Tesla’s space, shape, and lifestyle.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"teslamigo-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group teslamigo-feature-card">
				<!-- wp:paragraph {"className":"teslamigo-feature-card__number"} -->
				<p class="teslamigo-feature-card__number">04</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Useful, Not Random</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Every product has a job: solve a real problem, improve the experience, and earn its place in your car.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->';
}
