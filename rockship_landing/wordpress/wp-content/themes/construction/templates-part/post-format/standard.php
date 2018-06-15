<?php
if( is_sticky( get_the_ID() ) ){
  echo '<div class="sticky-post"></div>';
}
echo construction_blog_image(); ?>
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