<?php

$categories = array();
$categories = get_categories();
$category_slug_array = array('');
foreach( $categories as $category ){
	$category_slug_array[$category->name] = $category->slug;
}

vc_map( 
	array(
        'name' 			=> esc_html__( 'Latest Blog', 'construction' ),
        'description' 	=> esc_html__( 'Latest Blog', 'construction' ),
        'base' 			=> 'latest_blog',
		'category' 		=> esc_html__( 'Construction Shortcodes', 'construction' ),
        'icon'          => get_template_directory_uri() . '/framework/visual-composer/assets/images/latest_blog.png',
		'params'		=> array(
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Style', 'construction' ),
				'param_name' 	=> 'blog_style',
				'value' 		=> array(
					esc_html__( 'Stlye 1', 'construction' ) 	=> '0',
					esc_html__( 'Stlye 2', 'construction' ) 	=> '1',
					esc_html__( 'Stlye 3', 'construction' ) 	=> '2',
				),
				'description' 	=> esc_html__( 'Latest Blog Style', 'construction' ),
				'std' 			=> '0',
				'save_always' 	=> true
			),			

			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Category', 'construction' ),
				'param_name' 	=> 'blog_category',
				'value' 		=> $category_slug_array,
				'description' 	=> esc_html__( 'Select specific category, leave blank to show all categories.', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'type' 			=> 'textfield',
				'heading' 		=> esc_html__( 'Post Limit', 'construction' ),
				'param_name' 	=> 'limit_post',
				'value' 		=> '6',
				'description' 	=> esc_html__( 'Number of post(s) to show', 'construction' ),
				'save_always' 	=> true
			),

		    array(
				'type'			=> 'checkbox',
				'param_name'	=> 'blog_thumbnail',
				'heading'		=> esc_html__( 'Show Thumbnail', 'construction' ),
				'description'	=> esc_html__( 'Show the post thumbnail.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std' 			=> 'enable',
				'save_always' 	=> true
			),

		    array(
				'type'			=> 'checkbox',
				'param_name'	=> 'show_author',
				'heading'		=> esc_html__( 'Show Author', 'construction' ),
				'description'	=> esc_html__( 'Show the author of the post.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std' 			=> 'enable',
				'save_always' 	=> true
			),

			array(
				'type'			=> 'checkbox',
				'param_name'	=> 'show_date',
				'heading'		=> esc_html__( 'Show Date', 'construction' ),
				'description'	=> esc_html__( 'Show the date of the post.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std' 			=> 'enable',
				'save_always' 	=> true
			),			

			array(
				'type'			=> 'checkbox',
				'param_name'	=> 'show_comments',
				'heading'		=> esc_html__( 'Show Comment Counter', 'construction' ),
				'description'	=> esc_html__( 'Show the comments counter of the post.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std' 			=> 'enable',
				'save_always' 	=> true
			),

			array(
				'type'			=> 'checkbox',
				'param_name'	=> 'show_excerpt',
				'heading'		=> esc_html__( 'Show Post Excerpt', 'construction' ),
				'description'	=> esc_html__( 'Show the excerpt of the post.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std' 			=> 'enable',
				'save_always' 	=> true
			),

			array(
				'type'			=> 'textfield',
				'param_name'	=> 'number_word',
				'heading'		=> esc_html__( 'Number Of Words', 'construction' ),
				'description'	=> esc_html__( 'Show a certain number of words in each post.', 'construction' ),
				'value'			=> '30',
				'dependency' 	=> array( 'element' => 'show_excerpt', 'value' => array( 'enable' ) ),
				'save_always' 	=> true
			),

			array(
				'type'			=> 'checkbox',
				'param_name'	=> 'show_button',
				'heading'		=> esc_html__( 'Show "Read Bore" Button', 'construction' ),
				'description'	=> esc_html__( 'Show the "Read more" button in the post.', 'construction' ),
				'value' 		=> array( esc_html__( 'Enable', 'construction' ) => 'enable' ),
				'std' 			=> 'enable',
				'dependency' 	=> array( 'element' => 'blog_style', 'value' => array( '0', '1' ) ),
				'save_always' 	=> true
			),

			array(
				'type'			=> 'textfield',
				'param_name'	=> 'readmore_text',
				'heading'		=> esc_html__( 'Read More Text', 'construction' ),
				'description'	=> esc_html__( 'Edit the text that appears on the "Read more" button.', 'construction' ),
				'value'			=> 'Read more',
				'dependency' 	=> array( 'element' => 'show_button', 'value' => array( 'enable' ) ),
				'save_always' 	=> true
			),

			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__( 'Type', 'construction' ),
				'param_name' 	=> 'blog_type',
				'value' 		=> array(
					esc_html__( 'Grid', 'construction' ) 		=> '0',
					esc_html__( 'Carousel', 'construction' )	=> '1',		
				),
				'description' 	=> esc_html__( 'Latest Blog List Type', 'construction' ),
				'std' 			=> '0',
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_item',
				'type' 			=> 'textfield',
				'value' 		=> '4',
				'heading' 		=> esc_html__( 'Blog Per View', 'construction' ),
				'description' 	=> esc_html__( 'Enther the number of blog show per view. ', 'construction' ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'dependency' 	=> array( 'element' => 'blog_type', 'value' => array( '1' ) ),
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
				'dependency' 	=> array( 'element' => 'blog_type', 'value' => array( '1' ) ),
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
				'dependency' 	=> array( 'element' => 'blog_type', 'value' => array( '1' ) ),
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
				'dependency' 	=> array( 'element' => 'blog_type', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'slider_auto_speed',
				'type' 			=> 'textfield',
				'value' 		=> '1000',
				'heading' 		=> esc_html__( 'Auto Play Speed', 'construction' ),
				'description' 	=> esc_html__( 'Autoplay Speed in milliseconds. Default 1000', 'construction' ),
				'group' 		=> esc_html__( 'Settings', 'construction' ),
				'dependency' 	=> array( 'element' => 'blog_type', 'value' => array( '1' ) ),
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'orderby',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'ID', 'construction' ) => 'ID', esc_html__( 'Title', 'construction' ) => 'title', esc_html__( 'Date', 'construction' ) => 'date', esc_html__( 'Rand', 'construction' ) => 'rand' ),
				'heading' 		=> esc_html__( 'Order By', 'construction' ),
				'std' 			=> 'date',
				'save_always' 	=> true
			),

			array(
				'param_name' 	=> 'order',
				'type' 			=> 'dropdown',
				'value' 		=> array( esc_html__( 'ASC', 'construction' ) => 'ASC', esc_html__( 'DESC', 'construction' ) => 'DESC' ),
				'heading' 		=> esc_html__( 'Order', 'construction' ),
				'std' 			=> 'DESC',
				'save_always' 	=> true
			),
		)
    ) 
);

?>