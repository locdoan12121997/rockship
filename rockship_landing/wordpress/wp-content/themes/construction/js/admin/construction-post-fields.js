jQuery(document).ready(function(jQuery){

    if( jQuery('#post-formats-select input:radio').length > 0 ){
        var post_format_id = jQuery('#post-formats-select input:radio:checked').attr('id').replace("post","construction");

        function show_hide_post_format_field() {

            jQuery('#normal-sortables>[id*="construction-format-"]').each(function(){

             	if(jQuery(this).attr('id').replace("construction","post")===jQuery('#post-formats-select input:radio:checked').attr('id')){
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            });    
        }

        function post_setting(){

            var sidebar_settings = jQuery('#normal-sortables div#sidebar_show input[name=sidebar_stat]:radio:checked');

            var author_settings = jQuery('#normal-sortables div#sidebar_show div.author_detail');

            if( sidebar_settings.val() == 0 ){
                author_settings.show();
            } else {
                author_settings.hide();
            }
        }

        jQuery('#' + post_format_id).show();

        post_setting();

        jQuery('#post-formats-select input').change(show_hide_post_format_field);

        jQuery('#normal-sortables div#sidebar_show input[name=sidebar_stat]').on('change',post_setting);

        var video_type = jQuery('.rwmb-input #video_type option:selected').val();
        
        if( video_type == 'youtube' || video_type == 'vimeo' ){
            jQuery( '.class_video_image, .class_video_webm_url, .class_video_mp4_url, .class_video_ogv_url ').hide();
            jQuery( '.class_video_id ').show();
        } else {
            jQuery( '.class_video_id ').hide();
            jQuery( '.class_video_image, .class_video_webm_url, .class_video_mp4_url, .class_video_ogv_url ').show();
        }

        jQuery('.rwmb-input #video_type').change( function(){
            var video_type = jQuery( '.rwmb-input #video_type option:selected' ).val();
            if( video_type == 'youtube' || video_type == 'vimeo' ){
                jQuery( '.class_video_image, .class_video_webm_url, .class_video_mp4_url, .class_video_ogv_url ').hide();
                jQuery( '.class_video_id ').fadeIn( 'slow' );
            } else {
                jQuery( '.class_video_id ').hide();
                jQuery( '.class_video_image, .class_video_webm_url, .class_video_mp4_url, .class_video_ogv_url ').fadeIn( 'slow' );
            }
        });
    }
});