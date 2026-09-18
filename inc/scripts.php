<?php
/**
 * This file loads custom css and js for our theme
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

function wpex_load_scripts() {

	$dir     = get_template_directory_uri();
	$version = wp_get_theme( get_template() )->get( 'Version' );

	// CSS
	wp_enqueue_style( 'raleway', $dir . '/css/raleway.css', array(), $version );
	wp_enqueue_style( 'font-awesome', $dir . '/css/font-awesome.min.css', array(), '4.6.1' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'raleway', 'font-awesome' ), $version );

	// JS
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'wpex-masonry', $dir . '/js/masonry.pkgd.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wpex-global', $dir . '/js/global.js', array( 'jquery', 'wpex-masonry' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpex_load_scripts' );
