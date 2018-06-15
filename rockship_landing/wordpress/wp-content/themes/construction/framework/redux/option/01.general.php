<?php

// General
Redux::setSection( $opt_name, array(

    'title'            => esc_html__( 'General', 'construction' ),
    'id'               => 'general',
    'subsection'       => false,
    'fields'           => array(

        array(
            'id'        => 'show_pre_loader',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Pre Loader','construction'),
            'options'   => array(
                            'yes' => 'Yes',
                            'no' => 'No'
                        ),
            'subtitle'  => esc_html__( 'Enable/Disable Pre Loader.', 'construction' ),
            'default'   => 'yes'
        ),

        array(
            'id'        => 'pre_loader_img',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Pre Loader Image', 'construction' ),
            'required'  => array( 'show_pre_loader', '=', 'yes' ),
            'default'   => array( 'url' => get_template_directory_uri() .'/images/loader.gif' ),
            'subtitle'  => esc_html__( 'Upload your custom pre loader image.', 'construction' ),
        ),

        array(
            'id'        => 'show_up_arrow',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Scroll Top','construction'),
            'options'   => array(
                            'yes' => 'Yes',
                            'no' => 'No'
                        ),
            'subtitle'  => esc_html__( 'Enable/Disable Scroll Top Arrow.', 'construction' ),
            'default'   => 'yes'
        ),

        array(
            'id'        => 'up_arrow_img',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Scroll Top Image', 'construction' ),
            'required'  => array( 'show_up_arrow', '=', 'yes' ),
            'subtitle'  => esc_html__( 'Upload your custom scroll top image.', 'construction' ),
        ),

        array(
            'id'       => 'enabled_seo',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable SEO', 'construction' ),
            'subtitle' => esc_html__( 'Enabling this option will turn on SEO.', 'construction' ),
            'on'       => esc_html__( 'Enabled', 'construction' ),
            'off'      => esc_html__( 'Disabled', 'construction' ),
            'default'  => 1,
        ),

        array(
            'id'       => 'rtl_css',
            'type'     => 'switch',
            'title'    => esc_html__( 'RTL CSS', 'construction' ),
            'subtitle' => esc_html__( 'Enable/Disable RTL language support.', 'construction' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'construction' ),
            'off'      => esc_html__( 'Disable', 'construction' ),
        ),
    )
) );

?>