<?php 
function settings_page_for_super_share(){
global $mb_supershare_options;
	?> 
	<div class="wrap">
   		<?php screen_icon();?>
        <h2>Super Share Settings</h2>
		<?php
		//Add default banner of MasterBlogster
		include(plugin_dir_path( __FILE__ ) . 'snacks/mb_default_banner.php');
		?>
		<div id="mb_supershare_formstyle" class="postbox">
		<div class="handlediv" title="Click to toggle"><br/></div>
		<h3 class="hndle"><span>General Settings</span></h3>
			<div class="inside">
				<form method="post" action="options.php">      
				<?php settings_fields('mb_supershare_group'); ?>
				
				<h4>Which social sharing buttons do you want to display?</h4>
				<fieldset>
				 <p>
					 
					 <input type = "checkbox" 
							id = "mbsupershare_settings[showfacebook]" 
							name= "mbsupershare_settings[showfacebook]" 
							value = "1" <?php checked('1',$mb_supershare_options['showfacebook']) ?> />
					 <label for = "mbsupershare_settings[showfacebook]">Facebook</label>
					 &emsp;
                     
					 <input type = "checkbox"
							id = "mbsupershare_settings[showgoogleplus]"
							name= "mbsupershare_settings[showgoogleplus]"
							value = "1" <?php checked('1',$mb_supershare_options['showgoogleplus']) ?> />
					 <label for = "mbsupershare_settings[showgoogleplus]">Google+</label>
					 &emsp;
					 <input type = "checkbox"
							id = "mbsupershare_settings[showtwitter]"
							name= "mbsupershare_settings[showtwitter]"
							value = "1" <?php checked('1',$mb_supershare_options['showtwitter']) ?> />
					 <label for = "mbsupershare_settings[showtwitter]">Twitter</label>
					 &emsp;
					 <input type = "checkbox"
							id = "mbsupershare_settings[showlinkedinshare]"
							name= "mbsupershare_settings[showlinkedinshare]"
							value = "1" <?php checked('1',$mb_supershare_options['showlinkedinshare']) ?> />
					 <label for = "mbsupershare_settings[showlinkedinshare]">LinkedinShare</label>
					 &emsp;
					 <input type = "checkbox"
							id = "mbsupershare_settings[showstumble]"
							name= "mbsupershare_settings[showstumble]"
							value = "1" <?php checked('1',$mb_supershare_options['showstumble']) ?> />
					 <label for = "mbsupershare_settings[showstumble]">StumbleUpon</label>
				 </p>
			   </fieldset>

				<h4>Caption for the share box</h4>
				<label for = "mbsupershare_settings[shareboxcaption]">Specify caption</label>
				<input type = "text"
							id = "mbsupershare_settings[shareboxcaption]"
							name= "mbsupershare_settings[shareboxcaption]"
							value = "<?php echo $mb_supershare_options['shareboxcaption'] ?>" />
				<br>
				
				<h4>Specify your twitter user name to add in "via@user"</h4>
				<label for = "mbsupershare_settings[twittervia]">Twitter via</label>
				<input type = "text"
							id = "mbsupershare_settings[twittervia]"
							name= "mbsupershare_settings[twittervia]"
							value = "<?php echo $mb_supershare_options['twittervia'] ?>" />
				<br>
				
				<h4>Do you want to show share box on scroll or at the end of the post?</h4>
				<input type = "checkbox"
							id = "mbsupershare_settings[showonload]"
							name= "mbsupershare_settings[showonload]"
							value = "1" <?php checked('1',$mb_supershare_options['showonload']) ?> />
					 <label for = "mbsupershare_settings[showonload]">Show share box on scroll</label>
				
				<h4>What is your feedburner ID?</h4>
				<label for = "mbsupershare_settings[feedburnerid]">FeedBurner ID</label>
				<input type = "text"
							id = "mbsupershare_settings[feedburnerid]"
							name= "mbsupershare_settings[feedburnerid]"
							value = "<?php echo $mb_supershare_options['feedburnerid'] ?>" />
				<br/>
				<span style="font-size:small; color:#999">feedburner form will be invisible if left blank. <a href="http://masterblogster.com/setup-feedburner-for-wordpress/" target="_blank"> How to get feedburner id?</a></span>
				<br>
				
				<h4>Want to show some love by a backlink? <img alt="smile emoticon" src="../wp-includes/images/smilies/icon_wink.gif"></h4>
				<input type = "checkbox"
							id = "mbsupershare_settings[showbacklink]"
							name= "mbsupershare_settings[showbacklink]"
							value = "1" <?php checked('1',$mb_supershare_options['showbacklink']) ?> />
					 <label for = "mbsupershare_settings[showbacklink]">Yeah.. Keep a backlink on super share box!</label>
					 
				<p class="submit">
				<input name="submit" type="submit" class="button-primary" value="Save Changes"/>
				</p>
				</form>
			</div> <!--/inside-->
		</div> <!--/postbox-->
		
		<!--Add Facebook like box-->
		<div style="width:300px; float:left; margin: 20px 0 0 15px">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			
			<div class="fb-like-box" data-href="https://www.facebook.com/MasterBlogster" data-width="250" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
		</div>
		<!--/Add Facebook like box-->
    
	<div style="clear:both">- <a href="http://masterblogster.com" target="_blank">Premium WordPress Plugin By MasterBlogster</a></div>
    </div> <!--/wrap-->

<?php

}
add_action('admin_menu', 'add_mb_supershare_to_wp_setting_menu');
function add_mb_supershare_to_wp_setting_menu() {
    add_options_page('Super Share Settings', 'Super Share Settings', 'administrator', 'mb-supershare-settings', 'settings_page_for_super_share'); //page_title, menu_title, capability, menu_slug, function
}

function mb_supershare_register_settings(){
	register_setting('mb_supershare_group', 'mbsupershare_settings'); //group, option name
}
add_action('admin_init','mb_supershare_register_settings');
?>