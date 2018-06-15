<?php
class construction_social extends WP_Widget {

	// Register widget
	public function __construct(){
		parent::__construct(
	 		'construction_social',
			esc_html__( 'Construction: Social Media', 'construction' ),
			array( 'description' => esc_html__( 'Show social media network', 'construction' ), 'classname' => 'widget-about' )
		);
	}	
	
	// Front-end display of widget	
	public function widget( $args, $instance ){				
		
		extract( $args );
		
		echo $before_widget;

		$title = apply_filters('widget_title', $instance['title'] );

		$construction_options = get_option('construction_options');

		// Widget title
		if( !empty($title) ){
			echo $before_title.esc_html($title).$after_title;
		} ?>
           
        <div class="social-media">
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
        </div><?php

        echo $after_widget;
	}

	// Sanitize widget form values as they are saved
	public function update( $new_instance, $old_instance ){		
		$instance = array();
		/* Strip tags to remove HTML. For text inputs and textarea. */
		$instance['title'] = strip_tags( $new_instance['title'] );		
		return $instance;		
	}	
	
	// Back-end widget form
	public function form( $instance ){		
		/* Default widget settings. */
		$defaults = array( 'title' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'construction'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
		</p><?php
	}
}

if( ! function_exists( 'construction_social_loader' ) ){    
    function construction_social_loader (){
    	register_widget( 'construction_social' );
    }    
    add_action( 'widgets_init', 'construction_social_loader' );
}