<?php

Redux::setSection( $opt_name,
	array(
	    'title'            => esc_html__( 'Global Page Setting', 'construction' ),
	    'id'               => 'construction-global',
	    'icon'             => 'el-icon-brush el-icon-small'
	) 
);

// General
Redux::setSection( $opt_name,
	array(
	    'title'  		=> esc_html__( 'General', 'construction' ),
	    'id'     		=> 'global-general',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       		=> 'page_content_bk_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Content Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Choose the content background color', 'construction' ),
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'page_body_bk_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Body Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Choose the body background color', 'construction' ),
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'		=> 'page_body_bk_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Body Background Image', 'construction' ),
	            'read-only'	=> false,	            
	            'subtitle'	=> esc_html__( 'Choose the body background image', 'construction' ),
	        ),

	        array(
	            'id'       => 'page_body_bk_image_100',
	            'type'     => 'select',
	            'title'    => esc_html__( '100% Background Image', 'construction' ),
	            'subtitle' => esc_html__( 'Choose the 100% background image option', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'no'
	        ),

	        array(
	            'id'       => 'page_body_bk_image_repeat',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Background Repeat', 'construction' ),
	            'subtitle' => esc_html__( 'Choose the background image repeat option', 'construction' ),
	            'options'  => array(
					                '0' => esc_attr__( 'No repeat', 'construction' ),
                                	'1' => esc_attr__( 'Repeat both vertically and horizontally', 'construction' ),
                                	'2' => esc_attr__( 'Repeat only horizontally', 'construction' ),
                                	'3' => esc_attr__( 'Repeat only vertically', 'construction' ),
					            ),
	            'default'  => '0'
	        ),
	    )
	)
);

// Header
Redux::setSection( $opt_name,
	array(
	    'title'  		=> esc_html__( 'Header', 'construction' ),
	    'id'     		=> 'global-header',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       => 'page_show_top_bar',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Top Bar', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show header on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'yes'
	        ),

	        array(
	            'id'       => 'page_show_menu',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Page Menu', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show header on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'yes'
	        ),

	        array(
	            'id'       => 'header_sticky_on_scroll',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Sticky Header', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option it will be displayed when the user scrolls down the page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'yes'
	        ),

	        array(
	            'id'       => 'page_show_title_area',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Title Area', 'construction' ),
	            'subtitle' => esc_html__( 'Disabling this option will turn off page title area', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'yes'
	        ),

	        array(
	            'id'       => 'page_show_title',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Page Title', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show title on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'yes'
	        ),

	        array(
	            'id'       => 'page_show_breadcrumbs',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Breadcrumbs', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show Breadcrumbs on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  => 'yes'
	        ),	        
	    )
	)
);

// Banner Image
Redux::setSection( $opt_name,
	array(
	    'title'  		=> esc_html__( 'Banner Image', 'construction' ),
	    'id'     		=> 'global-banner-image',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'		=> 'page_banner_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Page Banner Image', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/inner-bk.jpg' ),
	            'subtitle'	=> esc_html__( 'Choose the page banner imag', 'construction' ),
	        ),

	        array(
	            'id'		=> 'post_banner_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Post Banner Image', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/inner-bk.jpg' ),
	            'subtitle'	=> esc_html__( 'Choose the Post banner imag', 'construction' ),
	        ),

	        array(
	            'id'		=> 'service_banner_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Service Banner Image', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/inner-bk.jpg' ),
	            'subtitle'	=> esc_html__( 'Choose the Service banner imag', 'construction' ),
	        ),

	        array(
	            'id'		=> 'project_banner_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Project Banner Image', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/inner-bk.jpg' ),
	            'subtitle'	=> esc_html__( 'Choose the Project banner imag', 'construction' ),
	        ),	        
	    )
	)
);

// Sidebar
Redux::setSection( $opt_name,
	array(
	    'title'  		=> esc_html__( 'Sidebar', 'construction' ),
	    'id'     		=> 'global-sidebar',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       => 'page_sidebar_layout',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Layout', 'construction' ),
	            'subtitle' => esc_html__( 'Choose the sidebar layout', 'construction' ),
	            'options'  => array(
					                'none' => esc_html__( 'No Sidebar', 'construction' ),
	                                'default' => esc_html__( 'Default', 'construction' ),
	                                '1' => esc_html__( 'Sidebar 1/3 right', 'construction' ),
	                                '2' => esc_html__( 'Sidebar 1/4 right', 'construction' ),
	                                '3' => esc_html__( 'Sidebar 1/3 left', 'construction' ),
	                                '4' => esc_html__( 'Sidebar 1/4 left', 'construction' ),
					            ),
	            'default'  	=> 'default'
	        ),

	        array(
	            'id'       => 'page_sidebar_widget',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Choose Widget Area in Sidebar', 'construction' ),
	            'subtitle' => esc_html__( 'Choose Custom Widget area to display in Sidebar', 'construction' ),
	            'options'  => array(
						            'default-sidebar' => esc_html__( 'Default Sidebar', 'construction' ),
									'right-sidebar' => esc_html__( 'Right Sidebar', 'construction' ),
									'left-sidebar' => esc_html__( 'Left Sidebar', 'construction' ),
									'woocommerce-sidebar-widget' => esc_html__( 'WooCommerce Sidebar', 'construction' ),
									'footer-section-1' => esc_html__( 'Footer Section 1', 'construction' ),
									'footer-section-2' => esc_html__( 'Footer Section 2', 'construction' ),
									'footer-section-3' => esc_html__( 'Footer Section 3', 'construction' ),
									'footer-section-4' => esc_html__( 'Footer Section 4', 'construction' ),
									'woocommerce-header' => esc_html__( 'WooCommerce Header Cart Widget', 'construction' ),
								),
	            'default'  => 'default-sidebar',
	            'required' 	=> array( 'page_sidebar_layout', '!=', 'none' ),
	        ),	        
	    )
	)
);

// Footer
Redux::setSection( $opt_name,
	array(
	    'title'  		=> esc_html__( 'Footer', 'construction' ),
	    'id'     		=> 'global-footer',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       => 'page_show_footer',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Footer Area', 'construction' ),
	            'subtitle' => esc_html__( 'Disabling this option will turn off page footer area', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  	=> 'yes'
	        ),

	        array(
	            'id'       => 'page_show_top_footer',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Top Footer', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show top footer on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  	=> 'yes',
	            'required' 	=> array( 'page_show_footer', '=', 'yes' ),

	        ),

	        array(
	            'id'       => 'page_show_bottom_footer',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Center Footer', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show center footer on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  	=> 'yes',
	            'required' 	=> array( 'page_show_footer', '=', 'yes' ),
	        ),

	        array(
	            'id'       => 'page_show_bottom_bottom_footer',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Show Bottom Footer', 'construction' ),
	            'subtitle' => esc_html__( 'Enabling this option will show bottom footer on your page', 'construction' ),
	            'options'  => array(
					                'yes' => esc_html__( 'Yes', 'construction' ),
                                	'no' => esc_html__( 'No', 'construction' ),
					            ),
	            'default'  	=> 'yes',
	            'required' 	=> array( 'page_show_footer', '=', 'yes' ),
	        ),	        
	    )
	)
);

?>