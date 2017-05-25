<?php
/**
 * The default template for displaying content. Used for both single and index/archive.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */
 
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*----------------------------------------
 * Single Posts
----------------------------------------*/

if ( is_singular() && is_main_query() ) :

	if ( has_post_thumbnail() && get_theme_mod( 'wpex_blog_post_thumb', true ) ) : ?>
		<div id="post-thumbnail"><?php the_post_thumbnail( 'wpex-post' ); ?></div>
	<?php endif; ?>

<?php
/*----------------------------------------
 * Entries
----------------------------------------*/
else : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-entry clr' ); ?>>
		<?php if ( has_post_thumbnail() && get_theme_mod( 'wpex_blog_entry_thumb', true ) ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>" rel="bookmark" class="loop-entry-img-link"><?php the_post_thumbnail( 'wpex-entry' ); ?></a>
		<?php } ?>
		<div class="loop-entry-details">
			<header><h2><a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2></header>
			<div class="loop-entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</article>

<?php endif; ?>