<?php
/**
 * Alladiyally functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Alladiyally
 * @since Alladiyally 1.0
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
			'Alladiyally-theme-style',
			$theme_uri . '/css/build/' . $css_file,
			[],
			filemtime($css_dir . $css_file)
		);
	}
}, 20 );




// add_action( 'init', function () {
// 	delete_option( 'wp_global_styles_' . get_stylesheet() );
// } );

// register_block_pattern(
//     'Alladiyally/posts-grid-2col',
//     [
//         'title'      => __( 'Grid of posts in two columns', 'Alladiyally' ),
//         'categories' => [ 'posts' ],
//         'content'    => file_get_contents( get_stylesheet_directory() . '/patterns/posts-grid-2col.php' ),
//     ]
// );

// Force enable navigation editor
add_action('after_setup_theme', function() {
    add_theme_support('wp-navigation-editor');
}, 11);

// Also ensure we have the necessary capabilities
add_action('init', function() {
    // Force navigation post type to be available in editor
    if (post_type_exists('wp_navigation')) {
        $post_type_object = get_post_type_object('wp_navigation');
        if ($post_type_object) {
            $post_type_object->show_in_rest = true;
            $post_type_object->show_ui = true;
        }
    }
});