<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

global $construction_options;

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

$page_structure = construction_sidebar_structure($page_sidebar_layout); ?>

<div class="main-part">
  	<div class="page-special margin-top-bottom-75"><?php
		if( $page_sidebar_layout == '3' || $page_sidebar_layout == '4' ){ ?>
			<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
				<?php construction_get_sidebar($page_sidebar_widget); ?>
			</div><?php
		} ?>

		<div class="<?php echo esc_attr( $page_structure[1] ); ?>"><?php 
  		
	  		do_action( 'woocommerce_before_main_content' );

	  		while ( have_posts() ) : the_post();

			wc_get_template_part( 'content', 'single-product' );

			endwhile;

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