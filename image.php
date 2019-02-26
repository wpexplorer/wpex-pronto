<?php
/**
 * The template for displaying image attachments.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

	<div id="page-heading">
		<h1><?php the_title(); ?></h1>
	</div><!-- /page-heading -->
	
	<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
			
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'image-attachment' ); ?>>
					<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
					<?php the_content(); ?>
				</article><!-- #post -->
				
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();?>