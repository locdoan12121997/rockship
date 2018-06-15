<?php

// Replace {$redux_opt_name} with your opt_name.
// Also be sure to change this function name!

if( !function_exists('construction_register_custom_extension_loader') ):
    function construction_register_custom_extension_loader( $ReduxFramework ){
        $path = dirname( __FILE__ ) . '/extensions/';
        $folders = scandir( $path, 1 );        
        foreach($folders as $folder) {
            if ($folder === '.' or $folder === '..' or !is_dir($path . $folder) ) {
                continue;
            } 
            $extension_class = 'ReduxFramework_Extension_' . $folder;
            if( !class_exists( $extension_class ) ) {
                // In case you wanted override your override, hah.
                $class_file = $path . $folder . '/extension_' . $folder . '.php';
                $class_file = apply_filters( 'redux/extension/'.$ReduxFramework->args['opt_name'].'/'.$folder, $class_file );
                if( $class_file ) {
                    require_once( $class_file );
                    $extension = new $extension_class( $ReduxFramework );
                }
            }
        }
    }
    // Modify {$redux_opt_name} to match your opt_name
    add_action("redux/extensions/construction_options/before", 'construction_register_custom_extension_loader', 0);
endif;

/*
    Set Front page, Blog page, Menu, Users, Comments
*/
if( !function_exists( 'construction_importer_after_import_settings' ) ){
    function construction_importer_after_import_settings( $demo_active_import , $demo_directory_path ) {
        reset( $demo_active_import );
        wp_delete_post(1);
        wp_delete_post(2);
    }
    add_action( 'wbc_importer_after_content_import', 'construction_importer_after_import_settings', 10, 2 );
}