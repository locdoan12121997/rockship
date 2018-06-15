<div class="top-address"><?php
    global $construction_options;

    if( $construction_options['top_bar_address'] ){ ?>
        <div class="top-address-inner">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php printf( esc_html__( '%s', 'construction' ), $construction_options['top_bar_address'] ); ?></p>
        </div><?php
    }

    if( $construction_options['top_bar_email'] ){ ?>
        <div class="top-address-inner">
            <p><a href="mailto:<?php echo esc_attr( $construction_options['top_bar_email'] ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php printf( esc_html__( '%s', 'construction' ), $construction_options['top_bar_email'] ); ?></a></p>
        </div><?php
    }

    if( $construction_options['top_bar_phone'] ){ ?>
        <div class="top-address-inner">
            <p><a href="tel:<?php echo esc_attr( $construction_options['top_bar_phone'] ); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php printf( esc_html__( '%s', 'construction' ), $construction_options['top_bar_phone'] ); ?></a></p>
      </div><?php
    } ?>
</div>