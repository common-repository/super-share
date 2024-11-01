
<!-- facebook need this script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="social_icons_style" style="width:320px; margin-left:25px; margin-top:20px; margin 0 auto; overflow:visible">
    <ul>
    <?php if($mb_supershare_options['showfacebook']=='1')

    {
        function current_page_url() {
        $pageURL = 'http';
        if( isset($_SERVER["HTTPS"]) ) {
            if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }
    
        ?>
    <li style="overflow:hidden; width: 49px;">
    <!-- facebook like button -->
    <div class="fb-like" data-href="<?php echo current_page_url(); ?>" data-width="450" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="box_count" data-action="like" data-show-faces="false" data-send="false"></div>
    </li>
    <?php } ?>
    
    
    <?php if($mb_supershare_options['showgoogleplus']=='1')
    {?>
    <li> 
    <!-- G+ button -->
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="tall" data-href=""></div>
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    </li>
    <?php } ?>
    
    
    <?php if($mb_supershare_options['showtwitter']=='1')
    {?>
    <li>
     <!-- Twitter button -->
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-via="<?php echo $mb_supershare_options['twittervia'] ?>" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </li>
    <?php } ?>
    
    
    <?php if($mb_supershare_options['showlinkedinshare']=='1')
    {?>
    <li> 
     <!-- Linkedin button -->
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    <script type="IN/Share" data-url="" data-counter="top"></script>
    </li> 
    <?php } ?>
    
    
    <?php if($mb_supershare_options['showstumble']=='1')
    {?>
    <li> 
     <!-- StumbleUpon  button -->
    <!-- Place this tag where you want the su badge to render -->
    <su:badge layout="5" location="">
    </su:badge>
    <!-- Place this snippet wherever appropriate -->
    <script type="text/javascript">
      (function() {
        var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
        li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
      })();
    </script>
    
    </li>
    <?php } ?>
    
    </ul> 
</div>