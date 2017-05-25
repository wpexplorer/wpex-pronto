<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">

		<?php if ( has_post_thumbnail() ) : ?>

			<div id="page-featured-image" class="clr">
				<?php the_post_thumbnail(); ?>
			</div><!-- #page-featured-image -->

		<?php endif; ?>

		<div id="content" class="site-content boxed" role="main">

			<header class="page-header"><h1 class="page-header-title"><?php the_title(); ?></h1></header>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-conten clr">
						<?php the_content(); ?>
						<?php wp_link_pages( array(
							'before'      => '<div class="page-links clr">',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit Page', 'pronto' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->

				</article><!-- #post -->

				<?php if ( comments_open() ) comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>