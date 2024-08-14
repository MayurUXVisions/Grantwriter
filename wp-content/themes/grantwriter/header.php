<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grantwriter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<!-- // Google Fonts -->

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/scss/style.css?8567755" rel="stylesheet">


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!-- <div class="sticky-panel">
		<span>Let’s Talk Grants</span>
		<span class="sticky-link"></span>
		<span><a href="mailto:hello@grantwriters.net">hello@grantwriters.net</a>  |  <a href="tel:5053264245">(505) 326-4245</a></span>
		<div class="back-to-top">
			<a href="#"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/back-to-top.svg" alt="" ></a>
		</div>
	</div> -->

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'grantwriter' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="container">
			<div class="head-main">
				<div class="head-left">
					<div class="logo"><?php the_custom_logo(); ?></div>
					<div class="local-grant">
						<a href="#">Local Grants</a>
					</div>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</nav>
			</div>
		</div>

	</header><!-- #masthead -->
