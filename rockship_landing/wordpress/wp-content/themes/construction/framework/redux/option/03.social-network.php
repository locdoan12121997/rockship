<?php
/*
 * Social Networks Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Social Networks','construction'),
    'icon'  => 'el-icon-list',
    'desc'  => esc_html__('This section contains options for social networks.','construction'),
    'fields'=> array(
            
            array(
                'id'        => 'construction_show_facebook',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Facebook','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_facebook',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Facebook','construction'),                
                'required'  => array( 'construction_show_facebook', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_twitter',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Twitter','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_twitter',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Twitter','construction'),
                'required'  => array( 'construction_show_twitter', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_google',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Google Plus','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_google',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Google Plus','construction'),
                'required'  => array( 'construction_show_google', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_pinterest',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Pinterest','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_pinterest',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Pinterest','construction'),
                'required'  => array( 'construction_show_pinterest', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_youtube',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Youtube','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_youtube',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Youtube','construction'),
                'required'  => array( 'construction_show_youtube', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_dribbble',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Dribbble','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_dribbble',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Dribbble','construction'),
                'required'  => array( 'construction_show_dribbble', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_vimeo',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Vimeo','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_vimeo',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Vimeo','construction'),
                'required'  => array( 'construction_show_vimeo', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_linkedin',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Linkedin','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_linkedin',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Linkedin','construction'),
                'required'  => array( 'construction_show_linkedin', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_rss',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Rss','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_rss',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Rss','construction'),
                'required'  => array( 'construction_show_rss', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_instagram',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Instagram','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_instagram',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Instagram','construction'),
                'required'  => array( 'construction_show_instagram', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_flickr',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Flickr','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_flickr',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Flickr','construction'),
                'required'  => array( 'construction_show_flickr', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_reddit',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Reddit','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_reddit',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Reddit','construction'),
                'required'  => array( 'construction_show_reddit', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_tumblr',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Tumblr','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_tumblr',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Tumblr','construction'),
                'required'  => array( 'construction_show_tumblr', '=', '1' ),
                'default'   => ''
            ),
            array(
                'id'        => 'construction_show_skype',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Share On Skype','construction'),
                'options'   => array(
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                'default'   => '2'
            ),
            array(
                'id'        => 'construction_social_skype',
                'type'      => 'text',
                'title'     => esc_html__( 'URL of Skype','construction'),
                'required'  => array( 'construction_show_skype', '=', '1' ),
                'default'   => ''
            ),          
    )   ) 
);