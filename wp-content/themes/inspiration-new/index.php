<?php get_header(); ?>
	<div id="wrap" class="clearfix">
		<div id="columns" class="clearfix">
			<div id="content">
				<div id="masthead">
					<?php get_template_part('masthead', 'slideshow'); ?>
				</div>
				<div class="box box-left">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Frontpage Left Box")) : ?>
						<!-- Default non-widget column info -->
							<h2>NEW AT INSPIRATION</h2>
							<p>Duis vel augue vel massa placerat interdum. Integer at mauris id nunc tincidunt porttitor. Quisque mollis dolor sit amet urna vulputate eu vehicula massa tristique. In volutpat odio in tellus mollis dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sit amet nisi</p>
							<p><a href="#">view</a></p>
							<img src="<?php bloginfo('template_directory'); ?>/images/img-splash.jpg" alt="" />
					<?php endif; ?>
				</div>
				<div class="box box-right">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Frontpage Right Box")) : ?>
						<!-- Default non-widget column info -->
							<img src="<?php bloginfo('template_directory'); ?>/images/img-current-promotion.jpg" alt="" />
							<h2>CURRENT PROMOTIONS<br /><a href="#">view</a></h2>
							<p>Because of the way we spend our time, the media room is literally the new family room. We�ve created a collection of media solutions that cater to a range of variables so you're pretty much guaranteed to find one that works for your lifestyle.</p>
					<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>