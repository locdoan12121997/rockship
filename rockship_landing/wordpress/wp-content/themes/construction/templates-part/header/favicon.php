<?php
// This function is used to output the site favicons and apple icons

add_action( 'wp_head', 'construction_favicons_apple_icons' );

if( ! function_exists( 'construction_favicons_apple_icons' ) ){

    function construction_favicons_apple_icons(){
        
        global $construction_options;

        $allowed_html_array = array(
            'link' => array(
                'rel' => array(),
                'sizes' => array(),
                'href' => array()
            )
        );

        $output = '';
        
        if( !empty($construction_options) ){
            $favicon            = $construction_options['favicon']['url'];
            $iphone_icon        = $construction_options['iphone_icon']['url'];
            $iphone_icon_retina = $construction_options['iphone_icon_retina']['url'];
            $ipad_icon          = $construction_options['ipad_icon']['url'];
            $ipad_icon_retina   = $construction_options['ipad_icon_retina']['url'];

            // Favicon
            if( ! function_exists( 'has_site_icon' ) || ! wp_site_icon() ){
                if ( $favicon ) {
                    $output .= '<!-- Favicon -->';
                    $output .= '<link rel="shortcut icon" href="'. esc_url( $favicon ) .'">';
                }

                // Apple iPhone Icon
                if ( $iphone_icon ) {
                    $output .= '<!-- Apple iPhone Icon -->';
                    $output .= '<link rel="apple-touch-icon-precomposed" href="'. esc_url( $iphone_icon ) .'">';
                }

                // Apple iPhone Retina Icon
                if ( $iphone_icon_retina ) {
                    $output .= '<!-- Apple iPhone Retina Icon -->';
                    $output .= '<link rel="apple-touch-icon-precomposed" href="'. esc_url( $iphone_icon_retina ) .'">';
                }

                // Apple iPad Icon
                if ( $ipad_icon ) {
                    $output .= '<!-- Apple iPhone Icon -->';
                    $output .= '<link rel="apple-touch-icon-precomposed" href="'. esc_url( $ipad_icon ) .'">';
                }

                // Apple iPad Retina Icon
                if ( $ipad_icon_retina && ! $iphone_icon_retina ) {
                    $output .= '<!-- Apple iPhone Icon -->';
                    $output .= '<link rel="apple-touch-icon-precomposed" href="'. esc_url( $ipad_icon_retina ) .'">';
                }

                echo wp_kses( $output, $allowed_html_array);
            }
        }
    }
}