<?php
/**
 * Accent Color
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.3
 */

function wpex_accent_color() {

	$accent_css = '';
	$accent_color = esc_html( get_theme_mod( 'wpex_accent_color' ) );

	if ( $accent_color ) {

		// Colors
		$accent_css .= 'a,.logo a:hover,.loop-entry h2 a:hover{color:'. $accent_color .'}';

		// Backgrounds
		$accent_css .= '.tagcloud a,#toggle-btn {background-color:'. $accent_color .'}';

	}

	if ( $accent_css ) {
		wp_add_inline_style( apply_filters( 'wpex_style_handle', 'style' ), $accent_css );
	}
}
add_action( 'wp_enqueue_scripts', 'wpex_accent_color' );