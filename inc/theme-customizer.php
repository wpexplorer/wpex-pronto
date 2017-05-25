<?php
/**
 * Theme Customizer settings
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

function wpex_customizer_general( $wp_customize ) {

	// Add Section
	$wp_customize->add_section( 'wpex_general' , array(
		'title'      => __( 'Theme Settings', 'pronto' ),
		'priority'   => 240,
	) );

	// Color
	$wp_customize->add_setting( 'wpex_accent_color', array(
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
 
	$wp_customize->add_control( 'wpex_accent_color', array(
		'label'    => __( 'Accent Color', 'pronto' ),
		'section'  => 'wpex_general',
		'type'     => 'color',
		'settings' => 'wpex_accent_color',
	) );

	// Logo Image
	$wp_customize->add_setting( 'wpex_logo', array(
		'type'              => 'theme_mod',
		'sanitize_callback' => 'esc_url',
	) );
 
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpex_logo', array(
		'label'    => __( 'Image Logo', 'pronto' ),
		'section'  => 'wpex_general',
		'settings' => 'wpex_logo',
	) ) );
	
	// Enable/Disable Readmore
	$wp_customize->add_setting( 'wpex_blog_readmore', array(
		'type'              => 'theme_mod',
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_blog_readmore', array(
		'label'    => __( 'Read More Link', 'pronto' ),
		'section'  => 'wpex_general',
		'settings' => 'wpex_blog_readmore',
		'type'     => 'checkbox',
	) );

	// Enable/Disable Featured Images on Entries
	$wp_customize->add_setting( 'wpex_blog_entry_thumb', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_blog_entry_thumb', array(
		'label' => __( 'Featured Image on Entries', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_blog_entry_thumb',
		'type' => 'checkbox',
	) );

	// Enable/Disable Featured Images on Posts
	$wp_customize->add_setting( 'wpex_blog_post_thumb', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_blog_post_thumb', array(
		'label' => __( 'Featured Image on Posts', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_blog_post_thumb',
		'type' => 'checkbox',
	) );

	// Enable/Disable Date Display
	$wp_customize->add_setting( 'wpex_post_date', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_post_date', array(
		'label' => __( 'Display Post Publish Date', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_post_date',
		'type' => 'checkbox',
	) );

	// Enable/Disable Category Display
	$wp_customize->add_setting( 'wpex_post_category', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_post_category', array(
		'label' => __( 'Display Post Category', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_post_category',
		'type' => 'checkbox',
	) );

	// Enable/Disable Author Display
	$wp_customize->add_setting( 'wpex_post_author', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_post_author', array(
		'label' => __( 'Display Post Author', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_post_author',
		'type' => 'checkbox',
	) );

	// Enable/Disable Comments Display
	$wp_customize->add_setting( 'wpex_post_comment_count', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_post_comment_count', array(
		'label' => __( 'Display Post Comment Count', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_post_comment_count',
		'type' => 'checkbox',
	) );

	// Enable/Disable Tags Images on Posts
	$wp_customize->add_setting( 'wpex_blog_tags', array(
		'type' => 'theme_mod',
		'default'	=> true,
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'wpex_blog_tags', array(
		'label' => __( 'Tags on Posts', 'pronto' ),
		'section' => 'wpex_general',
		'settings' => 'wpex_blog_tags',
		'type' => 'checkbox',
	) );

	// Image Sizes
	$wp_customize->add_section( 'wpex_image_sizes' , array(
		'title' => __( 'Theme Image Sizes', 'pronto' ),
		'priority' => 240,
		'description' => __( 'After altering the default image sizes you MUST regenerate your site thumbnails via a 3rd party plugin.', 'pronto' ),
	) );

	// Entry Image Width
	$wp_customize->add_setting( 'wpex_entry_image_width', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'intval',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'wpex_entry_image_width', array(
		'label' => __( 'Entry Image Width', 'pronto' ),
		'section' => 'wpex_image_sizes',
		'settings' => 'wpex_entry_image_width',
		'type' => 'number',
		'description' => __( 'Default', 'pronto' ) .': 400',
	) );

	// Entry Image Height
	$wp_customize->add_setting( 'wpex_entry_image_height', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'intval',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'wpex_entry_image_height', array(
		'label' => __( 'Entry Image Height', 'pronto' ),
		'section' => 'wpex_image_sizes',
		'settings' => 'wpex_entry_image_height',
		'type' => 'number',
		'description' => __( 'Default', 'pronto' ) .': 340',
	) );

	// Entry Image Crop
	$wp_customize->add_setting( 'wpex_entry_image_crop', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'intval',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'wpex_entry_image_crop', array(
		'label' => __( 'Entry Image Crop', 'pronto' ),
		'section' => 'wpex_image_sizes',
		'settings' => 'wpex_entry_image_crop',
		'type' => 'select',
		'choices' => wpex_image_crop_locations(),
	) );

	// Post Image Width
	$wp_customize->add_setting( 'wpex_post_image_width', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'intval',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'wpex_post_image_width', array(
		'label' => __( 'Post Image Width', 'pronto' ),
		'section' => 'wpex_image_sizes',
		'settings' => 'wpex_post_image_width',
		'type' => 'number',
		'description' => __( 'Default', 'pronto' ) .': 1120',
	) );

	// Post Image Height
	$wp_customize->add_setting( 'wpex_post_image_height', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'intval',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'wpex_post_image_height', array(
		'label' => __( 'Post Image Height', 'pronto' ),
		'section' => 'wpex_image_sizes',
		'settings' => 'wpex_post_image_height',
		'type' => 'number',
		'description' => __( 'Default', 'pronto' ) .': 600',
	) );

	// Post Image Crop
	$wp_customize->add_setting( 'wpex_post_image_crop', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'intval',
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'wpex_post_image_crop', array(
		'label' => __( 'Post Image Crop', 'pronto' ),
		'section' => 'wpex_image_sizes',
		'settings' => 'wpex_post_image_crop',
		'type' => 'select',
		'choices' => wpex_image_crop_locations(),
	) );
		
}

add_action( 'customize_register', 'wpex_customizer_general' );