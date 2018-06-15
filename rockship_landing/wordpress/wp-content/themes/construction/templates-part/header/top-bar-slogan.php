<div class="top-address"><?php
    global $construction_options;

    if( $construction_options['top_bar_slogan'] ){ ?>
        <div class="top-address-inner">
            <p><?php printf( esc_html__( '%s', 'construction' ), $construction_options['top_bar_slogan'] ); ?></p>
        </div><?php
    } ?>
</div>