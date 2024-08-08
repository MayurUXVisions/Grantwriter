<?php
/**
 * grantwriter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grantwriter
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function grantwriter_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on grantwriter, use a find and replace
		* to change 'grantwriter' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'grantwriter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'grantwriter' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'grantwriter_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'grantwriter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grantwriter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'grantwriter_content_width', 640 );
}
add_action( 'after_setup_theme', 'grantwriter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grantwriter_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'grantwriter' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'grantwriter' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'grantwriter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grantwriter_scripts() {
	wp_enqueue_style( 'grantwriter-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'grantwriter-style', 'rtl', 'replace' );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'grantwriter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/css/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper-bundle-css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'aos-navigation', get_template_directory_uri() . '/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-bundle-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	 
	wp_enqueue_script( 'custom-navigation', get_template_directory_uri() . '/js/custom.js?Var=6455', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grantwriter_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//ACF Blocks
add_action('init', 'my_acf_blocks_init');
function my_acf_blocks_init() {
 
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'home-hero',
            'title'             => __('Home Hero'),
            'description'       => __('A custom home hero block.'),
            'render_template'   => 'template-parts/blocks/home-hero.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'trusted-partners',
            'title'             => __('Trusted Partners'),
            'description'       => __('A custom Trusted Partners block.'),
            'render_template'   => 'template-parts/blocks/trusted-partners.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'experience-block',
            'title'             => __('Experience Block'),
            'description'       => __('A custom Experience Block block.'),
            'render_template'   => 'template-parts/blocks/experience-block.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'grant-alerts',
            'title'             => __('Grant Alerts'),
            'description'       => __('A custom Grant Alerts block.'),
            'render_template'   => 'template-parts/blocks/grant-alerts.php',
            'category'          => 'formatting',
        ));


		acf_register_block_type(array(
            'name'              => 'inner-hero',
            'title'             => __('Inner Hero'),
            'description'       => __('A custom Inner hero block.'),
            'render_template'   => 'template-parts/blocks/inner-hero.php',
            'category'          => 'formatting',
			'supports'			=> array(
                'anchor' => false, 
                'align'  => false,
                'customClassName' => true,
                'jsx' 	 => true,
                'mode' => true,
                'multiple' => true,
            ),
        ));

		acf_register_block_type(array(
            'name'              => 'sticky-content',
            'title'             => __('Sticky Content'),
            'description'       => __('A custom Sticky Content block.'),
            'render_template'   => 'template-parts/blocks/sticky-content.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'client-wins',
            'title'             => __('Client Wins'),
            'description'       => __('A custom Client Wins block.'),
            'render_template'   => 'template-parts/blocks/client-wins.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'company-accolades',
            'title'             => __('Company Accolades'),
            'description'       => __('A custom Company Accolades block.'),
            'render_template'   => 'template-parts/blocks/company-accolades.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'contact-block',
            'title'             => __('Contact Block'),
            'description'       => __('A custom Contact Block block.'),
            'render_template'   => 'template-parts/blocks/contact-block.php',
            'category'          => 'formatting',
        ));


		acf_register_block_type(array(
            'name'              => 'subscriber-block',
            'title'             => __('Subscriber Block'),
            'description'       => __('A custom Subscriber Block block.'),
            'render_template'   => 'template-parts/blocks/subscriber-block.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'services-block',
            'title'             => __('Services Block'),
            'description'       => __('A custom Services Block block.'),
            'render_template'   => 'template-parts/blocks/services-block.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'faqs-block',
            'title'             => __('Faqs Block'),
            'description'       => __('A custom Faqs Block block.'),
            'render_template'   => 'template-parts/blocks/faqs-block.php',
            'category'          => 'formatting',
        ));

		
	}
}


function dev_after_theme_setup () {
    add_theme_support('editor-styles');
    // add styles only in editor context
    add_editor_style( 'css/dist/gutenberg-editor.css' );

    // Add support for custom line height controls.
	add_theme_support( 'custom-line-height' );
    add_theme_support('editor-gradient-presets');
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );

}
add_action('after_setup_theme', 'dev_after_theme_setup');