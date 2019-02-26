<?php
/**
 * Register widget areas
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

function wpex_register_sidebars() {
	register_sidebar( array (
		'name'          => __( 'Sidebar', 'pronto' ),
		'id'            => 'sidebar',
		'description'   => __( 'Widgets in this area are used in the default sidebar.', 'pronto' ),
		'before_widget' => '<div class="sidebar-box %2$s clr">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'wpex_register_sidebars' );