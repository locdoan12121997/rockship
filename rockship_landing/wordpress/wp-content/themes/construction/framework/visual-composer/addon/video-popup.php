<?php

vc_map( 
	array(
		'name' 			=> esc_html__( 'Video Popup', 'construction' ),
		'base' 			=> 'video_popup',
		'description' 	=> esc_html__( 'Video Popup with placeholer image', 'construction' ),
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
		'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/video_popup.png',
		'params' 		=> array(

			array(
				'heading' 		=> esc_html__( 'Video link', 'construction' ),
				'description' 	=> esc_html__( 'Enter the Video link', 'construction'),
				'type' 			=> 'textfield',
				'param_name' 	=> 'video_link',
				'save_always'   => true
			),

			array(
			   'type' 			=> 'attach_image',
			   'heading' 		=> esc_html__( 'Video Placeholer Image', 'construction' ),
			   'param_name' 	=> 'video_placeholer_image',
			   'description' 	=> esc_html__( 'Select the Video Placeholer Image', 'construction' ),
			   'save_always'   => true
			)
		)
	) 
);

?>