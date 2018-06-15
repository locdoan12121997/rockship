<?php

Redux::setSection( $opt_name, 
    array(
        'title'  => esc_html__( 'Typography', 'construction' ),
        'id'     => 'construction-typography',
        'icon'   => 'el-icon-font el-icon-small',
        'fields'  => array(
            array(
                'id'                => 'typo-body',
                'type'              => 'typography',
                'title'             => esc_html__( 'Body', 'construction' ),
                'google'            => true,
                'font-family'       => true,
                'font-backup'       => false,
                'text-align'        => false,
                'text-transform'    => true,
                'font-style'        => false,
                'color'             => false,
                'units'             =>'px',
                'subtitle'          => esc_html__( 'Select your custom font options for your main body font.', 'construction' ),
                'default'           => array(
                    'font-weight'       => '400',
                    'font-family'       => 'Open Sans',
                    'google'            => true,
                    'font-size'         => '15px',
                    'line-height'       => '25px',
                    'text-transform'    => 'none'
                ),
            ),

            array(
                'id'                => 'typo-headers',
                'type'              => 'typography',
                'title'             => esc_html__( 'Headers', 'construction' ),
                'google'            => true,
                'font-family'       => true,
                'font-backup'       => false,
                'text-align'        => true,
                'text-transform'    => true,
                'color'             => false,
                'font-style'        => false,
                'units'             =>'px',
                'subtitle'          => esc_html__( 'Select your custom font options for your headers.', 'construction' ),
                'default'           => array(
                    'font-family'       => 'Montserrat',
                    'font-weight'       => '400',
                    'google'            => true,
                    'font-size'         => '13px',
                    'line-height'       => '25px',
                    'text-transform'    => 'none',
                    'text-align'        => 'none'
                ),
            ),            

            // Typo Headings 1
            array(
                'id'                => 'typo-headings',
                'type'              => 'typography',
                'title'             => esc_html__( 'Headings', 'construction' ),
                'google'            => true,
                'font-family'       => true,
                'font-backup'       => false,
                'text-align'        => true,
                'font-size'         => false,
                'line-height'       => false,
                'text-transform'    => true,
                'color'             => false,
                'font-style'        => false,
                'units'             =>'px',
                'subtitle'          => esc_html__('Select your custom font options for headings ( h1, h2, h3, h3 etc ).', 'construction'),
                'default'           => array(
                    'font-family'       => 'Montserrat',
                    'font-weight'       => '400',
                    'google'            => true,
                    'text-transform'    => 'uppercase',
                    'text-align'        => 'inherit'
                ),
            ),
        ),
    )
);

?>