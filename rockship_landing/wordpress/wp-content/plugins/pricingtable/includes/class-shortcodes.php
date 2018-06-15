<?php

if ( ! defined('ABSPATH')) exit;  // if direct access 

class class_pricingtable_shortcode{
	
	public function __construct(){

		add_shortcode('pricingtable', array($this, 'pricingtable_display'));
		add_shortcode('pricingtable_all', array($this, 'pricingtable_all_display'));
		
	}





	function pricingtable_all_display($atts, $content = null ) {
		$atts = shortcode_atts(
			array(
				'id' => "",

			), $atts );


		$post_id = $atts['id'];

		$wp_query = new WP_Query(
			array (
				'post_type' => 'pricingtable',
				'post_status' => 'publish',
				//'s' => $keywords,
				'orderby' => 'Date',
				//'meta_query' => $meta_query,
				//'tax_query' => $tax_query,
				'order' => 'DESC',
				'posts_per_page' => -1,


			) );

		if ( $wp_query->have_posts() ) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();

				echo get_the_title();
				echo '<br/>';
				echo do_shortcode('[pricingtable id="'.get_the_id().'"]');
				//echo '[pricingtable id="'.get_the_id().'"]';

				echo '<br/><br/>';


			endwhile;

			endif;


		ob_start();

		return ob_get_clean();

	}




	function pricingtable_display($atts, $content = null ) {
		$atts = shortcode_atts(
			array(
				'id' => "",

			), $atts);


		$post_id = $atts['id'];

		$pricingtable_themes = get_post_meta( $post_id, 'pricingtable_themes', true );

		$pricingtable_display ="";

		ob_start();

		include pricingtable_plugin_dir.'/templates/pricingtable.php';






//		if($pricingtable_themes== "flat")
//		{
//			$pricingtable_display.= pricingtable_body_flat($post_id);
//		}
//
//		else if($pricingtable_themes=="rounded")
//		{
//			$pricingtable_display.= pricingtable_body_rounded($post_id);
//		}
//
//		else if($pricingtable_themes=="sonnet")
//		{
//			$pricingtable_display.= pricingtable_body_sonnet($post_id);
//		}
//
//		else if($pricingtable_themes=="wunderkind")
//		{
//			$pricingtable_display.= pricingtable_body_wunderkind($post_id);
//		}
//
//
//		else if($pricingtable_themes=="rounded-top")
//		{
//			$pricingtable_display.= pricingtable_body_rounded_top($post_id);
//		}



		return ob_get_clean();



	}
	
	
}

new class_pricingtable_shortcode();