<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grantwriter
 */

get_header(); 
?>

	<main id="primary" class="site-main">


		<section class="home-hero">
			<div class="home-hero__bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/home-hero.jpg);">
				<div class="container home-hero__flex" data-aos="fade-up">
					<label>America’s #1 Grant Writers, since 1995</label>
					<h1>We’re the Difference Between <strong>Success</strong> and Reject</h1>
					<ul>
						<li>We Write Grants</li>
						<li>Win Grant Funds</li>
						<li>Target Awardable RFP’s</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="trusted-partner">
			<div class="container">
			
				<div class="trusted-partner__flex">
					<h2>Trusted <strong>Partners</strong></h2>
					<div class="trustedSwiper swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Trusted-logo-1.jpg" alt="" ></div>
							<div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Trusted-logo-2.jpg" alt="" ></div>
							<div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Trusted-logo-3.jpg" alt="" ></div>
							<div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Trusted-logo-4.jpg" alt="" ></div>
							<div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Trusted-logo-5.jpg" alt="" ></div>
						</div>
					</div>
				</div>

			</div>
		</section>

	</main>

<?php
get_footer();
