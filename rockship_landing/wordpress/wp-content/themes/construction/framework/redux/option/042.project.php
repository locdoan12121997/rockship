<?php

// BLOG Options
Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( 'Project Options', 'construction' ),
	    'desc'   => esc_html__( 'Customize Project List And Detail', 'construction' ),
	    'id'     => 'project',
	    'icon'   => 'el-tag el-icon-small',
	    'fields' => array(	        

	        array(
                'id'     => 'section-project-single',
                'type'   => 'info',
                'notice' => false,
                'style'  => 'info',
                'title'  => esc_html__( 'Project Single Page Related Project Setting', 'construction' ),
                'desc'   => ''
            ),

            array(
	            'id'       => 'project_releated_project',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Show Related Project', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable Show Related Project in Project Detail Page.', 'construction' ), 
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	        ),

	        array(
	            'id'		=> 'project_releated_label',
	            'type'		=> 'text',
	            'default'	=> esc_html__( 'Related Projects', 'construction' ),
	            'title'		=> esc_html__( 'Related Projects Label', 'construction' ),
	            'subtitle' 	=> esc_html__( 'You can set another label instead of Related Projects label.', 'construction' ),
	            'required' 	=> array( 'project_releated_project', '=', 1 ),
	        ),

	        array(
				'id' 			=> 'project_style',
				'type' 			=> 'select',
				'title' 		=> esc_html__( 'Project Style', 'construction' ),
				'subtitle' 		=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'options' 		=> array(
					'0' => esc_html__( 'Style 1', 'construction' ),
					'1' => esc_html__( 'Style 2', 'construction' ),
				),
				'default' => '0',
			),

			array(
	            'id'       => 'project_with_space',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Project Layout', 'construction' ),
	            'subtitle' => esc_html__( 'Show related project without space or with space.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Without Space', 'construction' ),
	            'off'      => esc_html__( 'With Space', 'construction' ),
	            'required' => array( 'project_releated_project', '=', 1 ),
	        ),

	        array(
	            'id'       => 'project_title',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Project Title', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable project title.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	            'required' => array( 'project_releated_project', '=', 1 ),
	        ),

	        array(
	            'id'       => 'project_zoom',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Project Zoom Image', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable project zoom image option.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	            'required' => array( 'project_releated_project', '=', 1 ),
	        ),

	        array(
	            'id'       => 'project_link',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Project Link', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable project single link.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	            'required' => array( 'project_releated_project', '=', 1 ),
	        ),

	        array(
                'id'     => 'section-project-category',
                'type'   => 'info',
                'notice' => false,
                'style'  => 'info',
                'title'  => esc_html__( 'Project Category Page Setting', 'construction' ),
                'desc'   => ''
            ),

            array(
	            'id'		=> 'project_cateogry_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Banner Image', 'construction' ),
	            'subtitle'	=> esc_html__( 'Upload banner image for project category page.', 'construction' ),
	            'read-only'	=> false,	            
	        ),

	        array(
				'id' 			=> 'project_cat_style',
				'type' 			=> 'select',
				'title' 		=> esc_html__( 'Project Style', 'construction' ),
				'subtitle' 		=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'options' 		=> array(
					'0' => esc_html__( 'Style 1', 'construction' ),
					'1' => esc_html__( 'Style 2', 'construction' ),
				),
				'default' => '0',
			),

			array(
				'id' 			=> 'project_cat_layout',
				'type' 			=> 'select',
				'title' 		=> esc_html__( 'Project Layout', 'construction' ),
				'subtitle' 		=> esc_html__( 'You can choose among these pre-designed layout.', 'construction' ),
				'options' 		=> array(
					'0' => esc_html__( 'Full Width', 'construction' ),
					'1' => esc_html__( 'Box Container', 'construction' ),
				),
				'default' => '0',				
			),

			array(
				'id' 			=> 'project_cat_with_space',
				'type' 			=> 'select',
				'title' 		=> esc_html__( 'Project Space', 'construction' ),
				'subtitle' 		=> esc_html__( 'You can choose among these pre-designed style.', 'construction' ),
				'options' 		=> array(
					'0' => esc_html__( 'Without Space', 'construction' ),
					'1' => esc_html__( 'With Space', 'construction' ),
				),
				'default' => '0',				
			),

			array(
				'id' 			=> 'project_cat_view',
				'type' 			=> 'select',
				'title' 		=> esc_html__( 'Project View', 'construction' ),
				'subtitle' 		=> esc_html__( 'You can choose among these pre-define view option.', 'construction' ),
				'options' 		=> array(
					'0' => esc_html__( 'Block View', 'construction' ),
					'1' => esc_html__( 'Masonary View', 'construction' ),
				),
				'default' 		=> '0',				
			),

			array(
				'id' 			=> 'project_cat_per_view',
				'type' 			=> 'select',
				'title' 		=> esc_html__( 'Project Style', 'construction' ),
				'subtitle' 		=> esc_html__( 'You can choose among these pre-define grid option.', 'construction' ),
				'options' 		=> array(
					'0' => esc_html__( 'Grid 1 Column', 'construction' ),
					'1' => esc_html__( 'Grid 2 Column', 'construction' ),
					'2' => esc_html__( 'Grid 3 Column', 'construction' ),
					'3' => esc_html__( 'Grid 4 Column', 'construction' ),
					'4' => esc_html__( 'Grid 6 Column', 'construction' ),
				),
				'default'		=> '3',
				'required' 		=> array( 'project_cat_view', '=', 0 ),
			),

			array(
				'id' 			=> 'project_cat_zoom',
				'type' 			=> 'select',
				'title'			=> esc_html__( 'Show Zoom Option', 'construction' ),
				'subtitle'		=> esc_html__( 'Show the project image zoom option.', 'construction' ),
				'options' 		=> array(
					'yes'	=> esc_html__( 'Yes', 'construction' ),
					'no'	=> esc_html__( 'No', 'construction' ),
				),
				'default'		=> 'yes',				
			),

			array(
				'id' 			=> 'project_cat_link',
				'type' 			=> 'select',				
				'title'			=> esc_html__( 'Show Link', 'construction' ),
				'subtitle'		=> esc_html__( 'Show the project detail page link.', 'construction' ),
				'options' 		=> array(
					'yes' 	=> esc_html__( 'Yes', 'construction' ),
					'no' 	=> esc_html__( 'No', 'construction' ),
				),
				'default'		=> 'yes',				
			),

			array(
				'id' 			=> 'project_cat_title',
				'type' 			=> 'select',
				'title'			=> esc_html__( 'Show Title', 'construction' ),
				'subtitle'		=> esc_html__( 'Show the ptoject title.', 'construction' ),
				'options' 		=> array(
					'yes' 	=> esc_html__( 'Yes', 'construction' ),
					'no' 	=> esc_html__( 'No', 'construction' ),
				),
				'default'		=> 'yes',				
			),

	    ),
	)
);

?>