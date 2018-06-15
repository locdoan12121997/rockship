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

<div class="main-part service-spacial margin-top-bottom-75">
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

<?php get_footer(); ?>