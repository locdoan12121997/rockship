<?php
global $construction_options;

$custom_logo = $construction_options['custom_logo']['url'];
if( empty($custom_logo) ){
  $custom_logo = get_template_directory_uri().'/images/logo.png';
} ?>

<div class="header-menu <?php if( $construction_options['header_type'] == '3' ){ echo "bg-grey"; } ?>">
  <div class="container">
    <div class="header-menu-inner">
      <?php
      if( !empty($construction_options) && $construction_options['header_type'] == '2' && is_front_page() ){
        $transparent_logo = $construction_options['transparent_logo']['url'];  
        if( empty($transparent_logo) ){
          $transparent_logo = get_template_directory_uri().'/images/logo-white.png';
        } ?>
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($transparent_logo); ?>" alt="<?php esc_html_e( 'Construction Logo', 'construction' ); ?>"></a>
        </div>
        <div class="logo on-sticky">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($custom_logo); ?>" alt="<?php esc_html_e( 'Construction Logo', 'construction' ); ?>"></a>
        </div>
      <?php } else { ?>
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($custom_logo); ?>" alt="<?php esc_html_e( 'Construction Logo', 'construction' ); ?>"></a>
        </div><?php
      }      
      if( !empty($construction_options) && isset( $construction_options['woocommerce_header_cart'] ) && $construction_options['woocommerce_header_cart'] == 1 ){
        if( is_active_sidebar( 'woocommerce-header' ) ){
          dynamic_sidebar( 'woocommerce-header' );
        }
      } ?>
      <div class="menu-wrp">
        <nav><?php
          if( has_nav_menu( 'main-menu' ) ) :
            wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul>%3$s</ul>', 'walker' => new Construction_Nav_Menu() ) );
          endif; ?>            
        </nav>
      </div>
    </div> <!-- header-menu-inner -->
  </div>
</div> <!-- header-menu -->