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

$header_sticky_on_scroll = true;
$sticky_on_scroll = get_post_meta( $page_id, "header_sticky_on_scroll", true );
if( empty($sticky_on_scroll) || $sticky_on_scroll == 'global' ){
  $header_sticky_on_scroll = $construction_options['header_sticky_on_scroll'];
  if( $header_sticky_on_scroll == 'no' ){
    $header_sticky_on_scroll = '';
  } else {
    $header_sticky_on_scroll = 'sticky';
  }       
} elseif( get_post_meta( $page_id, "header_sticky_on_scroll", true ) == 'yes' ){
  $header_sticky_on_scroll = 'sticky';
} elseif( get_post_meta( $page_id, "header_sticky_on_scroll", true ) == 'no' ){
    $header_sticky_on_scroll = '';
} ?>

<div class="header-explore <?php echo esc_attr($header_sticky_on_scroll); ?>"><?php
  $page_show_top_bar = true;
  $show_top_bar = get_post_meta( $page_id, "page_show_top_bar", true );
  if( empty($show_top_bar) || $show_top_bar == 'global' ){
    $page_show_top_bar = $construction_options['page_show_top_bar'];
    if( $page_show_top_bar == 'no' ){
      $page_show_top_bar = false;
    } else {
      $page_show_top_bar = true;
    }
  } elseif( get_post_meta( $page_id, "page_show_top_bar", true) == 'yes' ){
    $page_show_top_bar = true;
  } elseif( get_post_meta( $page_id, "page_show_top_bar", true) == 'no' ){
    $page_show_top_bar = false;
  }

  if( $page_show_top_bar ){
    $top_bar_left = $construction_options['top_bar_left'];
    $top_bar_right = $construction_options['top_bar_right'];

    if( $top_bar_left != 'none' || $top_bar_right != 'none' ){ ?>
      <div class="explore-top">
        <div class="container">
          <div class="explore-top-inside">
            <div class="explore-top-left"><?php          
            if( $top_bar_left != 'none' ){
              
              switch( $top_bar_left ){
                case 'address':
                  get_template_part( 'templates-part/header/top-bar-address' );
                break;

                case 'contact_info':
                  get_template_part( 'templates-part/header/top-bar-contact' );
                break;

                case 'menu_bar':
                  get_template_part( 'templates-part/header/top-bar-menu' );
                break;

                case 'slogan':
                  get_template_part( 'templates-part/header/top-bar-slogan' );
                break;

                case 'social_icons':
                  get_template_part( 'templates-part/header/top-bar-social' );
                break;

                case 'address_contact_info':
                  get_template_part( 'templates-part/header/top-bar-address-contact' );
                break;
              }
            } ?>
            </div>
            <div class="explore-top-right">
            <?php if( $top_bar_right != 'none' ){
            
              switch( $top_bar_right ){
                case 'address':
                  get_template_part( 'templates-part/header/top-bar-address' );
                break;

                case 'contact_info':
                  get_template_part( 'templates-part/header/top-bar-contact' );
                break;

                case 'menu_bar':
                  get_template_part( 'templates-part/header/top-bar-menu' );
                break;

                case 'slogan':
                  get_template_part( 'templates-part/header/top-bar-slogan' );
                break;

                case 'social_icons':
                  get_template_part( 'templates-part/header/top-bar-social' );
                break;

                case 'address_contact_info':
                  get_template_part( 'templates-part/header/top-bar-address-contact' );
                break;      
              }
            } ?>
            </div>
          </div>
        </div>
      </div><?php
    } ?>
    <div class="explore-bottom">
      <div class="container">
        <div class="explore-bottom-inside"><?php
          $custom_logo = $construction_options['custom_logo']['url'];
          if( empty($custom_logo) ){
            $custom_logo = get_template_directory_uri().'/images/logo.png';
          } ?>
          <div class="logo-export">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($custom_logo); ?>" alt="<?php esc_html_e( 'Construction Logo', 'construction' ); ?>"></a>              
          </div>
          <div class="explore-bottom-right"><?php
            $middle_office_time = $construction_options['middle_office_time'];
            if( !empty($middle_office_time) ){
              echo '<div class="explore-timing">';
                printf( esc_html__( '%s', 'construction' ), $middle_office_time ); 
              echo '</div>';
            }

            $middle_phone_number = $construction_options['middle_phone_number'];
            if( !empty($middle_phone_number) ){
              echo '<div class="explore-timing">';
                printf( esc_html__( '%s', 'construction' ), $middle_phone_number ); 
              echo '</div>';
            }

            $middle_get_a_quote = $construction_options['middle_get_a_quote'];
            if( !empty($middle_get_a_quote) ){
              echo '<div class="explore-get">';
                printf( esc_html__( '%s', 'construction' ), $middle_get_a_quote ); 
              echo '</div>';
            } ?>
          </div>
        </div>
      </div>
    </div><?php
  }

  $show_menu = get_post_meta( $page_id, "page_show_menu", true );
  if( empty($show_menu) || $show_menu == 'global' ){
    $page_show_menu = $construction_options['page_show_menu'];
    if( $page_show_menu == 'no' ){
      $page_show_menu = false;
    } else {
      $page_show_menu = true;
    }
  } elseif( get_post_meta( $page_id, "page_show_menu", true) == 'yes' ){
    $page_show_menu = true;
  } elseif( get_post_meta( $page_id, "page_show_menu", true) == 'no' ){
    $page_show_menu = false;
  }

  if( $page_show_menu ){ ?>
    <div class="explore-menu header-menu">
      <div class="container">
        <div class="menu-wrp">
          <nav><?php
            if( has_nav_menu( 'main-menu' ) ) :
              wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul>%3$s</ul>', 'walker' => new Construction_Nav_Menu() ) );
            endif; ?>
          </nav>
        </div>
        <div class="search-card">
          <div class="search-item">
            <a href="javascript:;"><i class="fa fa-search" aria-hidden="true"></i></a>
            <form role="search" method="get" class="header_search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <div class="search-for">
                  <input value="" name="s" id="s" type="text" placeholder="<?php esc_html_e( 'Search', 'construction' ); ?>">
                  <input type="submit" value="&#xf002;">
              </div>
            </form>
          </div><?php
          if( !empty($construction_options) && isset( $construction_options['woocommerce_header_cart'] ) && $construction_options['woocommerce_header_cart'] == 1 ){
            if( is_active_sidebar( 'woocommerce-header' ) ){
              dynamic_sidebar( 'woocommerce-header' );
            }
          } ?>
        </div>
      </div>
    </div><?php
  } ?>
</div><?php
if( ! is_404() ){
  $page_show_title_area = true;
  $show_title_area = get_post_meta( $page_id, "page_show_title_area", true );
  if( empty($show_title_area) || $show_title_area == 'global' ){
    $page_show_title_area = $construction_options['page_show_title_area'];
    if( $page_show_title_area == 'no' ){
      $page_show_title_area = false;
    } else {
      $page_show_title_area = true;
    }
  } elseif( get_post_meta( $page_id, "page_show_title_area", true) == 'yes' ){
    $page_show_title_area = true;
  } elseif( get_post_meta( $page_id, "page_show_title_area", true) == 'no' ){
    $page_show_title_area = false;
  }
  if( $page_show_title_area ){
    get_template_part( 'templates-part/header/page', 'title' );
  }
} ?>