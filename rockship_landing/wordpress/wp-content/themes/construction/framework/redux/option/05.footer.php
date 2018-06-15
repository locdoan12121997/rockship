<?php

Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( 'Footer Options', 'construction' ),
	    'desc'   => esc_html__( 'Customize Footer', 'construction' ),
	    'id'     => 'footer',	    
	    'icon'   => 'el-icon-bookmark el-icon-small',
	    'fields' => array(

	        // Footer Style
	        array(
        		'id'       => 'new_footer_type',
			    'type'     => 'image_select',
			    'title'    => esc_html__( 'Footer Type', 'construction' ),
			    'subtitle' => esc_html__( 'Select the footer type. Choose between 1 or 2 footer type.', 'construction' ),
			    'options'  => array(
			        '1' => array(
			            'alt'   => esc_html__( 'Footer V1', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/footertype/footerv1.jpg'
			        ),
			        '2' => array(
			            'alt'   => esc_html__( 'Footer V2', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/footertype/footerv2.jpg'
			        ),
			    ),
			    'default' => '1'
			),

			// Top Footer
			array(
	            'id'     => 'section-top-footer',
	            'type'   => 'info',
	            'notice' => false,
	            'style'  => 'info',
	            'title'  => esc_html__( 'Top Footer', 'construction' ),
	            'desc'   => ''
	        ),

	        array(
                'id' 		=> 'construction_footer_type',
                'type' 		=> 'image_select',
                'title' 	=> esc_html__('Top Footer Layout', 'construction'),
                'desc'		=> wp_kses( __('<br>Choose among these structures (1column, 2column, 3column and 4column) for your footer section.<br>To filling these column sections you should go to appearance > widget.<br>And put every widget that you want in these sections.','construction'), array( 'br' => array() ) ),
                'options' 	=> array(
	                				'1' => array('title' => esc_html__('Footer Layout 1', 'construction'), 'img' => get_template_directory_uri() . '/images/footertype/footer1.png'),
				                    '2' => array('title' => esc_html__('Footer Layout 2', 'construction'), 'img' => get_template_directory_uri() . '/images/footertype/footer2.png'),
				                    '3' => array('title' => esc_html__('Footer Layout 3', 'construction'), 'img' => get_template_directory_uri() . '/images/footertype/footer3.png'),
				                    '4' => array('title' => esc_html__('Footer Layout 4', 'construction'), 'img' => get_template_directory_uri() . '/images/footertype/footer4.png'),
				                    '5' => array('title' => esc_html__('Footer Layout 5', 'construction'), 'img' => get_template_directory_uri() . '/images/footertype/footer5.png'),
				                    '6' => array('title' => esc_html__('Footer Layout 6', 'construction'), 'img' => get_template_directory_uri() . '/images/footertype/footer6.png'),
				                ),
                'std' 		=> '1'
            ),

            // Center Footer
	        array(
	            'id'     	=> 'section-center-footer',
	            'type'   	=> 'info',
	            'notice' 	=> false,
	            'style'  	=> 'info',
	            'title'  	=> esc_html__( 'Center Footer', 'construction' ),
	            'required' 	=> array( 'new_footer_type', '=', '2' ),
	        ),

	        array(
	            'id'     	=> 'section-newsletter-footer',
	            'type'   	=> 'info',
	            'notice' 	=> false,
	            'style'  	=> 'info',
	            'title'  	=> esc_html__( 'Newsletter Footer', 'construction' ),
	            'required' 	=> array( 'new_footer_type', '=', '1' ),
	        ),

	        array(
	            'id'        => 'construction_footer_bottom_left',
	            'type'      => 'select',
	            'title'     => esc_html__( 'Footer Center Left', 'construction' ),
	            'options'   => array( '1' => esc_html__( 'Logo', 'construction' ), '2' => esc_html__( 'Menu', 'construction' ), '3' => esc_html__( 'Copyright Text', 'construction' ), '4' => esc_html__( 'Follow Us', 'construction' ), '5' => esc_html__( 'Newsletter', 'construction' ) ),
	            'default'   => '4',
	            'subtitle'  => esc_html__( 'What would you like to show on footer center left area.', 'construction' ),
	            'required' 	=> array( 'new_footer_type', '=', '2' ),
	        ),

	        array(
	            'id'        => 'construction_footer_bottom_right',
	            'type'      => 'select',
	            'title'     => esc_html__( 'Footer Center Right', 'construction' ),
	            'options'   => array( '1' => esc_html__( 'Logo', 'construction' ), '2' => esc_html__( 'Menu', 'construction' ), '3' => esc_html__( 'Copyright Text', 'construction' ), '4' => esc_html__( 'Follow Us', 'construction' ), '5' => esc_html__( 'Newsletter', 'construction' ) ),
	            'default'   => '5',
	            'subtitle' 	=> esc_html__( 'What would you like to show on footer center right area.', 'construction' ),
	            'required' 	=> array( 'new_footer_type', '=', '2' ),
	        ),

	        array(
	            'id'        => 'construction_footer_logo',
	            'url'       => true,
	            'type'      => 'media',
	            'title'     => esc_html__( 'Footer Logo', 'construction' ),
	            'subtitle'  => esc_html__( 'Please choose an image file for footer logo.', 'construction' ),
	            'required' 	=> array( 'new_footer_type', '=', '2' ),
	        ),  

	        array(
                'id' 		=> 'construction_footer_copyright',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Copyright Text', 'construction' ),
                'default' 	=> esc_html__( 'Construction © 2017. All right reserved Hire WordPress Developer', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Copyright text of website.', 'construction' ),
                'required' 	=> array( 'new_footer_type', '=', '2' ),
            ),

            array(
                'id' 		=> 'construction_footer_follow_us',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Follow Us Label', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Label of Follow Us.', 'construction' ),
                'default' 	=> esc_html__( 'Follow Us:', 'construction' ),
                'required' 	=> array( 'new_footer_type', '=', '2' ),
            ),

            array(
                'id' 		=> 'construction_footer_newsletter_label',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Newsletter Label', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Label of Newsletter.', 'construction' ),
                'default' 	=> esc_html__( 'Newsletter Subscribe:', 'construction' ),
                'required' 	=> array( 'new_footer_type', '=', '2' ),
            ),

            array(
                'id' 		=> 'construction_footer_newsletter',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Newsletter Shortcode', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Shortcode of Newsletter.', 'construction' ),                
            ),

            // Bottom Footer
	        array(
	            'id'     => 'section-bottom-footer',
	            'type'   => 'info',
	            'notice' => false,
	            'style'  => 'info',
	            'title'  => esc_html__( 'Bottom Footer', 'construction' ),
	            'desc'   => ''
	        ),

	        array(
	            'id'        => 'construction_footer_bottom',
	            'type'      => 'select',
	            'title'     => esc_html__( 'Footer Bottom', 'construction' ),
	            'options'   => array( '1' => esc_html__( 'Logo', 'construction' ), '2' => esc_html__( 'Menu', 'construction' ), '3' => esc_html__( 'Copyright Text', 'construction' ), '4' => esc_html__( 'Follow Us', 'construction' ), '5' => esc_html__( 'Newsletter', 'construction' ) ),
	            'default'   => '3',
	            'subtitle'  => esc_html__( 'What would you like to show on footer bottom center area.', 'construction' ),
	        ),

	        array(
	            'id'        => 'construction_footer_bottom_logo',
	            'url'       => true,
	            'type'      => 'media',
	            'title'     => esc_html__( 'Footer Logo', 'construction' ),
	            'subtitle'  => esc_html__( 'Please choose an image file for footer center logo.', 'construction' ),	            
	        ),  

	        array(
                'id' 		=> 'construction_footer_bottom_copyright',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Copyright Text', 'construction' ),
                'default' 	=> esc_html__( 'Construction © 2017. All right reserved Hire WordPress Developer', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Copyright text of website.', 'construction' ),
            ),

            array(
                'id' 		=> 'construction_bottom_footer_follow_us',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Follow Us Label', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Label of Follow Us.', 'construction' ),
                'default' 	=> esc_html__( 'Follow Us:', 'construction' ),
            ),

            array(
                'id' 		=> 'construction_bottom_footer_newsletter_label',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Newsletter Label', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Label of Newsletter.', 'construction' ),
                'default' 	=> esc_html__( 'Newsletter Subscribe:', 'construction' ),
            ),

            array(
                'id' 		=> 'construction_footer_bottom_newsletter',
                'type' 		=> 'text',
                'title' 	=> esc_html__( 'Footer Newsletter Shortcode', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Shortcode of Newsletter.', 'construction' ),
            ),
	    ),
	)
);

?>