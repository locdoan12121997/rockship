<?php

add_theme_support( 'woocommerce' );

if( !function_exists( 'construction_add_woocommerce_style' ) ){
	function construction_add_woocommerce_style() {
		wp_enqueue_style( 'woocommerce-css', get_template_directory_uri() . '/css/construction-woocommerce-style.css', null, null );
	}
}
add_action( 'wp_enqueue_scripts', 'construction_add_woocommerce_style' );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '. 9 .';' ), 20 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

if( !function_exists('construction_product_per_age') ){
	function construction_product_per_age(){
		return 3;
	}
}
add_filter('loop_shop_columns', 'construction_product_per_age');

function woocommerce_output_related_products() {
	woocommerce_related_products( array( 'posts_per_page' =>3, 'columns' => 3 ) );
}

if( !function_exists('construction_product_image_open') ){
	function construction_product_image_open(){
		echo '<div class="img-wrap">';
	}
}
add_action( 'woocommerce_before_shop_loop_item_title', 'construction_product_image_open', 9, 2 );

if( !function_exists('construction_product_image_close') ){
	function construction_product_image_close(){
		echo '</div>';
	}
}
add_action( 'woocommerce_before_shop_loop_item_title', 'construction_product_image_close', 14, 2 );

function construction_product_open(){
	echo '<div class="product-inner">';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'construction_product_open', 14, 2 );

function construction_product_close(){
	echo '</div>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'construction_product_close', 12, 2 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 11 );

add_filter( 'woocommerce_breadcrumb_defaults', 'construction_woocommerce_breadcrumbs' );
function construction_woocommerce_breadcrumbs(){
  	return array(
    	'delimiter'   => '',
    	'wrap_before' => '<ul>',
    	'wrap_after'  => '</ul>',
    	'before'      => '<li>',
    	'after'       => '</li>',
    	'home'        => esc_html__( 'Home', 'construction' ),
  	);
}