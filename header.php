<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package NAGA
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- font awesome -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header mb2" role="banner">
		<div class="row">
		<div class="col-sm-3 site-branding">
			<!-- background url must be CHANGED after migration -->
			<h1 class="site-title float-right mt0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/naga/wordpress/wp-content/uploads/2015/03/logo-banner.svg" alt="NAGA Logo"></a></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="col-sm-9 main-navigation" role="navigation">
			<!-- <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'naga' ); ?></button> -->
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</div> <!--  end row -->
	</header><!-- #masthead -->
