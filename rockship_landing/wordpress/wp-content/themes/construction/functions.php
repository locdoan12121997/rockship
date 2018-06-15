<?php

define( 'CONSTRUCTION_THEME_NAME', 'construction' );
define( 'CONSTRUCTION_THEME_SLUG', 'construction' );
define( 'CONSTRUCTION_THEME_VERSION', '1.3' );

define( 'ALLOW_UNFILTERED_UPLOADS', true );

// Set up theme default and register various supported features.
if( !function_exists( 'construction_setup' ) ){

	function construction_setup(){

		// Make the theme available for translation.
		load_theme_textdomain( 'construction', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Set port default thumbnails
		set_post_thumbnail_size( 330, 210 );
		add_image_size( 'construction_75_75', 75, 75, true );
		add_image_size( 'construction_200_200', 200, 200, true );
		add_image_size( 'construction_311_110', 311, 110, true );
		add_image_size( 'construction_370_140', 370, 140, true );
		add_image_size( 'construction_370_190', 370, 190, true );
		add_image_size( 'construction_478_310', 478, 310, true );
		add_image_size( 'construction_1130_400', 1130, 400, true );
		
		// Register nav menus
		register_nav_menus(
			array(
				'top-menu' 		=> esc_html__( 'Top Menu', 'construction' ),
				'main-menu' 	=> esc_html__( 'Main Menu', 'construction' ),
				'footer-menu' 	=> esc_html__( 'Footer Menu', 'construction' )
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Enable support for Post Formats.
		// See https://developer.wordpress.org/themes/functionality/post-formats/
		add_theme_support('post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );

		// Remove gallery style css
		add_filter( 'use_default_gallery_style', '__return_false' );		
	}
	add_action( 'after_setup_theme', 'construction_setup' );
}

// Set up the content width value based on the theme's design.
if( !function_exists('construction_content_width') ){
	
	function construction_content_width(){
		$GLOBALS['content_width'] = apply_filters('construction_content_width', 1170);
	}
	add_action('after_setup_theme', 'construction_content_width', 0);

}

// TGM plugin activation
require_once( get_template_directory() . '/framework/tgm/required-plugins.php' );

// Check redux framework is available
if( class_exists( 'ReduxFramework' ) ){
	// Include theme option
	require_once( get_template_directory() . '/framework/redux/set-option.php' );
	require_once( get_template_directory() . '/inc/include/styling-options.php' );
	require_once( get_template_directory() . '/framework/redux/import-demo-data/import-demo-data.php' );
	require_once( get_template_directory() . '/framework/redux/import-demo-data/extensions/construction-extend-demo.php' );
}

// Enqueue scripts, styles and fonts.
require_once( get_template_directory() . '/inc/include/construction-style-script-font.php' );

// Helper functions
require_once( get_template_directory() . '/inc/functions/helper-functions.php' );
require_once( get_template_directory() . '/templates-part/header/favicon.php' );

// Widgets
require_once( get_template_directory() . '/inc/functions/widgets/recent-blog.php' );
require_once( get_template_directory() . '/inc/functions/widgets/latest-project.php' );
require_once( get_template_directory() . '/inc/functions/widgets/social-networks.php' );

if( class_exists( 'WooCommerce' ) ){
	require_once( get_template_directory() . '/inc/functions/widgets/woocommerce-header-cart.php' );
}

if( !function_exists('construction_include_composer') ){
	function construction_include_composer(){
		require_once( get_template_directory() . '/framework/visual-composer/init.php' );
	}
	add_action('init', 'construction_include_composer', 9999);
}

if( class_exists( 'WooCommerce' ) ){
	require_once( get_template_directory() . '/framework/woocommerce/init.php' );
}

// Register blog sidebar, footer and custom sidebar
if( !function_exists('construction_widgets_init') ){

	add_action( 'widgets_init', 'construction_widgets_init' );

	function construction_widgets_init(){
		
		// Default right sidebar
		register_sidebar( array(
			'name' 			=> esc_html__( 'Default Sidebar', 'construction' ),
			'id' 			=> 'default-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown in the default sidebar.', 'construction' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-boxes">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<div class="sidebar-title"><h4>',
			'after_title' 	=> '</h4></div>',
		) );

		// Register right sidebar
		register_sidebar( array(
			'name' 			=> esc_html__( 'Right Sidebar', 'construction' ),
			'id' 			=> 'right-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown in the right sidebar.', 'construction' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-boxes">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<div class="sidebar-title"><h4>',
			'after_title' 	=> '</h4></div>',
		) );

		// Register left sidebar
		register_sidebar( array(
			'name' 			=> esc_html__( 'Left Sidebar', 'construction' ),
			'id' 			=> 'left-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown in the left sidebar.', 'construction' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-boxes">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<div class="sidebar-title"><h4>',
			'after_title' 	=> '</h4></div>',
		) );

		// Register woocommerce sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'WooCommerce Sidebar', 'construction' ),
			'id'            => 'woocommerce-sidebar-widget',
			'description'   => esc_html__( 'Product page widget area', 'construction' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-boxes">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="sidebar-title"><h4>',
			'after_title'   => '</h4></div>',
		) );

		// Register footer section 1 sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Section 1', 'construction' ),
			'id'            => 'footer-section-1',
			'description'   => esc_html__( 'Appears in footer section 1', 'construction' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="footer-title">',
			'after_title'   => '</h6><div class="edge-seprator"></div>',
		) );
		
		// Register footer section 2 sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Section 2', 'construction' ),
			'id'            => 'footer-section-2',
			'description'   => esc_html__( 'Appears in footer section 2', 'construction' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="footer-title">',
			'after_title'   => '</h6><div class="edge-seprator"></div>',
		) );
		
		// Register footer section 3 sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Section 3', 'construction' ),
			'id'            => 'footer-section-3',
			'description'   => esc_html__( 'Appears in footer section 3', 'construction' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="footer-title">',
			'after_title'   => '</h6><div class="edge-seprator"></div>',
		) );
		
		// Register footer section 4 sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Section 4', 'construction' ),
			'id'            => 'footer-section-4',
			'description'   => esc_html__( 'Appears in footer section 4', 'construction' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="footer-title">',
			'after_title'   => '</h6><div class="edge-seprator"></div>',
		) );

		if( class_exists( 'WooCommerce' ) ){
	        register_sidebar( array(
				'name'          => esc_html__( 'WooCommerce Sidebar', 'construction' ),
				'id'            => 'woocommerce-sidebar-widget',
				'description'   => esc_html__( 'Product page widget area', 'construction' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-boxes">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="sidebar-title"><h4>',
				'after_title'   => '</h4></div>',
			) );

			register_sidebar( array(
	            'name'			=> esc_html__( 'WooCommerce Header Cart Widget', 'construction' ),
	            'id' 			=> 'woocommerce-header',
	            'description' 	=> esc_html__(' This widget area should be used only for WooCommerce Header Cart Widget', 'construction' ),
	            'before_widget' => '',
	            'after_widget' 	=> '',
	            'before_title' 	=> '',
	            'after_title' 	=> '',
	        ) );
		}
	}
}


add_filter( 'body_class', 'construction_custom_class' );
function construction_custom_class( $classes ){
	if( is_user_logged_in() ){
        $classes[] = 'admin-online';
    }
    return $classes;
}

add_action( 'after_setup_theme', 'construction_product_image_setup' ); 
function construction_product_image_setup() {
	add_theme_support( 'wc-product-gallery-lightbox' );
}