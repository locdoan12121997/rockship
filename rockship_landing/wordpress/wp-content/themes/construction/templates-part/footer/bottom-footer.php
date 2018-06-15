<?php

if( class_exists( 'WooCommerce' ) ){
  	if( is_shop() ){
  		$page_id = get_option( 'woocommerce_shop_page_id' );
  	} else {
  		$page_id = construction_get_page_id();	
  	}
} else {
  	$page_id = construction_get_page_id();
}

global $construction_options;

$page_show_bottom_bottom_footer = true;   
$show_bottom_bottom_footer = get_post_meta( $page_id, "page_show_bottom_bottom_footer", true );
if( empty($show_bottom_bottom_footer) || $show_bottom_bottom_footer == 'global' ){
  $page_show_bottom_bottom_footer = $construction_options['page_show_bottom_bottom_footer'];
  if( $page_show_bottom_bottom_footer == 'no' ){
    $page_show_bottom_bottom_footer = false;
  } else {
    $page_show_bottom_bottom_footer = true;
  }       
} elseif( get_post_meta( $page_id, "page_show_bottom_bottom_footer", true) == 'yes' ){
  $page_show_bottom_bottom_footer = true;
} elseif( get_post_meta( $page_id, "page_show_bottom_bottom_footer", true) == 'no' ){
  $page_show_bottom_bottom_footer = false;
}

global $construction_options;

if( $page_show_bottom_bottom_footer ){	

	$footer_bottom = $construction_options['construction_footer_bottom'];
	
	$footer_logo = '';
	if( !empty( $construction_options['construction_footer_bottom_logo'] ) ){
		$footer_logo = '<img src="'.esc_url($construction_options['construction_footer_bottom_logo']['url']).'" alt="'.sprintf( esc_html__( '%s', 'construction' ), get_bloginfo( "name" ) ).'">';
	}
	
	$footer_menu = '';
	if( has_nav_menu('footer-menu') ){
		$menuParameters = array( 'theme_location' => 'footer-menu', 'container' => false, 'echo' => false, 'items_wrap' => '%3$s', 'depth' => 0 );
		$footer_menu = strip_tags( wp_nav_menu( $menuParameters ), '<a>' );
	}

	$footer_copyright = '';
	if( !empty( $construction_options['construction_footer_bottom_copyright'] ) ){
		$footer_copyright = $construction_options['construction_footer_bottom_copyright'];
	} ?>

	<div class="special-bottom-footer">
    	<div class="container">
    		<div class="row">
		    	<div class="copyright-inner">
					<div class="footer-navi text-center"><?php
						switch( $footer_bottom ){
							case 1: 
								printf( esc_html__( '%s', 'construction' ), $footer_logo );
							break;

							case 2:	
								printf( esc_html__( '%s', 'construction' ), $footer_menu );
							break;

							case 3:	
								printf( esc_html__( '%s', 'construction' ), $footer_copyright );
							break;

							case 4:	
								get_template_part( 'templates-part/footer/followus', 'bottom' );
							break;

							case 5:	
								get_template_part( 'templates-part/footer/newsletter', 'bottom' );
							break;
						} ?>
					</div>					
				</div>
			</div>
	    </div>
	</div><?php
} ?>