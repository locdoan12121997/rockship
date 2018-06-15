<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Our Clients', 'construction' ),
        'description' 	=> esc_html__( 'Our Clients', 'construction' ),
        'base' 			=> 'our_clients',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/our_clients.png',
		'params'		=> array(
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Style', 'construction' ),
				'param_name' 	=> 'client_style',
				'value' 		=> array(
					esc_html__( 'Grid', 'construction' ) 		=> '0',
					esc_html__( 'Carousel', 'construction' )	=> '1',		
				),
				'description' 	=> esc_html__( 'Our Clients Style', 'construction' ),
				'std' 			=> '0',
				'save_always' 	=> true
			),
			
			array(
				'heading'		=> esc_html__( 'Client', 'construction' ),
				'description'	=> esc_html__( 'Enter Client - Logo/Image and URL/Link.', 'construction' ),
				'type'			=> 'param_group',
				'param_name'	=> 'client_detail',
				'params' 		=> array(

					array(
						'type' 			=> 'attach_image',
						'heading' 		=> esc_html__( 'Images', 'construction' ),
						'param_name' 	=> 'client_image',
						'description' 	=> esc_html__( 'Client Logo/Image', 'construction' ),
						'save_always' 	=> true
					),

					array(
						'heading'		=> esc_html__( 'Link/URL', 'construction' ),
						'description' 	=> esc_html__( 'Client Website url or any ohter link', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'client_link',
						'save_always' 	=> true
					)
		        )
		    ),

		    array(
				'param_name' 	=> 'slider_autoplay',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' ) 	=> 'false'
				),
				'heading' 		=> esc_html__( 'Carousel Autoplay', 'construction' ),				
				'group' 		=> esc_html__( 'Carousel Settings', 'construction' ),
				'dependency' 	=> array( 'element' => 'client_style', 'value' => array( '0' ) ),
				'std'			=> true,
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_item',
				'type' 			=> 'textfield',
				'value' 		=> '5',
				'heading' 		=> esc_html__( 'Client Per View', 'construction' ),
				'description' 	=> esc_html__( 'Enther the number of client show per view. ', 'construction' ),
				'group' 		=> esc_html__( 'Carousel Settings', 'construction' ),
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
				'group' 		=> esc_html__( 'Carousel Settings', 'construction' ),
				'std'			=> false,
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
				'group' 		=> esc_html__( 'Carousel Settings', 'construction' ),
				'std'			=> false,
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_auto_speed',
				'type' 			=> 'textfield',
				'value' 		=> '1000',
				'heading' 		=> esc_html__( 'Auto Play Speed', 'construction' ),
				'description' 	=> esc_html__( 'Autoplay Speed in milliseconds. Default 1000', 'construction' ),
				'group' 		=> esc_html__( 'Carousel Settings', 'construction' ),
				'save_always' 	=> true
			)
		)
    ) 
);

?>