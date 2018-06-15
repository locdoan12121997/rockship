<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Max Counter', 'construction' ),
        'base' 			=> 'max_counter',
        'description' 	=> esc_html__( 'Number Max Counter', 'construction' ),
        'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon'            => get_template_directory_uri() . '/framework/visual-composer/assets/images/max_counter.png',
        'params' 		=> array(
				
			array(
                'type' 			=> 'dropdown',
                'heading' 		=> esc_html__( 'Type', 'construction' ),
                'param_name' 	=> 'counter_type',
                'value' 		=> array(
					esc_html__( 'Type 1', 'construction' ) => '0',
					esc_html__( 'Type 2', 'construction' ) => '1',
                    esc_html__( 'Type 3', 'construction' ) => '2',
				),
                'description' 	=> esc_html__( 'You can choose among these pre-designed types.', 'construction' ),
                'std'           => '0',
                'save_always'   => true
            ),

            array(
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Number', 'construction' ),
				'description' 	=> esc_html__( 'Enther the Number of Max Counter', 'construction' ),
				'param_name' 	=> 'max_counter_number',
				'save_always' 	=> true
			),
			
			array(
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Label', 'construction' ),
				'description' 	=> esc_html__( 'Enther the Label of Max Counter', 'construction' ),
				'param_name' 	=> 'max_counter_label',
				'save_always' 	=> true
			),

			array(
                'type' 			=> 'attach_image',
                'heading' 		=> esc_html__( 'Image', 'construction' ),
                'param_name' 	=> 'icon_image',
                'description' 	=> wp_kses( __( 'Select Image instead of Icons. <br> Note: If you have another Icon that not is here. You can put PNG image of that instead of these Icons.', 'construction' ), array( 'br' => array() ) ),
                'save_always'   => true,
                'dependency'    => array( 'element' => 'counter_type', 'value' => array( '1', '2' ) ),
            ),

            array(
				'type'			=> 'textfield',
				'heading'		=> esc_html__( 'Icon Size (leave blank for default size)', 'construction' ),
				'param_name'	=> 'icon_size',
				'description' 	=> esc_html__( 'Icon size in px format, Example: 16px', 'construction' ),
                'value' 		=> '40px',
                'dependency'    => array( 'element' => 'counter_type', 'value' => array( '1' ) ),
			),

			array(
                'type' 			=> 'iconfonts',
                'heading' 		=> esc_html__( 'Icon', 'construction' ),
                'param_name' 	=> 'icon_name',
                'description' 	=> esc_html__( 'Select Icon', 'construction' ),
                'dependency'    => array( 'element' => 'counter_type', 'value' => array( '1' ) ),
            )
        )
    )
);

?>