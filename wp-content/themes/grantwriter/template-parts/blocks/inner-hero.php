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
<?php $banner_image = get_field( 'banner_image' ); ?>

<section class="inner-hero">
	<div class="inner-hero__bg" <?php if ( $banner_image ) : ?>style="background-image: url(<?php echo esc_url( $banner_image['url'] ); ?>);"<?php endif; ?>>
		<div class="inner-hero__flex" data-aos="fade-up">
			<InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowedBlocks)); ?>" />
		</div>
	</div>
    
    <div class="inner-hero__animation">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/round.svg" alt="" >
    </div>
</section>

