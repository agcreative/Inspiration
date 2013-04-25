<?php

	$taxonomyBase = 'furniture';

	$thisTerm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	if ($thisTerm->parent != 0)	// this is not a parent taxonomy
	{
		$parentTerm = get_term_by( 'id', $thisTerm->parent, get_query_var( 'taxonomy' ) );
		$childTerm = $thisTerm;
		$topLevelPage = false;
		$bodyClasses = "ft-" . strtolower($parentTerm->slug) . " ft-" . strtolower($childTerm->slug);
	}
	else
	{
		$parentTerm = $thisTerm;
		$childTerm = '';
		$topLevelPage = true;
		$bodyClasses = "ft-" . strtolower($parentTerm->slug);
	}	
	
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
<body <?php body_class("products " . $bodyClasses); ?>>
	<div id="header">
		<?php wp_nav_menu(array('theme_location' => 'top_nav', 'container' => '', 'menu_class' => 'menu-nav')); ?>
		<a href="<?php bloginfo('url'); ?>/" id="logo">Inspiration Furniture</a>
	</div>
	<div id="wrap" class="clearfix">
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
	  <div id="columns" class="clearfix">
			<h2><?php echo $parentTerm->name; ?></h2><!-- top level furniture type -->
			<?php if (!empty($childTerm->name)) { echo '<h1>' . $childTerm->name . '</h1>'; } ?><!-- second level furniture type, if required -->
			<div id="left_sidebar">
				<ul>
					<?php 
					
						if ($topLevelPage) // parent page such as /living/
						{
							// list all child terms
							$args = array(
								'orderby'            => 'name',
								'child_of'			 => $parentTerm->term_id,
								'order'              => 'ASC',
								'hide_empty'		 => false,
								'hierarchical'       => true,
								'echo'               => 1,
								'taxonomy'           => get_query_var( 'taxonomy' )
							);
							$categories = get_categories( $args );
							foreach ($categories as $key=>$ft)
							{
								echo '<li><a href="' . get_bloginfo('url') . '/' . $taxonomyBase . '/' . $parentTerm->slug . '/' . $ft->slug . '/">' . $ft->name . '</a></li>';
							}
						}
						else // child page such as /living/sofas/
						{
							// list all products in this category
							$args = array(
								'tax_query' => array(
									array(
										'taxonomy' => get_query_var( 'taxonomy' ),
										'field' => 'slug',
										//'terms' => 'bob'
										'terms' => $childTerm->slug
									)
								),
								'posts_per_page' => 45,
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
						}
						
					?>
				</ul>
			</div>
			<div id="content">
				<?php if ($topLevelPage) : $tdCtr = 1; ?>
					<table>
					<?php global $query_string; query_posts( $query_string . '&posts_per_page=15' ); if (have_posts()) : ?>
						<?php while (have_posts()) : ?>
							<?php if ($tdCtr%3 == 1) : ?><tr><?php endif; ?>
							<?php the_post(); ?>
							<td>
								<a class="imgBox" href="<?php the_permalink(); ?>">
									<?php if (get_field('product_image_1')) : 
										$imgData = wp_get_attachment_image_src(get_field('product_image_1'), 'medium'); 
										echo '<img src="' . $imgData[0] . '" alt="' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
									?>
									<?php else : ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/placeholder-coming-soon.jpg" alt="" />
									<?php endif; ?>
								</a>
							</td>
							<?php if ($tdCtr%3 == 0) : ?></tr><?php endif; $tdCtr++; ?>
						<?php endwhile; ?>
						<?php 
							/* cleanup */ 
							$tdCtr--;
							if ($tdCtr%3 == 1) :
								echo '<td colspan="2">&nbsp;</td></tr>';
							elseif ($tdCtr%3 == 2) :
								echo '<td>&nbsp;</td></tr>';
							else : // ($tdCtr%3 == 0)
								//echo '<td colspan="3">tdCtr MOD 3 == 0</td></tr>';
							endif;
						?>
					<?php else : ?>
						<tr><td colspan="3">Sorry, no furniture has been added to this category.</td></tr>
					<?php endif; ?>
					</table>
				<?php else : $tdCtr = 1;?>
					<table>
					<?php global $query_string; query_posts( $query_string . '&posts_per_page=15' ); if (have_posts()) : ?>
						<?php while (have_posts()) : ?>
							<?php if ($tdCtr%3 == 1) : ?><tr><?php endif; ?>
							<?php the_post(); ?>
							<td>
								<a class="imgBox" href="<?php the_permalink(); ?>">
									<?php if (get_field('product_image_1')) : 
										$imgData = wp_get_attachment_image_src(get_field('product_image_1'), 'medium'); 
										echo '<img src="' . $imgData[0] . '" alt="' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
									?>
									<?php else : ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/placeholder-coming-soon.jpg" alt="" />
									<?php endif; ?>
								</a>
							</td>
							<?php if ($tdCtr%3 == 0) : ?></tr><?php endif; $tdCtr++; ?>
						<?php endwhile; ?>
						<?php 
							/* cleanup */ 
							$tdCtr--;
							if ($tdCtr%3 == 1) :
								echo '<td colspan="2">&nbsp;</td></tr>';
							elseif ($tdCtr%3 == 2) :
								echo '<td>&nbsp;</td></tr>';
							else : // ($tdCtr%3 == 0)
								//echo '<td colspan="3">tdCtr MOD 3 == 0</td></tr>';
							endif;
						?>
					<?php else : ?>
						<tr><td colspan="3">Sorry, no furniture has been added to this category.</td></tr>
					<?php endif; ?>
					</table>
					<?php 
					
						/*echo '<strong>' . get_query_var( 'taxonomy' ) . '</strong><br /><br />';
						echo '<strong>' . $childTerm->slug . '</strong><br />';*/
					?>
				<?php endif; ?>
			</div>
			<div id="pagination">
				<?php
					$big = 999999999;
					$pagination = paginate_links( array(
						'base' 			=> str_replace( $big, '%#%', get_pagenum_link( $big ) ),
						'format' 		=> '?paged=%#%',
						'current' 		=> max( 1, get_query_var('paged') ),
						'total' 		=> $wp_query->max_num_pages,
						'prev_next'    	=> false,
						'show_all'    	=> true,
						'type'			=> 'array',
					) );
					//echo $pagination;
					//echo str_replace('">', '">Page ', $pagination);
					
					//$regex = "#
					foreach ($pagination as $key=>$pagelink)
					{
						//echo 'Key (' . $key . ') &laquo; &raquo; Pagelink (' . $pagelink . ')<br />';
						//$link = str_replace('">', '">Page ', $pagelink);
						//$link = str_replace('<a', '<a target="_blank" ', $pagelink);
						//echo str_replace('>', '>Page ', $pagelink);
						//echo preg_replace('</?\w+\s+\[^>\]*>(.*)', 'Page $2', $pagelink);
						//echo preg_replace('
						//echo str_replace('&quot;>', '&quot;>Page ', $pagelink);
						//str_replace('chr(147)>', '">Page ', $pagelink);
						//echo '<code>' . $pagelink . '</code><br />';
						//echo $linkinfo[0] . 'Page ' . $linkinfo[1];
						//echo '<code>Count of linkinfo: ' . count($linkinfo) . '</code><br />';
						//echo $linkinfo[0] . 'Page ' . $linkinfo[1] . $linkinfo[2];
						/*foreach ($linkinfo as $key=>$lnk)
						{
							echo '<code>' . urlencode($lnk) . '</code><br />';
						}
						echo '<hr />';*/
						
						$linkinfo = explode('>', $pagelink);
						echo $linkinfo[0] . '>Page ' . $linkinfo[1] . '>' . $linkinfo[2];
						
						//echo str_replace('>', '>Page ', $pagelink, 1);
					}
				?>
			</div>
			<!--<ul id="pagination">
				<li class="current-page-item"><a href="#">Page 1</a></li>
				<li><a href="#">Page 2</a></li>
				<li><a href="#">Page 3</a></li>
				<li><a href="#">Page 4</a></li>
			</ul>-->
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