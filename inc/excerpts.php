<?php
/**
 * Custom Excerpt Length
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

// Custom excerpt length
if ( ! function_exists('wpex_excerpt_more') ) {
	function wpex_custom_excerpt_length( $length ) {
		return 15;
	}
}
add_filter( 'excerpt_more', 'wpex_excerpt_more' );

// Custom excert "more"
if ( ! function_exists('wpex_excerpt_more') ) {
	function wpex_excerpt_more($more) {
		if ( get_theme_mod('wpex_blog_readmore') == '1' ) {
			return '&hellip;<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'. __('read more','pronto') .'<span>&rarr;</span></a>';
		} else {
			return '&hellip;';
		}
	}
}
add_filter( 'excerpt_length', 'wpex_custom_excerpt_length', 999 );