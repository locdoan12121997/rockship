<?php

$sidebar_type = array();
foreach( $GLOBALS['wp_registered_sidebars'] as $sidebar ){
    $sidebar_type[$sidebar['id']] = ucwords( $sidebar['name'] );
}

// BLOG Options
Redux::setSection( $opt_name, 
	array(
	    'title'  => esc_html__( 'Service Options', 'construction' ),
	    'desc'   => esc_html__( 'Customize Service List And Detail', 'construction' ),
	    'id'     => 'service',
	    'icon'   => 'el-list-alt el-icon-small',
	    'fields' => array(	        

	        array(
	            'id'		=> 'service_readmore_text',
	            'type'		=> 'text',
	            'default'	=> esc_html__( 'Find More', 'construction' ),
	            'title'		=> esc_html__( 'Find More Text', 'construction' ),
	            'subtitle' 	=> esc_html__( 'You can set another name instead of Find More link.', 'construction' ),
	        ),
	    )
	)
);

?>