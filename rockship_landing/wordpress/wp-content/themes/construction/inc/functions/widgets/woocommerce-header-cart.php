<?php 

class Construction_Header_Cart extends WP_Widget {
	public function __construct() {
		parent::__construct( 'woocommerce-header-cart','Woocommerce Header Cart',
			array( 'description' => esc_html__( 'Woocommerce Header Cart', 'construction' ), )
		);
	}
	
	public function widget( $args, $instance ) {
		
		global $post;

		extract( $args );
		
		echo $before_widget;
		
		global $woocommerce; ?>
		
		<div class="header-cart-area">
			<div class="add-card">
				<a class="header-cart" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?></span></a>
			</div>
			
			<div class="woocommerce-cart-dropdown-item"><?php
				$cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0;
				$list_class = array( 'woocommerce-cart-list', 'product-list-widget' ); ?>
				
				<ul class="<?php echo implode(' ', $list_class); ?>"><?php
					if( !$cart_is_empty ){
						foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ){
							
							$product_item = $cart_item['data'];
							if( ! $product_item->exists() || $cart_item['quantity'] == 0 ){
								continue;
							}							
							
							$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? wc_get_price_excluding_tax($product_item) : $product_item->get_price_including_tax();
							$product_price = apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key ); ?>
							
							<li>
								<a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
									<?php printf( esc_html__( '%s', 'construction'), $product_item->get_image() ); echo apply_filters('woocommerce_widget_cart_product_title', $product_item->get_title(), $product_item ); ?>
								</a>
								<?php echo esc_html( $woocommerce->cart->get_item_data( $cart_item ) ); echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
							</li><?php
						}
					} else { ?>
						<li><?php esc_html_e( 'No products in the cart.', 'construction' ); ?></li><?php
					} ?>
				</ul><?php 
				
				if( sizeof( $woocommerce->cart->get_cart() ) <= 0 ){ } ?>
                
                <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" class="qbutton white view-cart"><?php esc_html_e( 'Cart', 'construction' ); ?> </a>
                <span class="total"><?php esc_html_e( 'Total', 'construction' ); ?>:<span><?php echo $woocommerce->cart->get_cart_subtotal(); ?></span></span><?php
                
                if( sizeof( $woocommerce->cart->get_cart() ) <= 0 ){ } ?>
		</div>
	</div><?php
		echo $after_widget;
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		return $instance;
	}
} 
add_action( 'widgets_init', create_function( '', 'register_widget( "Construction_Header_Cart" );' ) );

function construction_header_cart_backend( $fragments ){
	global $woocommerce;
	ob_start();	?>
	
	<span class="header_cart_span"><?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?></span><?php
	
	$fragments['span.header_cart_span'] = ob_get_clean();
	return $fragments;	
}
add_filter( 'add_to_cart_fragments', 'construction_header_cart_backend' );