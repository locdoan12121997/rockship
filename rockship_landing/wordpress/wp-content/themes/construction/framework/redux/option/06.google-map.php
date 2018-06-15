<?php

$allowed_html_array = array(
    'i' => array(
        'class' => array()
    ),
    'span' => array(
        'class' => array()
    ),
    'a' => array(
        'href' => array(),
        'title' => array(),
        'target' => array()
    )
);

Redux::setSection( $opt_name, 
    array(
        'title'  => esc_html__( 'Google Map Settings', 'construction' ),
        'id'     => 'construction-googlemap',
        'desc'   => '',
        'icon'   => 'el-icon-globe el-icon-small',
        'fields' => array(
            array(
                'id'       => 'google_map_ssl_key',
                'type'     => 'select',
                'title'    => esc_html__( 'Google Maps SSL', 'construction' ),
                'subtitle' => esc_html__( 'Use google maps with ssl.', 'construction' ),
                'desc'     => '',
                'options'  => array(
                    'no'   => esc_html__( 'No', 'construction' ),
                    'yes'   => esc_html__( 'Yes', 'construction' )
                ),
                'default'  => 'no'
            ),
            array(
                'id'       => 'google_map_api_key',
                'type'     => 'text',
                'title'    => esc_html__( 'Google Maps API KEY', 'construction' ),
                'desc'     => wp_kses(__( 'We strongly encourage you to get an APIs Console key and post the code in Theme Options. You can get it from <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">here</a>.', 'construction' ), $allowed_html_array),
                'subtitle' => esc_html__( 'Enter your google maps api key.', 'construction' ),
                'default'  => ''
            ),
        ),
    )
);

?>