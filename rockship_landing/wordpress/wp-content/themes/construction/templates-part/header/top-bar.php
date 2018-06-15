<?php
global $construction_options;

$top_bar_left = $construction_options['top_bar_left'];
$top_bar_right = $construction_options['top_bar_right'];

if( $top_bar_left != 'none' || $top_bar_right != 'none' ){ ?>
	<div class="header-top <?php if( $construction_options['header_type'] == '2' ){ echo "top-header-tranparent"; } ?>">
		<div class="container">
			<div class="header-top-inner">
				<div class="pull-left"><?php
					
				if( $top_bar_left != 'none' ){
					
					switch( $top_bar_left ){
						case 'address':
							get_template_part( 'templates-part/header/top-bar-address' );
						break;

						case 'contact_info':
							get_template_part( 'templates-part/header/top-bar-contact' );
						break;

						case 'menu_bar':
							get_template_part( 'templates-part/header/top-bar-menu' );
						break;

						case 'slogan':
							get_template_part( 'templates-part/header/top-bar-slogan' );
						break;

						case 'social_icons':
							get_template_part( 'templates-part/header/top-bar-social' );
						break;

						case 'address_contact_info':
							get_template_part( 'templates-part/header/top-bar-address-contact' );
						break;
					}
				} ?>
				</div>
				<div class="pull-right">
				<?php if( $top_bar_right != 'none' ){
					
					switch( $top_bar_right ){
						case 'address':
							get_template_part( 'templates-part/header/top-bar-address' );
						break;

						case 'contact_info':
							get_template_part( 'templates-part/header/top-bar-contact' );
						break;

						case 'menu_bar':
							get_template_part( 'templates-part/header/top-bar-menu' );
						break;

						case 'slogan':
							get_template_part( 'templates-part/header/top-bar-slogan' );
						break;

						case 'social_icons':
							get_template_part( 'templates-part/header/top-bar-social' );
						break;

						case 'address_contact_info':
							get_template_part( 'templates-part/header/top-bar-address-contact' );
						break;			
					}
				} ?>
				</div>
			</div>
		</div> <!-- container -->
	</div><?php
} ?>