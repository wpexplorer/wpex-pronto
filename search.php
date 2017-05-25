<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'pronto' ), get_search_query() ); ?></h1>
	</header>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>
			<div id="infinite-wrap" class="grid clr">  
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
			</div><!-- .grid -->
			<?php wpex_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>