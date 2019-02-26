<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

	<div id="primary" class="content-area span_16 col clr-margin">
		<div id="content" class="site-content" role="main">
			<header class="page-header">
				<h1 class="page-title"><?php _e( '404 Not found', 'pronto' ); ?></h1>
			</header><!-- .page-header -->
			<div id="error-page" class="page-wrapper">
				<div class="page-content">
					<p><?php _e( 'Unfortunately the page you requested could not be found.', 'pronto' ); ?></p>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>