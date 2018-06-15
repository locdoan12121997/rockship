<?php

Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( 'Topbar & Menu', 'construction' ),
	    'desc'   => esc_html__( 'Everything about topbars, Slogan, contact information, social media and main menu:', 'construction' ),
	    'id'     => 'topbars',
	    'icon'   => 'el el-screen',
	    'fields' => array(

        	array(
        		'id'       => 'header_type',
			    'type'     => 'image_select',
			    'title'    => esc_html__( 'Header Type', 'construction' ),
			    'subtitle' => esc_html__( 'Select the header type. Choose between 1, 2, 3 or 4 header type.', 'construction' ),
			    'options'  => array(
			        '1' => array(
			            'alt'   => esc_html__( 'Header Default', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/header/header_1.png'
			        ),
			        
			        '2' => array(
			            'alt'   => esc_html__( 'Header Transparent', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/header/header_2.png'
			        ),
			        
			        '3' => array(
			            'alt'   => esc_html__( 'Header After Slider', 'construction' ),
			            'img'  	=> get_template_directory_uri() . '/images/header/header_3.png'
			        ),
			        
			        '4' => array(
			            'alt'   => esc_html__( '3 Level Header', 'construction' ),
			            'img'  	=> get_template_directory_uri() . '/images/header/header_4.jpg'
			        ),
			    ),
			    'default' => '4'
			),

			array(
                'id'     => 'header_slider_part',
                'type'   => 'info',
                'notice' => false,
                'style'  => 'info',
                'title'  => esc_html__( 'Header Slider Setting', 'construction' ),
                'required'  => array( 'header_type', '=', '3' ),
            ),

            array(
	            'id'		=> 'top_slider_shortcode',
	            'type'		=> 'text',
	            'title'		=> esc_html__( 'Slider Shortcode', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enther the Slider Shortcode for show before menu.', 'construction' ),
	            'required'  => array( 'header_type', '=', '3' ),
	        ),

	        array(
                'id'     => 'header_top_setting',
                'type'   => 'info',
                'notice' => false,
                'style'  => 'info',
                'title'  => esc_html__( 'Header Top Bar Setting', 'construction' ),
                'desc'   => ''
            ),

            array(
	            'id'       => 'top_bar_left',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Top Bar Left Area', 'construction' ),
	            'subtitle' => esc_html__( 'What would you like to show on top bar left area.', 'construction' ),
	            'options'  => array(
					                'none'   				=> esc_html__( 'Nothing', 'construction' ),
					                'address'    			=> esc_html__( 'Address', 'construction' ),
					                'contact_info'  		=> esc_html__( 'Contact Info', 'construction' ),
					                'menu_bar'    			=> esc_html__( 'Menu ( Create and assing menu under Appearance -> Menus )', 'construction' ),
					                'slogan'    			=> esc_html__( 'Slogan', 'construction' ),
					                'social_icons'  		=> esc_html__( 'Social Icons', 'construction' ),					                
					                'address_contact_info' 	=> esc_html__( 'Address + Contact Info', 'construction' ),
					            ),
	            'default'  => 'social_icons'
	        ),

	        array(
	            'id'       => 'top_bar_right',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Top Bar Right Area', 'construction' ),
	            'subtitle' => esc_html__( 'What would you like to show on top bar right area.', 'construction' ),
	            'options'  => array(
					                'none'   				=> esc_html__( 'Nothing', 'construction' ),
					                'address'    			=> esc_html__( 'Address', 'construction' ),
					                'contact_info'  		=> esc_html__( 'Contact Info', 'construction' ),
					                'menu_bar'    			=> esc_html__( 'Menu ( Create and assing menu under Appearance -> Menus )', 'construction' ),
					                'slogan'    			=> esc_html__( 'Slogan', 'construction' ),
					                'social_icons'  		=> esc_html__( 'Social Icons', 'construction' ),					                
					                'address_contact_info' 	=> esc_html__( 'Address + Contact Info', 'construction' ),
					            ),
	            'default'  => 'address_contact_info'
	        ),

	        array(
	            'id'		=> 'top_bar_address',
	            'type'		=> 'text',
	            'default'	=> '505 North State Street, Chicago, USA',
	            'title'		=> esc_html__( 'Address', 'construction' ),
	            'subtitle'	=> 'Enther the address.',
	        ),

	        array(
	            'id'		=> 'top_bar_phone',
	            'type'		=> 'text',
	            'default'	=> '980-000-2512',
	            'title'		=> esc_html__( 'Phone Number', 'construction' ),
	            'subtitle'	=> 'Enther the phone number.',
	        ),
	        
	        array(
	            'id'		=> 'top_bar_email',
	            'type'		=> 'text',
	            'default'	=> 'info@construction.com',
	            'title'		=> esc_html__( 'Email Address', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enther the email address.', 'construction' )
	        ),
	        
	        array(
	            'id'		=> 'top_bar_slogan',
	            'type'		=> 'textarea',
	            'default'	=> 'Welcome to Know more about the construction',
	            'title'		=> esc_html__( 'Slogan', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter website slogan.', 'construction' )
	        ),

	        array(
                'id'     => 'header_middle_part',
                'type'   => 'info',
                'notice' => false,
                'style'  => 'info',
                'title'  => esc_html__( 'Header Middle Setting', 'construction' ),
                'required'  => array( 'header_type', '=', '4' ),
            ),

            array(
	            'id'		=> 'middle_office_time',
	            'type'		=> 'textarea',
	            'default'	=> '',
	            'title'		=> esc_html__( 'Office Timing', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter Office Timing.', 'construction' ),
	            'required'  => array( 'header_type', '=', '4' ),
	        ),

	        array(
	            'id'		=> 'middle_phone_number',
	            'type'		=> 'textarea',
	            'default'	=> '',
	            'title'		=> esc_html__( 'Phone Number', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter Phone Number.', 'construction' ),
	            'required'  => array( 'header_type', '=', '4' ),
	        ),

	        array(
	            'id'		=> 'middle_get_a_quote',
	            'type'		=> 'textarea',
	            'default'	=> '',
	            'title'		=> esc_html__( 'Get A Quote Button', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter Get A Quote Button Code.', 'construction' ),
	            'required'  => array( 'header_type', '=', '4' ),
	        ),

	        array(
	            'id'		=> 'middle_get_a_quote_model',
	            'type'		=> 'textarea',
	            'default'	=> '',
	            'title'		=> esc_html__( 'Get A Quote Model', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter Get A Quote Model Code.', 'construction' ),
	            'required'  => array( 'header_type', '=', '4' ),
	        ),

	        array(
                'id'     => 'header_middle_menu_part',
                'type'   => 'info',
                'notice' => false,
                'style'  => 'info',
                'title'  => esc_html__( 'Header Menu Setting', 'construction' ),
                'required'  => array( 'header_type', '=', '4' ),
            ),

            array(
	            'id'       => 'header_middle_search',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Search Option', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable Search Option at Menu.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	            'required' => array( 'header_type', '=', '4' ),
	        ),
	    ),
	)
);

?>