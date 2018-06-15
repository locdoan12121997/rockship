<?php
/*
Plugin Name: PricingTable
Plugin URI: http://pickplugins.com/items/pricing-table/
Description: Long waited pricing table plugin for WordPress published to display pricing grid on your WordPress site.
Version: 1.12.2
Author: pickplugins
Author URI: http://pickplugins.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;  // if direct access	


//define('pricingtable_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('pricingtable_plugin_url', plugins_url('/', __FILE__)  );
define('pricingtable_plugin_dir', plugin_dir_path( __FILE__ ) );
define('pricingtable_wp_url', 'https://wordpress.org/plugins/pricingtable/' );
define('pricingtable_wp_reviews', 'https://wordpress.org/support/view/plugin-reviews/pricingtable/' );
define('pricingtable_pro_url','http://pickplugins.com/items/pricing-table/' );
define('pricingtable_demo_url', 'http://pickplugins.com/demo/pricingtable/' );
define('pricingtable_conatct_url', 'http://pickplugins.com/contact' );
define('pricingtable_qa_url', 'http://www.pickplugins.com/question-archive/' );
define('pricingtable_donate_url', 'http://pickplugins.com/donate-us/' );
define('pricingtable_plugin_name', 'PricingTable' );
define('pricingtable_share_url', 'https://wordpress.org/plugins/pricingtable/' );
define('pricingtable_tutorial_video_url', '//www.youtube.com/embed/h3StmDVu5tE?rel=0' );
define('pricingtable_customer_type', 'free' );
define('pricingtable_version', '1.12.2' );




require_once( plugin_dir_path( __FILE__ ) . 'includes/meta.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/functions.php');


require_once( plugin_dir_path( __FILE__ ) . 'includes/class-functions.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-shortcodes.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-migrate.php');

//Themes php files






function pricingtable_init_scripts(){
	
	
		wp_enqueue_script('jquery');
		wp_enqueue_script('pricingtable_js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		wp_enqueue_script('scripts-admin', plugins_url( '/js/scripts-admin.js' , __FILE__ ) , array( 'jquery' ));


		wp_localize_script('pricingtable_js', 'pricingtable_ajax', array( 'pricingtable_ajaxurl' => admin_url( 'admin-ajax.php')));
		wp_enqueue_style('pricingtable_style', pricingtable_plugin_url.'css/style.css');
		wp_enqueue_style('pricingtable_style_common', pricingtable_plugin_url.'css/style-common.css');
		//wp_enqueue_style('animate', pricingtable_plugin_url.'css/animate.css');

		wp_enqueue_style('owl.carousel.min', pricingtable_plugin_url.'css/owl.carousel.min.css');
		wp_enqueue_script('owl.carousel.min.js', plugins_url( '/js/owl.carousel.min.js' , __FILE__ ) , array( 'jquery' ));

		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'pricingtable_color_picker', plugins_url('/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
		
		//ParaAdmin
		wp_enqueue_style('ParaAdmin', pricingtable_plugin_url.'ParaAdmin/css/ParaAdmin.css');
		//wp_enqueue_style('ParaIcons', pricingtable_plugin_url.'ParaAdmin/css/ParaIcons.css');		
		wp_enqueue_script('ParaAdmin', plugins_url( 'ParaAdmin/js/ParaAdmin.js' , __FILE__ ) , array( 'jquery' ));
		

		wp_enqueue_style('font-awesome', plugins_url( 'css/font-awesome.min.css', __FILE__ ));
		
	}
add_action("init","pricingtable_init_scripts");

function pricingtable_init_admin_scripts(){
	
	wp_enqueue_style('pricingtable_style-admin', pricingtable_plugin_url.'css/style-admin.css');
	
	}

add_action("init","pricingtable_init_admin_scripts");














add_action('admin_menu', 'pricingtable_menu_init');


	


function pricingtable_menu_settings(){
	include('pricingtable-settings.php');	
}


function pricingtable_menu_migrate(){
	include('pricingtable-migrate.php');
}

function pricingtable_menu_init() {


	add_submenu_page('edit.php?post_type=pricingtable', __('Settings','license'), __('Settings','license'), 'manage_options', 'pricingtable_menu_settings', 'pricingtable_menu_settings');	


}


