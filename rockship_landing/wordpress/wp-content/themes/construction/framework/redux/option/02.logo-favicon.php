<?php

Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( 'Logos & Favicon', 'construction' ),
	    'id'     => 'logo-favicon',
	    'desc'   => '',
	    'icon'   => 'el-icon-home el-icon-small',
	    'fields' => array(

	        array(
	            'id'		=> 'custom_logo',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Logo', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/logo.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom site logo.', 'construction' ),
	        ),

	        array(
	            'id'		=> 'transparent_logo',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Transparent Logo', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/logo-white.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom site logo for Transparent Header.', 'construction' ),
	        ),

	        array(
	            'id'       => 'logo_desktop_dimensions',
	            'type'     => 'dimensions',
	            'units'    => array('px'),
	            'title'    => esc_html__( 'Header Logo (Width/Height)', 'construction' ),
	            'subtitle'  => esc_html__( 'Enter the Height and Width of Logo.', 'construction' ), 
	            'default'  => array(
	                'Width'   => '',
	                'Height'  => ''
	            ),
	        ),

	        array(
	            'id'		=> 'retina_logo',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Retina Logo', 'construction' ),
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/logo.png' ),
	            'subtitle'	=> esc_html__( 'Upload your retina logo (optional).', 'construction' ),
	        ),

	        array(
	            'id'		=> 'retina_transparent_logo',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Retina Transparent Logo', 'construction' ),
	            'read-only'	=> false,
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/logo-white.png' ),
	            'subtitle'	=> esc_html__( 'Upload your retina logo (optional) for Transparent Header.', 'construction' ),
	        ),

	        array(
	            'id'		=> 'retina_logo_width',
	            'type'		=> 'text',
	            'default'	=> '205px',
	            'title'		=> esc_html__( 'Standard Logo Width', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter your standard logo width. Used for retina logo.', 'construction' ),
	        ),

	        array(
	            'id'		=> 'retina_logo_height',
	            'type'		=> 'text',
	            'default'	=> '35px',
	            'title'		=> esc_html__( 'Standard Logo Height', 'construction' ),
	            'subtitle'	=> esc_html__( 'Enter your standard logo height. Used for retina logo.', 'construction' ),
	        ),	        

	        array(
	            'id'		=> 'favicon',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Favicon', 'construction' ),
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/favicon.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom site favicon.', 'construction' ),
	        ),

	        array(
	            'id'		=> 'iphone_icon',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Apple iPhone Icon ', 'construction' ),
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/favicon.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom iPhone icon (57px by 57px).', 'construction' ),
	        ),

	        array(
	            'id'		=> 'iphone_icon_retina',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Apple iPhone Retina Icon ', 'construction' ),
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/favicon.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom iPhone retina icon (114px by 114px).', 'construction' ),
	        ),

	        array(
	            'id'		=> 'ipad_icon',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Apple iPad Icon ', 'construction' ),
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/favicon.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom iPad icon (72px by 72px).', 'construction' ),
	        ),

	        array(
	            'id'		=> 'ipad_icon_retina',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Apple iPad Retina Icon ', 'construction' ),
	            'default'   => array( 'url' => get_template_directory_uri() .'/images/favicon.png' ),
	            'subtitle'	=> esc_html__( 'Upload your custom iPad retina icon (144px by 144px).', 'construction' ),
	        )
	    ),
	)
);

?>