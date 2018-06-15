<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Project Detail', 'construction' ),
        'description' 	=> esc_html__( 'Client, Date, Budget Etc.', 'construction' ),
        'base' 			=> 'project_detail',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/our_clients.png',
		'params'		=> array(
			
			array(
				'heading'		=> esc_html__( 'Detail', 'construction' ),
				'description'	=> esc_html__( 'Enter Project - Client, Date, Budget And Much More.', 'construction' ),
				'type'			=> 'param_group',
				'param_name'	=> 'project_details',
				'params' 		=> array(

					array(
						'heading'		=> esc_html__( 'Label', 'construction' ),
						'description' 	=> esc_html__( 'Enther the Label of project detail', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'project_detail_label',
						'save_always' 	=> true
					),

					array(
						'heading'		=> esc_html__( 'Value', 'construction' ),
						'description' 	=> esc_html__( 'Enther the Value of project detail', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'project_detail_value',
						'save_always' 	=> true
					),

					array(
						'heading'		=> esc_html__( 'Icon', 'construction' ),
						'description' 	=> esc_html__( 'Enther the Icon of project detail', 'construction' ),
						'type'			=> 'textfield',
						'param_name'	=> 'project_detail_icon',
						'save_always' 	=> true
					)
		        )
		    )
		)
    ) 
);

?>