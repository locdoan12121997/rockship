<?php

$gallery_images = get_post_meta( get_the_ID(), 'gallery_images' );

$slider_class = '';

if( !empty($gallery_images) ){
  $slider_class = wp_rand();

  echo '<ul class="bxslider'.esc_attr( $slider_class ).'">';
  
  global $construction_options;

  $image_size = '';

  if( is_single() ){
    $image_size = 'full';
  } else {
    if( $construction_options['blog_column'] == 1 ){
      $image_size = 'full';
    } else if( $construction_options['blog_column'] == 2 ){
      $image_size = 'construction_478_310';
    } else if( $construction_options['blog_column'] == 3 ){
      $image_size = 'construction_478_310';
    }
  }

  foreach( $gallery_images as $key => $value ){
    $gallery_image = wp_get_attachment_image_url( $value, $image_size );
    $gallery_big_image = wp_get_attachment_image_url( $value, 'full' );
    echo '<li><a href="'.esc_url( $gallery_big_image ).'" class="popup"><img src="'.esc_url( $gallery_image ).'" alt="'.esc_html__( 'Service Slider', 'construction' ).'"></a></li>';
  }
  
  echo '</ul>';
} ?>
<div class="portfolio-item-content">
  
  <?php if( !is_single () ){ ?>
    <a href="<?php echo esc_url( get_the_permalink( $post->ID ) ); ?>">
      <h4><?php printf( esc_html__( '%s', 'construction' ), $post->post_title ); ?></h4>
    </a><?php
  }
  
  echo construction_blog_metadata();

  if( !is_single () ){
    echo construction_blog_excerpt();
    echo construction_blog_readmore();
  } ?>
</div>

<script type="text/javascript">
  jQuery(document).ready(function($){
    "use strict";
    jQuery('.bxslider<?php echo esc_js( $slider_class ); ?>').bxSlider({
      slideMargin: 5,
      autoReload: true,
      breaks: [{screen:1200, slides:'1', pager:false}, {screen:460, slides:'1', pager:false}, {screen: 768, slides:'1', pager:false}, {screen:280, slides:'1', pager:false}]
    });
  });
</script>