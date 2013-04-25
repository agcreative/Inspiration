<?php get_header(); ?>
	<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<!-- main content -->
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
                        <br />                        
					</div>
				<?php endwhile; else : ?>
					<div <?php post_class() ?>>
						<h2 class="center">Not Found</h2>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					</div>
				<?php endif; ?>
                
                                 

                <?
                    $args = array(
            	    'posts_per_page'     => 4, 
            		'offset'          => 0,
            		'orderby'         => 'DESC',
            		'post_type'       => 'video-gallery',
            		'paged' => $paged,
            		'post_status'     => 'publish' );	
                   // The Query
                    query_posts( $args );
                 
                    // The Loop
                    
                    echo "<div class='archive_list_box'>";
                    
                    while ( have_posts() ) : the_post();
                      
                          
                              
                                 echo "<div class='video_thumb' >";
                                 
                                       $videoUrl = get_post_meta($post->ID, 'video_url');
                                       $videoInfo = $videoUrl[0];
                                       //echo $videoInfo;
                                       ///http://youtu.be/SfLZiWOzXyw
                                       
                                       echo do_shortcode('[youtube_sc url='.$videoInfo.']');       
                                        
                                 echo "</div>";   
                                 
                                 /*
                                 echo "<div class='video_description' >";  
                                      echo "<a href='".get_permalink()."'>";
                                      echo "<h2>".$post->post_title."</h2></a>";
                                                the_excerpt();       
                                      echo "<p align='right'><a href='".get_permalink()."'>Read More</a></p>";   
                                 echo "</div>";
                                */
                                      
                           
                             
                             
                    endwhile;
                       
                    echo "</div>" ; 
                ?>
            <br />
          
            <div id="pagination" align="right" >
            <br />
            <?php wp_pagenavi(); ?>
            
            </div>
                
                
                
                
                
                
                
			</div>
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>