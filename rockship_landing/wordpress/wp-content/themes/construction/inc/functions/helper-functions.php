<?php

function construction_nav_class( $classes, $item ){
    if( in_array( 'current-menu-item', $classes ) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'construction_nav_class' , 10 , 2 );

class Construction_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ){
    	$indent = str_repeat("\t", $depth);
    	$output .= "\n$indent<ul class=\"submenu\">\n";
  	}
}

// Get current page id
if( !function_exists('construction_get_page_id') ){
	
	function construction_get_page_id(){
		if( is_archive() || is_search() || is_404() ){
			return -1;
		}		
		return get_queried_object_id();
	}
}

if( !function_exists('construction_wp_head') ){
	
	function construction_wp_head(){
		
		global $construction_options;

		if( class_exists( 'WooCommerce' ) ){
		  	if( is_shop() ){
		  		$page_id = get_option( 'woocommerce_shop_page_id' );
		  	} else {
		  		$page_id = construction_get_page_id();	
		  	}
		} else {
		  	$page_id = construction_get_page_id();
		}

		$wrap_color	= get_post_meta( $page_id, 'page_content_bk_color' , true );
		if( empty($wrap_color) ){
			if( isset($construction_options['page_content_bk_color']) ){
				$wrap_color	= $construction_options['page_content_bk_color'];
			}
		}
		
		$bgcolor = get_post_meta( $page_id, 'page_body_bk_color' , true );
		if( empty($bgcolor) ){
			if( isset($construction_options['page_body_bk_color']) ){
				$bgcolor = $construction_options['page_body_bk_color'];
			}
		}
		
		$bgimage = '';
		
		$bgimages = get_post_meta( $page_id, 'page_body_bk_image' , true );
		if( !empty($bgimages) ){
			$bgimage = wp_get_attachment_url( $bgimages );
		} else {
			if( !empty($construction_options['page_body_bk_image']['url']) ){
				$bgimage = $construction_options['page_body_bk_image']['url'];
			}
		}
		
		$bgpercent = get_post_meta( $page_id, 'page_body_bk_image_100' , true );
		if( $bgpercent == 'global' ){
			$bgpercent = $construction_options['page_body_bk_image_100'];
		}

		$bgrepeat = get_post_meta( $page_id, 'page_body_bk_image_repeat' , true );
		if( $bgrepeat == 'global' ){
			$bgrepeat = $construction_options['page_body_bk_image_repeat'];
		}

		$out = "";
		
		$out .= '<style type="text/css" media="screen">body{ ';
		if( !empty($bgcolor) ){
			$out .= "background-image:url('');background-color:{$bgcolor};";
		}

		if( !empty($bgimage) ){

			if( $bgrepeat == 1 )
				$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat;";
			
			else if( $bgrepeat == 2 )
				$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat-x;";
			
			else if( $bgrepeat == 3 )
				$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat-y;";
			
			else if( $bgrepeat == 0){
				
				if( $bgpercent )
					$out .=  " background-image:url('{$bgimage}'); background-repeat:no-repeat; background-size:100% auto; ";
				else
					$out .=  " background-image:url('{$bgimage}'); background-repeat:no-repeat; ";		
			}
		}
		if( $bgpercent == 'yes' ){
			$out .= 'background-size:cover; background-attachment:fixed; background-position:center;';
		}

		if( $wrap_color ){
			$out .= '} .page-special{background-color:'.$wrap_color.';';			
		}
		
		$out .= ' }</style>';
		
		printf( esc_html__( '%s', 'construction' ), $out );
	}
	add_action( 'wp_head', 'construction_wp_head' );
}

