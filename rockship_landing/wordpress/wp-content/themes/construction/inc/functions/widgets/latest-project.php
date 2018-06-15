<?php 

// Latest projects widget
class construction_latest_project extends WP_Widget {
	// Define construct
	function __construct(){
		$params = array( 'description' => esc_html__( 'Display Latest Projects', 'construction' ), 'name' => esc_html__( 'Construction: Latest Projects', 'construction' ) );
		parent::__construct('construction_latest_project', '', $params);
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
			<select class="widefat" id="<?php echo esc_attr( $this->get_field_id('category') ); ?>" name="<?php echo esc_attr( $this->get_field_name('category') ); ?>"><?php
				$categories = construction_admin_project_cat();				
				if( !empty($categories) ){
					foreach( $categories as $key => $value ){ ?>
						<option value="<?php printf( esc_html__( '%s', 'construction' ), $value ); ?>" <?php if( isset($category) && $category == $value ){ echo 'selected="selected"'; } ?>> <?php printf( esc_html__( '%s', 'construction' ), $key ); ?></option><?php
					}
				} ?>
			</select>
			<span><?php esc_html_e( 'Select specific category, leave blank to show all categories.', 'construction' ); ?><span>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('project_limit') ) ?>"><?php esc_html_e( 'Number of Projects:', 'construction' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('project_limit') ); ?>" name="<?php echo esc_attr( $this->get_field_name('project_limit') ); ?>" value="<?php if( isset($project_limit) ) echo esc_attr($project_limit); ?>" />
		</p><?php
	}

	public function widget($args, $instance){

		extract($args);
		extract($instance);

		// Get widget title
		$title = apply_filters( 'widget_title', $instance['title'] );

		$widget_title 	= apply_filters( 'widget_title', $instance['title'] );
		$category 		= $instance['category'];
		$project_limit 	= $instance['project_limit'];		
		
		// Check title is set
		if( !isset($title) ) 
			$title= esc_html__( 'Latest Projects', 'construction' );

		// Number of projects
		if( !isset($project_limit) )
			$project_limit = 9;
		
		echo $before_widget;

		// Check title is set
		if( !empty($title) ){
			echo $before_title.esc_html($title).$after_title;			
		}

		if( empty($category) ){
			$wpbp = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => $project_limit, 'order' => 'DESC' ) );
		} else {
			$wpbp = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => $project_limit, 'order' => 'DESC', 'tax_query' => array( array( 'taxonomy' => 'projects', 'field' => 'term_id', 'terms' => $category ) ) ) );
		}

		$temp_out = "";
		
		global $post;
		if( $wpbp->have_posts() ) : ?>
			<div class="margin-top-30 column-list">
				<div class="row lst-project"><?php
				while( $wpbp->have_posts() ) : $wpbp->the_post(); ?>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
							<?php the_post_thumbnail( 'construction_200_200' ); ?>
						</a>
					</div><?php
				endwhile; ?>
				</div>
			</div>
		<?php endif;
		
		wp_reset_postdata();

		echo $after_widget;
	} 
}

if( ! function_exists( 'register_construction_latest_project' ) ){
    // Call latest post widget
    function register_construction_latest_project(){
    	register_widget( 'construction_latest_project' );
    }
    add_action( 'widgets_init', 'register_construction_latest_project' );
}

// project type for admin list
if( ! function_exists( 'construction_admin_project_cat' ) ){
    
    function construction_admin_project_cat( $add_category = true ){

        // Check is admin
        if( is_admin() === false ){
            return;
        }

        // Get project type category
        $categories = get_categories( array( 'hide_empty' => 0, 'taxonomy' => 'projects' ) );
        $project_type = new Construction_project_type_walker;

        // Get project type walk
        $project_type->walk($categories, 4);
        
        // Check add category is set
        if( $add_category === true ){
            $categories_buffer['- All -'] = '';
            // Merge project type category
            return array_merge( $categories_buffer, $project_type->project_type_buffer );
        } else {
            // Get project type category
            return $project_type->project_type_buffer;
        }
    }
}

class Construction_project_type_walker extends Walker {    
    // Get the category name
    var $tree_type = 'projects';
    var $db_fields = array( 'parent' => 'parent', 'id' => 'term_id' );

    // Set category buffer
    var $project_type_buffer = array();

    // Start level
    function start_lvl( &$output, $depth = 0, $args = array() ){
    }

    // End level
    function end_lvl( &$output, $depth = 0, $args = array() ){
    }

    // Start category level
    function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ){
       $this->project_type_buffer[str_repeat(' - ', $depth) .  $category->name] = $category->term_id;
    }

    // End category level
    function end_el( &$output, $page, $depth = 0, $args = array() ){
    }
}