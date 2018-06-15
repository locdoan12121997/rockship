<?php

global $construction_options;

$newsletter_label = '';
if( !empty( $construction_options['construction_bottom_footer_newsletter_label'] ) ){
	$newsletter_label = $construction_options['construction_bottom_footer_newsletter_label'];
}

$newsletter_shortcode = '';
if( !empty( $construction_options['construction_footer_bottom_newsletter'] ) ){
	$newsletter_shortcode = $construction_options['construction_footer_bottom_newsletter'];	
}

?>

<div class="special_newsletter">
	<h6><?php printf( esc_html__( '%s', 'construction' ), $newsletter_label ); ?></h6>
	<?php echo do_shortcode($newsletter_shortcode); ?>
</div>