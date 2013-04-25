<?php get_header(); ?>
<div id="wrap" class="clearfix">

  <div id="columns" class="clearfix">
   
    <div id="content">
		<?
			//echo $category_name;
			$category = get_category( get_query_var( 'cat' ) );
			$cat_id = $category->cat_ID;
			//echo $cat_id = $category->cat_ID;	
			$subcategories = get_categories('&child_of='.$cat_id.'&hide_empty=1'); // List subcategories of category '4' (even the ones with no posts in them)		
			$cat_cnt = count($subcategories);
		?>
		<?php if($cat_cnt > 0){?>
		<h2 class="page-title"><?php echo'<span>' . single_cat_title( '', false ) . '</span>';?></h2>
		<?php }else{ 
		   //echo  $category->category_parent ;
		   echo "<h2>".get_cat_name($category->category_parent)."</h2>";  
		?>
		<h1 class="page-title"> > <?php echo'<span>' . single_cat_title( '', false ) . '</span>';?></h1>
		<?php } 
		
		$cat_id = $category->cat_ID;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'brand', '', ', ', '' ) );
		
      
        query_posts( 
			array( 	'brand' => $terms_as_text,
					'posts_per_page' => 15, 
					'orderby' => 'date', 
					'order' => 'desc',
					'post_type'=> 'furniture',
					'paged' => $paged
					) 
		); 
       
         
        
        ?>
		
        
        <?php if (have_posts()) :?>
		<div id="products">
		<?php while (have_posts()) : ?>
		<?php the_post(); ?>
      <div class="cat_thumb_img_box"> <a class="imgBox" href="<?php the_permalink(); ?>">
		<?php if (get_field('product_image_1')) : 
			$imgData = wp_get_attachment_image_src(get_field('product_image_1'), 'medium'); 
			
			//$imgData[1] ="210";
			//$imgData[2] ="125";
			
			echo '<img src="' . $imgData[0] . '" alt="' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
		?>
        <?php else : ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/placeholder-coming-soon.jpg" alt="" />
        <?php endif; ?>
        </a> <br />
        <?php the_title(); ?>
      </div>
		<?php endwhile; ?>
		</div>
		<? else: endif; ?>
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
