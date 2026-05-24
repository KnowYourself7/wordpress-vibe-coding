<?php
/**
 * Shortcodes for KY Vibe Enhancements.
 *
 * @package KY_Vibe_Enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render a compact call-to-action shortcode.
 *
 * Usage:
 * [ky_vibe_cta title="Design-led WordPress upgrades" text="Keep WoodMart intact while adding custom sections." button_text="Start" button_url="/contact"]
 *
 * @param array $shortcode_attributes User-provided shortcode attributes.
 * @return string
 */
function ky_vibe_enhancements_render_cta_shortcode( $shortcode_attributes ) {
	$default_attributes = array(
		'title'       => __( 'Design-led WordPress upgrades', 'ky-vibe-enhancements' ),
		'text'        => __( 'Keep WoodMart intact while adding custom sections.', 'ky-vibe-enhancements' ),
		'button_text' => __( 'Start a project', 'ky-vibe-enhancements' ),
		'button_url'  => home_url( '/' ),
	);

	$resolved_attributes = shortcode_atts(
		$default_attributes,
		$shortcode_attributes,
		'ky_vibe_cta'
	);

	$cta_title       = sanitize_text_field( $resolved_attributes['title'] );
	$cta_text        = sanitize_text_field( $resolved_attributes['text'] );
	$cta_button_text = sanitize_text_field( $resolved_attributes['button_text'] );
	$cta_button_url  = esc_url( $resolved_attributes['button_url'] );

	ob_start();
	?>
	<section class="ky-vibe-section ky-vibe-cta">
		<div class="ky-vibe-cta-content">
			<h2><?php echo esc_html( $cta_title ); ?></h2>
			<p><?php echo esc_html( $cta_text ); ?></p>
		</div>
		<a class="ky-vibe-cta-link" href="<?php echo esc_url( $cta_button_url ); ?>">
			<?php echo esc_html( $cta_button_text ); ?>
		</a>
	</section>
	<?php

	return ob_get_clean();
}
add_shortcode( 'ky_vibe_cta', 'ky_vibe_enhancements_render_cta_shortcode' );

