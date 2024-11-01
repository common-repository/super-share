jQuery(document).ready(function(){
jQuery('#mb_supershare_formstyle .handlediv,.hndle').click(function(){
		jQuery(this).parent().find('.inside').slideToggle("slow");
	});
});