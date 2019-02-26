<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>
	
	<?php if ( ! is_front_page() && ! is_home() ) : ?>
		<header class="page-header archive-header">
			<h1 class="page-header-title archive-title"><?php the_archive_title(); ?></h1>
			<?php if ( $description = term_description() ) : ?>
				<div class="archive-meta"><?php echo wp_kses_post( $description ); ?></div>
			<?php endif; ?>
		</header><!-- .archive-header -->
	<?php endif; ?>
	
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