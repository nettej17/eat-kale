<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kale_spade
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kale_spade' ); ?></a>

	<header id="masthead" class="site-header" role="banner" style="text-align: center">
		<div class="social-media-icons">
            <?php get_social_media_icons(); ?>
		</div>
        <div class="site-branding">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php header_image();?>" align="middle" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
            </a>
		</div>

		<div style="text-align: center">
            <nav id="site-navigation" class="main-navigation" role="navigation">
			    <button class="menu-toggle"><?php _e( 'Primary Menu', 'kale_spade' ); ?></button>
			    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		    </nav>
        </div><!-- #site-navigation -->

        <div class="filmstrip-header">
            <?php get_filmstrip_header();?>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">


        <?php

function get_social_media_icons(){
    $facebook ='<a href="http://www.facebook.com" <img src="images/social_media/facebook.jpg"</img></a>';
    echo $facebook;
}