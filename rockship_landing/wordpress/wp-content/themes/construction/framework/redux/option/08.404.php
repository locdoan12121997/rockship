<?php

// 404 page Options
Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( '404 Page Options', 'construction' ),
	    'desc'   => esc_html__( 'Customize 404 page', 'construction' ),
	    'id'     => '404',	    
	    'icon'   => 'el-icon-error el-icon-small',
	    'fields' => array(

	        array(
                'id'        => '404_page_image',
                'url'       => true,
                'type'      => 'media',
                'title'     => esc_html__( '404 Background Image', 'construction' ),
                'read-only' => false,
                'subtitle'  => esc_html__( 'Upload banner image for 404 page.', 'construction' ),
            ),

            array(
                'id' 	    => '404_title',
                'type' 	    => 'textarea',
                'title'     => esc_html__( 'Page Title', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Title of 404 page.', 'construction' ), 
            ),

            array(
                'id' 	    => '404_text',
                'type' 	    => 'textarea',
                'title'     => esc_html__( 'Page Content', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Content of 404 page.', 'construction' ), 
            ),

            array(
                'id' 	    => '404_back_label',
                'type' 	    => 'textarea',
                'title'     => esc_html__( 'Home Button Label', 'construction' ),
                'subtitle'  => esc_html__( 'Enther the Label of Back to Home Button.', 'construction' ), 
            ),

	    ),
	)
);

?>