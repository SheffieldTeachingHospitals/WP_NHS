<?php
/**
 * sth functions and definitions
 *
 * @package sth
 */

if ( ! function_exists( 'sth_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sth_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sth, use a find and replace
	 * to change 'sth' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sth', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
  
      register_nav_menus(                      // wp3+ menus
      array( 
        'main_nav' => 'The Main Menu',   // main nav in header
        'micro_nav' => 'The Micro Menu',   // main nav in header
        'footer_links' => 'Footer Links' // secondary nav in footer
      )
    );  

  // default _s menu
	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus( array(
	//	'primary' => esc_html__( 'Primary Menu', 'sth' ),
	// ) );

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sth_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sth_setup
add_action( 'after_setup_theme', 'sth_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sth_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sth_content_width', 640 );
}
add_action( 'after_setup_theme', 'sth_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sth_widgets_init() {
  
	register_sidebar( array(
		'name'          => esc_html__( 'Panelled Sidebar', 'sth' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
  
  register_sidebar( array(
		'name'          => esc_html__( 'Plain Sidebar', 'sth' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
  
  
}
add_action( 'widgets_init', 'sth_widgets_init' );



// /////////////////////////////////
//
// Pagnation styles
//
// /////////////////////////////////

function next_posts_link_css ( $content ) {
    return 'class="next"';
}
add_filter( 'next_posts_link_attributes', 'next_posts_link_css' );

function previous_posts_link_css ( $content ) {
    return 'class="prev"';
}
add_filter( 'previous_posts_link_attributes', 'previous_posts_link_css' );


// /////////////////////////////////
//
// Excerpt styles
//
// /////////////////////////////////


// Update excerpt to include a link

function sth_excerpt_more( $more ) {
    return sprintf( '... <a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'sth_excerpt_more' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function sth_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'sth_custom_excerpt_length', 999 );



// Sidebars & Widgetizes Areas
function sth_register_footer() {
    
  register_sidebar(array(
    'id' => 'footer1',
    'name' => 'Footer 1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'footer2',
    'name' => 'Footer 2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'id' => 'footer3',
    'name' => 'Footer 3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  
  register_sidebar(array(
    'id' => 'footer4',
    'name' => 'Footer 4',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
    
  /* 
  to add more sidebars or widgetized areas, just copy
  and edit the above sidebar code. In order to call 
  your new sidebar just use the following code:
  
  Just change the name to whatever your new
  sidebar's id is, for example:
  
  To call the sidebar in your template, you can just copy
  the sidebar.php file and rename it to your sidebar's name.
  So using the above example, it would be:
  sidebar-sidebar2.php
  
  */
} // don't remove this bracket!
add_action( 'widgets_init', 'sth_register_footer' );

/**
 * Enqueue scripts and styles.
 */
function sth_scripts() {
  
	wp_enqueue_style( 'sth-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'sth_scripts' );


// enqueue javascript
if( !function_exists( "sth_theme_js" ) ) {  
  function sth_theme_js(){
    if ( !is_admin() ){
      if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1) ) 
        wp_enqueue_script( 'comment-reply' );
    }
    // This is the full Bootstrap js distribution file. If you only use a few components that require the js files consider loading them individually instead
    wp_register_script( 'bootstrap', 
      get_template_directory_uri() . '/js/bootstrap.js', 
      array('jquery'), 
      '1.2' );
    wp_register_script( 'app-js', 
      get_template_directory_uri() . '/js/app.js',
      array('bootstrap'), 
      '1.2' );
  
    wp_register_script( 'modernizr', 
      get_template_directory_uri() . '/js/modernizr.js', 
      array('jquery'), 
      '1.2' );

  
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'app-js' );
    wp_enqueue_script( 'modernizr' );
    // Add EU cookie to site. JS code set out in cookie.js.  
    wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/cookie.js' );

    $sthft_site = array(
      'url' => get_permalink( get_page_by_title( 'Privacy & Cookies' ) )
    );

    wp_localize_script( 'cookie', 'sthft_site', $sthft_site );
    
  }
}
add_action( 'wp_enqueue_scripts', 'sth_theme_js' );

/**
 * Remove Jetpack Form CSS
 */
add_filter( 'jetpack_implode_frontend_css', '__return_false' );
function remove_jp_styles() {
     wp_deregister_style('grunion.css');
}
add_action('wp_print_styles', 'remove_jp_styles');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//
// Custom Image size
//
add_image_size( 'marketing-cropped', 400, 300, true );


// Theme options page from ACF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/lib/template-tags.php';
require get_template_directory() . '/lib/sth_breadcrumbs.php';

/**
 * Bootstrap Walker and Nav Customization 
 */
require get_template_directory() . '/lib/bootstrap_nav.php';
require get_template_directory() . '/lib/shortcodes.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/lib/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/lib/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/sth_categories_to_pages.php';
// require get_template_directory() . '/lib/sth_googleanalytics.php';