<div class="top-address"><?php
    global $construction_options;

    if( $construction_options['top_bar_address'] ){ ?>
        <div class="top-address-inner">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php printf( esc_html__( '%s', 'construction' ), $construction_options['top_bar_address'] ); ?></p>
        </div><?php
    } ?>
</div>