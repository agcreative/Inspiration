<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="copyright" content="Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, All Rights Reserved" />
	<meta name="rating" content="GENERAL" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<?php wp_deregister_script('jquery');wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/supersized.core.3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js?2"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
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
</head>
<body <?php body_class("page"); ?>>
	<div id="header">
		<?php wp_nav_menu(array('theme_location' => 'top_nav', 'container' => '', 'menu_class' => 'menu-nav')); ?>
		<a href="<?php bloginfo('url'); ?>/" id="logo">Inspiration Furniture</a>
	</div>
	<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<!-- main content -->
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php if (is_page('join-our-mailing-list')) : ?>
							<!-- BEGIN: Constant Contact Basic Opt-in Email List Form -->
							<div align="center">
								<table border="0" cellspacing="0" cellpadding="3">
									<tr>
										<td align="center" style="font-weight: bold; font-family:Arial; font-size:12px; color:#000000;">Join Our Mailing List</td>
									</tr>
									<tr>
										<td align="center">
											<form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:2;">
												<input type="hidden" name="llr" value="vsefsxdab">
												<input type="hidden" name="m" value="1103523648085">
												<input type="hidden" name="p" value="oi">
												<font style="font-weight: normal; font-family:Arial; font-size:12px; color:#000000;">Email:</font> <input type="text" name="ea" size="20" value="" style="font-size:10pt; border:1px solid #999999;">
												<input type="submit" name="go" value="Go" class="submit" style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif; font-size:10pt;">
											</form>
										</td>
									</tr>
								</table>
							</div>
							<!-- END: Constant Contact Basic Opt-in Email List Form -->
							<!-- BEGIN: SafeSubscribe -->
							<div align="center" style="padding-top:5px;">
								<img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/>
							</div>
							<!-- END: SafeSubscribe -->
						<?php elseif (is_page('contact')) : ?>
							<div id="map_canvas" style="width:770px;height:370px;overflow:hidden;">
								<iframe width="770" height="370" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1275%2BWest%2B6th%2BAvenue%2Bvancouver%2C%2Bbc%2C%2Bv6H%2B1A6@49.266178,-123.132164&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe>
								<br>
								<table width="770" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"><small><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1275%2BWest%2B6th%2BAvenue%2Bvancouver%2C%2Bbc%2C%2Bv6H%2B1A6@49.266178,-123.132164&ie=UTF8&z=12&t=m&iwloc=near">View Larger Map</a></small></td><td align="right"><small><a href="http://www.embedgooglemap.com">embed google map</a></small></td></tr></table>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; else : ?>
					<div <?php post_class() ?>>
						<h2 class="center">Not Found</h2>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					</div>
				<?php endif; ?>
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