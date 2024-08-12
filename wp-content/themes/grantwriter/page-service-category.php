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

		<section class="inner-hero">
			<div class="inner-hero__bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/services-hero.jpg);">
				<div class="inner-hero__flex" data-aos="fade-up">
					<h1>Services</h1>
					<p>Ready to maximize your grant potential? Let our expert grant advisors navigate you through the complex world of strategic grant planning and grant award success.</p>
				</div>
			</div>
			
			<div class="inner-hero__animation">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/round.svg" alt="" >
			</div>
		</section>
		<div class="breadcrumbs">
			<div class="container">Home  |  <span><?php the_title(); ?></span></div>
		</div>

		<div class="service-cat-content">
			<div class="container">
				<div class="cat-content-shorter">
					<div class="cat-text">
						<h2>Empowering Organizations to <span>Make a Difference</span> Through our Grant Writing and Nonprofit Services</h2>
						<p>GrantWriters supports organizations in achieving their visions by providing expert grant writing services tailored to their needs. Our experienced team crafts compelling proposals for government grants, foundation funding, and corporate sponsorships to enhance your chances of securing vital support. Let us guide you through the grant funding and nonprofit establishment process for long-term success. Trust GrantWriters.net to be your partner in bringing your vision to life.</p>
					</div>
					<div class="cat-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-cat-image.jpg" alt="" > 
					</div>
				</div> 
			</div>
		</div>

		<div class="our-services">
			<div class="container"> 

				<div class="our-services__box">
					<a href="#" class="overlay-link"></a>
					<div class="our-services__image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/grant-writing.jpg" alt="" >
					</div>
					<div class="our-services__text">
						<label>Our Services</label>
						<h3>Grant Writing</h3>
						<h4>Grant Writes Done Right</h4>
						<p>Let us help you secure the funds you need to bring your vision to life. Our professional grant writers provide comprehensive grant writing services tailored to your organization's goals and mission.</p>
						<a href="#" class="our-services__btn">Explore Grant Writing</a>
					</div>
				</div>

			</div>
		</div>


	</main><!-- #main -->

<?php get_footer(); ?>