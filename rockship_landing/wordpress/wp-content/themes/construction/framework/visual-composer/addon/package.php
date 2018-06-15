<?php
vc_map( 
	array(
		'name'			=> esc_html__( 'Package', 'construction' ),
		'base'			=> 'package',
		'description'	=> esc_html__( 'Package Detail', 'construction' ),
		'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/package.png',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
		'params' => array(

			array(
				'heading'		=> esc_html__( 'Title', 'construction' ),
				'description' 	=> esc_html__( 'Enther the Title of package', 'construction' ),
				'type'			=> 'textfield',
				'param_name'	=> 'package_title',
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Price', 'construction' ),
				'description' 	=> esc_html__( 'Enther the Price of package', 'construction' ),
				'type'			=> 'textfield',
				'param_name'	=> 'package_price',	
				'save_always' 	=> true			
			),

			array(
				'heading'		=> esc_html__( 'Period', 'construction' ),
				'description'	=> esc_html__( 'Enther the Package period Ex. Per Week, Per Month, Per Year', 'construction' ),
				'type'			=> 'textfield',
				'param_name'	=> 'package_period',
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Features', 'construction' ),
				'description'	=> esc_html__( 'Enter the features for Package', 'construction' ),
				'type'			=> 'param_group',
				'param_name'	=> 'package_features',
				'params' => array(					
					array(
						'heading'		=> esc_html__( 'Package Feature', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'package_feature',
						'save_always' 	=> true
					),
				),
			),

			array(
				'type'			=> 'checkbox',
				'heading'		=> esc_html__( 'Featured Package ?', 'construction' ),
				'param_name'	=> 'package_featured',
				'value'			=> array( esc_html__( 'Yes', 'construction' ) => 'featured' ),
				'description'	=> esc_html__( 'Select the Package is Featured or Recommended', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Button Text', 'construction' ),
				'description'	=> esc_html__( 'Enther the text of button', 'construction' ),
				'type'			=> 'textfield',
				'param_name'	=> 'button_text',
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Button URL', 'construction' ),
				'description'	=> esc_html__( 'Button URL (http://example.com)', 'construction' ),	
				'type'			=> 'textfield',
				'param_name'	=> 'button_url',
				'save_always' 	=> true
			),			
		)
	) 
);