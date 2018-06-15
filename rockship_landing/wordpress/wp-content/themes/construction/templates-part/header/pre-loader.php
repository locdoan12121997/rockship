<div id="pre-loader">
  <div class="loader-holder">
      <div class="frame">
          <?php global $construction_options;
          if( !empty( $construction_options ) ){ ?>
          	<img src="<?php echo esc_url( $construction_options['pre_loader_img']['url'] ); ?>" alt="<?php esc_html_e( 'Pre Loader', 'construction' ); ?>"/><?php
          } ?>
      </div>
  </div>
</div>