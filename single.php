<?php
/**
 * The Template for displaying all single posts.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( ! post_password_required() ) : ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endif; ?>

	<div id="primary" class="content-area clr">

		<div id="content" class="site-content boxed" role="main">

			<header class="post-header">

				<h1 class="post-header-title"><?php the_title(); ?></h1>

				<ul class="meta single-meta clr">
					<?php if ( get_theme_mod( 'wpex_post_date', true ) ) : ?>
						<li><span class="fa fa-clock-o"></span><?php the_date(); ?></li>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'wpex_post_category', true ) ) : ?>
						<li><span class="fa fa-folder-open"></span><?php the_category( ' / ' ); ?></li>
					<?php endif; ?>
					<?php if ( comments_open() && get_theme_mod( 'wpex_post_comment_count', true ) ) : ?>
						<li class="comment-scroll"><span class="fa fa-comment"></span> <?php comments_popup_link(__( 'Leave a comment', 'pronto' ), __( '1 Comment', 'pronto' ), __( '% Comments', 'pronto' ), 'comments-link', __( 'Comments closed', 'pronto' ) ); ?></li>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'wpex_post_author', true ) ) : ?>
						<li><span class="fa fa-user"></span><?php the_author_posts_link(); ?></li>
					<?php endif; ?>
				</ul>
			</header>

			<article class="entry clr"><?php the_content(); ?></article>

			<?php wp_link_pages( array(
				'before'      => '<div class="page-links clr">',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
			) ); ?>
			
			<?php if ( get_theme_mod( 'wpex_blog_tags', true ) ) : ?>
				<?php the_tags( '<div class="post-tags clr">','','</div>' ); ?>
			<?php endif; ?>

			<?php comments_template(); ?>

		</div>

		<nav class="single-nav clr">
			<?php next_post_link( '<div class="single-nav-left col span_12 clr-margin">%link</div>', '&larr; %title', false ); ?>
			<?php previous_post_link( '<div class="single-nav-right col span_12">%link</div>', '%title &rarr;', false ); ?>
		</nav>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>