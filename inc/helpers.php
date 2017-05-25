<?php
/**
 * Helper functions
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.2
 */

/**
 * Returns escaped post title
 *
 * @since 1.2
 */
function wpex_get_esc_title() {
	return esc_attr( the_title_attribute( 'echo=0' ) );
}

/**
 * Outputs escaped post title
 *
 * @since 1.2
 */
function wpex_esc_title() {
	echo wpex_get_esc_title();
}

/**
 * Image cropping locations
 *
 * @since 1.2
 */
function wpex_image_crop_locations() {
	return array(
		' '             => esc_html__( 'Default', 'pronto' ),
		'false'         => esc_html__( 'False', 'pronto' ),
		'left-top'      => esc_html__( 'Top Left', 'pronto' ),
		'right-top'     => esc_html__( 'Top Right', 'pronto' ),
		'center-top'    => esc_html__( 'Top Center', 'pronto' ),
		'left-center'   => esc_html__( 'Center Left', 'pronto' ),
		'right-center'  => esc_html__( 'Center Right', 'pronto' ),
		'center-center' => esc_html__( 'Center Center', 'pronto' ),
		'left-bottom'   => esc_html__( 'Bottom Left', 'pronto' ),
		'right-bottom'  => esc_html__( 'Bottom Right', 'pronto' ),
		'center-bottom' => esc_html__( 'Bottom Center', 'pronto' ),
	);
}