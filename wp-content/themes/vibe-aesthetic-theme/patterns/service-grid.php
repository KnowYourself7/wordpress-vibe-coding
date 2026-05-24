<?php
/**
 * Title: Service grid
 * Slug: vibe-aesthetic-theme/service-grid
 * Categories: vibe-sections
 * Description: A three-column section for core services or content pillars.
 *
 * @package Vibe_Aesthetic_Theme
 */
?>

<!-- wp:group {"metadata":{"name":"Service grid"},"anchor":"services","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|40","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div id="services" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">A practical first set of sections</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Design system</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Colors, typography, spacing, and reusable section patterns live inside the theme.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Editable pages</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Pages remain Gutenberg-editable, so content changes do not require code changes.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Safe deployment</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>GitHub and Hostinger staging keep production protected while the site evolves.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

