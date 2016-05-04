<?php
/**
 * The header for our theme.
 * @package brianzotoole2.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="A Projects Director & Web Developer living in Tampa, FL">
<meta name="keywords" content="Tampa Website Design, Web Design Tampa, Web Development Tampa, Tampa website help, Web Designers in Tampa, Responsive Design Tampa">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brianzotoole2-0' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php get_template_part( 'nav' ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">