<?php
/**
 * The Header for our theme.
 *
 * @package   Pronto WordPress Theme
 * @author    Alexander Clarke
 * @link      http://www.wpexplorer.com
 * @since     1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script><![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<!-- Begin Body -->
<body <?php body_class('body'); ?>>

	<div id="wrap" class="container clr">
		<div class="container-left clr">
		<header id="masthead" class="site-header clr" role="banner">
			<div class="logo">
				<?php if ( $url = get_theme_mod( 'wpex_logo' ) ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( $url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
				<?php else : ?>
					<?php if ( is_front_page() ) : ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1>
					<?php else : ?>
						<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h2>
					<?php endif; ?>
					<?php if ( get_bloginfo('description') ) : ?>
						<p class="site-description"><?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</header>

		<a href="#" id="toggle-btn"><span class="fa fa-bars"></span></a>

		<div id="toggle-wrap" class="clr">
			<div id="navbar" class="navbar clr">
				<nav id="site-navigation" class="navigation main-navigation clr" role="navigation">
					<?php wp_nav_menu( array(
						'theme_location' => 'main_menu',
						'sort_column'    => 'menu_order',
						'menu_class'     => 'nav-menu dropdown-menu',
						'fallback_cb'    => false
					) ); ?>
				</nav>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

	<div id="main" class="container-right site-main clr fitvids">