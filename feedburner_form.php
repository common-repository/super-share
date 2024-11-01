<div class="feedburner_form_css">

<span style="font-size: medium;color:#1599B3; margin-top:10px; font-family:'Comic Sans MS', cursive">Hey.. Wanna Subscribe?</span>
	
    <div style="margin-top:10px">
	<form target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $mb_supershare_options['feedburnerid']?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post" action="http://feedburner.google.com/fb/a/mailverify">
		<input type="hidden" value="<?php echo $mb_supershare_options['feedburnerid']?>" name="uri">
		<input type="hidden" value="en_US" name="loc">
		<input type="text" value="Enter your email..." class="rounded" onfocus="if (this.value == &quot;Enter your email...&quot;) {this.value = &quot;&quot;}" onblur="if (this.value == &quot;&quot;) {this.value = &quot;Enter your email...&quot;;}" name="email">
		<input type="submit" value="Signup Now!" title="" class="emailButton rounded"><br/>
	</form>
    </div>
</div>