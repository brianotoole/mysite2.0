<?php
/**
 * brianzotoole2.0 functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package brianzotoole2.0
 */

if ( ! function_exists( 'brianzotoole2_0_setup' ) ) :

function brianzotoole2_0_setup() {

	load_theme_textdomain( 'brianzotoole2-0', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'brianzotoole2-0' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'brianzotoole2_0_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // brianzotoole2_0_setup
add_action( 'after_setup_theme', 'brianzotoole2_0_setup' );

function brianzotoole2_0_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brianzotoole2_0_content_width', 640 );
}
add_action( 'after_setup_theme', 'brianzotoole2_0_content_width', 0 );


function brianzotoole2_0_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'brianzotoole2-0' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'brianzotoole2_0_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brianzotoole2_0_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri(), array(), '2.0');

	wp_enqueue_script( 'brianzotoole2-0-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'brianzotoole2-0-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'brianzotoole2_0_scripts' );


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/extras.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/jetpack.php';