if( !function_exists('construction_breadcrumbs') ){
	
	function construction_breadcrumbs() {
		global $post, $wp_query;
		
		$output = "";
		$homeLink = home_url();
		$pageid = $wp_query->get_queried_object_id();
		$bread_style = "";

		$show_on_home = 2;
		$delimiter = '';
		$home = esc_html__( 'Home', 'construction' );
		$show_current = 1;
		$before = '<li class="active">';
		$after = '</li>';

		if( is_home() && !is_front_page() ){
			$output = '<li><a href="' . $homeLink . '">' . $home . '</a></li><li class="active">'. get_the_title($pageid) .'</li>';
		
		} else if( is_home() ){
			$output = ''.$before.$home.$after.'';

		} else if( is_front_page() ){
			if( $show_on_home == 1 ){
				$output = '<li><a href="' . $homeLink . '">' . $home . '</a></li>';
			}
		} else {
			$output .= '<li><a href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter;
			
			if( is_tax() ){
	            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

	            $taxonomy_object = get_taxonomy( get_query_var( 'taxonomy' ) );	                
                $parent = $term->parent;
                while ($parent):
                    $parents[] = $parent;
                    $new_parent = get_term_by( 'id', $parent, get_query_var( 'taxonomy' ));
                    $parent = $new_parent->parent;
                endwhile;
                
                if(!empty($parents)):
                    $parents = array_reverse($parents);
                    // For each parent, create a breadcrumb item
                    foreach ($parents as $parent):
                        $item = get_term_by( 'id', $parent, get_query_var( 'taxonomy' ));

                        $term_link = get_term_link( $item );
                        if ( is_wp_error( $term_link ) ) {
                            continue;
                        }
                        $output .= '<li><a href="'.$term_link.'">'.$item->name.'</a></li>';
                    endforeach;
                endif;

                // Display the current term in the breadcrumb
                $output .= '<li class="active">'.$term->name.'</li>';
	        }
	        
	        if( get_post_type() == 'product' ){
				$output .= '<li class="active">'.esc_html__( 'Product', 'construction' ).'</li>';
			} else if( is_category() ){
				$current_cat = get_category( get_query_var( 'cat' ), false );
				if( isset($current_cat->parent) && $current_cat->parent != 0 ){
					$output .= get_category_parents( $current_cat->parent, TRUE, ' ' . $delimiter );
				}

				$output .= $before . single_cat_title( '', false ) . $after;

			} else if( is_search() ){
				$output .= $before . esc_html__( 'Search results for : ', 'construction' ) . get_search_query() . $after;

			} else if( is_day() ){
				$output .= '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' . $delimiter;
				$output .= '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>' . $delimiter;
				$output .= $before . get_the_time('d') . $after;

			} else if( is_month() ){
				$output .= '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' . $delimiter;
				$output .= $before . get_the_time('F') . $after;

			} else if( is_year() ){
				$output .= $before . get_the_time('Y') . $after;

			} else if( is_single() && !is_attachment() ){
				if( get_post_type() != 'post' ){
					
					$post_type = get_post_type_object(get_post_type());
					
					$slug = $post_type->rewrite;
					if( $show_current == 1 ){
						$output .= $before . get_the_title() . $after;
					}

				} else {
					$cat = get_the_category(); 
					$cat = $cat[0];
					$cats = get_category_parents( $cat, TRUE, ' ' . '' );
					
					if( $show_current == 0 )
						$cats = preg_replace( "#^(.+)\s$delimiter\s$#", "$1", $cats );
					
					$output .= '<li>'.$cats.'</li>';
					
				}				
			}  else if( is_attachment() && !$post->post_parent ){
				if( $show_current == 1 ){
					$output .= $before . get_the_title() . $after;
				}
			} else if( is_attachment() ){
				$parent = get_post( $post->post_parent );
				$cat = get_the_category( $parent->ID );
				
				if( $cat ){
					$cat = $cat[0];
					$output .= get_category_parents( $cat, TRUE, ' ' . $delimiter );
				}

				$output .= '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
				
				if( $show_current == 1 ){
					$output .= $delimiter . $before . get_the_title() . $after;
				}
			} else if( is_page() && !$post->post_parent ){
				if( $show_current == 1){
					$output .= $before . get_the_title() . $after;
				}

			} else if( is_page() && $post->post_parent ){
				$parent_id  = $post->post_parent;
				$breadcrumbs = array();
				
				while( $parent_id ){
					$page = get_page($parent_id);
					$breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
					$parent_id  = $page->post_parent;
				}
				
				$breadcrumbs = array_reverse( $breadcrumbs );
				
				for( $i = 0; $i < count($breadcrumbs); $i++ ){
					$output .= $breadcrumbs[$i];
					if( $i != count($breadcrumbs) - 1 ){
						$output .= ' ' . $delimiter;
					}
				}

				if( $show_current == 1 ){
					$output .= $delimiter . $before . get_the_title() . $after;
				}
			} else if( is_tag() ){
				$output .= $before . esc_html__( 'Posts tagged : ', 'construction' ) . single_tag_title( '', false ) . $after;

			} else if( is_author() ){
				global $authordata;
				$output .= $before . esc_html__( 'Articles posted by : ', 'construction' ) . $authordata->display_name . $after;
			} elseif ( is_404() ) {
				$output .= $before . esc_html__( 'Error 404 ', 'construction' ) . $after;
			}

			if( get_query_var('paged') ){
				$output .= $before . " (" . esc_html__( 'Page : ', 'construction' ) . ' ' . get_query_var( 'paged' ) . ")" . $after;
			}
			$output .= '';
		}
		printf( esc_html__( '%s', 'construction' ), $output );		
	}
}

