<?php
if( !function_exists( 'construction_importer_description_text' ) ){
    
    function construction_importer_description_text( $description ){
        $message = '<p>'. esc_html__( 'Best if used on new WordPress install.', 'construction' ) .'</p>';
        $message .= '<p>'. esc_html__( 'Images are for demo purpose only.', 'construction' ) .'</p>';
        $message .= '
        <h3>What if the Import fails or stalls?</h3>

        <p>
        If the import stalls and fails to respond after a few minutes You are suffering from PHP configuration limits that are set too low to complete the process. You should contact your hosting provider and ask them to increase those limits to a minimum as follows:
        </p>
        <ul style="margin-left: 60px">
            <li>max_execution_time 600</li>
            <li>memory_limit 128M</li>
            <li>post_max_size 32M</li>
            <li>upload_max_filesize 32M</li>
        </ul>
        <p>You can verify your PHP configuration limits by installing a simple plugin found here: <a href="http://wordpress.org/extend/plugins/wordpress-php-info" target="_blank">http://wordpress.org/extend/plugins/wordpress-php-info</a>. And you can also check your PHP error logs to see the exact error being returned.</p>
        <p>If you were not able to import demo, please contact on our <a target="_blank" href="http://www.hire-wordpress-developers.com/support"><b>support system</b></a>, our technical staff will import demo for you.</p>
        ';

        return $message;
    }
    // Uncomment the below
    add_filter( 'wbc_importer_description', 'construction_importer_description_text', 10 );
}

// Way to set menu, import revolution slider, and set home page.
if( !function_exists( 'construction_menu_revolutionslider_homepage_setup' ) ){
    function construction_menu_revolutionslider_homepage_setup( $demo_active_import , $demo_directory_path ){
        reset( $demo_active_import );
        $current_key = key( $demo_active_import );

        // Import slider(s) for the current demo being imported
        if( class_exists( 'RevSlider' ) ){
            $wbc_sliders_array = array( 
                'Demo_01' => 'slider-4.zip',
                'Demo_02' => 'slider1.zip',
                'Demo_03' => 'slider2.zip',
                'Demo_04' => 'slider3.zip'
            );
            if( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_sliders_array ) ){
                $wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];
                if( file_exists( $demo_directory_path.$wbc_slider_import ) ){
                    $slider = new RevSlider();
                    $slider->importSliderFromPost( true, true, $demo_directory_path.$wbc_slider_import );
                }
            }
        }
        
        // Setting Menus
        $wbc_menu_array = array(  'Demo_01', 'Demo_02', 'Demo_03', 'Demo_04' );
        if( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ){
            $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );
            $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
            $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );
            if( isset( $main_menu->term_id ) ){
                set_theme_mod( 'nav_menu_locations', array(
                        'top-menu' => $top_menu->term_id,
                        'main-menu' => $main_menu->term_id,
                        'footer-menu' => $footer_menu->term_id
                    )
                );
            }
        }
        
        // Set HomePage
        $wbc_home_pages = array(
            'Demo_01' => 'Home 4',
            'Demo_02' => 'Home',
            'Demo_03' => 'Home 2',
            'Demo_04' => 'Home 3'
        );
        if( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ){
            $page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
            if( isset( $page->ID ) ){
                update_option( 'page_on_front', $page->ID );
                update_option( 'show_on_front', 'page' );
            }
        }
    }
    add_action( 'wbc_importer_after_content_import', 'construction_menu_revolutionslider_homepage_setup', 10, 2 );
}