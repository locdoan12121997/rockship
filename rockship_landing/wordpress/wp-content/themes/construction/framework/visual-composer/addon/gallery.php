<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Gallery', 'construction' ),
        'description' 	=> esc_html__( 'Project Gallery', 'construction' ),
        'base' 			=> 'gallery',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/gallery.png',
		'params'		=> array(
			
			array(
				'param_name' 	=> 'gallery_style',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Gallery Style', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-define gallery style option.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Style 1', 'construction' ) => '0',
					esc_html__( 'Style 2', 'construction' ) => '1',					
				),
				'std' 			=> '0',				
				'save_always' 	=> true,
			),

			array(
				'type' 			=> 'attach_images',
				'heading' 		=> esc_html__( 'Images', 'construction' ),
				'param_name' 	=> 'gallery_image',
				'description' 	=> esc_html__( 'Select the gallery images', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'image_per_view',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Gallery Layout', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-define column option.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Gallery 1 Column', 'construction' ) => '0',
					esc_html__( 'Gallery 2 Column', 'construction' ) => '1',
					esc_html__( 'Gallery 3 Column', 'construction' ) => '2',
					esc_html__( 'Gallery 4 Column', 'construction' ) => '3',
					esc_html__( 'Gallery 6 Column', 'construction' ) => '4',
				),
				'std' 			=> '2',
				'dependency'    => array( 'element' => 'gallery_style', 'value' => array( '0' ) ),
                'save_always' 	=> true,
			),
		)
    ) 
);

?>