function construction_sidebar_structure($page_sidebar_layout){
	$page_structure = array();
	
	if( $page_sidebar_layout == 'default' || $page_sidebar_layout == '1' || $page_sidebar_layout == '3' ){
		$page_structure[0] = 'col-md-4 col-sm-4 col-xs-12';
		$page_structure[1] = 'col-md-8 col-sm-8 col-xs-12';
	
	} else if( $page_sidebar_layout == '2' || $page_sidebar_layout == '4' ){
		$page_structure[0] = 'col-md-3 col-sm-3 col-xs-12';
		$page_structure[1] = 'col-md-9 col-sm-9 col-xs-12';
	} else {
		$page_structure[0] = 'col-md-12 col-sm-12 col-xs-12';
		$page_structure[1] = '';
	}
	
	return $page_structure;
}

function construction_get_post_tag(){
	if( has_tag() ){
		echo '<div class="tags margin-top-30">';
			the_tags( '<ul><li>', '</li><li>', '</li></ul>' );
		echo '</div>';
	}
}

if( !function_exists( 'construction_pagination' ) ){
    function construction_pagination( $pages = '', $range = 2 ){
        
        global $paged;

        if( empty($paged) )
        	$paged = 1;

        $prev = $paged - 1;
        $next = $paged + 1;
        $showitems = ( $range * 2 )+1;
        $range = 2;

        if( $pages == '' ){
            global $wp_query;

            $pages = $wp_query->max_num_pages;
            if( !$pages ){
                $pages = 1;
            }
        }

        if( 1 != $pages ){
            echo '<div class="pagination-list margin-top-50">';
                echo '<ul>';
                    echo ( $paged > 2 && $paged > $range+1 && $showitems < $pages ) ? '<li><a href="'.get_pagenum_link(1).'"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>' : '';
                    echo ( $paged > 1 ) ? '<li><a href="'.get_pagenum_link($prev).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>' : '<li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';
                    for( $i = 1; $i <= $pages; $i++ ){
                        if( 1 != $pages &&( !( $i >= $paged+$range+1 || $i <= $paged-$range-1 ) || $pages <= $showitems ) ){
                            if( $paged == $i ){
                                echo '<li class="active"><a href="'.get_pagenum_link($i).'">'.$i.' <span class="sr-only"></span></a></li>';
                            } else {
                                echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
                            }
                        }
                    }
                    echo ( $paged < $pages ) ? '<li><a href="'.get_pagenum_link($next).'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>' : '';
                    echo ( $paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages ) ? '<li><a href="'.get_pagenum_link( $pages ).'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>' : '';
                echo '</ul>';
            echo '</div>';
        }
    }
}

