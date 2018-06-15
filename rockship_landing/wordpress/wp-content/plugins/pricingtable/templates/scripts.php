<?php

/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins
*/

if ( ! defined('ABSPATH')) exit;  // if direct access	



?>

<script>

jQuery(document).ready(function($){

    <?php
    if($mobile_enable_slider=='yes'):

        ?>
        if(window.innerWidth < 576) {

            $('.pricingtable-<?php echo $post_id; ?>').addClass('owl-carousel');



            $(".pricingtable-<?php echo $post_id; ?>").owlCarousel({

                items : 1,
                navText : ["",""],
                autoplay: false,
                loop: false,
                autoHeight : true,
                nav : true,
                dots : true,
            })

        }
        <?php

    endif;
    ?>



})

    </script>



