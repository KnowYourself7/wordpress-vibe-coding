<?php
/**
 * GitHub release updater for KY Vibe Enhancements.
 *
 * @package KY_Vibe_Enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Provide update metadata to WordPress for this custom GitHub-hosted plugin.
 *
 * The hook name is derived from the plugin's `Update URI` hostname.
 *
 * @param false|object|array $update_data Existing update data.
 * @param array              $plugin_data Plugin header data.
 * @param string             $plugin_file Plugin file path relative to the plugins directory.
 * @return false|object|array
 */
function ky_vibe_enhancements_filter_github_update_data( $update_data, $plugin_data, $plugin_file ) {
	if ( 'ky-vibe-enhancements/ky-vibe-enhancements.php' !== $plugin_file ) {
		return $update_data;
	}

	$latest_release = ky_vibe_enhancements_get_latest_release( false );

	if ( empty( $latest_release['version'] ) || empty( $latest_release['download_url'] ) ) {
		return false;
	}

	if ( ! version_compare( $latest_release['version'], KY_VIBE_ENHANCEMENTS_VERSION, '>' ) ) {
		return false;
	}

	return (object) array(
		'id'            => 'https://github.com/' . KY_VIBE_ENHANCEMENTS_GITHUB_REPOSITORY,
		'slug'          => 'ky-vibe-enhancements',
		'plugin'        => $plugin_file,
		'new_version'   => $latest_release['version'],
		'url'           => 'https://github.com/' . KY_VIBE_ENHANCEMENTS_GITHUB_REPOSITORY . '/releases/latest',
		'package'       => $latest_release['download_url'],
		'requires'      => '6.5',
		'requires_php'  => '7.4',
		'tested'        => '6.8',
	);
}
add_filter( 'update_plugins_github.com', 'ky_vibe_enhancements_filter_github_update_data', 10, 3 );

/**
 * Clear cached release data when WordPress explicitly checks for plugin updates.
 *
 * @param object $transient Plugin update transient.
 * @return object
 */
function ky_vibe_enhancements_clear_release_cache_on_update_check( $transient ) {
	delete_transient( 'ky_vibe_enhancements_latest_release' );

	return $transient;
}
add_filter( 'pre_set_site_transient_update_plugins', 'ky_vibe_enhancements_clear_release_cache_on_update_check' );

/**
 * Fetch latest GitHub release metadata for this plugin.
 *
 * @param bool $allow_cached_release Whether cached release metadata can be used.
 * @return array{version:string,download_url:string}
 */
function ky_vibe_enhancements_get_latest_release( $allow_cached_release = true ) {
	$cached_release = $allow_cached_release ? get_transient( 'ky_vibe_enhancements_latest_release' ) : false;

	if ( is_array( $cached_release ) ) {
		return $cached_release;
	}

	$api_url = 'https://api.github.com/repos/' . KY_VIBE_ENHANCEMENTS_GITHUB_REPOSITORY . '/releases/latest';
	$response = wp_remote_get(
		$api_url,
		array(
			'headers' => array(
				'Accept'     => 'application/vnd.github+json',
				'User-Agent' => 'KY-Vibe-Enhancements/' . KY_VIBE_ENHANCEMENTS_VERSION,
			),
			'timeout' => 10,
		)
	);

	if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
		return array(
			'version'      => '',
			'download_url' => '',
		);
	}

	$release_data = json_decode( wp_remote_retrieve_body( $response ), true );

	if ( ! is_array( $release_data ) ) {
		return array(
			'version'      => '',
			'download_url' => '',
		);
	}

	$latest_release = array(
		'version'      => ky_vibe_enhancements_normalize_release_version( $release_data['tag_name'] ?? '' ),
		'download_url' => ky_vibe_enhancements_find_release_asset_url( $release_data['assets'] ?? array() ),
	);

	set_transient( 'ky_vibe_enhancements_latest_release', $latest_release, 10 * MINUTE_IN_SECONDS );

	return $latest_release;
}

/**
 * Normalize a GitHub release tag to a semantic version string.
 *
 * @param string $release_tag GitHub release tag.
 * @return string
 */
function ky_vibe_enhancements_normalize_release_version( $release_tag ) {
	return ltrim( sanitize_text_field( $release_tag ), 'vV' );
}

/**
 * Find the release asset URL for the plugin ZIP.
 *
 * @param array $release_assets GitHub release assets.
 * @return string
 */
function ky_vibe_enhancements_find_release_asset_url( $release_assets ) {
	if ( ! is_array( $release_assets ) ) {
		return '';
	}

	foreach ( $release_assets as $release_asset ) {
		if ( ! is_array( $release_asset ) ) {
			continue;
		}

		if ( KY_VIBE_ENHANCEMENTS_RELEASE_ASSET !== ( $release_asset['name'] ?? '' ) ) {
			continue;
		}

		return esc_url_raw( $release_asset['browser_download_url'] ?? '' );
	}

	return '';
}
