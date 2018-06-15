<?php

vc_map( 
	array(
	'name' 			=> esc_html__( 'Document', 'construction' ),
	'base' 			=> 'document',
	'description' 	=> esc_html__( 'Document shortcode', 'construction' ),
	'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
	'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/services.png',
	'params' 		=> array(

			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Style', 'construction' ),
				'param_name' 	=> 'link_style',
				'value' 		=> array(
					esc_html__( 'Style 1', 'construction' )	=> '1',
					esc_html__( 'Style 2', 'construction' )	=> '2',					
				),
				'description' 	=> esc_html__( 'Document Link Type', 'construction' ),
				'save_always'   => true
			),
			
			array(
				'type' 			=> 'textarea',
				'heading' 		=> esc_html__( 'Link Text', 'construction' ),
				'param_name' 	=> 'link_text',
				'description' 	=> esc_html__( 'Document Link Text', 'construction' ),
				'save_always'   => true
			),
			
			array(
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'URL', 'construction' ),
				'param_name' 	=> 'link_url',
				'value'			=> '#',
				'description' 	=> esc_html__( 'Document URL Link', 'construction' ),
				'save_always'   => true
			),
									
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Target', 'construction' ),
				'param_name' 	=> 'link_target',
				'description' 	=> esc_html__( 'Document Link URL Target', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Self', 'construction' )	=> '_self',
					esc_html__( 'Blank', 'construction' )	=> '_blank',
					esc_html__( 'Parent', 'construction' )	=> '_parent',
					esc_html__( 'Top', 'construction' )		=> '_top',
				),
				'save_always'   => true
			),
			
			array(
				'heading' 		=> esc_html__( 'Icon Position', 'construction' ),
				'description' 	=> esc_html__( 'Document Link Icon Position', 'construction'),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'position',
				'value' 		=> array(
					esc_html__( 'Left', 'construction' ) 	=> 'left',
					esc_html__( 'Right', 'construction' ) 	=> 'right',
				),
				'save_always'   => true
			),

			array(
                'type' 			=> 'iconfonts',
                'heading' 		=> esc_html__( 'Icon', 'construction' ),
                'param_name' 	=> 'icon_name',
                'description' 	=> esc_html__( 'Select Icon', 'construction' ),                
            )
		)
	)
);

?>