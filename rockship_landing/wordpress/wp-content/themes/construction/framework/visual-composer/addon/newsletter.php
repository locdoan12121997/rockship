<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Mailchimp Newsletter', 'construction' ),
        'description' 	=> esc_html__( 'Subscribe Your E-mail Address', 'construction' ),
        'base' 			=> 'newsletter',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon'          => get_template_directory_uri() . '/framework/visual-composer/assets/images/latest_blog.png',
		'params'		=> array(
			
			array(
				'heading'		=> esc_html__( 'Newletter Info', 'construction' ),
				'description' 	=> esc_html__( 'Enter the information of Newsletter', 'construction' ),
				'type'			=> 'textarea_html',
				'param_name'	=> 'newsletter_info',
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Newletter Form', 'construction' ),
				'description' 	=> esc_html__( 'Enter the form id of mailchimp newsletter form', 'construction' ),
				'type'			=> 'textfield',
				'param_name'	=> 'newsletter_form',
				'save_always' 	=> true
			),
		)
    ) 
);

?>