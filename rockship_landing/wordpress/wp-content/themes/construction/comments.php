<?php

if( post_password_required() ){
	return;
}

if( have_comments() ):
	$total_comment = wp_count_comments( $post->ID ); ?>
	<div class="comment-main">
		<h2>
			<?php if( $total_comment->approved > 1 ){ 
				printf( esc_html__( '%s', 'construction' ), $total_comment->approved );
				esc_html_e( ' Comments', 'construction' ); 
			} else { 
				esc_html_e( 'No Comment', 'construction' ); 
			} ?>
		</h2>

		<?php wp_list_comments('callback=construction_comment_callback');

		if( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
       		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'construction' ); ?></p><?php
    	endif; ?>
	</div>
<?php endif;

$fields =  array(
    'author' => '<div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="author" id="author" class="form-control" placeholder="'.esc_html__( '* Name', 'construction' ).'" required>
                </div>',

    'email'  => '<div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" id="email" class="form-control" placeholder="'.esc_html__( '* Email', 'construction' ).'" required>
                </div>',

    'url'    => '<div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <input type="url" id="url" name="url" class="form-control" placeholder="'.esc_html__( 'Website url', 'construction' ).'" >
                </div>',
);

// Comment Form Args
$comments_args = array(
    'fields' => $fields,            
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'comment_field' => '<div class="form-group col-md-12 col-sm-12 col-xs-12"><textarea name="comment" id="comment" class="form-control" placeholder="'.esc_html( '* Comment', 'construction' ).'"></textarea></div>',
    'class_form' => 'post-form row',
    'id_form' => 'comment-form',
    'submit_button' => '<button type="submit" class="comment-submit-button">'.esc_html__( 'Post Comment', 'construction' ).'</button>',
    'submit_field' => '<div class="form-submit col-sm-12">%1$s %2$s</div>',
    'logged_in_as' => '<p class="logged-in-as col-sm-12">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'construction' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
    'cancel_reply_link' => esc_html__( 'Cancel Reply', 'construction' ),
    'cancel_reply_before' => '<small class="pull-right">',
    'cancel_reply_after' => '</small>',
    'format' => 'html5'
);
comment_form( $comments_args ); ?>