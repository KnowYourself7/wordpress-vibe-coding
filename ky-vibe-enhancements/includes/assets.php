<?php
/**
 * Asset loading for KY Vibe Enhancements.
 *
 * @package KY_Vibe_Enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue shared block styles in both the front end and block editor.
 */
function ky_vibe_enhancements_enqueue_block_assets() {
	wp_enqueue_style(
		'ky-vibe-enhancements',
		KY_VIBE_ENHANCEMENTS_PLUGIN_URL . 'assets/css/frontend.css',
		array(),
		KY_VIBE_ENHANCEMENTS_VERSION
	);
}
add_action( 'enqueue_block_assets', 'ky_vibe_enhancements_enqueue_block_assets' );

/**
 * Enqueue editor styles for Gutenberg previews.
 */
function ky_vibe_enhancements_enqueue_editor_assets() {
	wp_enqueue_style(
		'ky-vibe-enhancements-editor',
		KY_VIBE_ENHANCEMENTS_PLUGIN_URL . 'assets/css/editor.css',
		array(),
		KY_VIBE_ENHANCEMENTS_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'ky_vibe_enhancements_enqueue_editor_assets' );
