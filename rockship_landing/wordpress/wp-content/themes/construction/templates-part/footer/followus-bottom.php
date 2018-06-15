<?php

global $construction_options;

$follow_us_label = '';
if( !empty( $construction_options['construction_bottom_footer_follow_us'] ) ){
	$follow_us_label = $construction_options['construction_bottom_footer_follow_us'];
}

?>

<div class="follow_us">
	<h6><?php printf( esc_html__( '%s', 'construction' ), $follow_us_label ); ?></h6>
	<ul>
		<?php if( !empty($construction_options['construction_show_facebook']) && $construction_options['construction_show_facebook'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_facebook']); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_twitter']) && $construction_options['construction_show_twitter'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_twitter']); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_google']) && $construction_options['construction_show_google'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_google']); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_pinterest']) && $construction_options['construction_show_pinterest'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_pinterest']); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_youtube']) && $construction_options['construction_show_youtube'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_youtube']); ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_dribbble']) && $construction_options['construction_show_dribbble'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_dribbble']); ?>" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_vimeo']) && $construction_options['construction_show_vimeo'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_vimeo']); ?>" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_linkedin']) && $construction_options['construction_show_linkedin'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_linkedin']); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_rss']) && $construction_options['construction_show_rss'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_rss']); ?>" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_instagram']) && $construction_options['construction_show_instagram'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_instagram']); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_flickr']) && $construction_options['construction_show_flickr'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_flickr']); ?>" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_reddit']) && $construction_options['construction_show_reddit'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_reddit']); ?>" target="_blank"><i class="fa fa-reddit" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_tumblr']) && $construction_options['construction_show_tumblr'] == 1 ){ ?><li><a href="<?php echo esc_url($construction_options['construction_social_tumblr']); ?>" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li><?php } ?>
		<?php if( !empty($construction_options['construction_show_skype']) && $construction_options['construction_show_skype'] == 1 ){ ?><li><a href="skype:<?php echo esc_url($construction_options['construction_social_skype']); ?>" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li><?php } ?>
		</ul>
</div>