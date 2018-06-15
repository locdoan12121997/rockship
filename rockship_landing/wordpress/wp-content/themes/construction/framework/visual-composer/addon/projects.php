<?php

vc_map( 
	array(
		'name' 			=> esc_html__( 'Projects', 'construction' ),
		'base' 			=> 'projects',
		'description' 	=> esc_html__( 'List Projects', 'construction' ),
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
		'icon' 			=> get_template_directory_uri() . '/framework/visual-composer/assets/images/projects.png',
		'params' 		=> array(

			array(
				'param_name' 	=> 'project_list_style',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Project Style', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Style 1', 'construction' ) => '0',
					esc_html__( 'Style 2', 'construction' ) => '1',
				),
				'std' 			=> '0',
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'project_style',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Project Layout', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-designed layout.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Project With Filter', 'construction' ) => '0',
					esc_html__( 'Project Without Filter', 'construction' ) => '1',
				),
				'std' 			=> '0',
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'project_with_space',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Project Space', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Without Space', 'construction' ) => '0',
					esc_html__( 'With Space', 'construction' ) => '1',
				),
				'std' 			=> '0',
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'project_view',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Project View', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-define view option.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Block View', 'construction' ) => '0',
					esc_html__( 'Masonary View', 'construction' ) => '1',					
				),
				'std' 			=> '0',				
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'project_per_view',
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Project Layout', 'construction' ),
				'description' 	=> esc_html__( 'You can choose among these pre-define grid option.', 'construction' ),
				'value' 		=> array(
					esc_html__( 'Grid 1 Column', 'construction' ) => '0',
					esc_html__( 'Grid 2 Column', 'construction' ) => '1',
					esc_html__( 'Grid 3 Column', 'construction' ) => '2',
					esc_html__( 'Grid 4 Column', 'construction' ) => '3',
					esc_html__( 'Grid 6 Column', 'construction' ) => '4',
				),
				'dependency' 	=> array( 'element' => 'project_view', 'value' => array( '0' ) ),
				'std' 			=> '3',
				'save_always' 	=> true,
			),

			array(
				'param_name' 	=> 'project_limit',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Project Limit', 'construction' ),
				'description' 	=> esc_html__( 'Number of project(s) to show', 'construction' ),
				'value' 		=> '8',				
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'project_ids',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Project IDs', 'construction' ),
				'description' 	=> esc_html__( 'Enter project ids comma separated. Ex 153,259,5359', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'offset',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Offset Projects', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'heading'		=> esc_html__( 'Show Zoom Option', 'construction' ),
				'description'	=> esc_html__( 'Show the project image zoom option.', 'construction' ),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'project_zoom',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'yes',
					esc_html__( 'No', 'construction' ) 	=> 'no',
				),
				'std' 			=> 'yes',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always'   => true
			),

			array(
				'heading'		=> esc_html__( 'Show Link', 'construction' ),
				'description'	=> esc_html__( 'Show the project detail page link.', 'construction' ),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'project_link',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'yes',
					esc_html__( 'No', 'construction' ) 	=> 'no',
				),
				'std' 			=> 'yes',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always'   => true
			),

			array(
				'heading'		=> esc_html__( 'Show Title', 'construction' ),
				'description'	=> esc_html__( 'Show the ptoject title.', 'construction' ),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'project_title',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'yes',
					esc_html__( 'No', 'construction' ) 	=> 'no',
				),
				'std' 			=> 'yes',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always'   => true
			),

			array(
				'heading' 		=> esc_html__( 'Show All Project - Button', 'construction' ),
				'description' 	=> esc_html__( 'Enable/Disable All Project - Button', 'construction'),
				'type' 			=> 'dropdown',
				'param_name' 	=> 'project_all_button',
				'value' 		=> array(
					esc_html__( 'Yes', 'construction' ) => 'yes',
					esc_html__( 'No', 'construction' ) 	=> 'no',
				),
				'std' 			=> 'yes',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always'   => true
			),

			array(
				'param_name' 	=> 'project_button_text',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'All - Button Text:', 'construction' ),
				'description' 	=> esc_html__( 'Enter the text of all projects button.', 'construction' ),
				'value'			=> esc_html__( 'View all projects', 'construction' ),
				'dependency' 	=> array( 'element' => 'project_all_button', 'value' => array( 'yes' ) ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'project_button_url',
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'All - Button url:', 'construction' ),
				'description' 	=> esc_html__( 'Enter the link of all projects button.', 'construction' ),
				'dependency' 	=> array( 'element' => 'project_all_button', 'value' => array( 'yes' ) ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'orderby',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'ID', 'construction' ) => 'ID', esc_html__( 'Title', 'construction' ) => 'title', esc_html__( 'Date', 'construction' ) => 'date', esc_html__( 'Rand', 'construction' ) => 'rand' ),
				'heading' 		=> esc_html__( 'Order By', 'construction' ),
				'std' 			=> 'date',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'order',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'ASC', 'construction' ) => 'ASC', esc_html__( 'DESC', 'construction' ) => 'DESC' ),
				'heading' 		=> esc_html__( 'Order', 'construction' ),
				'std' 			=> 'DESC',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),
		)
	) 
);

?>