<?php

vc_map( 
	array(
		'name' 			=> esc_html__( 'Services', 'construction' ),
		'base' 			=> 'services',
		'description' 	=> esc_html__( 'List Service', 'construction' ),
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
		'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/services.png',
		'params' 		=> array(

			array(
				'param_name' 	=> 'service_style',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Service Style', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Type 1', 'construction' ) => '0',
					esc_html__( 'Type 2', 'construction' ) => '1',
					esc_html__( 'Type 3', 'construction' ) => '2',
					esc_html__( 'Type 4', 'construction' ) => '3'
				),
				'std' 			=> '0',
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'service_ids',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Service IDs', 'construction' ),
				'description' 	=> esc_html__( 'Enter Service ids comma separated. Ex 153,259,5359', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'posts_limit',
				'type' 			=> 'textfield',
				'value' 		=> '6',
				'heading' 		=> esc_html__( 'Limit Service Number', 'construction' ),
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'offset',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Offset Services', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'show_excerpt',
				'type' 			=> 'dropdown',
				'heading'		=> esc_html__( 'Show service excerpt', 'construction' ),
				'description'	=> esc_html__( 'Show the excerpt of the service.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'yes',
					esc_html__( 'No', 'construction' ) => 'no',					
				),
				'std' 			=> 'yes',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true,
			),

			array(
				'type'			=> 'textfield',
				'param_name'	=> 'number_word',
				'heading'		=> esc_html__( 'Number of words', 'construction' ),
				'description'	=> esc_html__( 'Show a certain number of words in each service.', 'construction' ),
				'value'			=> '30',
				'dependency' 	=> array( 'element' => 'show_excerpt', 'value' => array( 'yes' ) ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'orderby',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'ID', 'construction' ) => 'ID', esc_html__( 'Title', 'construction' ) => 'title', esc_html__( 'Date', 'construction' ) => 'date', esc_html__( 'Rand', 'construction' ) => 'rand' ),
				'heading' 		=> esc_html__( 'Order By', 'construction' ),
				'std' 			=> 'date',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'order',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'ASC', 'construction' ) => 'ASC', esc_html__( 'DESC', 'construction' ) => 'DESC' ),
				'heading' 		=> esc_html__( 'Order', 'construction' ),
				'std' 			=> 'DESC',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),
		)
	) 
);

?>