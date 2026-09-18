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
	public $type = 'wpex_notice';

	/**
	 * Notice style: info, warning, error or success.
	 */
	public $notice_type = 'warning';

	/**
	 * Content is rendered from the JS template.
	 */
	protected function render_content() {}

	/**
	 * Adds the notice options to the control data.
	 */
	public function to_json() {
		parent::to_json();
		$this->json['notice_type'] = $this->notice_type;
	}

	/**
	 * The control template.
	 */
	public function content_template() { ?>
		<div class="wpex-customize-notice wpex-customize-notice--{{ data.notice_type }}">
			<# if ( data.label ) { #>
				<p class="wpex-customize-notice-title"><strong>{{ data.label }}</strong></p>
			<# } #>
			<# if ( data.description ) { #>
				<p>{{{ data.description }}}</p>
			<# } #>
		</div>
	<?php }

}

/**
 * Styles for WPEX_Customize_Notice_Control.
 */
function wpex_customizer_notice_styles() {
	?>
	<style>
		.wpex-customize-notice { margin: 0; padding: 10px 12px; background: #fff; border: 1px solid #c3c4c7; border-left: 4px solid #72aee6; box-shadow: 0 1px 1px rgba(0,0,0,.04); }
		.wpex-customize-notice--warning { border-left-color: #dba617; }
		.wpex-customize-notice--error { border-left-color: #d63638; }
		.wpex-customize-notice--success { border-left-color: #00a32a; }
		.wpex-customize-notice p { margin: 0 0 8px; font-size: 13px; line-height: 1.5; }
		.wpex-customize-notice p:last-child { margin-bottom: 0; }
		.wpex-customize-notice-title { font-size: 13px; }
	</style>
	<?php
}
add_action( 'customize_controls_print_styles', 'wpex_customizer_notice_styles' );
