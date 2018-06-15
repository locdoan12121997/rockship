<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Icon Box', 'construction' ),
        'base' 			=> 'iconbox',
        'description' 	=> esc_html__( 'Icon + Text', 'construction' ),
		'icon'            => get_template_directory_uri() . '/framework/visual-composer/assets/images/iconbox.png',
        'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'params' 		=> array(

            array(
                'type' 			=> 'dropdown',
                'heading' 		=> esc_html__( 'Type', 'construction' ),
                'param_name' 	=> 'icon_type',
                'value' 		=> array(
					esc_html__( 'Type 1', 'construction' ) => '0',
					esc_html__( 'Type 2', 'construction' ) => '1',
					esc_html__( 'Type 3', 'construction' ) => '2',
                    esc_html__( 'Type 4', 'construction' ) => '3',
                    esc_html__( 'Type 5', 'construction' ) => '4'
				),
                'description' 	=> esc_html__( 'You can choose among these pre-designed types.', 'construction' ),
                'std'           => '0',
                'save_always'   => true
            ),

            array(
                'type'          => 'dropdown',
                'heading'       => esc_html__( 'Icon Align', 'construction' ),
                'param_name'    => 'icon_align',
                'value'         => array(
                    esc_html__( 'Right', 'construction' )   => '0',
                    esc_html__( 'Left', 'construction' )    => '1',                    
                ),
                'dependency'    => array( 'element' => 'icon_type', 'value' => array( '3' ) ),
                'description'   => esc_html__( 'You can choose among these pre-designed types.', 'construction' ),
                'std'           => '0',
                'save_always'   => true
            ),

            array(
				'type'			=> 'textarea',
				'heading'		=> esc_html__( 'Title', 'construction' ),
				'param_name'	=> 'icon_title',
				'description' 	=> esc_html__( 'IconBox Title', 'construction' ),
                'save_always'   => true
			),

			array(
				'type'			=> 'textarea',
				'heading'		=> esc_html__( 'Content', 'construction' ),
				'param_name'	=> 'icon_content',
				'description' 	=> esc_html__( 'IconBox Content', 'construction' ),
				'save_always'   => true
			),

            array(
                'type'          => 'attach_image',
                'heading'       => esc_html__( 'Background Image', 'construction' ),
                'param_name'    => 'bk_icon_image',
                'description'   => esc_html__( 'Select custom Background Image for icon box.', 'construction' ),
                'dependency'    => array( 'element' => 'icon_type', 'value' => array( '4' ) ),
                'save_always'   => true
            ),

            array(
                'type' 			=> 'attach_image',
                'heading' 		=> esc_html__( 'Image', 'construction' ),
                'param_name' 	=> 'icon_image',
                'description' 	=> wp_kses( __( 'Select Image instead of Icons. <br> Note: If you have another Icon that not is here. You can put PNG image of that instead of these Icons.', 'construction' ), array( 'br' => array() ) ),
                'save_always'   => true
            ),

            array(
				'type'			=> 'textfield',
				'heading'		=> esc_html__( 'Icon Size (leave blank for default size)', 'construction' ),
				'param_name'	=> 'icon_size',
				'description' 	=> esc_html__( 'Icon size in px format, Example: 16px', 'construction' ),
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