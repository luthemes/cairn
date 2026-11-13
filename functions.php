<?php
/**
 * Cairn — block theme setup.
 *
 * @package   Cairn
 * @copyright Copyright (C) 2026. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 */

namespace Cairn;

add_action( 'after_setup_theme', function () {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	add_image_size( 'cairn-card', 640, 480, true );
} );

/**
 * Front-end stylesheet (theme.json handles the rest). Version follows the file's
 * modification time so edits bust the cache.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'cairn-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_theme_file_path( 'style.css' ) )
	);
} );
