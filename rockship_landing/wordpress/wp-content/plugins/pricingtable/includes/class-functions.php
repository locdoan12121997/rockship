<?php

if ( ! defined('ABSPATH')) exit;  // if direct access 

class class_pricingtable_functions{
	
	public function __construct(){
		
		
	}





	public function ribbons($themes = array()){

		$themes = array(
			''=>'None',
			'free'=>'Free',
			'save'=>'Save',
			'hot'=>'Hot',
			'pro'=>'Pro',
			'best'=>'Best',
			'gift'=>'Gift',
			'sale'=>'Sale',
			'new'=>'New',
			'top'=>'Top',
			'fresh'=>'Fresh',
			'dis_10'=>'-10%',
			'dis_20'=>'-20%',
			'dis_30'=>'-30%',
			'dis_40'=>'-40%',
			'dis_50'=>'-50%',
			'dis_60'=>'-60%',
			'dis_70'=>'-70%',
			'dis_80'=>'-80%',
			'dis_90'=>'-90%',
			'dis_100'=>'-100%',

		);

		$themes  = apply_filters('pricingtable_ribbons', $themes);



		return $themes;

	}


	public function column_animation($themes = array()){

		$themes = array(
			''=>'None',
			'bounce'=>'Bounce',
			'flash'=>'Flash',
			'pulse'=>'Pulse',
			'shake'=>'Shake',
			'swing'=>'Swing',
			'tada'=>'Tada',
			'wobble'=>'Wobble',
			'flip'=>'Flip',
			'flipInX'=>'FlipInX',
			'flipInY'=>'FlipInY',
			'fadeIn'=>'FadeIn',
			'fadeInDown'=>'FadeInDown',
			'fadeInUp'=>'FadeInUp',
			'bounceIn'=>'BounceIn',
			'bounceInDown'=>'BounceInDown',
			'bounceInUp'=>'BounceInUp',


		);

		$themes  = apply_filters('pricingtable_animation', $themes);



		return $themes;

	}
















	public function signup_button_style($themes = array()){

		$themes = array(
			''=>'None',
			'flat'=>'Flat',
			'rounded'=>'Rounded',
			'semi-round'=>'Semi Round',
			'semi-rounded-top'=>'Rounded Top',
			'semi-rounded-bottom'=>'Rounded Bottom',
			'border-left'=>'Border Left',
			'border-right'=>'Border Right',
			'border-bottom'=>'Border Bottom',
			'border-top'=>'Border Top',
			'ripple'=>'Ripple',


		);

		$themes  = apply_filters('pricingtable_signup_button_style', $themes);



		return $themes;

	}



	
	public function pricingtable_themes($themes = array()){

			$themes = array(

				'flat'=>'Flat',
				'rounded'=>'Rounded',
				'semi-rounded'=>'Semi rounded',

				'horizontal'=>'Horizontal',

				'skewtopright'=>'Skew top right',
				'skewtopleft'=>'Skew top left',
				'skewbottomright'=>'Skew bottom right',
				'skewbottomleft'=>'Skew bottom left',

				'shadow-bottomright'=>'Shadow bottom right',
				'shadow-bottomleft'=>'Shadow bottom left',
				'shadow-topleft'=>'Shadow top left',
				'shadow-topright'=>'Shadow top right',


				'media-topright'=>'Media on top-right',
				'media-topleft'=>'Media on top-left',
				'media-topcenter'=>'Media on top-center',

				'rounded-price'=>'Rounded price',

				'price-topleft'=>'Price top left',
				'price-topright'=>'Price top right',
				'price-topcenter'=>'Price top center',

				'header-topcenter'=>'Header top center',
				'header-bottomcenter'=>'Header bottom center',

				'footer-topcenter'=>'Footer top center',
				'footer-bottomcenter'=>'Footer Bottom center',
				'footer-bottomhover'=>'Footer bottom hover',
				'footer-tophover'=>'Footer top hover',


				);

			$themes  = apply_filters('pricingtable_themes', $themes);

			return $themes;

	}

	public function column_item_position($themes = array()){

		$themes = array(
			'header'=>array('name'=>'Header','is_hide'=>'no'),
			'media'=>array('name'=>'Media','is_hide'=>'no'),
			'price'=>array('name'=>'Price','is_hide'=>'no'),
			'body'=>array('name'=>'Body','is_hide'=>'no'),
			'footer'=>array('name'=>'Footer','is_hide'=>'no'),
		);

		$themes  = apply_filters('pricingtable_column_items', $themes);

		return $themes;

	}
	
	
	
	
}

//new class_accordions_functions();