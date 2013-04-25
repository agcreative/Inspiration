<?php get_header(); ?>
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
							<div id="map_canvas" style="width:100%;height:370px;overflow:hidden;">
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
<?php get_footer(); ?>