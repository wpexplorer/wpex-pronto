<?php
/**
 * Customizer control that renders a static notice instead of a setting field.
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

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return;
}

final class WPEX_Customize_Notice_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 */
	public $type = 'wpex-notice';

	/**
	 * Notice style: info, warning, error or success.
	 */
	public $notice_type = 'info';

	/**
	 * Optional link rendered under the notice text.
	 */
	public $link_url = '';

	/**
	 * Optional link text.
	 */
	public $link_text = '';

	protected function render_content(): void {
		$classes = 'wpex-customize-notice notice notice-' . sanitize_html_class( $this->notice_type );
		?>
		<div class="<?php echo esc_attr( $classes ); ?>">
			<?php if ( $this->label ) : ?>
				<p class="wpex-customize-notice-title"><strong><?php echo esc_html( $this->label ); ?></strong></p>
			<?php endif; ?>
			<?php if ( $this->description ) : ?>
				<p><?php echo wp_kses_post( $this->description ); ?></p>
			<?php endif; ?>
			<?php if ( $this->link_url && $this->link_text ) : ?>
				<p>
					<a href="<?php echo esc_url( $this->link_url ); ?>" target="_blank" rel="noopener noreferrer">
						<?php echo esc_html( $this->link_text ); ?>
						<span class="screen-reader-text"><?php esc_html_e( '(opens in a new tab)', 'pronto' ); ?></span>
					</a>
				</p>
			<?php endif; ?>
		</div>
		<?php
	}

}

/**
 * Styles for WPEX_Customize_Notice_Control.
 */
function wpex_customizer_notice_styles() {
	?>
	<style>
		.customize-control-wpex-notice .wpex-customize-notice { margin: 0; padding: 10px 12px; background: #fff; border: 1px solid #c3c4c7; border-left-width: 4px; box-shadow: 0 1px 1px rgba(0,0,0,.04); }
		.customize-control-wpex-notice .wpex-customize-notice p { margin: 0 0 8px; font-size: 13px; line-height: 1.5; }
		.customize-control-wpex-notice .wpex-customize-notice p:last-child { margin-bottom: 0; }
		.customize-control-wpex-notice .wpex-customize-notice-title { font-size: 13px; }
	</style>
	<?php
}
add_action( 'customize_controls_print_styles', 'wpex_customizer_notice_styles' );
