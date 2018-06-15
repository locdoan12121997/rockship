<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Accordion', 'construction' ),
        'description' 	=> esc_html__( 'Animated Accordion', 'construction' ),
        'base' 			=> 'accordions',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/accordions.png',
		'params'		=> array(
			
			array(
				'type'			=> 'checkbox',
				'param_name'	=> 'active_section',
				'heading'		=> esc_html__( 'Active Tab', 'construction' ),
				'description'	=> esc_html__( 'Active the the first tab by default.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std'			=> 'enable',
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Accordion', 'construction' ),
				'description'	=> esc_html__( 'Enter Accordion - Title and Content.', 'construction' ),
				'type'			=> 'param_group',
				'param_name'	=> 'accordion',
				'params' 		=> array(

					array(
						'heading'		=> esc_html__( 'Title', 'construction' ),
						'description' 	=> esc_html__( 'Enter the title of accordion', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'accordion_title',
						'save_always' 	=> true
					),

					array(
						'heading'		=> esc_html__( 'Content', 'construction' ),
						'description' 	=> esc_html__( 'Enter the content of accordion', 'construction' ),
						'type'			=> 'textarea',
						'param_name'	=> 'accordion_content',
						'save_always' 	=> true
					),
		        )
		    )
		)
    ) 
);

?>