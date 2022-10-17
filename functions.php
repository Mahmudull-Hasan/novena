<?php
/**
 * Novena functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Novena
 */

if ( site_url() == "http://localhost/novena") {
    define( "VERSION", time());
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function novena_setup() {
	
	load_theme_textdomain( 'novena', get_template_directory() . '/languages' );
	
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary_menu' => esc_html__( 'Primary Menu', 'novena' ),
		)
	);

	
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
			'novena_custom_background_args',
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
add_action( 'after_setup_theme', 'novena_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function novena_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'novena_content_width', 640 );
}
add_action( 'after_setup_theme', 'novena_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function novena_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'novena' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'novena' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'novena_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function novena_theme_scripts() {


	wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/plugins/bootstrap/bootstrap.min.css'), array(), '1.0', 'all');

	wp_enqueue_style('icofont', get_theme_file_uri('/assets/plugins/icofont/icofont.min.css'), array(), '1.0', 'all');

	wp_enqueue_style( 'font-awesom-5', '//use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );

	wp_enqueue_style('slick-carousel', get_theme_file_uri('/assets/plugins/slick-carousel/slick/slick.css'), array(), '1.0', 'all');

	wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/plugins/slick-carousel/slick/slick-theme.css'), array(), '1.0', 'all');

	wp_enqueue_style('theme-css', get_theme_file_uri('/assets/css/style.css'), array(), VERSION, 'all');

	wp_enqueue_style( 'novena-style', get_stylesheet_uri(), array(), VERSION );
	wp_style_add_data( 'novena-style', 'rtl', 'replace' );

	//Bootstrap js load
	wp_enqueue_script('jquery', get_theme_file_uri('/assets/plugins/jquery/jquery.js'), array('jquery'), '1.0', true);

	wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/plugins/bootstrap/bootstrap.min.js'), array('jquery'), '1.0', true);

	wp_enqueue_script('slick-js', get_theme_file_uri('/assets/plugins/slick-carousel/slick/slick.min.js'), array('jquery'), '1.0', true);

	wp_enqueue_script('shuffle', get_theme_file_uri('/assets/plugins/shuffle/shuffle.min.js'), array('jquery'), '1.0', true);
	
	wp_enqueue_script('google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA', array('jquery'), '1.0', true);
	
	wp_enqueue_script('gmap', get_theme_file_uri('/assets/plugins/google-map/gmap.js'), array('jquery'), '1.0', true);

	wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0', true);
	

	wp_enqueue_script( 'novena-navigation', get_theme_file_uri('/js/navigation.js'), array(), VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'novena_theme_scripts' );

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

//Codestar Framework//
require_once get_theme_file_path() .'/inc/novena-options.php';