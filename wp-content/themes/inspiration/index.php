<?php get_header(); ?>

	<div id="slider"></div>
	
	<div id="video"></div>
	
	<div id="trending">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		
		
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		
		</div>
		
		<?php endwhile; ?>
		
		
		
		<?php else : ?>
		
		<h2>Not Found</h2>
		
		<?php endif; ?>
	<div>
	
	<div id="promotions"></div>
	
	<div id="brandnew"></div>
		
	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>
