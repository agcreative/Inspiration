<?php get_header(); ?>
<div id="wrap" class="clearfix">

  <div id="columns" class="clearfix">
   
    <div id="content">
		<?
            $site_url = network_site_url( '/' );
            $view_all_url = "";
        
			//echo $category_name;
			$category = get_category( get_query_var( 'cat' ) );
			$cat_id = $category->cat_ID;
			//echo $cat_id = $category->cat_ID;	
			$subcategories = get_categories('&child_of='.$cat_id.'&hide_empty=1'); // List subcategories of category '4' (even the ones with no posts in them)		
			$cat_cnt = count($subcategories);
            
            $view_all_url = $site_url.$category->slug;
		?>
		<?php if($cat_cnt > 0){?>
        
		<h2 class="page-title"><?php echo'<span>' . single_cat_title( '', false ) . '</span>';?></h2>
		<?php }else{ 
		   //echo  $category->category_parent ;
           
    	   $parentCat = get_category($category->parent);
           
           //$site_url = network_site_url( '/' );
           $parentCat_url = $site_url.$parentCat->slug ;
           
		   echo "<h2><a href='$parentCat_url'>".get_cat_name($category->category_parent)."</a></h2>";  
           
           $view_all_url = $site_url.$parentCat->slug."/".$category->slug;
           
		?>
		<h1 class="page-title"><span style="color:#009d57;"> > <?php echo single_cat_title( '', false ) ;?></span></h1>
		<?php } 
		
		$cat_id = $category->cat_ID;
        
        //echo $category->slug;
        //echo "viewall=".get_query_var('paged');
        //$temp = get_query_var( 'somevar' );
        
        $viewAll =  $_GET[ 'view'];
        
        //echo "Temp = ".$temp;
        
        
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
        $posts_per_page = 15 ;
        
        if($viewAll == "all"){
             $posts_per_page = -1 ;
        }
        
        
        query_posts( 
		array( 'cat' => $cat_id, 
				'posts_per_page' => $posts_per_page, 
				'orderby' => 'date', 
				'order' => 'desc',
				'post_type'=> 'furniture' ,
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
        </a> 
        <?php //the_title(); ?>
        <?
            $long_title = get_field('funiture_long_title');
           
            if($long_title){
                echo $long_title;
            }else{
                the_title();
            }
        ?>
      </div>
		<?php endwhile; ?>
		</div>
		<? else: endif; ?>
      
        <div id="pagination" align="right" >    
        <?php wp_pagenavi(); ?> 
              
             <?
                  if($viewAll == "all"){}else{
             ?>
             <a href="<?=$view_all_url?>/?view=all">VIEW ALL</a>
             <?
                }
             ?>
             
        </div>
        
        
    </div>
    <?php get_sidebar(); ?>
  </div>
  <!-- #content --> 
</div>
<!-- #container -->

<?php get_footer(); ?>
