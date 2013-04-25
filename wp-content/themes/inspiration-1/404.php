<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, All Rights Reserved" />
	<meta name="rating" content="GENERAL" />
<a href="https://plus.google.com/115755639774251488544" rel="publisher"></a>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/supersized.core.3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js?4"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/if.js?4"></script>
<script type="text/javascript">
/*
 * 	MoFuse Premium API
 *	Mobile Detect & Redirect
*/
var mfp_url='http://inspirationfurniture.prohost.mobi';
var mfp_host_name=document.location.hostname;var mfp_request_uri=document.location.pathname;var mfp_no_mobile=location.search;var mfp_cookie=document.cookie;function mf_detect(){var mfp_ua=navigator.userAgent.toLowerCase();var mfp_devices=['vnd.wap.xhtml+xml','sony','symbian','nokia','samsung','mobile','windows ce','epoc','opera mini','nitro','j2me','midp-','cldc-','netfront','mot','up.browser','up.link','audiovox','blackberry','ericsson','panasonic','philips','sanyo','sharp','sie-','portalmmm','blazer','avantgo','danger','palm','series60','palmsource','pocketpc','smartphone','rover','ipaq','au-mic','alcatel','ericy','vodafone','wap1','wap2','teleca','playstation','lge','lg-','iphone','android','htc','dream','webos','bolt','nintendo'];for(var i in mfp_devices){if(mfp_ua.indexOf(mfp_devices[i])!=-1){return true}}}if(mfp_no_mobile!='?nomobile=1'&&mfp_cookie.indexOf('mfp_no_mobile')==-1){mfp_is_mobile=mf_detect();if(mfp_is_mobile){window.location=mfp_url+"?h="+mfp_host_name+"&r="+mfp_request_uri}}else{if(mfp_cookie.indexOf('mfp_no_mobile')!=-1){}else{mfp_cookie_expires=new Date();mfp_cookie_expires.setTime(mfp_cookie_expires.getTime()+1000*60*60*24);document.cookie="mfp_no_mobile=1; expires="+mfp_cookie_expires.toGMTString()+"; path=/;"}}
</script>
<noscript>
<meta http-equiv="refresh" content="0; URL=http://inspirationfurniture.prohost.mobi">
</noscript>

<style type="text/css">
.error {
 padding: 0 0 0 50px;
}
  
 .error h1 {
   font-size: 26px; 
  margin: 0 0 0.5em 0;
}

.error p {
font-weight: bold;	
}

.error p,
.error ul li {
 	font-size: 13px !important; 
	line-height: 1.3em;
}

.error ul {
 list-style: disc;
  margin: 5px 0 1.3em 2em;
}
</style>

</head>
<body <?php body_class("splash"); ?>>
	<div id="header">
		<?php wp_nav_menu(array('theme_location' => 'top_nav', 'container' => '', 'menu_class' => 'menu-nav')); ?>
		<a href="<?php bloginfo('url'); ?>/" id="logo">Inspiration Furniture</a>
	</div>
	<div id="wrap" class="clearfix">
		<div id="columns" class="clearfix">
			<div id="content" class="homebody">
				<div id="masthead">
					<?php get_template_part('masthead', 'slideshow'); ?>
				</div>
                
     			<div class="error">
                <h1>Not Found</h1>
                
                <p>The Page you are looking for cannot be found. The most likely causes could be:</p>
                <ul>
                <li>There may be a typing error in the website address</li>
                <li>You may have clicked a link that is out of date, or it may have been removed</li>
                </ul>
                
                <p>What you can try:</p>
                
              	   <ul>
                <li>Re-type the address</li>
                <li><a href="javascript: history.go(-1)">Go back to previous page</a></li>
                <li><a href="<?php bloginfo('home'); ?>">Go back to home page</a></li>
       </ul>
       </div>
        
                </ul>
				
                
                
				
                
                
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div id="footer">copyright &copy; 2011 Inspiration Furniture</div>
	<?php wp_footer(); ?>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26787774-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>