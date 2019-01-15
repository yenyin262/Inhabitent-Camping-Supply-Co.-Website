<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
         
	
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="header_logo_menu">
					<div class="site-branding">
					<!-- <h1 class="site-title screen-reader-text"> -->
					<?php if (! is_front_page() && !is_page('about')) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class ="logo" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.svg' ?> " alt="logo-green."/></a></h1>
						<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class ="logo" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent-white.svg' ?> " alt="logo."/></a></h1>
						<?php endif; ?>
					</div><!-- .site-branding -->
                	<div class="nav-search-wrapper">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					<div class="searchForm">
						<span class="open-search"><i class="fas fa-search"></i></span><input type="searchForm" name="searchForm" placeholder="type hit and enter..."/>
  					</div>
				</div>
		</div>






				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
            