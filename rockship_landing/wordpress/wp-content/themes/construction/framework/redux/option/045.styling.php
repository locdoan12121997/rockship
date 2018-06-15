<?php

Redux::setSection( $opt_name, 
	array(
	    'title'            => esc_html__( 'Styling', 'construction' ),
	    'id'               => 'construction-styling',
	    'icon'             => 'el-icon-brush el-icon-small'
	) 
);

// Body
Redux::setSection( $opt_name,
	array(
	    'title'  		=> esc_html__( 'Body', 'construction' ),
	    'id'     		=> 'styling-body',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       		=> 'body_color_one',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Color 1 ', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Choose body font color 1', 'construction' ),
	            'default'  		=> '#666666',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'body_color_two',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Color 2', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Choose body font color 2', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'body_heading',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Heading Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Choose heading color', 'construction' ),
	            'default'  		=> '#3f3f3f',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'body_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Choose body background color', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'construction_primary_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Primary Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick website primary color.', 'construction' ),
	            'default'  		=> '#ffa000',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       => 'construction_primary_color_hover',
	            'type'     => 'color',
	            'title'    => esc_html__( 'Primary Hover Color', 'construction' ),
	            'subtitle' => esc_html__( 'Pick website primary hover color.', 'construction' ),
	            'default'  => '#e18f06',
	            'transparent' 	=> false
	        ),
	    )
	)
);


// Headers
Redux::setSection( $opt_name, 
	array(
	    'title'  		=> esc_html__( 'Headers', 'construction' ),
	    'id'     		=> 'styling-headers',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       		=> 'header_bg',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Background Color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffffff',
	            'mode'     		=> 'background',
	            'transparent' 	=> false
	        ),

	        array(
	            'id'       		=> 'header_bg_sticky',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Sticky Header Background Color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffffff',
	            'mode'     		=> 'background',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'header_links_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#666666',
	            'transparent' 	=> false
	        ),

	        array(
	            'id'       		=> 'header_links_color_on_sticky',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links color for sticky menu', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#666666',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'header_links_hover_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links Hover color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#1a1a1d',
	            'transparent' 	=> false	            
	        ),
	        
	        array(
	            'id'       		=> 'header_border_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Link Hover Border color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffa000',
	            'transparent' 	=> false
	        ),
	        
	        // Submenu
	        array(
	            'id'     => 'info-header-submenu',
	            'type'   => 'info',
	            'notice' => false,
	            'style'  => 'info',
	            'title'  => esc_html__( 'Sub Menu Dropdown', 'construction' ),
	            'desc'   => ''
	        ),
	        
	        array(
	            'id'       		=> 'header_submenu_bg',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Background Color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#1a1a1d',
	            'mode'     		=> 'background',
	            'transparent' 	=> false
	        ),

	        array(
	            'id'       		=> 'header_submenu_links_hover_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links Hover Background color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#313134',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'header_submenu_links_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false
	        ),

	        array(
	            'id'       		=> 'header_submenu_links_hover_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links Hover color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false
	        ),

	        array(
	            'id'       		=> 'header_submenu_border_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Submenu Hover Border color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffa000',
	            'transparent' 	=> false
	        ),	        
	    )
	)
);

// Top Bar
Redux::setSection( $opt_name, 
	array(
	    'title'  		=> esc_html__( 'Top Bar', 'construction' ),
	    'id'     		=> 'styling-top-bar',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(

	        array(
	            'id'       		=> 'top_bar_bg',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Background Color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#212124',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'top_bar_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#cccccc',
	            'transparent' 	=> false
	        ),

	        array(
	            'id'       		=> 'top_bar_color_hover',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Hover Color', 'construction' ),
	            'subtitle' 		=> '',
	            'default'  		=> '#ffa000',
	            'transparent' 	=> false
	        ),	        
	    )
	)
);

