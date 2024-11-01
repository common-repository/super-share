<style>
.mb_default_banner_for_plugin_option_page{
	width:800px;
	height:80px;
	background-color:#CEF37E;
	padding:10px 5px 5px 10px;
	
	/*Radius*/
	border-radius: 10px 10px 10px 10px;
	-moz-border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px 10px 10px 10px;
	
	/*Shadow*/
	-webkit-box-shadow: 2px 2px 9px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 2px 2px 9px 0px rgba(0,0,0,0.75);
	box-shadow: 2px 2px 9px 0px rgba(0,0,0,0.75);
}
.mb_default_banner_caption{
	font-size:large;
}
</style>
<br>
<div class="mb_default_banner_for_plugin_option_page">
    <div style="width:380px; height: 70px; float:left; border-right:#78C938 solid">
        <span class="mb_default_banner_caption">Subscribe for Updates</span>
        <div style="margin-top:15px">
		<form target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=masterblogster', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post" action="http://feedburner.google.com/fb/a/mailverify">
    <input type="hidden" value="masterblogster" name="uri">
    <input type="hidden" value="en_US" name="loc">
    <input type="text" value="Enter your email..." onfocus="if (this.value == &quot;Enter your email...&quot;) {this.value = &quot;&quot;}" onblur="if (this.value == &quot;&quot;) {this.value = &quot;Enter your email...&quot;;}" name="email" size="40">
    <input type="submit" value="Submit" title="" class="emailButton"><br/>
		</form>
		</div>
    </div>
    
    <div style="width:380px; float:left; margin-left:15px">
        <span class="mb_default_banner_caption">Follow us on</span>
        <div style="margin-top:5px">
            <a href="https://www.facebook.com/MasterBlogster" target="_blank"><img src="<?php echo plugins_url('facebook.png', __FILE__ ) ?>" width="50"  /></a>
            <a href="https://twitter.com/MasterBlogster" target="_blank"><img src="<?php echo plugins_url('twitter.png', __FILE__ ) ?>" width="50" /></a>
        </div>
    </div>


</div>