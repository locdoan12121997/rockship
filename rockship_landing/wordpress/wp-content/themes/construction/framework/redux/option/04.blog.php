<?php

// Blog Options
Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( 'Blog Options', 'construction' ),
	    'desc'   => esc_html__( 'Customize Blog List And Detail', 'construction' ),
	    'id'     => 'blog',	    
	    'icon'   => 'el-icon-edit el-icon-small',
	    'fields' => array(	        

	        array(
        		'id'       => 'blog_type',
			    'type'     => 'image_select',
			    'title'    => esc_html__( 'Blog Style', 'construction' ),
			    'subtitle' => esc_html__( 'Select the blog style. Choose between 1, 2 or 3 blog style.', 'construction' ),
			    'options'  => array(
			        '3' => array(
			            'alt'   => esc_html__( 'Blog Style 3', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/blog/blog-3.jpg'
			        ),
			        '1' => array(
			            'alt'   => esc_html__( 'Blog Style 1', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/blog/blog-1.png'
			        ),
			        '2' => array(
			            'alt'   => esc_html__( 'Blog Style 2', 'construction' ),
			            'img'   => get_template_directory_uri() . '/images/blog/blog-2.png'
			        ),			        
			    ),
			    'default' => '1'
			),

			array(
	            'id'       => 'blog_column',
	            'type'     => 'select',
	            'title'    => esc_html__( 'Blog List Column', 'construction' ),
	            'subtitle' => esc_html__( 'Select the blog column. Choose between 1 2 or 3 blog column.', 'construction' ),
	            'options'  => array(
	                '1' => esc_html__( '1 Column', 'construction' ),
	                '2' => esc_html__( '2 Column', 'construction' ),
	                '3' => esc_html__( '3 Column', 'construction' ),
	            ),
	            'default'  => '1'
	        ),

			array(
	            'id'		=> 'blog_readmore_text',
	            'type'		=> 'text',
	            'default'	=> esc_html__( 'Read More', 'construction' ),
	            'title'		=> esc_html__( 'Read More Text', 'construction' ),
	            'subtitle' 	=> esc_html__( 'You can set another name instead of read more link.', 'construction' ),
	        ),

	        array(
	            'id'       => 'blog_excerpt_enable',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Blog Excerpt', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable Excerpt of blog.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	        ),

	        array(
	            'id'		=> 'blog_excerpt_length',
	            'type'		=> 'text',
	            'title'		=> esc_html__( 'Blog Excerpt Word', 'construction' ),
	            'subtitle' 	=> esc_html__( 'Enther the number of words show in Blog Excerpt area.', 'construction' ),
	            'default'	=> 20,
	            'required' 	=> array( 'blog_excerpt_enable', '=', 1 ),
	        ),

	        array(
	            'id'       => 'blog_meta_date_enable',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Metadata Date', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable Date of blog.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	        ),

	        array(
	            'id'       => 'blog_meta_author_enable',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Metadata Author', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable Author of blog.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	        ),

	        array(
	            'id'       => 'blog_meta_comment_enable',
	            'type'     => 'switch',
	            'title'    => esc_html__( 'Metadata Comment', 'construction' ),
	            'subtitle' => esc_html__( 'Enable/Disable Comment of blog.', 'construction' ),
	            'default'  => 1,
	            'on'       => esc_html__( 'Enable', 'construction' ),
	            'off'      => esc_html__( 'Disable', 'construction' ),
	        ),
	        
	        array(
	            'id'		=> 'archive_page_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Archive Banner Image', 'construction' ),
	            'subtitle'	=> esc_html__( 'Upload banner image for archive page.', 'construction' ),
	            'read-only'	=> false,	            
	        ),

	        array(
	            'id'		=> 'search_page_image',
	            'url'		=> true,
	            'type'		=> 'media',
	            'title'		=> esc_html__( 'Search Banner Image', 'construction' ),
	            'subtitle'	=> esc_html__( 'Upload banner image for search page.', 'construction' ),
	            'read-only'	=> false,	            
	        ),
	    ),
	)
);

?>