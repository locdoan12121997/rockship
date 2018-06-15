<?php

Redux::setSection( $opt_name, 
    array(
        'title'      => esc_html__( 'Custom Code', 'construction' ),
        'id'         => 'custom_code',
        'icon'       => 'el el-cog el-icon-small',
        'desc'       => '',
        'fields'     => array(

            array(
                'id'       => 'custom_css',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'CSS Code', 'construction' ),
                'subtitle' => esc_html__( 'Paste your CSS code here.', 'construction' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'desc'     => '',
                'default'  => ''
            ),

            array(
                'id'       => 'custom_js_header',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Custom JS Code', 'construction' ),
                'subtitle' => esc_html__( 'Custom JavaScript/Analytics Header.', 'construction' ),
                'mode'     => 'text',
                'theme'    => 'chrome',
                'desc'     => '',
                'default'  => ''
            ),
            
            array(
                'id'       => 'custom_js_footer',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Custom JS Code', 'construction' ),
                'subtitle' => esc_html__( 'Custom JavaScript/Analytics Footer.', 'construction' ),
                'mode'     => 'text',
                'theme'    => 'chrome',
                'desc'     => '',
                'default'  => ''
            )
        )
    ) 
);

?>