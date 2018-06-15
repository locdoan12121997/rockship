<?php

$video_url = get_post_meta( get_the_ID(), 'video_url', true );

$video_image = get_post_meta( get_the_ID(), 'video_image', true );

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

$video_image_url = wp_get_attachment_image_url( $video_image, $image_size );

if( !empty($video_url) ){ ?>
  <a href="<?php echo esc_url( $video_url ); ?>" class="video-popup popup-over">
    <img src="<?php echo esc_url( $video_image_url ); ?>" alt="<?php echo esc_attr( $post->post_title ); ?>">
    <span class="video-popup play-btn"></span>
  </a><?php
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