<?php

	$taxonomyBase = 'furniture';
	
	$postTerms = get_the_terms($post->ID, 'furniture-type');
	foreach ($postTerms as $key=>$term)
	{
		if ($term->parent == 0)
		{
			$parentTerm = $term;
		}
		else
		{
			$childTerm = $term;
		}
	}
	
	$viewAllPermalink = get_bloginfo('url') . '/' . $taxonomyBase . '/' . $parentTerm->slug . '/' . $childTerm->slug . '/';
	
?> 
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
<body <?php body_class("product"); ?>>
	<div id="header">
		<?php wp_nav_menu(array('theme_location' => 'top_nav', 'container' => '', 'menu_class' => 'menu-nav')); ?>
		<a href="<?php bloginfo('url'); ?>/" id="logo">Inspiration Furniture</a>
	</div>
	<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
			<?php if (!empty($parentTerm->name)) { echo '<h1>' . $parentTerm->name . '</h1>'; } ?><!-- top level furniture type -->
			<?php if (!empty($childTerm->name)) { echo '<h2>' . $childTerm->name . '</h2>'; } ?><!-- second level furniture type, if required -->
			<div id="left_sidebar">
				<ul>
					<?php
					
						// list all products in this category
						$args = array(
							'tax_query' => array(
								array(
									'taxonomy' => 'furniture-type',
									'field' => 'slug',
									'terms' => $childTerm->slug
								)
							),
							'posts_per_page' => 30,
						);
						
						$productQuery = new WP_Query( $args );
						
						if ( $productQuery->have_posts() ) :
							while ( $productQuery->have_posts() ) : $productQuery->the_post();
								echo '<li><a href="';
								// construct permalink
								the_permalink();
								echo '">';
								the_title();
								echo '</a></li>';
							endwhile;
						else :
							echo '<li>&nbsp;</li>';
						endif;
							
						// Reset Post Data
						wp_reset_postdata();
					
					?>
				</ul>
				<p><a href="<?php echo $viewAllPermalink; ?>">view all</a></p>
			</div>
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h3><?php the_title(); ?></h3>
						<?php if ($productNumber = get_field('product_number')) { echo '<h4>(' . $productNumber . ')</h4>'; } ?>
						<?php the_content(); ?>
						<div id="mainProductImg">
							<?php
								for ($z = 1; $z <= 5; $z++)
								{
									if ($productImage[$z] = get_field('product_image_' . $z))
									{
										$imgData = wp_get_attachment_image_src($productImage[$z], 'full'); 
										echo '<img ';
										if ($z == 1)
										{
											echo 'style="display:block;" ';
										}
										echo 'id="product_image_' . $z . '" src="' . $imgData[0] . '" alt="Product &raquo; ' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
									}
								}
							?>
						</div>
					</div>
				<?php endwhile; else : ?>
					<h2 class="center">Product Not Found</h2>
					<p><?php _e('Sorry, this product was not found in the database.'); ?></p>
				<?php endif; ?>
			</div>
			<ul id="thumbnails">
				<?php 
					$thumbnailList = '';
					for ($x = 1; $x <= 5; $x++)
					{
						if ($productImage[$x] = get_field('product_image_' . $x))
						{
							$imgData = wp_get_attachment_image_src($productImage[$x], 'thumbnail'); 
							$thumbnailList .= '<li><a class="swapProductImg" href="#" rel="product_image_' . $x . '"><img src="' . $imgData[0] . '" alt="Product &raquo; ' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" /></a></li>';
						}
					}
					if (empty($thumbnailList)) { $thumbnailList = '<li>&nbsp;</li>'; }
					echo $thumbnailList;
				?>
			</ul>
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