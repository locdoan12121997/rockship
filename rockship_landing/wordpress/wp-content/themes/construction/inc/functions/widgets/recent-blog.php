<?php 

// Latest posts widget
class construction_recent_posts extends WP_Widget {
	// Define construct
	function __construct(){
		$params = array( 'description' => esc_html__( 'Display Latest Posts', 'construction' ), 'name' => esc_html__( 'Construction: Latest Posts', 'construction' ) );
		parent::__construct('construction_recent_posts', '', $params);
	}

	public function form($instance){
		// Widget form
		extract($instance); ?>		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ) ?>"><?php esc_html_e( 'Title:', 'construction' ); ?></label>
			<input type="text"	class="widefat"	id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php if( isset($title) )  echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('category') ) ?>"><?php esc_html_e( 'Category:', 'construction' ); ?></label>
			<select class="widefat" id="<?php echo esc_attr( $this->get_field_id('category') ); ?>" name="<?php echo esc_attr( $this->get_field_name('category') ); ?>">
				<option><?php esc_html_e( '- All -', 'construction'); ?></option><?php
				$categories = array();
				$categories = get_categories();
				$category_slug_array = array('');
				if( !empty($categories) ){
					foreach( $categories as $category_info ){ ?>
						<option value="<?php printf( esc_html__( '%s', 'construction' ), $category_info->slug ); ?>" <?php if( isset($category) && $category == $category_info->slug ){ echo 'selected="selected"'; } ?>> <?php printf( esc_html__( '%s', 'construction' ), $category_info->name ); ?></option><?php
					}
				} ?>
			</select>
			<span><?php esc_html_e( 'Select specific category, leave blank to show all categories.', 'construction' ); ?><span>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('post_limit') ) ?>"><?php esc_html_e( 'Number of Posts:', 'construction' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('post_limit') ); ?>" name="<?php echo esc_attr( $this->get_field_name('post_limit') ); ?>" value="<?php if( isset($post_limit) ) echo esc_attr($post_limit); ?>" />
		</p><?php
	}

	public function widget($args, $instance){

		extract($args);
		extract($instance);

		// Get widget title
		$title = apply_filters( 'widget_title', $instance['title'] );

		$widget_title 	= apply_filters( 'widget_title', $instance['title'] );
		$category 		= $instance['category'];
		$post_limit 	= $instance['post_limit'];		
		
		echo $before_widget;

		// Check title is set
		if( !isset($title) ) 
			$title = esc_html__( 'Recent Posts', 'construction' );

		// Number of posts
		if( !isset($post_limit) )
			$post_limit = 3;
		
		// Check title is set
		if( !empty($title) ){
			echo $before_title.esc_html($title).$after_title;			
		}

		// Get latest post
		if( $category == '- All -' ){
			$wpbp = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $post_limit, 'order' => 'DESC' ) );
		} else {
			$wpbp = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $post_limit, 'order' => 'DESC', 'category_name' => $category ) );
		}
		
		$temp_out = "";
		
		global $post;
		if( $wpbp->have_posts() ) : ?>
			<div class="margin-top-30 column-list">
				<?php while( $wpbp->have_posts() ) : $wpbp->the_post(); ?>
					<div class="post-inner">
						<div class="post-img">
							<!-- Post image -->
							<?php the_post_thumbnail( 'construction_75_75' ); ?>
						</div>
						<div class="post-content">
							<!-- Post link and title -->
							<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
								<h5><?php the_title(); ?></h5>
							</a>
							<p><?php
								$archive_year  = get_the_time( 'Y', $post->ID );
	                            $archive_month = get_the_time( 'm', $post->ID );
	                            $archive_day   = get_the_time( 'd', $post->ID );
	                            echo '<a href="'.esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ).'">';
	                            echo get_the_time('F') . ', '. get_the_time('d') . ' ' . get_the_time('Y'); ?></a>
                        	</p>
						</div>
					</div><?php
				endwhile; ?>
			</div>			
		<?php endif;

		echo $after_widget;
		
		wp_reset_postdata();
	} 
}

if( ! function_exists( 'register_construction_recent_posts' ) ){
    // Call latest post widget
    function register_construction_recent_posts(){
    	register_widget( 'construction_recent_posts' );
    }
    add_action( 'widgets_init', 'register_construction_recent_posts' );
}