// Mobile Navigation
Redux::setSection( $opt_name, 
	array(
	    'title'  		=> esc_html__( 'Mobile Menu', 'construction' ),
	    'id'     		=> 'styling-mobile-menu',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(
	        
	        array(
	            'id'       		=> 'mob_menu_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Menu Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick background color for mobile menu', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'mob_menu_btn_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Menu Button Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick color for mobile menu button', 'construction' ),
	            'default'  		=> '#ffa000',
	            'transparent' 	=> false

	        ),

	        array(
	            'id'       		=> 'mob_submenu_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Link Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick mobile menu links background color', 'construction' ),
	            'default'  		=> '#0c1923',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'mob_link_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick mobile menu links color', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false
	        ),
	        
	        array(
	            'id'       		=> 'mob_link_hover_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Links Hover Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick mobile menu links hover color', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false
	        ),	        	        
	    )
	)
);

// Footer
Redux::setSection( $opt_name, 
	array(
	    'title'  		=> esc_html__( 'Footer', 'construction' ),
	    'id'     		=> 'styling-footer',
	    'desc'   		=> '',
	    'subsection' 	=> true,
	    'fields' 		=> array(

	        // Top Footer
	        array(
	            'id'     => 'info-top-footer',
	            'type'   => 'info',
	            'notice' => false,
	            'style'  => 'info',
	            'title'  => esc_html__( 'Top Footer', 'construction' ),
	            'desc'   => ''
	        ),

	        array(
	            'id'       		=> 'footer_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__('Pick footer background color', 'construction'),
	            'default'  		=> '#212124',
	            'transparent' 	=> false,
	        ),	        

	        array(
	            'id'       		=> 'footer_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer color', 'construction' ),
	            'default'  		=> '#b2b2b2',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'footer_hover_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Hover Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer hover color', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false,
	        ),

	        // Center Footer
	        array(
	            'id'     => 'info-center-footer',
	            'type'   => 'info',
	            'notice' => false,
	            'style'  => 'info',
	            'title'  => esc_html__( 'Center Footer', 'construction' ),
	            'desc'   => ''
	        ),

	        array(
	            'id'       		=> 'footer_bottom_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Footer Center Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer center background color', 'construction' ),
	            'default'  		=> '#1a1a1c',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       => 'footer_bottom_border',
	            'type'     => 'border',
	            'title'    => esc_html__( 'Footer Border', 'construction' ),
	            'subtitle' => esc_html__( 'Footer center border top', 'construction' ),
	            'left'     => false,
	            'right'    => false,
	            'bottom'   => false,
	            'desc'     => '',
	            'default'  => array(
	                'border-color'  => '#212124',
	                'border-style'  => 'solid',
	                'border-top'    => '1px'
	            )
	        ),

	        array(
	            'id'       		=> 'footer_bottom_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer color', 'construction' ),
	            'default'  		=> '#666666',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'footer_bottom_hover_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Hover Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer hover color', 'construction' ),
	            'default'  		=> '#cccccc',
	            'transparent' 	=> false,
	        ),

	        // Bottom Footer
	        array(
	            'id'     => 'info-bottom-footer',
	            'type'   => 'info',
	            'notice' => false,
	            'style'  => 'info',
	            'title'  => esc_html__( 'Bottom Footer', 'construction' ),
	            'desc'   => ''
	        ),

	        array(
	            'id'       		=> 'footer_bottom_bottom_bg_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Footer Bottom Background Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer bottom background color', 'construction' ),
	            'default'  		=> '#212124',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       => 'footer_bottom_bottom_border',
	            'type'     => 'border',
	            'title'    => esc_html__( 'Footer Border', 'construction' ),
	            'subtitle' => esc_html__( 'Footer bottom border top', 'construction' ),
	            'left'     => false,
	            'right'    => false,
	            'bottom'   => false,
	            'desc'     => '',
	            'default'  => array(
	                'border-color'  => '#212124',
	                'border-style'  => 'solid',
	                'border-top'    => '1px'
	            )
	        ),

	        array(
	            'id'       		=> 'footer_bottom_bottom_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer color', 'construction' ),
	            'default'  		=> '#b2b2b2',
	            'transparent' 	=> false,
	        ),

	        array(
	            'id'       		=> 'footer_bottom_bottom_hover_color',
	            'type'     		=> 'color',
	            'title'    		=> esc_html__( 'Hover Color', 'construction' ),
	            'subtitle' 		=> esc_html__( 'Pick footer hover color', 'construction' ),
	            'default'  		=> '#ffffff',
	            'transparent' 	=> false,
	        ),
	    )
	)
);

?>