<?php
/**
 * twobytes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package twobytes
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
function twobytes_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on twobytes, use a find and replace
		* to change 'twobytes' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'twobytes', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'twobytes' ),
			'top' => esc_html__( 'Header', 'twobytes2' ),
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
			'twobytes_custom_background_args',
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
add_action( 'after_setup_theme', 'twobytes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twobytes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twobytes_content_width', 640 );
}
add_action( 'after_setup_theme', 'twobytes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twobytes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Right Sidebar', 'twobytes' ),
			'id'            => 'sidebar-right',
			'description'   => esc_html__( 'Add widgets here.', 'twobytes' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}


// Функция регистрации правого сайдбара
// Right sidebar registration function
function reg_sidebar_form() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-form',
        	'name' 			=> __( 'Sidebar2' ),
        	'description'	=> __( 'Moy Sidebar.' ),
        	'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="my_widget-title">',
        	'after_title'   => '</h3>'
        )
       );
}

function reg_sidebar_mobile() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-mobile',
        	'name' 			=> __( 'Sidebar3' ),
        	'description'	=> __( 'Moy Sidebar.' ),
        	'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="my_widget-title">',
        	'after_title'   => '</h3>'
        )
       );
}

function reg_sidebar_footer() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-footer',
        	'name' 			=> __( 'footer' ),
        	'description'	=> __( 'footer form.' ),
        	'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="my_widget-title">',
        	'after_title'   => '</h3>'
        )
       );
}

add_action( 'widgets_init', 'twobytes_widgets_init' );

add_action( 'widgets_init', 'reg_sidebar_form' );

add_action( 'widgets_init', 'reg_sidebar_footer' );

add_action( 'widgets_init', 'reg_sidebar_mobile' );



/**
 * Enqueue scripts and styles.
 */
function twobytes_scripts() {
	wp_enqueue_style( 'twobytes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'twobytes-style', 'rtl', 'replace' );

	wp_enqueue_script( 'twobytes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twobytes_scripts' );


add_action( 'wp_enqueue_scripts', 'jquery_lib' );

// Подключаем джейквери

function jquery_lib(){
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'cube', get_template_directory_uri() . '/assests/js/cube.js', array('jquery'), null, true);
	// wp_enqueue_script( 'main', get_template_directory_uri() . '/assests/js/main.js', array('jquery'), null, true);

} 

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

// Редерект карты

/** add_action( 'init', 'add_new_url_main_sitemap' );
add_filter( 'home_url', 'fix_wp_sitemap_url', 11, 2 );

# Добавляет правило с новым адресом карты сайта
function add_new_url_main_sitemap() {
	add_rewrite_rule( '^sitemap\.xml$', 'index.php?sitemap=index', 'top' );
}

# Заменяет url с wp-sitemap.xml на sitemap.xml
function fix_wp_sitemap_url( $url, $path ) {

	if ( '/wp-sitemap.xml' === $path ) {
		return str_replace( '/wp-sitemap.xml', '/sitemap.xml', $url );
	}

	return $url;
}**/

/** отключение карты **/

add_filter( 'wp_sitemaps_enabled', '__return_false' );