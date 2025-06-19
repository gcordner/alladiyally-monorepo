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

// Enqueue local fonts
add_action( 'wp_enqueue_scripts', function() {
	// Adjust the path if your theme folder name is different.
	$stylesheet_uri = get_stylesheet_directory_uri();

	wp_enqueue_style(
		'custom-fonts',
		$stylesheet_uri . '/assets/fonts/fonts.css',
		[], // No dependencies
		null // No versioning
	);
} );


// add_action( 'init', function () {
// 	delete_option( 'wp_global_styles_' . get_stylesheet() );
// } );
