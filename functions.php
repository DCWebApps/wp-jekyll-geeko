<?php
/**
 * wp-jekyll functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-jekyll-geeko
 */

function modify_read_more_link() {
    return '<a class="post-read-more" href="' . get_permalink() . '"> Read More</a>';
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );

if ( ! function_exists( 'wp_jekyll_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
    
function wp_jekyll_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wp-jekyll, use a find and replace
	 * to change 'wp-jekyll' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-jekyll', get_template_directory() . '/languages' );

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
        add_image_size('post-banner', 1199, 585);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => esc_html__( 'Primary Custom Menu', 'wp-jekyll-geeko' ),
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
	add_theme_support( 'custom-background', apply_filters( 'wp_jekyll_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'wp_jekyll_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_jekyll_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_jekyll_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_jekyll_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/*
function wp_jekyll_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-jekyll' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-jekyll' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_jekyll_widgets_init' );
*/

/**
 * Enqueue scripts and styles.
 */
function wp_jekyll_scripts() {
        
        wp_enqueue_style( 'wp-jekyll-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );    
        wp_enqueue_style( 'wp-jekyll-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
        
        wp_enqueue_style( 'wp-jekyll-style-main', get_stylesheet_directory_uri() . '/css/main.css' );
        wp_enqueue_style( 'wp-jekyll-style-highlights', get_stylesheet_directory_uri() . '/css/pygment_highlights.css' );
        wp_enqueue_style( 'wp-jekyll-style-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,400italic,600,700,800,900' );
        wp_enqueue_style( 'wp-jekyll-style-fonts-2', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );        

	wp_enqueue_script( 'wp-jekyll-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
        
        wp_enqueue_script( 'wp-jekyll-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wp-jekyll-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'wp-jekyll-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'wp-jekyll-jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_jekyll_scripts' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
