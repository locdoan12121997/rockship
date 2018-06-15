<?php
/**
 * @package construction
 * @since construction 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> ><?php
	global $construction_options;
	if( $construction_options['show_pre_loader'] == 'yes' ){
		$show_pre_loader = true;
	} else {
		$show_pre_loader = false;
	}
	if( $show_pre_loader ){
		get_template_part( 'templates-part/header/pre', 'loader' );
	} ?>
	<div class="wrapper">
		<header><?php
			if( $construction_options['header_type'] == '4' ){
				get_template_part( 'templates-part/header/header', 'v4' );
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
				
				$header_sticky_on_scroll = true;
				$sticky_on_scroll = get_post_meta( $page_id, "header_sticky_on_scroll", true );
				if( empty($sticky_on_scroll) || $sticky_on_scroll == 'global' ){
					$header_sticky_on_scroll = $construction_options['header_sticky_on_scroll'];
					if( $header_sticky_on_scroll == 'no' ){
						$header_sticky_on_scroll = '';
					} else {
						$header_sticky_on_scroll = 'sticky';
					}				
				} elseif( get_post_meta( $page_id, "header_sticky_on_scroll", true ) == 'yes' ){
					$header_sticky_on_scroll = 'sticky';
				} elseif( get_post_meta( $page_id, "header_sticky_on_scroll", true ) == 'no' ){
				  	$header_sticky_on_scroll = '';
				}

				$header_type = '';
				if( $construction_options['header_type'] == '1' ){
					$header_type = 'header-slot';
				} elseif( $construction_options['header_type'] == '2' && is_front_page() ){
				  	$header_type = 'header-transparent';
				} elseif( $construction_options['header_type'] == '3' && is_front_page() ){
				  	$header_type = 'header-base';
				  	echo '<div class="slider-main">';
				  		echo do_shortcode( $construction_options['top_slider_shortcode'] );
				  	echo '</div>';
				} ?>
	        	
	        	<div class="header-main <?php echo esc_attr( $header_type ); ?> <?php echo esc_attr($header_sticky_on_scroll); ?>"><?php
					if( class_exists( 'WooCommerce' ) ){
					  	if( is_shop() ){
					  		$page_id = get_option( 'woocommerce_shop_page_id' );
					  	} else {
					  		$page_id = construction_get_page_id();	
					  	}
					} else {
					  	$page_id = construction_get_page_id();
					}

					$page_show_top_bar = true;
					$show_top_bar = get_post_meta( $page_id, "page_show_top_bar", true );
					if( empty($show_top_bar) || $show_top_bar == 'global' ){
						$page_show_top_bar = $construction_options['page_show_top_bar'];
						if( $page_show_top_bar == 'no' ){
							$page_show_top_bar = false;
						} else {
							$page_show_top_bar = true;
						}
					} elseif( get_post_meta( $page_id, "page_show_top_bar", true) == 'yes' ){
						$page_show_top_bar = true;
					} elseif( get_post_meta( $page_id, "page_show_top_bar", true) == 'no' ){
						$page_show_top_bar = false;
					}

					if( $page_show_top_bar && $construction_options['header_type'] != '3' ){
						get_template_part( 'templates-part/header/top', 'bar' );
					}

					if( ! is_404() ){
						$page_show_menu = true;
						$show_menu = get_post_meta( $page_id, "page_show_menu", true );
						if( empty($show_menu) || $show_menu == 'global' ){
							$page_show_menu = $construction_options['page_show_menu'];
							if( $page_show_menu == 'no' ){
								$page_show_menu = false;
							} else {
								$page_show_menu = true;
							}
						} elseif( get_post_meta( $page_id, "page_show_menu", true) == 'yes' ){
							$page_show_menu = true;
						} elseif( get_post_meta( $page_id, "page_show_menu", true) == 'no' ){
							$page_show_menu = false;
						}

						if( $page_show_menu ){
							get_template_part( 'templates-part/header/menu' );
						}

						$page_show_title_area = true;
						$show_title_area = get_post_meta( $page_id, "page_show_title_area", true );
						if( empty($show_title_area) || $show_title_area == 'global' ){
							$page_show_title_area = $construction_options['page_show_title_area'];
							if( $page_show_title_area == 'no' ){
								$page_show_title_area = false;
							} else {
								$page_show_title_area = true;
							}
						} elseif( get_post_meta( $page_id, "page_show_title_area", true) == 'yes' ){
							$page_show_title_area = true;
						} elseif( get_post_meta( $page_id, "page_show_title_area", true) == 'no' ){
							$page_show_title_area = false;
						}
						if( $page_show_title_area ){
							get_template_part( 'templates-part/header/page', 'title' );
						}
					} ?>
				</div><?php
			} ?>
		</header>
		<div class="container">