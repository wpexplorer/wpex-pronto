<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */
?>

<div class="page-content content-none clr">
	<h2 class="page-title"><?php _e( 'Nothing Found', 'pronto' ); ?></h2>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pronto' ), admin_url( 'post-new.php' ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'pronto' ); ?></p>
	<?php else : ?>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pronto' ); ?></p>
	<?php endif; ?>
</div><!-- .page-content -->
