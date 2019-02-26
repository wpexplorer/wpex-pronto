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
	
	// CSS
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'raleway-google-font', 'http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700', 'style' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', true );
	

	// JS
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'wpex-masonry', get_template_directory_uri().'/js/masonry.pkgd.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'wpex-global', get_template_directory_uri().'/js/global.js', array( 'jquery', 'wpex-masonry' ), '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'wpex_load_scripts' );