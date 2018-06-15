<?php
// construction add css and script
function construction_add_css_script(){

    // Register Fonts
    wp_enqueue_style( 'construction-fonts', construction_fonts_url(), '', '', 'all' );

    // Register Styles
    wp_enqueue_style( 'construction-plugin-css', get_template_directory_uri().'/css/construction-plugin.css', array(), CONSTRUCTION_THEME_VERSION, 'all' );
    wp_enqueue_style( 'master-style', get_template_directory_uri().'/css/construction-style.css', array(), CONSTRUCTION_THEME_VERSION, 'all' );
    wp_enqueue_style( 'construction-v4-style', get_template_directory_uri().'/css/construction-style-v4.css', array(), CONSTRUCTION_THEME_VERSION, 'all' );
    wp_enqueue_style( 'construction-style', get_stylesheet_uri(), array(), CONSTRUCTION_THEME_VERSION, 'all' );

    // Register Scripts
    wp_enqueue_script( 'construction-plugin-jquery', get_template_directory_uri() . '/js/construction-plugin.js', array('jquery') );
    wp_enqueue_script( 'construction-custom', get_template_directory_uri() . '/js/construction-custom.js', array('jquery') );

    global $construction_options;

    if( $construction_options['rtl_css'] == 1 ){
        wp_enqueue_style( 'construction-rtl', get_template_directory_uri().'/css/construction-rtl-style.css', '', '', 'all' );
    }

    if( is_singular('post') && comments_open() && get_option( 'thread_comments' ) ){
        wp_enqueue_script( 'comment-reply' );
    }    

    // Retina Logos
    $retina_transparent_logo = '';
    if( $construction_options['header_type'] == '2' && is_front_page() ){
        $retina_transparent_logo = $construction_options['retina_transparent_logo']['url'];
    }

    $retina_logo_url        = $construction_options['retina_logo']['url'];
    $retina_logo_width      = $construction_options['retina_logo_width'];
    $retina_logo_height     = $construction_options['retina_logo_height'];

    $retina_logo_width  = preg_replace('#[^0-9]#','',strip_tags($retina_logo_width));
    $retina_logo_height = preg_replace('#[^0-9]#','',strip_tags($retina_logo_height));

    // construction Ajax Calls
    wp_enqueue_script( 'construction_ajax', get_template_directory_uri() . '/js/construction-ajax.js', array('jquery') );
    wp_localize_script( 'construction_ajax', 'Construction_Ajax_Calls_Var',
        array(
            'admin_url'             => get_admin_url(),
            // Retina Logo And Width/Height
            'retina_logo_url'           => $retina_logo_url,
            'retina_transparent_logo'  => $retina_transparent_logo,
            'retina_logo_width'         => $retina_logo_width,
            'retina_logo_height'        => $retina_logo_height,
        )
    );
}
add_action( 'wp_enqueue_scripts', 'construction_add_css_script' );

// construction register Fonts
if( ! function_exists( 'construction_fonts_url' ) ){
    
    function construction_fonts_url(){
        // Define variables
        $fonts_url = '';
        $fonts     = array();
        $subsets   = '';
        // Set Poppins font
        if( 'off' !== _x( 'on', 'Open Sans font: on or off', 'construction' ) ){
            $fonts[] = 'Open Sans:300,400,600,700,800';
        }

        if( 'off' !== _x( 'on', 'Montserrat font: on or off', 'construction' ) ){
            $fonts[] = 'Montserrat:300,400,400i,500,600,700,900';
        }

        if( 'off' !== _x( 'on', 'Arimo font: on or off', 'construction' ) ){
            $fonts[] = 'Arimo:400,400i,700';
        }

        if( 'off' !== _x( 'on', 'Lato font: on or off', 'construction' ) ){
            $fonts[] = 'Lato:300,400,700,900';
        }

        if( 'off' !== _x( 'on', 'Roboto font: on or off', 'construction' ) ){
            $fonts[] = 'Roboto:400,500,700,900';
        }

        if( 'off' !== _x( 'on', 'Poppins font: on or off', 'construction' ) ){
            $fonts[] = 'Poppins:700';
        }

        // Check is font found
        if( $fonts ){
            $fonts_url = add_query_arg( array( 'family' => urlencode( implode( '|', $fonts ) ), 'subset' => urlencode( $subsets ), ), 'https://fonts.googleapis.com/css' );
        }
        return $fonts_url;
    }
}

function construction_upload_scripts_admin($hook){
    
    wp_enqueue_style( 'admin-custom', get_template_directory_uri().'/css/admin/construction-admin.css', null, null );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css', null, null );
    wp_enqueue_style( 'simple-line-icons', get_template_directory_uri().'/css/simple-line-icons.css', null, null );

    if( 'post.php' == $hook || 'post-new.php' == $hook ) {
        wp_enqueue_script( 'post-custom-metabox', get_template_directory_uri().'/js/admin/construction-post-fields.js', array( 'jquery' ), '', true );
    }
}
add_action( 'admin_enqueue_scripts', 'construction_upload_scripts_admin' );

?>