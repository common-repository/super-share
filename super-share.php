<?php

/*
Plugin Name: Super Share
Plugin URI: http://masterblogster.com/plugins/super-share-wordpress-plugin/
Description: Super Share wordpress social plugin by MasterBlogster shows the social sharing buttons in a popup box only when reader reaches the end of the article. It also contains a Feedburner subscription form.
Author: Shrinivas Naik
Version: 1.1
Author URI: http://www.masterblogster.com
*/

// Hook will fire upon activation - we are using it to set default option values
register_activation_hook( __FILE__, 'mb_supershare_activate_plugin' );

// Add options and populate default values on first run
function mb_supershare_activate_plugin() {

	// populate plugin options array
	$mbsupershare_settings = array(
		'showfacebook'		=> '1',
		'showgoogleplus'	=> '1',
		'showtwitter'		=> '1',
		'showlinkedinshare'	=> '1',
		'showstumble'		=> '1',
		'shareboxcaption'	=> 'Love This Article? Spread It.'
		);

	// create field in WP_options to store all plugin data in one field
	add_option( 'mbsupershare_settings', $mbsupershare_settings );
}

//Retrieve plugin settings from the options table
$mb_supershare_options=get_option('mbsupershare_settings');

// Add plugin options page
include(plugin_dir_path( __FILE__ ) . 'mb_supershare_options.php');

/* ----------------------------------------------------------------------------------------------*/
/*  Main plugin code */
/* ----------------------------------------------------------------------------------------------*/
function mb_super_share_code()
{
	global $mb_supershare_options;
	if (is_single($post)){
?>
<div class="mb_supershare_holder">
<div id="openModal" class="mb_supershare_modalDialog">
	<div style="background:url(<?php echo plugins_url('img/struckaxiom.png', __FILE__ )?>) repeat;">
		<div class="mb_supershare_ribbon"><div class="mb_supershare_ribbon-stitches-top"></div><strong class="mb_supershare_ribbon-content"><span style="font-size: 24px; line-height: 2;">
		<?php
		if($mb_supershare_options['shareboxcaption']=="")
			{
			echo "Love This Article? Spread It.";
			} else {
			echo $mb_supershare_options['shareboxcaption'];
			} 
		?>
		</span></strong><div class="mb_supershare_ribbon-stitches-bottom"></div></div>
		<div class="mb_supershare_close">X</div>
		
		<?php 
		include(plugin_dir_path( __FILE__ ) . 'socialmedia_icons.php');	
		if($mb_supershare_options['feedburnerid']<>""){
			include(plugin_dir_path( __FILE__ ) . 'feedburner_form.php');
		}
		//add a credit link if user is generous
		if($mb_supershare_options['showbacklink']=="1"){
		?>
            <div style="font-size:xx-small; margin: 15px 0 0 15px;"><a href="http://masterblogster.com" target="_blank">Plugin by Master Blogster</a></div>
            <?php
		}
		?>
	</div> <!--DIV-->
</div> <!--modalDialog-->
</div> <!--mb_supershare_holder-->

<script>
	jQuery(document).ready(function($) {
		$is_closed="no";
		
		jQuery(document).scroll(function() {
		
		<?php
		if($mb_supershare_options['showonload']=="1")
		{?>
			$afterpost=0;
			
		<?php } else { ?>
		
				if(jQuery('article').length){
					//For typical wordpress templates
					$afterpost = jQuery("article").position().top + jQuery("article").height()-(jQuery("article").height()/3);
					
				} else {
					//For Thesis framework
					$afterpost = jQuery(".content").position().top + jQuery(".post_box").height()-(jQuery(".post_box").height()/3);
				}
		<?php } ?>
		
		if(jQuery(window).scrollTop() >= $afterpost && $is_closed=="no"){
			jQuery(".mb_supershare_modalDialog").css({"display":"block"});
			jQuery(".mb_supershare_modalDialog").animate({opacity:"1"},1000);
		} else{
			jQuery(".mb_supershare_modalDialog").css({"display":"none"});	
		}
		});
		
		jQuery(".mb_supershare_close").bind("click", function() {
			jQuery(".mb_supershare_modalDialog").fadeOut("slow");
			$is_closed="yes";
			setTimeout(function() {
			jQuery(".mb_supershare_modalDialog").css({"display":"none"});
			}, 2000);
		});
	});
</script>
 
    <?php
	}
}

add_action('wp_footer','mb_super_share_code');
add_action('wp_enqueue_scripts', 'load_jquery_css_for_mb_super_share');
add_action('admin_init', 'load_jquery_css_for_mb_super_share_for_admin');

function load_jquery_css_for_mb_super_share() {
    wp_enqueue_script('jquery');
	wp_register_style( 'mb_supershare_css', plugins_url('css/supershare_css.css', __FILE__) );
	wp_enqueue_style( 'mb_supershare_css' );
}

function load_jquery_css_for_mb_super_share_for_admin() {
	if(is_admin()){
		wp_enqueue_style( 'mb_supershare_admin_css', plugins_url('css/supershare_css.css', __FILE__) );
		wp_enqueue_script('jquery');
		wp_enqueue_script('mb_supershare_scripts',plugins_url('adminjs.js',__FILE__), array('jquery'));
	}
}

?>