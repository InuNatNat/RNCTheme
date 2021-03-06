<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lulu_LoL
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link href='https://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'lulu_lol' ); ?></a>
    <div class="header-image">
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></div>

	<header id="masthead" class="site-header" role="banner">
        
        <?php // Display site icon or first letter as logo ?>
<div class="logo">
    <?php
            wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'secondary_class' ) );?>
        
      <?php if (has_custom_logo() ) {
        the_custom_logo();
} else { ?>  
        <div class="site-logo">
            
            
        <?php $site_title = get_bloginfo ( 'name' ); ?>
        <a href="<?php echo esc_url ( home_url( '/' ) ); ?>" rel="home">
    
            <div class="site-firstletter" aria-hidden="true">
    <?php echo substr($site_title, 0, 1); ?>
            </div> <?php } ?>
            </a></div></div>
        
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lulu_lol' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
