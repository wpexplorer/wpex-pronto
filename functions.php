<?php
/**
 * Pronto functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Theme info
function wpex_get_theme_info() {
	return array(
		'name'      => 'Pronto',
		'url'       => 'http://www.wpexplorer.com/pronto-wordpress-theme/',
		'changelog' => 'https://wpexplorer-updates.com/changelog/pronto/',
		'dir'       => get_template_directory_uri() .'/inc/',
	);
}

// Theme setup
function wpex_theme_setup() {

	// Global content width
	global $content_width;
	$content_width = 650;
	
	// Localization support
	load_theme_textdomain( 'pronto', get_template_directory() .'/languages' );

	// Register navigation menus
	register_nav_menus ( array(
		'main_menu' => __( 'Main', 'pronto' ),
	) );
		
	// Add theme support
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	// Entry Image Size
	$width  = get_theme_mod( 'wpex_entry_image_width' );
	$width  = $width ? $width : 400;
	$height = get_theme_mod( 'wpex_entry_image_height' );
	$height = $height ? $height : 340;
	$crop   = get_theme_mod( 'wpex_entry_image_crop' );
	$crop   = $crop ? $crop : true;
	$crop   = 'false' == $crop ? false : $crop;
	add_image_size( 'wpex-entry', $width, $height, $crop );

	// Post Image Size
	$width  = get_theme_mod( 'wpex_post_image_width' );
	$width  = $width ? $width : 1120;
	$height = get_theme_mod( 'wpex_post_image_height' );
	$height = $height ? $height : 600;
	$crop   = get_theme_mod( 'wpex_post_image_crop' );
	$crop   = $crop ? $crop : true;
	$crop   = 'false' == $crop ? false : $crop;
	add_image_size( 'wpex-post', $width, $height, $crop );

}
add_action( 'after_setup_theme', 'wpex_theme_setup' );

// Move comments around
function wpex_move_comment_form_fields( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'wpex_move_comment_form_fields' );

// Include main functions
$dir = get_template_directory();
require_once( $dir .'/inc/updates.php' );
require_once ( $dir .'/inc/theme-customizer.php' );
require_once( $dir .'/inc/helpers.php' );
require_once( $dir .'/inc/scripts.php' );
require_once( $dir .'/inc/widget-areas.php' );
require_once( $dir .'/inc/excerpts.php' );
if ( is_admin() ) {
	require_once( $dir .'/inc/welcome.php' );
	require_once( $dir .'/inc/dashboard-feed.php' );
} else {
	require_once( $dir .'/inc/accent-color.php' );
	require_once( $dir .'/inc/comments-callback.php' );
	require_once( $dir .'/inc/pagination.php' );
}