<?php
$template = [
    ['core/heading',[
        'level'     => 1,
        'placeholder'   => 'Enter Title here...',
        'className' => 'h1'
    ]],
    ['core/paragraph',[
        'placeholder'   => 'Enter Column text here...',
        'className' => 'column-text'
    ]]
];
$allowedBlocks = [ 'core/heading', 'core/paragraph'];
?>
<?php 
    $banner_image = get_field( 'banner_image' ); 
    $hero_banner_video = get_field( 'inner_hero_banner_video' );
?>

<section class="inner-hero">
	<div class="inner-hero__bg" <?php if ( $banner_image ) : ?>style="background-image: url(<?php echo esc_url( $banner_image['url'] ); ?>);"<?php endif; ?>>
		
        <?php if ( $hero_banner_video ) : ?>
        <div class="inner-hero__video">
			<video loop="true" preload="none" autoplay="autoplay" muted="" playinline="" playsinline="" webkit-playsinline="">
				<source src="<?php echo esc_url( $hero_banner_video['url'] ); ?>" type="video/mp4">
			</video>
		</div>
        <?php endif; ?>

        <div class="inner-hero__flex" data-aos="fade-up">
			<InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowedBlocks)); ?>" />
		</div>

        <div class="inner-hero__animation white-version">
            <div class="round-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/round-white-text.svg" alt="" ></div>
            <div class="round-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/round.svg" alt="" ></div>
        </div>
	</div>
    
    <div class="inner-hero__animation black-version">
        <div class="round-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/round-black-text.svg" alt="" ></div>
        <div class="round-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/round.svg" alt="" ></div>
    </div>
    
</section>

<div class="breadcrumbs"> 
    <div class="container"><a href="#">Home</a>  |  <span><?php the_title(); ?></span></div>
</div> 

