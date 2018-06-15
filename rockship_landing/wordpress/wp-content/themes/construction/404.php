<?php  get_header(); global $construction_options; ?>
</div>
<div class="main-part">
	<div class="error-outer" style="background: url('<?php if( !empty($construction_options['404_page_image']['url']) ){ printf( esc_html__( '%s', 'construction' ), $construction_options['404_page_image']['url'] ); } else { echo get_template_directory_uri().'/images/404-Error.jpg'; } ?>') no-repeat center center;">
		<div class="container">
			<div class="error-msg">
				<h2><?php if( !empty( $construction_options['404_title'] ) ) : printf( esc_html__( '%s', 'construction' ), $construction_options['404_title'] ); else: esc_html_e( '404', 'construction' ); endif; ?></h2>
				<h3><?php if( !empty( $construction_options['404_text'] ) ) : printf( esc_html__( '%s', 'construction' ), $construction_options['404_text'] ); else: esc_html_e( 'Oops, it seems something went wrong', 'construction' ); endif; ?></h3>
				<a href="<?php echo esc_url( home_url() ); ?>" class="btn-orange"><?php if( !empty( $construction_options['404_back_label'] ) ) : printf( esc_html__( '%s', 'construction' ), $construction_options['404_back_label'] ); else: esc_html_e( 'Back to Homepage', 'construction' ); endif; ?></a>
			</div>
		</div>
	</div>
</div>
<div>
<?php get_footer(); ?>