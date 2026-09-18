<?php
/**
 * Inline SVG icons.
 *
 * Icons are Feather (MIT) drawn on a 24x24 grid.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.5
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Icon shapes keyed by name.
 */
function wpex_get_icons() {
	return array(
		'menu' => '<line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line>',
		'x' => '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>',
		'clock' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>',
		'folder' => '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>',
		'message-circle' => '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>',
		'user' => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>',
		'chevron-left' => '<polyline points="15 18 9 12 15 6"></polyline>',
		'chevron-right' => '<polyline points="9 18 15 12 9 6"></polyline>',
		'arrow-up' => '<line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline>',
	);
}

/**
 * Returns an inline SVG icon wrapped in a .wpex-icon element.
 *
 * $args accepts "class" for extra classnames and "size" for one of the
 * wpex-icon size modifiers. Icons are decorative; pass "label" when the icon
 * carries the meaning on its own to append matching screen reader text.
 */
function wpex_get_icon( $icon, $args = array() ) {
	$icons = wpex_get_icons();

	if ( empty( $icons[ $icon ] ) ) {
		return '';
	}

	$args = wp_parse_args( $args, array(
		'class' => '',
		'size'  => '',
		'label' => '',
	) );

	$classes = array( 'wpex-icon' );

	if ( in_array( $args['size'], array( '2xs', 'xs', 'sm', 'md', 'lg', 'xl', '2xl' ), true ) ) {
		$classes[] = 'wpex-icon--' . $args['size'];
	}

	if ( str_contains( $icon, 'left' ) || str_contains( $icon, 'right' ) ) {
		$classes[] = 'wpex-icon--bidi';
	}

	if ( $args['class'] ) {
		$classes[] = $args['class'];
	}

	$html = sprintf(
		'<span class="%1$s" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">%2$s</svg></span>',
		esc_attr( implode( ' ', $classes ) ),
		$icons[ $icon ]
	);

	if ( $args['label'] ) {
		$html .= '<span class="screen-reader-text">' . esc_html( $args['label'] ) . '</span>';
	}

	return $html;
}

/**
 * Echoes an inline SVG icon.
 */
function wpex_icon( $icon, $args = array() ) {
	echo wpex_get_icon( $icon, $args ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- markup built above.
}
