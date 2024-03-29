<?php get_header(); ?>
	<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
			<?php if (!empty($parentTerm->name)) { echo '<h1>' . $parentTerm->name . '</h1>'; } ?><!-- top level furniture type -->
			<?php if (!empty($childTerm->name)) { echo '<h2>' . $childTerm->name . '</h2>'; } ?><!-- second level furniture type, if required -->
		
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        
                     
                        <h2><a href="<?php bloginfo('url'); ?>/<?=$post->post_type?>"> Trending Topics List</a></h2>
                        
						<h3><?php the_title(); ?></h3>
                        
                      
						<?php the_content(); ?>
                      
                        
					</div>
				<?php endwhile; else : ?>
					<h2 class="center">Product Not Found</h2>
					<p><?php _e('Sorry, this product was not found in the database.'); ?></p>
				<?php endif; ?>
			</div>
	
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>