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
      if( have_posts() ) :
        
        $blog_type = $construction_options['blog_type'];
        if( empty( $blog_type ) && $blog_type != 0 ){
          $blog_type = 1;
        } ?>
        <div class="carousel-box"><?php
        while( have_posts() ) : the_post(); ?>
            <div class="<?php echo esc_attr( construction_blog_column_class() ); ?>">
              <?php if( $blog_type == 3 ){ ?>
              <div class="blog-version-4"><?php
                echo
                '<div class="rec-art-full">
                  <div class="carouselitem">';
                    $post_format = get_post_format( get_the_ID() );
                    if( empty( $post_format ) ){
                      $full_image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'construction_370_190' );
                      echo
                      '<div class="rec-art-img">
                        <img src="'.esc_url( $full_image ).'" alt="'.esc_attr( $post->post_title ).'">
                      </div>';
                    } else if( $post_format == 'gallery' ){
                      $gallery_images = get_post_meta( get_the_ID(), 'gallery_images' );

                      if( !empty($gallery_images) ){
                        $slider_class = wp_rand();

                        echo '<div class="rec-art-img"><ul class="bxslider'.esc_attr( $slider_class ).'">';
                        
                        foreach( $gallery_images as $key => $value ){
                          $gallery_image = wp_get_attachment_image_url( $value, 'construction_370_190' );
                          $gallery_big_image = wp_get_attachment_image_url( $value, 'full' );
                          echo '<li><a href="'.esc_url( $gallery_big_image ).'" class="popup"><img src="'.esc_url( $gallery_image ).'" alt="'.esc_html__( 'Service Slider', 'construction' ).'"></a></li>';
                        }
                        
                        echo '</ul></div>'; ?>
                        <script type="text/javascript">
                          jQuery(window).load(function(){
                            jQuery('.bxslider<?php echo esc_js( $slider_class ); ?>').bxSlider({
                              slideMargin: 5,
                              autoReload: true,
                              breaks: [{screen:1200, slides:'1', pager:false}, {screen:460, slides:'1', pager:false}, {screen: 768, slides:'1', pager:false}, {screen:280, slides:'1', pager:false}]
                            });
                          });
                        </script><?php
                      }
                    } else if( $post_format == 'video' ){
                      $video_url = get_post_meta( get_the_ID(), 'video_url', true );

                      $video_image = get_post_meta( get_the_ID(), 'video_image', true );

                      $video_image_url = wp_get_attachment_image_url( $video_image, 'construction_370_190' );

                      echo '
                      <div class="rec-art-img">
                        <a href="'.esc_url( $video_url ).'" class="video-popup popup-over">
                          <img src="'.esc_url( $video_image_url ).'" alt="'.esc_attr( $post->post_title ).'">
                          <span class="video-popup play-btn"></span>
                        </a>
                      </div>';
                    } else if( $post_format == 'audio' ){
                      $full_image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'construction_370_190' );
                      echo
                      '<div class="rec-art-img-audio">
                        <img src="'.esc_url( $full_image ).'" alt="'.esc_attr( $post->post_title ).'">
                      </div>';

                      $post_audio = get_post_meta( get_the_ID(), 'audio_embed', true );
                      echo '
                      <div class="rec-art-img rec-art-img-audio">
                        <div class="audio_image">
                          <audio class="blog_audio" src="'.esc_url( $post_audio ).'" controls="controls">
                            '.esc_html__( "Your browser don't support audio player", "construction" ).'
                          </audio>
                        </div>
                      </div>';
                    }
                    echo 
                    '<div class="portfolio-item-content">
                      <div class="rec-art-info">';
                        $blog_info = '';

                        if( $construction_options['blog_meta_date_enable'] != 0 ){
                          $blog_info .= '<span> '.get_the_time( get_option( 'date_format' ) ).'</span>';
                        }

                        if( $construction_options['blog_meta_comment_enable'] != 0 ){
                          
                          $total_comment = wp_count_comments( $post->ID );
                
                          if( $total_comment->approved > 1 ){
                            $blog_info .= '<span>'. $total_comment->approved;
                            $blog_info .= esc_html__( ' Comments', 'construction' ).'</span>';
                          } else { 
                            $blog_info .= '<span>'. esc_html__( 'No Comment', 'construction' ).'</span>'; 
                          }
                        }

                        if( !empty( $blog_info ) ){
                          echo '<div class="rect-cmn">'.$blog_info.'</div>';
                        }

                        echo '<a href="'.esc_url( get_the_permalink( $post->ID ) ).'"><h6>'.sprintf( esc_html__( '%s', 'construction' ), $post->post_title ).'</h6></a>';

                        if( $construction_options['blog_excerpt_enable'] != 0 ){
                          echo '<p class="latest-blog-v3-excerpt">'.sprintf( esc_html__( '%s', 'construction' ), wp_trim_words( $post->post_excerpt, $construction_options['blog_excerpt_length'] ) ).'</p>';
                        }

                        if( $construction_options['blog_meta_author_enable'] != 0 ){
                          echo '
                          <div class="g-post">
                            <span>'.get_avatar( get_the_author_meta( 'ID' ), $post->ID ).' '.esc_html__( 'Posted by ', 'construction' ).'<small>'.get_the_author().'</small></span>
                          </div>';
                        }
                        echo
                      '</div>
                    </div>
                  </div>
                </div>'; ?>
              </div>
            <?php } else { ?>
              <div class="<?php if( $blog_type == 1 ){ echo esc_attr( "carousel-single" ); } else { echo esc_attr( "carousel-single-two" ); } ?> eq-blog-list"><?php
                $post_format = get_post_format( get_the_ID() );
                if( empty($post_format) ){
                  get_template_part( '/templates-part/post-format/standard' );
                } else {
                  get_template_part( '/templates-part/post-format/'.$post_format );
                } ?>
              </div>
            <?php } ?>
          </div><?php
        endwhile; ?>
      </div><?php
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
  <div class="special-theme-div">
    <?php the_tags(); ?>
    <?php posts_nav_link(); ?>
    <?php paginate_comments_links(); ?>
  </div>
</div>

<?php get_footer(); ?>