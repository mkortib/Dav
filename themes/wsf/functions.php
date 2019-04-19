<?php



if ( ! function_exists( 'wsf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since wsf 1.0
 */
function wsf_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wsf, use a find and replace
	 * to change 'wsf' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wsf', get_template_directory() . '/languages' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(false);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'wsf' ),
		'social'  => __( 'Social Links Menu', 'wsf' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif; // wsf_setup
add_action( 'after_setup_theme', 'wsf_setup' );
remove_action ('wp_head', 'wp_generator');
remove_filter('the_content', 'wptexturize');

add_action( 'wp_ajax_do_something',        'do_something_callback' ); // For logged in users
add_action( 'wp_ajax_nopriv_do_something', 'do_something_callback' ); // For anonymous users

function do_something_callback(){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$subject = 'Callback';

	$to      = 'weboss@info.com';
	$message = "Name: $name<br>Phone: $phone";

	$header = "From: licmedia@info.com\r\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-Type: text/html; charset=utf-8\r\n";
	$header.= "X-Priority: 1\r\n";

	mail($to, $subject, $message, $header);
	wp_die();
}

/**
 * Register widget area.
 *
 * @since wsf 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wsf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'wsf' ),
		'id'            => 'sidebar-1'
	) );
}
add_action( 'widgets_init', 'wsf_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since wsf 1.0
 */
function wsf_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/bxslider.css' );
	wp_enqueue_style( 'fancybox', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" );
    wp_enqueue_style( 'owlcarousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css" );
    wp_enqueue_style( 'fawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
    wp_enqueue_style( 'wsf-style', get_stylesheet_uri() );
    wp_enqueue_style( 'owlcarousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css" );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/viewport.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/mask.js', array( 'jquery' ), '20150330', true );
    wp_enqueue_script( 'owlcarousel',"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js", array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'fancy',"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js", array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/bxslider.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'wsf-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
    wp_enqueue_script( 'owlcarousel',"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js", array( 'jquery' ), '20150330', true );
}
add_action( 'wp_enqueue_scripts', 'wsf_scripts' );


add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t ){
    foreach( (array) get_the_category() as $cat ){
        if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
        if($cat->parent){
            $cat = get_the_category_by_ID( $cat->parent );
            if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
        }
    }
    return $t;
}

