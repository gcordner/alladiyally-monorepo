<?php
/**
 * Ultraholic functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Ultraholic
 * @since Ultraholic 1.0
 */
// Enable block styles (required for theme.json support).
add_action( 'after_setup_theme', function() {
	add_theme_support( 'wp-block-styles' );
} );

add_action( 'wp_enqueue_scripts', function () {
	$theme_dir = get_stylesheet_directory();
	$theme_uri = get_stylesheet_directory_uri();
	$css_dir   = $theme_dir . '/css/build/';

	$css_file = null;

	foreach (glob($css_dir . 'theme.min.*.css') as $file) {
		$css_file = basename($file);
		break; // take the first match
	}

	if ( $css_file ) {
		wp_enqueue_style(
			'ultraholic-theme-style',
			$theme_uri . '/css/build/' . $css_file,
			[],
			filemtime($css_dir . $css_file)
		);
	}
}, 20 );




// add_action( 'init', function () {
// 	delete_option( 'wp_global_styles_' . get_stylesheet() );
// } );
