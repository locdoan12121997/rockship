<?php 

$post_audio = get_post_meta( get_the_ID(), 'audio_embed', true );

echo construction_blog_image();
if( !empty( $post_audio) ){ ?>
  <div class="audio_image">
    <audio class="blog_audio" src="<?php echo esc_url( $post_audio ); ?>" controls="controls">
      <?php esc_html_e( "Your browser don't support audio player", "construction" ); ?>
    </audio>
  </div><?php
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