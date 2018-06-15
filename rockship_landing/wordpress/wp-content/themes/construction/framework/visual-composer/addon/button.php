<?php

vc_map( 
	array(
	'name' 			=> esc_html__( 'Button', 'construction' ),
	'base' 			=> 'button',
	'description' 	=> esc_html__( 'Button shortcode', 'construction' ),
	'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
	'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/button.png',
	'params' 		=> array(

			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Shape', 'construction' ),
				'param_name' 	=> 'button_shape',
				'value' 		=> array(
					esc_html__( 'Default', 'construction' )	=> 'square',
					esc_html__( 'Square', 'construction' )	=> 'square',
					esc_html__( 'Rounded', 'construction' ) => 'rounded',
				),
				'description' 	=> esc_html__( 'Button Type', 'construction' ),
				'save_always'   => true
			),
			
			array(
				'type' 			=> 'textarea',
				'heading' 		=> esc_html__( 'Content', 'construction' ),
				'param_name' 	=> 'button_content',
				'description' 	=> esc_html__( 'Button Text Content', 'construction' ),
				'save_always'   => true
			),
			
			array(
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'URL', 'construction' ),
				'param_name' 	=> 'button_url',
				'value'			=> '#',
				'description' 	=> esc_html__( 'Button URL Link', 'construction' ),
				'save_always'   => true
			),
									
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Target', 'construction' ),
				'param_name' 	=> 'button_target',
				'description' 	=> esc_html__( 'Button URL Target', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Self', 'construction' )	=> '_self',
					esc_html__( 'Blank', 'construction' )	=> '_blank',
					esc_html__( 'Parent', 'construction' )	=> '_parent',
					esc_html__( 'Top', 'construction' )		=> '_top',
				),
				'save_always'   => true
			),
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Size', 'construction' ),
				'param_name' 	=> 'button_size',
				'description' 	=> esc_html__( 'Button Size', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Small', 'construction' )	=> 'small',
					esc_html__( 'Medium', 'construction' )	=> 'medium',
					esc_html__( 'Large', 'construction' )	=> 'large',	
				),
				'save_always'   => true
			),

			array(
				'heading' 		=> esc_html__( 'Position', 'construction' ),
				'description' 	=> esc_html__( 'Position of the button.', 'construction'),
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
				'type' 			=> 'colorpicker',
				'heading' 		=> esc_html__( 'Button Text Color', 'construction' ),
				'param_name' 	=> 'button_text_color',
				'group' 		=> 'Button'
			),

			array(
				'type' 			=> 'colorpicker',
				'heading' 		=> esc_html__( 'Button Background Color', 'construction' ),
				'param_name' 	=> 'button_color',
				'group' 		=> 'Button'
			),

			array(
				'type' 			=> 'colorpicker',
				'heading' 		=> esc_html__( 'Hover Button Text Color', 'construction' ),
				'param_name' 	=> 'hover_button_text_color',
				'group' 		=> 'Button'
			),

			array(
				'type' 			=> 'colorpicker',
				'heading' 		=> esc_html__( 'Hover Button Background Color', 'construction' ),
				'param_name' 	=> 'hover_button_color',
				'group' 		=> 'Button'
			),

			array(
				'type' 			=> 'colorpicker',
				'heading' 		=> esc_html__( 'Button Border Color', 'construction' ),
				'param_name' 	=> 'button_border_color',
				'group' 		=> 'Button'
			),

			array(
				'type' 			=> 'colorpicker',
				'heading' 		=> esc_html__( 'Hover Button Border Color', 'construction' ),
				'param_name' 	=> 'hover_button_border_color',
				'group' 		=> 'Button'
			),
		)
	)
);

?>