<?php
/**
 * html5up-prologue-playlight-mokxter functions and definitions
 *
 * @package html5up-prologue-playlight-mokxter
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'html5up_prologue_playlight_mokxter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function html5up_prologue_playlight_mokxter_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on html5up-prologue-playlight-mokxter, use a find and replace
	 * to change 'html5up-prologue-playlight-mokxter' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'html5up-prologue-playlight-mokxter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'html5up-prologue-playlight-mokxter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'html5up_prologue_playlight_mokxter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // html5up_prologue_playlight_mokxter_setup
add_action( 'after_setup_theme', 'html5up_prologue_playlight_mokxter_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function html5up_prologue_playlight_mokxter_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'html5up-prologue-playlight-mokxter' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'html5up_prologue_playlight_mokxter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function html5up_prologue_playlight_mokxter_scripts() {
	wp_enqueue_style( 'html5up-prologue-playlight-mokxter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'html5up-prologue-playlight-mokxter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'html5up-prologue-playlight-mokxter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'html5up_prologue_playlight_mokxter_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


/**
 * Mokxter codes hehe
 */

// javascripts
//wp_enqueue_script('jquery');

function skel_scripts_loader(){
    wp_enqueue_script('myjquery', get_bloginfo("stylesheet_directory")."/prologue-js/jquery.min.js", array(), time());
    wp_enqueue_script('scrollyjs', get_bloginfo("stylesheet_directory")."/prologue-js/jquery.scrolly.min.js", array('myjquery'), time());
    wp_enqueue_script('scrollzerjs', get_bloginfo("stylesheet_directory")."/prologue-js/jquery.scrollzer.min.js", array('myjquery'), time());
    wp_enqueue_script('skeljs', get_bloginfo("stylesheet_directory")."/prologue-js/skel.min.js", array('myjquery'), time());
    wp_enqueue_script('skellayersjs', get_bloginfo("stylesheet_directory")."/prologue-js/skel-layers.min.js", array('myjquery','skeljs'), time());
    wp_enqueue_script('initjs', get_bloginfo("stylesheet_directory")."/prologue-js/init.js", array('myjquery','skeljs','skellayersjs'), time());
}

add_action( 'wp_enqueue_scripts', 'skel_scripts_loader' );

// Cascading Style Sheets


function skel_stylesheet_loader(){
    // Enqueue style sheets
    wp_enqueue_style('skelcss', get_bloginfo("stylesheet_directory")."/css/skel.css",array(), time());
    wp_enqueue_style('stylecss', get_bloginfo("stylesheet_directory")."/css/style.css",array(), time());
    wp_enqueue_style('stylewidecss', get_bloginfo("stylesheet_directory")."/css/style-wide.css",array(), time());
}


add_action( 'wp_enqueue_scripts', 'skel_stylesheet_loader' );
