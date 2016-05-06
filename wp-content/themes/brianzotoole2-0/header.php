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
<meta name="description" content="Brian O'Toole is a Director of Web Development living in Tampa, Florida.">
<meta name="keywords" content="Tampa Website Design, Web Design Tampa, Web Development Tampa, Tampa website help, Web Designers in Tampa, Responsive Design Tampa">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-branding">
    <span><a href="<?php echo bloginfo('url') ?>">Brian <span>Z.</span> O'Toole</a></span>
  </div><!--/.site-branding-->
  <nav class="site-navigation" role="navigation">
    <ul>
      <li><a href="<?php bloginfo('url'); ?>/#about">About</a></li>
      <li><a href="<?php bloginfo('url'); ?>/#projects">Projects</a></li>
      <li><a href="<?php bloginfo('url'); ?>/#articles">Articles</a></li>
      <li><a href="<?php bloginfo('url'); ?>/#contact">Contact</a></li>
    </ul>
  </nav><!--/.site-navigation-->
</header><!--/.site-branding-->

<div id="content" class="site-content">