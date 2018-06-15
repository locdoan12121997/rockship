<?php 

get_header();

global $construction_options;

$page_id = construction_get_page_id();

$page_sidebar_layout = 'default';
$sidebar_layout = get_post_meta( $page_id, 'page_sidebar_layout' );
if( empty($sidebar_layout) || $sidebar_layout == 'global' ){
  $page_sidebar_layout = $construction_options['page_sidebar_layout'];
} else {
  $page_sidebar_layout = $sidebar_layout[0];
}

$page_sidebar_widget = 'default-sidebar';
$sidebar_widget = get_post_meta( $page_id, 'page_sidebar_widget' );
if( empty($sidebar_widget) || $sidebar_widget == 'global' ){
  $page_sidebar_widget = $construction_options['page_sidebar_widget'];
} else {
  $page_sidebar_widget = $sidebar_widget[0];
}

$page_structure = construction_sidebar_structure($page_sidebar_layout); ?>

<div class="main-part margin-top-75">
  <div class="page-special"><?php
		if( $page_sidebar_layout == '3' || $page_sidebar_layout == '4' ){ ?>
			<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
				<?php construction_get_sidebar($page_sidebar_widget); ?>
			</div><?php
		} ?>

		<div class="<?php echo esc_attr( $page_structure[1] ); ?>"><?php
  		if( have_posts() ) :
    		while( have_posts() ) : the_post();
    			the_content();
		    endwhile;
  		else :
        get_template_part( '/templates-part/content', 'none' );
  		endif;

  		construction_pagination( $wp_query->max_num_pages ); ?>

  	</div><?php

		if( $page_sidebar_layout == 'default' || $page_sidebar_layout == '1' || $page_sidebar_layout == '2' ){ ?>
  		<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
  		  <?php construction_get_sidebar($page_sidebar_widget); ?>
  		</div><?php
  	} ?>
	</div>  
</div>
</div>
<?php

  global $construction_options;
  
  if( $construction_options['project_releated_project'] == 1 ){
    
    $with_space_class = $output = '';
    
    if( $construction_options['project_with_space'] != 1 ){
      $with_space_class = 'project-with-space';
    } else {
      $with_space_class = '';
    }

    $project_style = $construction_options['project_style']; ?>    
    <hr>
    <div class="related-project-main padding-top-45">
      <div class="container">
        <div class="text-left"><h3 style="color:"><?php printf( esc_html__( '%s', 'construction' ), $construction_options['project_releated_label'] ); ?></h3><div class="edge-seprator"></div></div>
      </div>
      <div class="portfolioContainer row padding-top-45">
        <div class="carousel-box">
          <div class="carousel" data-carousel-autoplay="false" data-carousel-items="4" data-carousel-nav="true" data-carousel-pagination="false"  data-carousel-speed="1000"><?php
            $terms = get_the_terms( $post->ID , 'projects', 'string');
            $term_ids = wp_list_pluck($terms,'term_id');
            $second_query = new WP_Query( array( 'post_type' => 'project', 'tax_query' => array( array( 'taxonomy' => 'projects', 'field' => 'id', 'terms' => $term_ids, 'operator'=> 'IN' ) ), 'posts_per_page' => -1, 'ignore_sticky_posts' => 1, 'orderby' => 'rand', 'post__not_in' => array( $post->ID ) ) );

            if( $second_query->have_posts() ){
            
              while( $second_query->have_posts() ) : $second_query->the_post();
                $full_image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );
                
                if( $project_style == 1 ){

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

                  echo '
                  <div class="'.esc_attr( $with_space_class ).' portfolio-line-list">
                    <div class="overlay-outer">
                      <img src="'.esc_url( $full_image ).'" alt="'.esc_attr( $post->post_title ).'">
                        <div class="pckItem-over overlay-bg">
                            <div class="pckItem-over-in">';
                                if( $construction_options['project_title'] == 1 ){
                                  echo '<h6>'.sprintf( esc_html__( '%s', 'construction' ), $post->post_title ).'</h6>';
                                  echo '<i>'.sprintf( esc_html__( '%s', 'construction' ), $project_cat_name ).'</i>';
                                }                            
                                if( $construction_options['project_zoom'] == 1 ){
                                  echo '<a href="'.esc_url( $full_image ).'" class="g-zoom" data-lightbox="portfolio"></a>';
                                }
                                if( $construction_options['project_link'] == 1 ){
                                  echo '<a href="'.esc_url( get_the_permalink( $post->ID ) ).'" class="g-link"></a>';
                                }
                              echo '
                            </div>
                        </div>
                    </div>                    
                  </div>';
                } else {
                  echo '
                  <div class="'.esc_attr( $with_space_class ).' portfolio-line-list">
                    <div class="overlay-wrapper-content">
                      <img src="'.esc_url( $full_image ).'" alt="'.esc_attr( $post->post_title ).'">
                      <div class="overlay-details">';
                        if( $construction_options['project_title'] == 1 ){
                          echo '<p>'.sprintf( esc_html__( '%s', 'construction' ), $post->post_title ).'</p>';
                        }
                        if( $construction_options['project_zoom'] == 1 ){
                          echo '<a class="color-white" href="'.esc_url( $full_image ).'" data-lightbox="portfolio"><img src="'.get_template_directory_uri().'/images/project-plus.png" alt="'.esc_html__( 'Plus Sign', 'construction' ).'" /></a>';
                        }
                        if( $construction_options['project_link'] == 1 ){
                          echo '<a class="color-white" href="'.esc_url( get_the_permalink( $post->ID ) ).'"><img src="'.get_template_directory_uri().'/images/project-link.png" alt="'.esc_html__( 'Plus Link', 'construction' ).'" /></a>';
                        }
                      echo '
                      </div>
                      <div class="overlay-bg"></div>
                    </div>
                  </div>';
                }
              endwhile;
              wp_reset_query();
            } ?>            
          </div>
        </div>
      </div>
    </div><?php
  } ?>
<div class="container">

<?php get_footer(); ?>