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

		<?php if ( has_post_thumbnail() ) : 
			// Get the featured image ID
			$banner_image_id = get_post_thumbnail_id();
			// Get the featured image URL
			$banner_image = wp_get_attachment_image_src( $banner_image_id, 'full' ); // You can use different sizes like 'medium', 'large', etc.
		?>

			<section class="inner-hero default-page-headline">
				<div class="inner-hero__bg" <?php if ( $banner_image ) : ?>style="background-image: url(<?php echo esc_url( $banner_image[0] ); ?>);"<?php endif; ?>>
					<div class="inner-hero__flex" data-aos="fade-up">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</section>

			<div class="breadcrumbs">
				<div class="container">Home  |  <span><?php the_title(); ?></span></div>
			</div>

		<?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer(); ?>