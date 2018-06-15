<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Countdown', 'construction' ),
        'description' 	=> esc_html__( 'Construction Countdown', 'construction' ),
        'base' 			=> 'countdown',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/countdown.png',
		'params'		=> array(
			
			array(
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Date and Time', 'construction' ),
				'param_name' 	=> 'countdown_datetime',
				'description' 	=> esc_html__( 'Enter Date and Time (17 June 2017 11:00)', 'construction' )
			),
			
		)
    ) 
);

?>