<?php

get_header();

global $construction_options;

$project_cat_style = $construction_options['project_cat_style'];
$project_cat_layout = $construction_options['project_cat_layout'];
$project_cat_view = $construction_options['project_cat_view'];
$project_with_space = $construction_options['project_cat_with_space'];
$project_per_view = $construction_options['project_cat_per_view'];
$project_zoom = $construction_options['project_cat_zoom'];
$project_link = $construction_options['project_cat_link'];
$project_title = $construction_options['project_cat_title'];

$project_special_class = '';
	
if( $project_per_view == '0' ){
	$grid_class = 'col-md-12 col-sm-12 col-xs-12';
} else if( $project_per_view == '1' ){
	$grid_class = 'col-md-6 col-sm-6 col-xs-12';
} else if( $project_per_view == '2' ){
	$project_special_class = 'project-special-class';
	$grid_class = 'col-md-4 col-sm-4 col-xs-12';
} else if( $project_per_view == '3' ){
	$grid_class = 'col-md-3 col-sm-3 col-xs-12';
} else if( $project_per_view == '4' ){
	$grid_class = 'col-md-2 col-sm-2 col-xs-12';
}

$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

$posts_array = get_posts(
    array(
        'posts_per_page' 	=> -1,
        'post_type' 		=> 'project',
        'suppress_filters' 	=> true,
        'tax_query' 		=> array(
            array(
                'taxonomy' 	=> 'projects',
                'field' 	=> 'term_id',
                'terms' 	=> $current_term->term_id,
            )
        )
    )
);

if( $project_with_space == 1 ){
	$with_space_class = 'project-with-space';
} else {
	$with_space_class = '';
}

if( $project_cat_layout == 0 ){
	echo '</div>';
}


echo '<div class="project-archive">';

$id = uniqid(rand());

$output = '';

if( $project_with_space == 1 ){
	$with_space_class = 'project-with-space';
} else {
	$with_space_class = '';
}

if( $posts_array ) :

	if( $project_cat_style == 1 ){
		
		$output .= '<div class="project-packery">';
		
		if( $project_cat_view == 1 ){
			$output .= '<div id="construction-'.esc_attr($id).'" class="portfolioContainer packery-inside">';
		} else {
			$output .= '<div id="construction-'.esc_attr($id).'" class="portfolioContainer">';
		}	        

		foreach ( $posts_array as $post ) :
    		setup_postdata( $post );

        	$terms = get_the_terms( $post->ID, 'projects' );
                     
            if( $terms && ! is_wp_error( $terms ) ) :                
                $project_links = array();
            	$project_cat = array();
                foreach ( $terms as $term ) {
                    $project_links[] = $term->slug;
                    $project_cat[] = $term->name;
                }                                        
                $project = join( " ", $project_links );
                $project_cat_name = join( ", ", $project_cat );
            endif;
        	
        	$full_image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );

        	if( $project_cat_view == 1 ){
				$output .= '<div class="pckItem '.esc_attr( $project ).' '.esc_attr( $with_space_class ).' portfolio-line-list">';
			} else {
				$output .= '<div class="'.esc_attr( $project ).' '.esc_attr( $grid_class ).' '.esc_attr( $with_space_class ).' portfolio-line-list">';
			}

        	$output .= '				
				<div class="overlay-outer">
					<img src="'.esc_url( $full_image ).'" alt="'.esc_attr( $post->post_title ).'">
                    <div class="pckItem-over overlay-bg">
                        <div class="pckItem-over-in">';
                            if( $project_title == 'yes' ){
								$output .= '<h6>'.sprintf( esc_html__( '%s', 'construction' ), $post->post_title ).'</h6>';
								$output .= '<i>'.sprintf( esc_html__( '%s', 'construction' ), $project_cat_name ).'</i>';
							}                            
                            if( $project_zoom == 'yes' ){
								$output .= '<a href="'.esc_url( $full_image ).'" class="g-zoom" data-lightbox="portfolio"></a>';
							}
							if( $project_link == 'yes' ){
								$output .= '<a href="'.esc_url( get_the_permalink( $post->ID ) ).'" class="g-link"></a>';
							}
						$output .= '
                        </div>
                    </div>
                </div>
			</div>';

        endforeach;

        $output .= '</div>';

        $output .= '</div>';		
        
	} else {
		$output .= '<div class="project-packery-outer">';

		if( $project_cat_view == 1 ){
			$output = '<div class="project-packery-old">';
		}
		
        if( $project_cat_view == 1 ){
        	$output .= '<div id="construction-'.esc_attr($id).'" class="portfolioContainer packery-inside-old row '.esc_attr($project_special_class).'">';
        } else {
			$output .= '<div id="construction-'.esc_attr($id).'" class="portfolioContainer row '.esc_attr($project_special_class).'">';
		}

        foreach ( $posts_array as $post ) :
    		setup_postdata( $post );
            
            $terms = get_the_terms( $post->ID, 'projects' );
                     
            if( $terms && ! is_wp_error( $terms ) ) :                
                $project_links = array();                 
                foreach ( $terms as $term ) {
                    $project_links[] = $term->slug;
                }                                        
                $project = join( " ", $project_links );
            endif;	        	
			
        	$full_image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );

        	if( $project_cat_view == 1 ){
				$output .= '<div class="pckItem-old '.esc_attr( $project ).' '.esc_attr( $with_space_class ).' portfolio-line-list">';
        	} else {
        		$output .= '<div class="'.esc_attr( $project ).' '.esc_attr( $grid_class ).' '.esc_attr( $with_space_class ).' portfolio-line-list">';
        	}

			$output .= '
				<div class="overlay-wrapper-content">
					<img src="'.esc_url( $full_image ).'" alt="'.esc_attr( $post->post_title ).'">
					<div class="overlay-details">';
						if( $project_title == 'yes' ){
							$output .= '<p>'.sprintf( esc_html__( '%s', 'construction' ), $post->post_title ).'</p>';
						}
						if( $project_zoom == 'yes' ){
							$output .= '<a class="color-white" href="'.esc_url( $full_image ).'" data-lightbox="portfolio"><img src="'.get_template_directory_uri().'/images/project-plus.png" alt="'.esc_html__( 'Plus Sign', 'construction' ).'"/></a>';
						}
						if( $project_link == 'yes' ){
							$output .= '<a class="color-white" href="'.esc_url( get_the_permalink( $post->ID ) ).'"><img src="'.get_template_directory_uri().'/images/project-link.png" alt="'.esc_html__( 'Plus Link', 'construction' ).'"/></a>';
						}
					$output .= '
					</div>
					<div class="overlay-bg"></div>
				</div>
			</div>';

        endforeach;

        $output .= '</div>';

        if( $project_cat_view == 1 ){
			$output .= '</div>';
		}

		$output .= '</div>';
    }
endif;

echo $output;

if( $project_cat_layout == 0 ){
	echo '<div class="container">';
}

echo '</div>';

wp_reset_postdata();

get_footer();

?>