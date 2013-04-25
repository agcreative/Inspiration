	
	<div id="sidebar">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Sidebar")) : ?>
			<!-- Default non-widget column info -->
			<div class="category">
				<h3>Living</h3>
				<ul>
					<li><a href="#">sofas</a></li>
					<li><a href="#">chairs</a></li>
					<li><a href="#">occasional tables</a></li>
					<li><a href="#">audio &amp; video storage</a></li>
				</ul>
			</div>
		<?php endif; ?>
		<div class="info">
			<div id="phone_number">604-730-1275</div>
			<div class="social-media">
				<a href="http://twitter.com/inspirationbc" id="twitter" target="_blank">Follow Inspiration Furniture on Twitter!</a>
				<a href="http://www.facebook.com/pages/Inspiration-Furniture/131165966939261" id="facebook" target="_blank">Like Inspiration Furniture on Facebook!</a>
				<a href="http://www.yelp.ca/biz/inspiration-furniture-vancouver" id="yelp" target="_blank">Find Inspiration Furniture on Yelp!</a>
			</div>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Sidebar Info Block")) : ?>
				<!-- Default non-widget column info -->
				<ul>
				<li><a href="#">FAQS</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="#">DELIVERY</a></li>
				<li><a href="#">STORE POLICY</a></li>
			</ul>
			<?php endif; ?>
		</div>
	</div>