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

<div class="main-part blog-special margin-top-bottom-75">
  <div class="page-special"><?php
		if( $page_sidebar_layout == '3' || $page_sidebar_layout == '4' ){ ?>
			<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
				<?php construction_get_sidebar($page_sidebar_widget); ?>          
			</div><?php
		} ?>

		<div class="<?php echo esc_attr( $page_structure[1] ); ?>"><?php
  		if( have_posts() ) : ?>
  			<div class="carousel-box"><?php
    			while( have_posts() ) : the_post(); ?>
    			  <div class="carousel-single-two">
              <div id="post-<?php esc_attr( the_ID() ); ?>" <?php post_class(); ?>><?php
                $post_format = get_post_format( get_the_ID() );
                if( empty($post_format) ){
                  get_template_part( '/templates-part/post-format/standard' );
                } else {
                  get_template_part( '/templates-part/post-format/'.$post_format );
                }

                echo '<br>';

                the_content(); 

                wp_link_pages();
                
                construction_get_post_tag();

                if( comments_open() || get_comments_number() ){
                  echo '<br>';
                  comments_template();
                } ?>
	            </div>
            </div><?php
			   endwhile; ?>
			  </div><?php
  		else :
        get_template_part( '/templates-part/content', 'none' );
  		endif; ?>

  	</div><?php

		if( $page_sidebar_layout == 'default' || $page_sidebar_layout == '1' || $page_sidebar_layout == '2' ){ ?>
  		<div class="<?php echo esc_attr( $page_structure[0] ); ?>">
  		  <?php construction_get_sidebar($page_sidebar_widget); ?>
      </div><?php
  	} ?>
  </div>
</div>

<?php get_footer(); ?>