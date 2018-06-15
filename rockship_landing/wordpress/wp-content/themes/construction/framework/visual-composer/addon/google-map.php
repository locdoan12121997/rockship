<?php

vc_map( 
	array(
	    'name' 			=> esc_html__( 'GoogleMap', 'construction' ),
	    'base' 			=> 'gmap',
		'description' 	=> esc_html__( 'Google map', 'construction' ),
	    'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/google_map.png',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
	    'params'		=> array(

			array(
				'heading' 		=> esc_html__( 'Latitude', 'construction' ),
				'description' 	=> esc_html__( 'Enther the Latitude of google map', 'construction' ),
				'param_name' 	=> 'latitude',
				'type' 			=> 'textfield',
				'save_always' 	=> true
			),
			
			array(
				'heading' 		=> esc_html__( 'Longitude', 'construction' ),
				'description' 	=> esc_html__( 'Enther the Longitude of google map', 'construction' ),
				'param_name' 	=> 'longitude',
				'type' 			=> 'textfield',
				'save_always' 	=> true
			),
			
			array(
				'heading' 		=> esc_html__( 'Zoom', 'construction' ),
				'description' 	=> esc_html__( 'Default map zoom level. (1-19)', 'construction' ),
				'param_name' 	=> 'zoom',
				'std' 			=> '17',
				'type' 			=> 'textfield',
				'save_always' 	=> true
			),
			
			array(
				'param_name' 	=> 'map_marker',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'Yes', 'construction' ) => 'yes', esc_html__( 'No', 'construction' ) => 'no' ),
				'heading' 		=> esc_html__( 'Show Marker:', 'construction' ),
				'description' 	=> esc_html__( 'Enable an arrow pointing at the address.', 'construction' ),
				"save_always" 	=> true
			),
			
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> esc_html__( 'Marker Icon', 'construction' ),
				'param_name' 	=> 'marker_icon',
				'dependency' 	=> array( 'element' => 'map_marker', 'value' => array( 'yes' ) ),
				'save_always' 	=> true
			),

			array(
				'type' 			=> 'textarea',
				'heading' 		=> esc_html__( 'Popup Marker Content', 'construction' ),
				'description' 	=> esc_html__( 'Content to be shown in a popup above the marker.', 'construction' ),
				'param_name' 	=> 'html',
				'dependency' 	=> array( 'element' => 'map_marker', 'value' => array( 'yes' ) ),
				'save_always' 	=> true
			),			
			
			array(
				'heading' 		=> esc_html__( 'Scrollwheel', 'construction' ),
				'param_name' 	=> 'scrollwheel',
				'description' 	=> esc_html__( 'Enable/Disable scrollwheel on google map', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'type' 			=> 'checkbox',
				'save_always' 	=> true
			),

			array(
				'heading' 		=> esc_html__( 'MapType', 'construction' ),
				'param_name' 	=> 'maptype',
				'description' 	=> esc_html__( 'Select the google map type', 'construction' ),
				'std' 			=> 'ROADMAP',
				'value' 		=> array(
					esc_html__( 'Default road map', 'construction' )				=> 'ROADMAP',
					esc_html__( 'Google Earth satellite', 'construction' )			=> 'SATELLITE',
					esc_html__( 'Mixture of normal and satellite', 'construction' )	=> 'HYBRID',
					esc_html__( 'Physical map', 'construction' )					=> 'TERRAIN',
				),
				'type' 			=> 'dropdown',
				'save_always' 	=> true
			) ,		
			
			array(
				'heading' 		=> esc_html__( 'Width (optional)', 'construction' ),
				'description' 	=> esc_html__( 'Default is 100%. (0-960)', 'construction' ),
				'param_name' 	=> 'width',
				'std' 			=> '100%',
				'type' 			=> 'textfield',
				'save_always' 	=> true
			),	
			
			array(
				'heading' 		=> esc_html__( 'Height', 'construction' ),
				'description' 	=> esc_html__( 'Default is 500px.', 'construction' ),
				'param_name' 	=> 'height',
				'std' 			=> '500px',
				'type' 			=> 'textfield',
				'save_always' 	=> true
			)
		)       
	) 
);

?>