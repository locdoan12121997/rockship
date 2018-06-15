<?php

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

$page_show_title = true;
$show_title = get_post_meta( $page_id, "page_show_title", true );
if( empty($show_title) || $show_title == 'global' ){
	$page_show_title = $construction_options['page_show_title'];
	if( $page_show_title == 'no' ){
		$page_show_title = false;
	} else {
		$page_show_title = true;
	}
} elseif( get_post_meta( $page_id, "page_show_title", true ) == 'yes' ){
	$page_show_title = true;
} elseif( get_post_meta( $page_id, "page_show_title", true ) == 'no' ){
	$page_show_title = false;
}

$page_show_breadcrumbs = true;
$show_breadcrumbs = get_post_meta( $page_id, "page_show_breadcrumbs", true );
if( empty($show_breadcrumbs) || $show_breadcrumbs == 'global' ){
	$page_show_breadcrumbs = $construction_options['page_show_breadcrumbs'];
	if( $page_show_breadcrumbs == 'no' ){
		$page_show_breadcrumbs = false;
	} else {
		$page_show_breadcrumbs = true;
	}
} elseif( get_post_meta( $page_id, "page_show_breadcrumbs", true ) == 'yes' ){
	$page_show_breadcrumbs = true;
} elseif( get_post_meta( $page_id, "page_show_breadcrumbs", true ) == 'no' ){
	$page_show_breadcrumbs = false;
}

global $construction_options;

$banner_image = get_post_meta( $page_id, "page_banner_image", true );

if( !empty( $construction_options ) ){
	if( is_archive() ){
		if( isset($construction_options['archive_page_image']['url']) ){
			$page_banner_image = $construction_options['archive_page_image']['url'];
		}
	} else if( is_search() ){
		if( isset($construction_options['search_page_image']['url']) ){
			$page_banner_image = $construction_options['search_page_image']['url'];
		}
	} else if( is_404() ){
		if( isset($construction_options['404_page_image']['url']) ){
			$page_banner_image = $construction_options['404_page_image']['url'];
		}
	}
}

if( !empty($banner_image) ){
	$page_banner_image = wp_get_attachment_url( $banner_image );
}

if( empty($page_banner_image) ){
	if( is_page() && !empty($construction_options['page_banner_image']['url']) ){
		$page_banner_image = $construction_options['page_banner_image']['url'];
	
	} elseif( is_single() && !empty($construction_options['post_banner_image']['url']) ){
		$page_banner_image = $construction_options['post_banner_image']['url'];
	
	} elseif( is_singular( 'service' ) && !empty($construction_options['service_banner_image']['url']) ){
		$page_banner_image = $construction_options['service_banner_image']['url'];
	
	} elseif( is_singular( 'project' ) && !empty($construction_options['project_banner_image']['url']) ){
		$page_banner_image = $construction_options['project_banner_image']['url'];
	}
}

if( is_tax('projects') && !empty($construction_options['project_cateogry_image']['url']) ){
	$page_banner_image = $construction_options['project_cateogry_image']['url'];
}

if( class_exists( 'WooCommerce' ) && ( is_product_category() || is_product_tag() ) ){
	if( !empty($construction_options['woo_banner_image']['url']) ){
		$page_banner_image = $construction_options['woo_banner_image']['url'];
	}	
}

if( !empty($page_banner_image) ){ ?>
	<section class="title-bread-main header-line-bg" style="background-image: url('<?php echo esc_url( $page_banner_image ); ?>');">
		<div class="container">
			<div class="header-line-inner">
				<div class="title-bread-left">
					<h2><?php 
					if( $page_show_title ){
						if( class_exists( 'WooCommerce' ) && is_shop() ){
							$page_id = get_option( 'woocommerce_shop_page_id' );
							$page_title = get_the_title($page_id);
							printf( esc_html__( '%s', 'construction' ), $page_title );

						} else if( class_exists( 'WooCommerce' ) && is_product_category() ){
							$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
							printf( esc_html__( '%s', 'construction' ), $current_term->name );

						} else if( $page_id == '0' ){
							esc_html_e( 'Blog', 'construction' );
						
						} else if( is_tax('projects') ){
							$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
							printf( esc_html__( '%s', 'construction' ), $current_term->name );
						
						} else {
							echo get_the_title($page_id); 
						}
					} ?></h2>
				</div>
				<div class="bread-right">
					<?php 
					if( class_exists( 'WooCommerce' ) && is_woocommerce() ){
						echo woocommerce_breadcrumb();
					} else { ?>
						<ul><?php
							if( $page_show_breadcrumbs ){
								construction_breadcrumbs();
							} ?>
						</ul><?php
					} ?>
				</div>	
			</div>
		</div>
	</section><?php
} else { ?>
	<section class="title-bread-main header-line-bg">
		<div class="container">
			<div class="header-line-inner">
				<div class="title-bread-left">
					<h2><?php 
					if( $page_show_title ){
						if( class_exists( 'WooCommerce' ) && is_shop() ){
							$page_id = get_option( 'woocommerce_shop_page_id' );
							$page_title = get_the_title($page_id);
							printf( esc_html__( '%s', 'construction' ), $page_title );

						} else if( class_exists( 'WooCommerce' ) && is_product_category() ){
							$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
							printf( esc_html__( '%s', 'construction' ), $current_term->name );

						} else if( $page_id == '0' ){
							esc_html_e( 'Blog', 'construction' );
						
						} else if( is_tax('projects') ){
							$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
							printf( esc_html__( '%s', 'construction' ), $current_term->name );
						
						} else {
							echo get_the_title($page_id); 
						}
					} ?></h2>
				</div>
				<div class="bread-right">
					<?php 
					if( class_exists( 'WooCommerce' ) && is_woocommerce() ){
						echo woocommerce_breadcrumb();
					} else { ?>
						<ul><?php
							if( $page_show_breadcrumbs ){
								construction_breadcrumbs();
							} ?>
						</ul><?php
					} ?>
				</div>	
			</div>
		</div>
	</section><?php
}