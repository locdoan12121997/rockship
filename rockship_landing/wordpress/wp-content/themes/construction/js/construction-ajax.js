jQuery(document).ready(function($){
    "use strict";

    if( typeof Construction_Ajax_Calls_Var !== "undefined" ){

        var retina_logo             = Construction_Ajax_Calls_Var.retina_logo_url;
        var retina_transparent_logo = Construction_Ajax_Calls_Var.retina_transparent_logo;
        var retina_logo_width       = Construction_Ajax_Calls_Var.retina_logo_width;
        var retina_logo_height      = Construction_Ajax_Calls_Var.retina_logo_height;

        // Header Retina logo         
        if( retina_logo !== '' && retina_logo_width !== '' && retina_logo_height !== ''){
            if( window.devicePixelRatio == 2 ){                
                if( retina_transparent_logo !== '' ){
                    jQuery(".header-menu-inner .logo img").attr("src", retina_transparent_logo);
                    jQuery(".header-menu-inner .logo img").attr("width", retina_logo_width);
                    jQuery(".header-menu-inner .logo img").attr("height", retina_logo_height);

                    jQuery(".header-menu-inner .logo.on-sticky a img").attr("src", retina_logo);
                    jQuery(".header-menu-inner .logo.on-sticky a img").attr("width", retina_logo_width);
                    jQuery(".header-menu-inner .logo.on-sticky a img").attr("height", retina_logo_height);                        
                } else {                
                    jQuery(".header-menu-inner .logo img").attr("src", retina_logo);
                    jQuery(".header-menu-inner .logo img").attr("width", retina_logo_width);
                    jQuery(".header-menu-inner .logo img").attr("height", retina_logo_height);                    
                }
            }
        }
    }
});