<?php 

global $construction_options;

if( class_exists( 'WooCommerce' ) ){
    if( is_shop() ){
        $page_id = get_option( 'woocommerce_shop_page_id' );
    } else {
        $page_id = construction_get_page_id();  
    }
} else {
    $page_id = construction_get_page_id();
}

$page_show_top_footer = true;
$show_top_footer = get_post_meta( $page_id, "page_show_top_footer", true );
if( empty($show_top_footer) || $show_top_footer == 'global' ){
    $page_show_top_footer = $construction_options['page_show_top_footer'];
    if( $page_show_top_footer == 'no' ){
        $page_show_top_footer = false;
    } else {
        $page_show_top_footer = true;
    }       
} elseif( get_post_meta( $page_id, "page_show_top_footer", true) == 'yes' ){
    $page_show_top_footer = true;
} elseif( get_post_meta( $page_id, "page_show_top_footer", true) == 'no' ){
    $page_show_top_footer = false;
}

if( isset($construction_options['construction_footer_newsletter']) ){
    $construction_footer_newsletter = $construction_options['construction_footer_newsletter'];
} else {
    $construction_footer_newsletter = '';
}
    

if( empty($construction_footer_newsletter) ){
    echo '<div class="g-footer-inner" style="padding-top:100px;">';
} else {
    echo '<div class="g-footer-inner-space"></div>';
    echo '<div class="g-footer-inner">';
}
    if( $page_show_top_footer ){
        echo do_shortcode($construction_footer_newsletter);        
    }

    $page_show_bottom_footer = true;   
    $show_bottom_footer = get_post_meta( $page_id, "page_show_bottom_footer", true );
    if( empty($show_bottom_footer) || $show_bottom_footer == 'global' ){
        $page_show_bottom_footer = $construction_options['page_show_bottom_footer'];
        if( $page_show_bottom_footer == 'no' ){
            $page_show_bottom_footer = false;
        } else {
            $page_show_bottom_footer = true;
        }       
    } elseif( get_post_meta( $page_id, "page_show_bottom_footer", true) == 'yes' ){
        $page_show_bottom_footer = true;
    } elseif( get_post_meta( $page_id, "page_show_bottom_footer", true) == 'no' ){
        $page_show_bottom_footer = false;
    }
    if( $page_show_bottom_footer ){ ?>
        <div class="g-footer-column">
            <div class="container">
                <div class="row"><?php
                $footer_type = 1;
                if( !empty($construction_options['construction_footer_type']) ){
                    $footer_type = $construction_options['construction_footer_type'];
                }

                switch( $footer_type ){
                    case 1: ?>
                      <div class="col-xs-12 col-sm-4 col-md-4"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
                      <div class="col-xs-12 col-sm-4 col-md-4"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
                      <div class="col-xs-12 col-sm-4 col-md-4"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div><?php 
                    break;

                    case 2: ?>
                      <div class="col-xs-12 col-sm-4 col-md-3"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
                      <div class="col-xs-12 col-sm-4 col-md-3"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
                      <div class="col-xs-12 col-sm-4 col-md-3"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div>
                      <div class="col-xs-12 col-sm-6 col-md-3"><?php if( is_active_sidebar( 'footer-section-4' ) ) dynamic_sidebar('footer-section-4'); ?></div><?php 
                    break;

                    case 3: ?>
                      <div class="col-xs-12 col-sm-6 col-md-6"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
                      <div class="col-xs-12 col-sm-6 col-md-3"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
                      <div class="col-xs-12 col-sm-6 col-md-3"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div><?php 
                    break;

                    case 4: ?>
                      <div class="col-xs-12 col-sm-6 col-md-3"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
                      <div class="col-xs-12 col-sm-6 col-md-3"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div>
                      <div class="col-xs-12 col-sm-6 col-md-6"><?php if( is_active_sidebar( 'footer-section-3' ) ) dynamic_sidebar('footer-section-3'); ?></div><?php 
                    break;

                    case 5: ?>
                      <div class="col-xs-12 col-sm-6 col-md-6"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div>
                      <div class="col-xs-12 col-sm-6 col-md-6"><?php if( is_active_sidebar( 'footer-section-2' ) ) dynamic_sidebar('footer-section-2'); ?></div><?php 
                    break;

                    case 6: ?>
                      <div class="col-xs-12 col-sm-12 col-md-12"><?php if( is_active_sidebar( 'footer-section-1' ) ) dynamic_sidebar('footer-section-1'); ?></div><?php 
                    break;
                } ?>                
                </div>
            </div>
        </div><?php
    } ?>
</div><?php

$page_show_bottom_bottom_footer = true;   
$show_bottom_bottom_footer = get_post_meta( $page_id, "page_show_bottom_bottom_footer", true );
if( empty($show_bottom_bottom_footer) || $show_bottom_bottom_footer == 'global' ){
    $page_show_bottom_bottom_footer = $construction_options['page_show_bottom_bottom_footer'];
    if( $page_show_bottom_bottom_footer == 'no' ){
        $page_show_bottom_bottom_footer = false;
    } else {
        $page_show_bottom_bottom_footer = true;
    }       
} elseif( get_post_meta( $page_id, "page_show_bottom_bottom_footer", true) == 'yes' ){
    $page_show_bottom_bottom_footer = true;
} elseif( get_post_meta( $page_id, "page_show_bottom_bottom_footer", true) == 'no' ){
    $page_show_bottom_bottom_footer = false;
}

if( $page_show_bottom_bottom_footer ){
    $footer_bottom = $construction_options['construction_footer_bottom'];
    
    $footer_logo = '';
    if( !empty( $construction_options['construction_footer_bottom_logo'] ) ){
        $footer_logo = '<img src="'.esc_url($construction_options['construction_footer_bottom_logo']['url']).'" alt="'.sprintf( esc_html__( '%s', 'construction' ), get_bloginfo( "name" ) ).'">';
    }
    
    $footer_menu = '';
    if( has_nav_menu('footer-menu') ){
        $menuParameters = array( 'theme_location' => 'footer-menu', 'container' => false, 'echo' => false, 'items_wrap' => '%3$s', 'depth' => 0 );
        $footer_menu = strip_tags( wp_nav_menu( $menuParameters ), '<a>' );
    }

    $footer_copyright = '';
    if( !empty( $construction_options['construction_footer_bottom_copyright'] ) ){
        $footer_copyright = $construction_options['construction_footer_bottom_copyright'];
    } ?>
    <div class="g-footer-copy"><?php
        switch( $footer_bottom ){
            case 1: 
                printf( esc_html__( '%s', 'construction' ), $footer_logo );
            break;

            case 2: 
                printf( esc_html__( '%s', 'construction' ), $footer_menu );
            break;

            case 3: 
                printf( esc_html__( '%s', 'construction' ), $footer_copyright );
            break;

            case 4: 
                get_template_part( 'templates-part/footer/followus', 'bottom' );
            break;

            case 5: 
                get_template_part( 'templates-part/footer/newsletter', 'bottom' );
            break;
        } ?>
    </div><?php
} ?>