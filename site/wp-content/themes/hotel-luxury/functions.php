<?php
/**
 * Hotel Luxury functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hotel_Luxury
 */

if ( ! function_exists( 'hotel_luxury_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hotel_luxury_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hotel Luxury, use a find and replace
		 * to change 'hotel-luxury' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hotel-luxury', get_template_directory() . '/languages' );

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
		add_image_size( 'hotel_luxury_small_thumb', 50, 50, true ); // Small thumb // 306x160
		add_image_size( 'hotel_luxury_medium', 642, 335, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'hotel-luxury' ),
			'topbar' => esc_html__( 'Topbar', 'hotel-luxury' ),
			'social' => esc_html__( 'Footer Social', 'hotel-luxury' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hotel_luxury_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support('woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'hotel_luxury_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hotel_luxury_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hotel_luxury_content_width', 640 );
}
add_action( 'after_setup_theme', 'hotel_luxury_content_width', 0 );


if ( ! function_exists( 'hotel_luxury_fonts_url' ) ) :
	/**
	 * @return string Google fonts URL for the theme.
	 */
	function hotel_luxury_fonts_url() {
		$fonts_url = '';
		/**
		 * Translators: If there are characters in your language that are not
		 * supported by Libre Frankin, translate this to 'off'. Do not translate
		 * into your own language.
		 */
		$libre_franklin = _x( 'on', 'libre_franklin font: on or off', 'hotel-luxury' );
		if ( 'off' !== $libre_franklin ) {
			$font_families = array();
			$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';
			$query_args = array(
				'family' => urlencode( implode( '|', $font_families ) ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}
		return esc_url_raw( $fonts_url );
	}
endif;


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotel_luxury_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hotel-luxury' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-luxury' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Topbar Right', 'hotel-luxury' ),
		'id'            => 'topbar-right',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-luxury' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'hotel-luxury' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-luxury' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widgettitle">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'hotel-luxury' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-luxury' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widgettitle">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'hotel-luxury' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-luxury' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widgettitle">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'hotel-luxury' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'hotel-luxury' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widgettitle">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'hotel_luxury_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hotel_luxury_scripts() {

    $is_rtl = is_rtl() ? 'true' : 'false';

	wp_enqueue_style( 'hotel-luxury-fonts', hotel_luxury_fonts_url(), array(), null );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0', '' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.0', '' );
	wp_enqueue_style( 'hotel-luxury-woocommerce-modify', get_template_directory_uri() . '/assets/css/woocommerce-modify.css', array(), '0.0.1', '' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1.0', '' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.1', '' );
	wp_enqueue_style( 'owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.2.1', '' );

	wp_enqueue_style( 'hotel-luxury-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '2.2.1', true );
    wp_enqueue_script( 'hotel-luxury-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '20151215', true );
    wp_localize_script( 'hotel-luxury-custom', 'hotel_luxury', 
                array( 
                    'ajax_url' => admin_url( 'admin-ajax.php' ), 
                    'rtl' =>  $is_rtl
                )    
    );

	if ( function_exists( 'hotel_luxury_custom_style' ) ) {
		wp_add_inline_style( 'hotel-luxury-style', hotel_luxury_custom_style() );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hotel_luxury_scripts' );

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
 * Metaxbox additions.
 */
require get_template_directory() . '/inc/metabox.php';


/**
 * Theme dashboard
 */
require get_template_directory() . '/inc/dashboard.php';

/**
 * Theme widget
 */
require get_template_directory() . '/inc/posts-widget.php';

/**
 * TGM
 */
require get_template_directory() . '/inc/tgm.php';

if ( version_compare(PHP_VERSION, '5.4.0') >= 0 ) {
/**
 * Elementor items
 */
require get_template_directory() . '/plugins/plugin.php';
}


