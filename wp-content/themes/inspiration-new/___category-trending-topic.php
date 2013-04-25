<?php get_header(); ?>
<div id="wrap" class="clearfix">

  <div id="columns" class="clearfix">
    <div id="content">
            
            
            <h2>TRENDING TOPCIS</h2>
  
            <?php
            
          	    $category = get_category( get_query_var( 'cat' ) );
                $cat_id = $category->cat_ID;
            
            	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
             
                //$paged = 2;
           
                $args = array(
                'cat' => $cat_id, 
        	    'posts_per_page'     => 1, 
        		'offset'          => 0,
        		'orderby'         => 'DESC',
        		'post_type'       => 'trending-topic',
        		'paged' => $paged,
        		'post_status'     => 'publish' );	
               // The Query
                query_posts( $args );
             
                
                
                
                // The Loop
                while ( have_posts() ) : the_post();
                  
                  echo "<a href='".get_permalink()."'>";
                  echo "<h1>".$post->post_title."</h1></a>";
                  echo mysql2date('M j Y', $post->post_date);
                            the_excerpt();
                            
                   echo "<p align='right'><a href='".get_permalink()."'>Read More</a></p>";
      
                endwhile;
                
                
                // Reset Query
                //wp_reset_query();
            ?>   
          
            
            <br />
            <br />
            <div id="pagination" align="right" >
            
            <?php wp_pagenavi(); ?>
            
            </div>

		
    </div>
    <?php get_sidebar(); ?>
  </div>
  <!-- #content --> 
</div>
<!-- #container -->

<?php get_footer(); ?>
