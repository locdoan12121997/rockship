<?php

vc_map( 
	array(
		'name' 			=> esc_html__( 'Main Title', 'construction' ),
		'base' 			=> 'maintitle',
		'description' 	=> esc_html__( 'Main Title', 'construction' ),
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
		'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/maintitle.png',
		'params' 		=> array(

			array(
				'heading' 		=> esc_html__( 'Heading', 'construction' ),
				'description' 	=> esc_html__( 'Title Type', 'construction'),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'heading',
				'value' 		=> array(
					esc_html__( 'h1', 'construction' ) => '1',
					esc_html__( 'h2', 'construction' ) => '2',
					esc_html__( 'h3', 'construction' ) => '3',
					esc_html__( 'h4', 'construction' ) => '4',
					esc_html__( 'h5', 'construction' ) => '5',
					esc_html__( 'h6', 'construction' ) => '6',
				),
				'std' 			=> '2',
				'save_always'   => true
			),

			array(
				'heading' 		=> esc_html__( 'Title', 'construction' ),
				'description' 	=> esc_html__( 'Enter the title', 'construction'),
				'type' 			=> 'textfield',
				'param_name' 	=> 'maxtitle_content',
				'save_always'   => true
			),

			array(
				'heading' 		=> esc_html__( 'Position', 'construction' ),
				'description' 	=> esc_html__( 'Position of the title text.', 'construction'),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'position',
				'value' 		=> array(
					esc_html__( 'Left', 'construction' ) 	=> 'left',
					esc_html__( 'Center', 'construction' ) 	=> 'center',
					esc_html__( 'Right', 'construction' ) 	=> 'right',
				),
				'save_always'   => true
			),

			array(
				'heading'		=> esc_html__( 'Text Color', 'construction' ),
				'type'			=> 'colorpicker',
				'param_name'	=> 'maxtitle_color',				
			),
		)
	)
);

?>