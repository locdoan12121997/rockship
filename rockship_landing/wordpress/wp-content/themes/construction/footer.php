		</div><?php
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
		
		$page_show_footer = true;
		$show_footer = get_post_meta( $page_id, "page_show_footer", true );
		if( empty($show_footer) || $show_footer == 'global' ){
			$page_show_footer = $construction_options['page_show_footer'];
			if( $page_show_footer == 'no' ){
				$page_show_footer = false;
			} else {
				$page_show_footer = true;
			}				
		} elseif( get_post_meta( $page_id, "page_show_footer", true) == 'yes' ){
			$page_show_footer = true;
		} elseif( get_post_meta( $page_id, "page_show_footer", true) == 'no' ){
			$page_show_footer = false;
		}
		
		if( $page_show_footer ){ ?>
			<footer><?php
				$new_footer_type = $construction_options['new_footer_type'];					
				if( $new_footer_type == 1 ){
					get_template_part( 'templates-part/footer/footer', 'v2' );
				} else { ?>
					<div class="footer-main"><?php
						if( ! is_404() ){
							get_template_part( 'templates-part/footer/top', 'footer' );
							get_template_part( 'templates-part/footer/center', 'footer' );
						}
						get_template_part( 'templates-part/footer/bottom', 'footer' ); ?>
					</div><?php
				} ?>
			</footer><?php
		} ?>
	</div><?php
	$construction_option = get_option( 'construction_options' );
	if( $construction_option['show_up_arrow'] == 'yes' ){
		if( !empty($construction_option['up_arrow_img']['url'] ) ){ ?>
			<a href="javascript:void(0);" class="top-arrow"><img src="<?php echo esc_url( $construction_option['up_arrow_img']['url'] ); ?>" alt="<?php esc_html_e( 'Scroll Top', 'construction' ); ?>"></a><?php
		} else { ?>
			<a href="javascript:void(0);" class="top-arrow"><i class="fa fa-angle-up"></i></a><?php
		}
	}

	if( !empty( $construction_option['middle_get_a_quote_model'] ) ){
		echo do_shortcode($construction_option['middle_get_a_quote_model']);
	} ?>
<?php wp_footer(); ?>
</body>
</html>