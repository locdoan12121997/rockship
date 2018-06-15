<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

global $construction_options;

if( is_product_category() || is_product_tag() ){
	$page_sidebar_layout = '';
	$woo_sidebar_layout = $construction_options['woo_sidebar_layout'];
	if( empty($woo_sidebar_layout) || $woo_sidebar_layout == 'global' ){
	  $page_sidebar_layout = $construction_options['page_sidebar_layout'];
	} else {
	  $page_sidebar_layout = $woo_sidebar_layout;
	}

	$page_sidebar_widget = '';
	$sidebar_widget = 'woocommerce-sidebar-widget';
	if( empty($sidebar_widget) || $sidebar_widget == 'global' ){
	  $page_sidebar_widget = $construction_options['page_sidebar_widget'];
	} else {
	  $page_sidebar_widget = $sidebar_widget;
	}

	$page_structure = construction_sidebar_structure($page_sidebar_layout);
} else {
	if( class_exists( 'WooCommerce' ) ){
	  	if( is_shop() ){
	  		$page_id = get_option( 'woocommerce_shop_page_id' );
	  	} else {
	  		$page_id = construction_get_page_id();	
	  	}
	} else {
	  	$page_id = construction_get_page_id();
	}

	$page_sidebar_layout = '';
	$sidebar_layout = get_post_meta( $page_id, 'page_sidebar_layout' );
	if( empty($sidebar_layout[0]) || $sidebar_layout[0] == 'global' ){
	  $page_sidebar_layout = $construction_options['page_sidebar_layout'];
	} else {
	  $page_sidebar_layout = $sidebar_layout[0];
	}

	$page_sidebar_widget = '';
	$sidebar_widget = get_post_meta( $page_id, 'page_sidebar_widget' );
	if( empty($sidebar_widget[0]) || $sidebar_widget[0] == 'global' ){
	  $page_sidebar_widget = $construction_options['page_sidebar_widget'];
	} else {
	  $page_sidebar_widget = $sidebar_widget[0];
	}

	$page_structure = construction_sidebar_structure($page_sidebar_layout);
} ?>

<div class="main-part">
  	<div class="page-special margin-top-bottom-75"><?php
		if( $page_sidebar_layout == '3' || $page_sidebar_layout == '4' ){ ?>
			<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
				<?php construction_get_sidebar($page_sidebar_widget); ?>
			</div><?php
		} ?>

		<div class="<?php echo esc_attr( $page_structure[1] ); ?>"><?php 
  		
	  		do_action( 'woocommerce_before_main_content' );

	  		if ( have_posts() ) :
	  			
	  			do_action( 'woocommerce_before_shop_loop' );

	    		woocommerce_product_loop_start();

				woocommerce_product_subcategories();

				while ( have_posts() ) : the_post();
					do_action( 'woocommerce_shop_loop' );
					
					wc_get_template_part( 'content', 'product' );
				endwhile;

				woocommerce_product_loop_end();
				
				do_action( 'woocommerce_after_shop_loop' );
				
			elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) :

				do_action( 'woocommerce_no_products_found' );

			endif;

			do_action( 'woocommerce_after_main_content' ); ?>
	  	</div><?php
		if( $page_sidebar_layout == 'default' || $page_sidebar_layout == '1' || $page_sidebar_layout == '2' ){ ?>
			<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
		  		<?php construction_get_sidebar($page_sidebar_widget); ?>
			</div><?php
	  	} ?>
  </div>
</div><?php

get_footer();