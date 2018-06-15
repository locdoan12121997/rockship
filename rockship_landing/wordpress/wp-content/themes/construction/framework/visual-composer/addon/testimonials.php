<?php
vc_map( 
	array(
		'name'			=> esc_html__( 'Testimonials', 'construction' ),
		'base'			=> 'testimonials',		
		'description'	=> esc_html__( 'Testimonials Slider', 'construction' ),
		'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/testimonials.png',
		'category'		=> esc_html__( 'Construction Shortcodes', 'construction' ),
		'params' 		=> array(

			array(
				'param_name' 	=> 'testimonials_style',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Testimonials Style', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Style 1', 'construction' ) => '0',
					esc_html__( 'Style 2', 'construction' ) => '1',
					esc_html__( 'Style 3', 'construction' ) => '2',
				),
				'std' 			=> '0',
				'save_always' 	=> true,
			),

			array(
				'heading'		=> esc_html__( 'Testimonial', 'construction' ),
				'description'	=> esc_html__( 'Enter Testimonial - name, what customer say and image.', 'construction' ),
				'type'			=> 'param_group',
				'param_name'	=> 'testimonial',
				'params' 		=> array(

					array(
						'heading'		=> esc_html__( 'Name', 'construction' ),
						'description' 	=> esc_html__( 'Customer Name', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'customer_name',
						'save_always' 	=> true
					),

					array(
						'heading'		=> esc_html__( 'Position', 'construction' ),
						'description' 	=> esc_html__( 'Customer Position', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'customer_position',
						'save_always' 	=> true
					),

					array(
						'heading'		=> esc_html__( 'Customer Say', 'construction' ),
						'description'	=> esc_html__( 'What Customer Say', 'construction' ),
						'type'			=> 'textarea',
						'param_name'	=> 'customer_say',
						'save_always' 	=> true
					),

					array(
		                'type' 			=> 'attach_image',
		                'heading' 		=> esc_html__( 'Image', 'construction' ),
		                'description'	=> esc_html__( 'Customer Photo or Logo', 'construction' ),
		                'param_name' 	=> 'customer_image',
		                'save_always' 	=> true
		            )
		        )
			),
				
			array(
				'param_name' 	=> 'slider_item',
				'type' 			=> 'textfield',
				'value' 		=> '3',
				'heading' 		=> esc_html__( 'Testimonial Per View', 'construction' ),
				'description' 	=> esc_html__( 'Enther the number of testimonial show per view. ', 'construction' ),
				'dependency' 	=> array( 'element' => 'testimonials_style', 'value' => array( '1', '2' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_autoplay',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' ) 	=> 'false'
				),
				'heading' 		=> esc_html__( 'Carousel Autoplay', 'construction' ),				
				'dependency' 	=> array( 'element' => 'testimonials_style', 'value' => array( '1', '2' ) ),
				'std'			=> true,
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_navigation',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' )  => 'false'
				),
				'heading' 		=> esc_html__( 'Show Navigation', 'construction' ),				
				'dependency' 	=> array( 'element' => 'testimonials_style', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_pagination',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' )  => 'false'
				),
				'heading' 		=> esc_html__( 'Show Pagination', 'construction' ),				
				'dependency' 	=> array( 'element' => 'testimonials_style', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_auto_speed',
				'type' 			=> 'textfield',
				'value' 		=> '1000',
				'heading' 		=> esc_html__( 'Auto Play Speed', 'construction' ),
				'description' 	=> esc_html__( 'Autoplay Speed in milliseconds. Default 1000', 'construction' ),
				'dependency' 	=> array( 'element' => 'testimonials_style', 'value' => array( '1', '2' ) ),
				'save_always' 	=> true
			)
		)
	) 
);