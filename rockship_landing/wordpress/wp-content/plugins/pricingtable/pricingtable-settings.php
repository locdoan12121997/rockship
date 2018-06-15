<?php	
/*
Plugin Name: PricingTable
Plugin URI: http://pickplugins.com/items/pricing-table/
Description: Long waited pricing table plugin for WordPress published to display pricing grid on your WordPress site.
Version: 1.12.2
Author: pickplugins
Author URI: http://pickplugins.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;  // if direct access	



	if(empty($_POST['pricingtable_hidden']))
		{
			$pricingtable_ribbons = get_option( 'pricingtable_ribbons' );
			
			
		}
	else
		{
					
				
		if($_POST['pricingtable_hidden'] == 'Y') {
			//Form data sent

			$pricingtable_ribbons = stripslashes_deep($_POST['pricingtable_ribbons']);
			update_option('pricingtable_ribbons', $pricingtable_ribbons);


			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p></div>

			<?php
		} 
	}
	

	
	
	
	
	
?>





<div class="wrap">

	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".__(pricingtable_plugin_name.' Settings')."</h2>";?>
		<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="pricingtable_hidden" value="Y">
        <?php settings_fields( 'pricingtable_plugin_options' );
				do_settings_sections( 'pricingtable_plugin_options' );
			
		?>
        
        
	<div class="para-settings">
        <ul class="tab-nav"> 
            <li nav="1" class="nav1 active">Help</li>

        </ul> <!-- tab-nav end -->
    
		<ul class="box">
            <li style="display: block;" class="box1 tab-box active">



                <div class="option-box">
                    <p class="option-title">Need Help ?</p>
                    <p class="option-info">Feel free to contact with any issue for this plugin, Ask any question via forum <a href="<?php echo pricingtable_qa_url; ?>"><?php echo pricingtable_qa_url; ?></a> <strong style="color:#139b50;">(free)</strong><br />

			            <?php

			            if(pricingtable_customer_type=="free")
			            {

				            echo 'You are using <strong> '.pricingtable_customer_type.' version  '.pricingtable_version.'</strong> of <strong>'.pricingtable_plugin_name.'</strong>, To get more feature you could try our premium version. ';

				            echo '<br /><a href="'.pricingtable_pro_url.'">'.pricingtable_pro_url.'</a>';

			            }
			            else
			            {

				            echo 'Thanks for using <strong> premium version  '.pricingtable_version.'</strong> of <strong>'.pricingtable_plugin_name.'</strong> ';


			            }

			            ?>


                    </p>

                </div>
                <div class="option-box">
                    <p class="option-title">Submit Reviews...</p>
                    <p class="option-info">We are working hard to build some awesome plugins for you and spend thousand hour for plugins. we wish your three(3) minute by submitting five star reviews at wordpress.org. if you have any issue please submit at forum.</p>
                    <img class="pricingtable-pro-pricing" src="<?php echo pricingtable_plugin_url."css/five-star.png";?>" /><br />
                    <a target="_blank" href="<?php echo pricingtable_wp_reviews; ?>">
			            <?php echo pricingtable_wp_reviews; ?>
                    </a>



                </div>






                <div class="option-box">
                    <p class="option-title"></p>
                    <p class="option-info"></p>
                 
                </div>

            </li>
            <li style="display: none;" class="box2 tab-box"></li>

        </ul>
    
    
    
    </div>    





		</form>


</div>
