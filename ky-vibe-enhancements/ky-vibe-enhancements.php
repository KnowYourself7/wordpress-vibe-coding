<?php
/**
 * Plugin Name: KY Vibe Enhancements
 * Plugin URI: https://github.com/KnowYourself7/wordpress-vibe-coding
 * Description: Adds Gutenberg patterns, shortcodes, and front-end enhancements for a WoodMart Child site without replacing the active theme.
 * Version: 0.1.3
 * Author: Kai and Codex
 * Text Domain: ky-vibe-enhancements
 * Update URI: https://github.com/KnowYourself7/wordpress-vibe-coding
 * Requires at least: 6.5
 * Requires PHP: 7.4
 *
 * @package KY_Vibe_Enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KY_VIBE_ENHANCEMENTS_VERSION', '0.1.3' );
define( 'KY_VIBE_ENHANCEMENTS_GITHUB_REPOSITORY', 'KnowYourself7/wordpress-vibe-coding' );
define( 'KY_VIBE_ENHANCEMENTS_RELEASE_ASSET', 'ky-vibe-enhancements.zip' );
define( 'KY_VIBE_ENHANCEMENTS_PLUGIN_FILE', __FILE__ );
define( 'KY_VIBE_ENHANCEMENTS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'KY_VIBE_ENHANCEMENTS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once KY_VIBE_ENHANCEMENTS_PLUGIN_DIR . 'includes/patterns.php';
require_once KY_VIBE_ENHANCEMENTS_PLUGIN_DIR . 'includes/shortcodes.php';
require_once KY_VIBE_ENHANCEMENTS_PLUGIN_DIR . 'includes/assets.php';
require_once KY_VIBE_ENHANCEMENTS_PLUGIN_DIR . 'includes/updater.php';