function construction_get_sidebar( $page_sidebar_widget ){ ?>	
	<div class="blog-right-section"><?php
		if( is_active_sidebar( $page_sidebar_widget ) ):
			dynamic_sidebar( $page_sidebar_widget );
		endif; ?>
	</div><?php
}

function construction_cat_count_span( $links ){
	$links = str_replace('</a> (', ' (', $links);
	$links = str_replace(')', ')</a>', $links);
	return $links;
}
add_filter( 'wp_list_categories', 'construction_cat_count_span' );

function construction_archive_count_span( $links ){
	$links = str_replace('</a>&nbsp;(', ' (', $links);
	$links = str_replace(')', ')</a>', $links);
	return $links;
}
add_filter( 'get_archives_link', 'construction_archive_count_span' );

function construction_comment_callback( $comment, $args, $depth ){
	
	$GLOBALS['comment'] = $comment;	
	$avtar_args = array();
	$allowed_html_array = array( 'i' => array( 'class' => array() ) ); ?>
	
    <div <?php comment_class('media'); ?> id="comment-<?php comment_ID(); ?>">
	    <div class="comment-part">
            <div class="comment-date">
				<div class="replay-comment"><?php comment_reply_link( array_merge( $args, array( 'reply_text' => wp_kses(__( 'Reply <i class="fa fa-angle-right"></i>', 'construction' ), $allowed_html_array ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
				<div class="comment-date-blog"><p><?php comment_author(); ?></p></div>
				<div class="comment-date-blog">|</div>
				<div class="comment-date-blog"><?php echo get_comment_date(); esc_html_e( ' at ', 'construction' ); echo get_comment_time(); ?></div>
            </div>
            <div class="comment-pic">
              	<?php echo get_avatar( $comment, '70', '', '', $avtar_args ); ?>
            </div>
            <div class="commnet-content">
              	<?php if ( $comment->comment_approved == '0' ) : ?>
                	<p><?php esc_html_e( 'Your comment is awaiting moderation.', 'construction' ); ?></p>
	            <?php else:
	                echo comment_text();
	            endif; ?>
            </div>
		</div>
	</div><?php
}

function construction_get_theme_option( $id, $url = true ){
	if( class_exists( 'ReduxFramework' ) ){
		$construction_options = get_option("construction_options");
		if( $url ){
			return $construction_options[$id]['url'];
		} else {
			return $construction_options[$id];
		}
	} else {

	}
}

// Header custom JS
function construction_header_scripts(){
	$construction_options = get_option("construction_options");
    $custom_js_header = $construction_options['custom_js_header'];
    if( $custom_js_header != '' ){
        echo ( $custom_js_header );
    }
}
if( !is_admin() ){
    add_action('wp_head', 'construction_header_scripts');
}

// Footer custom JS
function construction_footer_scripts(){
	$construction_options = get_option("construction_options");
    $custom_js_footer = $construction_options['custom_js_footer'];
    if ( $custom_js_footer != '' ){
        echo ( $custom_js_footer );
    }
}
if( !is_admin() ){
    add_action( 'wp_footer', 'construction_footer_scripts', 100 );
}

function construction_blog_column_class(){
	global $construction_options;

	if( $construction_options['blog_column'] == 1 ){
		return 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
	} else if( $construction_options['blog_column'] == 2 ){
		return 'col-xs-12 col-sm-6 col-md-6 col-lg-6';
	} else if( $construction_options['blog_column'] == 3 ){
		return 'col-xs-12 col-sm-6 col-md-4 col-lg-4';
	}
}

function construction_blog_column_image(){
	global $construction_options, $post;

	if( is_single() ){
		return wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );
	} else {
		if( $construction_options['blog_column'] == 1 ){
			return wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );
		} else if( $construction_options['blog_column'] == 2 ){
			return wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'construction_478_310' );
		} else if( $construction_options['blog_column'] == 3 ){
			return wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'construction_478_310' );
		} else {
			return wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );
		}
	}
}

