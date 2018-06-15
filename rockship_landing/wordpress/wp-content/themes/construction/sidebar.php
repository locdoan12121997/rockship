<?php

global $construction_options;
if( isset( $construction_options['woocommerce_sidebar_status'] ) && $construction_options['woocommerce_sidebar_status'] == 1 ){ ?>			
	<div class="col-md-4 col-sm-4 col-xs-12"><?php 
		if( is_active_sidebar( 'woocommerce-sidebar-widget' ) ){
			dynamic_sidebar( 'woocommerce-sidebar-widget' );
		} ?>
	</div><?php
}