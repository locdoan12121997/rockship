<?php

if( class_exists( 'WooCommerce' ) ){
	
	// WooCommerce Options
	Redux::setSection( $opt_name, 
		array(
		    'title'  => esc_html__( 'WooCommerce', 'construction' ),
		    'desc'   => esc_html__( 'Customize Woocommerce', 'construction' ),
		    'id'     => 'woocommerce',	    
		    'icon'   => 'el-shopping-cart el-icon-small',
		    'fields' => array(	        

		        array(
	                'id'     => 'section-header-cart',
	                'type'   => 'info',
	                'notice' => false,
	                'style'  => 'info',
	                'title'  => esc_html__( 'Header Cart Setting', 'construction' ),
	                'desc'   => ''
	            ),

		        array(
		            'id'       => 'woocommerce_header_cart',
		            'type'     => 'switch',
		            'title'    => esc_html__( 'Show/Hide Cart in Header', 'construction' ),
		            'subtitle' => esc_html__( 'Enable/Disable WooCommerce Cart in Header Area.', 'construction' ), 
		            'default'  => 1,
		            'on'       => esc_html__( 'Enable', 'construction' ),
		            'off'      => esc_html__( 'Disable', 'construction' ),
		        ),

		        array(
	                'id'     => 'section-woocommerce-global',
	                'type'   => 'info',
	                'notice' => false,
	                'style'  => 'info',
	                'title'  => esc_html__( 'WooCommerce Archive Page Setting', 'construction' ),
	                'desc'   => ''
	            ),

		        array(
		            'id'		=> 'woo_banner_image',
		            'url'		=> true,
		            'type'		=> 'media',
		            'title'		=> esc_html__( 'Page Banner Image', 'construction' ),
		            'read-only'	=> false,
		            'default'   => array( 'url' => get_template_directory_uri() .'/images/inner-bk.jpg' ),
		            'subtitle'	=> esc_html__( 'Choose the page banner imag', 'construction' ),
		        ),

		        array(
		            'id'            => 'woo_sidebar_layout',
		            'title'         => esc_html__( 'Sidebar Layout', 'construction' ),
		            'subtitle'      => esc_html__( 'Choose the sidebar layout', 'construction' ),
		            'type'          => 'select',
		            'options'       => array(
		                                'global' => esc_html__( 'Global', 'construction' ),
		                                'none' => esc_html__( 'No Sidebar', 'construction' ),
		                                'default' => esc_html__( 'Default', 'construction' ),
		                                '1' => esc_html__( 'Sidebar 1/3 right', 'construction' ),
		                                '2' => esc_html__( 'Sidebar 1/4 right', 'construction' ),
		                                '3' => esc_html__( 'Sidebar 1/3 left', 'construction' ),
		                                '4' => esc_html__( 'Sidebar 1/4 left', 'construction' ),
		                            ),
		            'default'       => 'global',		            
		        ),
		    ),
		)
	);
}

?>