function construction_blog_readmore(){
	global $construction_options, $post;

	$blog_type = $construction_options['blog_type'];
	if( empty( $construction_options ) ){
		$blog_type = 1;
	}

	$readmore_text = $construction_options['blog_readmore_text'];
	if( empty( $readmore_text ) ){
		$readmore_text = esc_html__( 'Read More', 'construction' );
	}

	if( $construction_options['blog_column'] == 3 ){
		$min_width_100 = "min-width-100";
	} else {
		$min_width_100 = "";
	}
	
	if( $blog_type == 1 ){
  		$readmore_link = '<a href="'.esc_url( get_the_permalink( $post->ID ) ).'" class="btn-orange '.esc_attr($min_width_100).'">'.$readmore_text.'</a>';
  	} else {
  		$readmore_link = '<a href="'.esc_url( get_the_permalink( $post->ID ) ).'">'.$readmore_text.' <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
  	}

  	return $readmore_link;
}

function construction_blog_excerpt(){
	global $construction_options, $post;

	$show_excerpt = $construction_options['blog_excerpt_enable'];
	if( empty( $construction_options ) ){
		$show_excerpt = 1;
	}

	if( $show_excerpt == 1 ){
  		$number_word = $construction_options['blog_excerpt_length'];
		if( empty( $construction_options ) ){
			$number_word = 20;
		}
		
		$blog_excerpt = '<p>'.sprintf( esc_html__( '%s', 'construction' ), wp_trim_words( $post->post_excerpt, $number_word ) ).'</p>';
  		return $blog_excerpt;
  	}
  	return;
}

function construction_blog_metadata(){
	global $construction_options, $post;

	$show_author = $construction_options['blog_meta_date_enable'];
	if( empty( $construction_options ) ){
		$show_author = 1;
	}

	$show_date = $construction_options['blog_meta_author_enable'];
	if( empty( $construction_options ) ){
		$show_date = 1;
	}

	$show_comments = $construction_options['blog_meta_comment_enable'];
	if( empty( $construction_options ) ){
		$show_comments = 1;
	}

	$blog_info = '';

	if( $show_author == 1 ){
		$blog_info .= '<i class="fa fa-user" aria-hidden="true"></i> '.get_the_author();
	}

	if( $show_date == 1 ){
		$blog_info .= '<i class="fa  fa-calendar" aria-hidden="true"></i> '.get_the_time( get_option( 'date_format' ) );
	}

	if( $show_comments == 1 ){
		
		$total_comment = wp_count_comments( $post->ID );
		
		if( $total_comment->approved > 1 ){
			$blog_info .= '<i class="fa  fa-comments" aria-hidden="true"></i> '. $total_comment->approved;
			$blog_info .= esc_html__( ' Comments', 'construction' ); 
		} else { 
			$blog_info .= '<i class="fa  fa-comments" aria-hidden="true"></i> '. esc_html__( 'No Comment', 'construction' ); 
		}		
	}

	if( !empty( $blog_info ) ){
		return '<p class="blog-metadata">'.$blog_info.'</p>';
	}

  	return;
}

function construction_blog_image(){
	global $post;
	$full_image = construction_blog_column_image();
	if( !empty( $full_image ) ){ ?>
		<div class="overlay-wrapper">
	  		<img src="<?php echo esc_url( $full_image ); ?>" alt="<?php echo esc_attr( $post->post_title ); ?>">
	      	<div class="overlay-bg"></div>
	  	</div><?php
	}
}

function construction_blog_image_v4(){
	global $post;
	$full_image = construction_blog_column_image();
	if( !empty( $full_image ) ){ ?>
		<div class="rec-art-img">
	    	<img src="<?php echo esc_url( $full_image ); ?>" alt="<?php echo esc_attr( $post->post_title ); ?>">
	    </div><?php
	}
}
