<?php

vc_map( 
	array(
        'name' 			=> esc_html__( 'Our Team', 'construction' ),
        'description' 	=> esc_html__( 'Team member', 'construction' ),
        'base' 			=> 'our_team',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/our_team.png',
		'params'		=> array(			
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Style', 'construction' ),
				'param_name' 	=> 'team_type',
				'value' 		=> array(
					esc_html__( 'Style 1', 'construction' ) => '1',
					esc_html__( 'Style 2', 'construction' ) => '2',
					esc_html__( 'Style 3', 'construction' ) => '3',
					esc_html__( 'Style 4', 'construction' ) => '4',
				),
				'description' 	=> esc_html__( 'You can choose among these pre-designed types.', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Team Memeber', 'construction' ),
				'description'	=> esc_html__( 'Enter Team Memeber - Name, Position, Detail and Social Network.', 'construction' ),
				'type'			=> 'param_group',
				'param_name'	=> 'member_detail',
				'params' 		=> array(

					array(
						'type' 			=> 'attach_image',
						'heading' 		=> esc_html__( 'Team Image', 'construction' ),
						'param_name' 	=> 'team_image',
						'description' 	=> esc_html__( ' Select the Team member image', 'construction' ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textfield',
						'heading' 		=> esc_html__( 'Team Memeber Name', 'construction' ),
						'param_name' 	=> 'team_name',
						'description' 	=> esc_html__( 'Enther the Team member name', 'construction' ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textfield',
						'heading' 		=> esc_html__( 'Team Memeber Position', 'construction' ),
						'param_name' 	=> 'team_position',
						'description' 	=> esc_html__( 'Enther the Team member Position', 'construction' ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textarea',
						'heading' 		=> esc_html__( 'About Team Memeber', 'construction' ),
						'param_name' 	=> 'team_text',
						'description' 	=> esc_html__( 'Enther the Team member description text', 'construction' ),
						'save_always' 	=> true
					),

					array(
						'heading' 		=> esc_html__( 'Social Icons', 'construction' ),
						'description' 	=> esc_html__( 'By enabling this option, Member social networks links will appear', 'construction' ),
						'param_name' 	=> 'team_social',
						'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
						'type' 			=> 'checkbox',
						'std' 			=> 'enable',
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'dropdown',
						'heading' 		=> esc_html__( 'First Social Name', 'construction' ),
						'param_name' 	=> 'first_social',
						'value' 		=> array(
							esc_html__( 'Twitter', 'construction' )		=> 'twitter',
							esc_html__( 'Facebook', 'construction' )	=> 'facebook',
							esc_html__( 'Google Plus', 'construction' )	=> 'google-plus',
							esc_html__( 'Vimeo', 'construction' )		=> 'vimeo',
							esc_html__( 'Dribbble', 'construction' )	=> 'dribbble',
							esc_html__( 'Youtube', 'construction' )		=> 'youtube',									
							esc_html__( 'Pinterest', 'construction' )	=> 'pinterest',
							esc_html__( 'LinkedIn', 'construction' )	=> 'linkedin',
							esc_html__( 'Instagram', 'construction' )	=> 'instagram',
						),
						'std' 			=> 'twitter',
						'description' 	=> esc_html__( 'Select Social Name', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social','value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textfield',
						'heading' 		=> esc_html__( 'First Social URL', 'construction' ),
						'param_name' 	=> 'first_url',
						'description' 	=> esc_html__( 'First social URL', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social', 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'dropdown',
						'heading' 		=> esc_html__( 'Second Social Name', 'construction' ),
						'param_name' 	=> 'second_social',
						'value' 		=> array(
							esc_html__( 'Twitter', 'construction' )		=> 'twitter',
							esc_html__( 'Facebook', 'construction' )	=> 'facebook',
							esc_html__( 'Google Plus', 'construction' )	=> 'google-plus',
							esc_html__( 'Vimeo', 'construction' )		=> 'vimeo',
							esc_html__( 'Dribbble', 'construction' )	=> 'dribbble',
							esc_html__( 'Youtube', 'construction' )		=> 'youtube',									
							esc_html__( 'Pinterest', 'construction' )	=> 'pinterest',
							esc_html__( 'LinkedIn', 'construction' )	=> 'linkedin',
							esc_html__( 'Instagram', 'construction' )	=> 'instagram',
						),
						'std' 			=> 'facebook',
						'description' 	=> esc_html__( 'Select Social Name', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social', 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textfield',
						'heading' 		=> esc_html__( 'Second Social URL', 'construction' ),
						'param_name' 	=> 'second_url',
						'description' 	=> esc_html__( 'Second social URL', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social', 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'dropdown',
						'heading' 		=> esc_html__( 'Third Social Name', 'construction' ),
						'param_name' 	=> 'third_social',
						'value' 		=> array(
							esc_html__( 'Twitter', 'construction' )		=> 'twitter',
							esc_html__( 'Facebook', 'construction' )	=> 'facebook',
							esc_html__( 'Google Plus', 'construction' )	=> 'google-plus',
							esc_html__( 'Vimeo', 'construction' )		=> 'vimeo',
							esc_html__( 'Dribbble', 'construction' )	=> 'dribbble',
							esc_html__( 'Youtube', 'construction' )		=> 'youtube',									
							esc_html__( 'Pinterest', 'construction' )	=> 'pinterest',
							esc_html__( 'LinkedIn', 'construction' )	=> 'linkedin',
							esc_html__( 'Instagram', 'construction' )	=> 'instagram',
						),
						'std' 			=> 'google-plus',
						'description' 	=> esc_html__( 'Select Social Name', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social' , 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textfield',
						'heading' 		=> esc_html__( 'Third Social URL', 'construction' ),
						'param_name' 	=> 'third_url',
						'description' 	=> esc_html__( 'Third social URL', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social', 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'dropdown',
						'heading' 		=> esc_html__( 'Fourth Social Name', 'construction' ),
						'param_name' 	=> 'fourth_social',
						'value' 		=> array(
							esc_html__( 'Twitter', 'construction' )		=> 'twitter',
							esc_html__( 'Facebook', 'construction' )	=> 'facebook',
							esc_html__( 'Google Plus', 'construction' )	=> 'google-plus',
							esc_html__( 'Vimeo', 'construction' )		=> 'vimeo',
							esc_html__( 'Dribbble', 'construction' )	=> 'dribbble',
							esc_html__( 'Youtube', 'construction' )		=> 'youtube',									
							esc_html__( 'Pinterest', 'construction' )	=> 'pinterest',
							esc_html__( 'LinkedIn', 'construction' )	=> 'linkedin',
							esc_html__( 'Instagram', 'construction' )	=> 'instagram',
						),
						'std' 			=> 'linkedin',
						'description' 	=> esc_html__( 'Select Social Name', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social', 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					),

					array(
						'type' 			=> 'textfield',
						'heading' 		=> esc_html__( 'Fourth Social URL', 'construction' ),
						'param_name' 	=> 'fourth_url',
						'description' 	=> esc_html__( 'Fourth social URL', 'construction' ),
						'dependency' 	=> array( 'element' => 'team_social', 'value' => array( 'enable' ) ),
						'save_always' 	=> true
					)
				)
			),

			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Type', 'construction' ),
				'param_name' 	=> 'team_style',
				'value' 		=> array(
					esc_html__( 'Grid', 'construction' ) 		=> '0',
					esc_html__( 'Carousel', 'construction' )	=> '1',		
				),
				'description' 	=> esc_html__( 'Our Team List Type', 'construction' ),
				'std' 			=> '0',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_item',
				'type' 			=> 'textfield',
				'value' 		=> '4',
				'heading' 		=> esc_html__( 'Member Per View', 'construction' ),
				'description' 	=> esc_html__( 'Enther the number of member show per view. ', 'construction' ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'dependency' 	=> array( 'element' => 'team_style', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_autoplay',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' ) 	=> 'false'
				),
				'heading' 		=> esc_html__( 'Carousel Autoplay', 'construction' ),				
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'dependency' 	=> array( 'element' => 'team_style', 'value' => array( '1' ) ),
				'std'			=> true,
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_navigation',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' )  => 'false'
				),
				'heading' 		=> esc_html__( 'Show Navigation', 'construction' ),				
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'std'			=> false,
				'dependency' 	=> array( 'element' => 'team_style', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_pagination',
				'type' 			=> 'dropdown',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'true',
					esc_html__( 'No', 'construction' )  => 'false'
				),
				'heading' 		=> esc_html__( 'Show Pagination', 'construction' ),				
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'std'			=> false,
				'dependency' 	=> array( 'element' => 'team_style', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_auto_speed',
				'type' 			=> 'textfield',
				'value' 		=> '1000',
				'heading' 		=> esc_html__( 'Auto Play Speed', 'construction' ),
				'description' 	=> esc_html__( 'Autoplay Speed in milliseconds. Default 1000', 'construction' ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'dependency' 	=> array( 'element' => 'team_style', 'value' => array( '1' ) ),
				'save_always' 	=> true
			)
		)
    ) 
);

?>