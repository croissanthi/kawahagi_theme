<?php
/**
 * Kawahagi Wo Mederukai functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kawahagi_Wo_Mederukai
 */


//画像のパス短縮用
//function imagepassshort($arg) {
//    $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
//    return $content;
//}
//add_action('the_content', 'imagepassshort');

if ( ! function_exists( 'kawahagi_love_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kawahagi_love_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Kawahagi Wo Mederukai, use a find and replace
     * to change 'kawahagi_love' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'kawahagi_love', get_template_directory() . '/languages' );

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
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'kawahagi_love' ),
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

    /*
     * Enable support for Post Formats.
     * See https://developer.wordpress.org/themes/functionality/post-formats/
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'kawahagi_love_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif;
add_action( 'after_setup_theme', 'kawahagi_love_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kawahagi_love_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kawahagi_love_content_width', 640 );
}
add_action( 'after_setup_theme', 'kawahagi_love_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kawahagi_love_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'kawahagi_love' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'kawahagi_love' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'kawahagi_love_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kawahagi_love_scripts() {
    wp_enqueue_style( 'kawahagi_love-style', get_stylesheet_uri() );

    wp_enqueue_script( 'kawahagi_love-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'kawahagi_love-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kawahagi_love_scripts' );

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

//独自CSS
function my_styles() {
    wp_enqueue_style( 'kawahagi', get_bloginfo( 'stylesheet_directory') . '/css/kawahagi.min.css', array(), null, 'all');
    wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css', array(), null, 'all');
    wp_enqueue_style( 'fancybox', get_bloginfo( 'stylesheet_directory') . '/fancybox/jquery.fancybox-1.3.4.css', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'my_styles');

//独自JS
function my_scripts() {
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3');
    }
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), false, false );
    wp_enqueue_script( 'fancybox', get_bloginfo( 'stylesheet_directory') . '/fancybox/jquery.fancybox-1.3.4.pack.js', array('jquery'), false, false );
    wp_enqueue_script( 'ticker', get_bloginfo( 'stylesheet_directory') . '/js/jquery.simpleTicker.js', array('jquery'), false, false );
    wp_enqueue_script( 'kawahagi', get_bloginfo( 'stylesheet_directory') . '/js/kawahagi.min.js', array('slick', 'fancybox', 'ticker'), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts');
