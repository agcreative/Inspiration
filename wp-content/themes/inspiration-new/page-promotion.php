<?php get_header(); ?>
	<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<!-- main content -->
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
                                                
					</div>
				<?php endwhile; else : ?>
					<div <?php post_class() ?>>
						<h2 class="center">Not Found</h2>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					</div>
				<?php endif; ?>
                
                
                
                <?
                
                
                        $args = array(
                	    'posts_per_page'     => 3, 
                		'offset'          => 0,
                		'orderby'         => 'DESC',
                		'post_type'       => 'promotion',
                		'paged' => $paged,
                		'post_status'     => 'publish' );	
                       // The Query
                        query_posts( $args );
                     
                        // The Loop
                        while ( have_posts() ) : the_post();
                          
                               echo "<div class='archive_list_box'>";
                                  
                                     echo "<div class='thumb'>";
                                          echo get_the_post_thumbnail($post->ID, 'mainBlog_thumb');
                                     echo "</div>";   
                                     echo "<div class='description'>";  
                                          
                                          echo "<a href='".get_permalink()."'>";
                                     
                                          echo "<h2>".$post->post_title."</h2></a>";
                                          echo mysql2date('M j Y', $post->post_date);
                                                    the_excerpt();          
                                          echo "<p align='right'><a href='".get_permalink()."'>Read More</a></p>";
                                      echo "</div>";
                                 echo "</div>" ;  
                                 
                                 
                        endwhile;
                       
                
                ?>
                <br />
            <br />
            <div id="pagination" align="right" >
            
            <?php wp_pagenavi(); ?>
            
            </div>
                
                
                
                
                
                
                
			</div>
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>