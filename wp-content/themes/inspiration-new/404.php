<?php get_header(); ?>
	<div id="wrap" class="clearfix">
		<div id="columns" class="clearfix">
			<div id="content" class="homebody">
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
<?php get_footer(); ?>