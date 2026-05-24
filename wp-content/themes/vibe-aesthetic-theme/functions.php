<?php
/**
 * Theme setup for Vibe Aesthetic Theme.
 *
 * @package Vibe_Aesthetic_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports.
 */
function vibe_aesthetic_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'vibe_aesthetic_theme_setup' );

/**
 * Register block pattern category.
 */
function vibe_aesthetic_theme_register_pattern_categories() {
	$pattern_category_properties = array(
		'label' => __( 'Vibe Sections', 'vibe-aesthetic-theme' ),
	);

	register_block_pattern_category( 'vibe-sections', $pattern_category_properties );
}
add_action( 'init', 'vibe_aesthetic_theme_register_pattern_categories' );

