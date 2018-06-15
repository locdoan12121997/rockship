<?php

if( class_exists( 'WooCommerce' ) ){
  if( is_shop() ){
    $page_id = get_option( 'woocommerce_shop_page_id' );
  } else {
    $page_id = construction_get_page_id();  
  }
} else {
  $page_id = construction_get_page_id();
}

global $construction_options;

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

if( !empty($construction_options['construction_footer_type']) && $page_show_top_footer ){ ?>
  <div class="footer-inside">
    <div class="container">
      <div class="footer-inner">
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
    </div>
  </div><?php
} ?>