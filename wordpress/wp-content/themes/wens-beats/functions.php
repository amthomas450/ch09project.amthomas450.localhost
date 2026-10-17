<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wens-beats
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wens_beats_styles() {
	wp_enqueue_style(
		'wens-beats-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'wens_beats_styles' );


function wens_beats_register_block_pattern_categories(){
    register_block_pattern_category(
        'wens-beats',
        array( 'label' => __( 'Theme Patterns', 'wens-beats' ) )
    );

}
add_action('init', 'wens_beats_register_block_pattern_categories');
