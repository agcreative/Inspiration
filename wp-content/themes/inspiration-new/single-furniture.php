<?php
get_header(); ?>
 
<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
    
            <div id="content">
				<?
					$category = get_the_category(); 
					
					$parentCatName = get_cat_name($category[0]->parent);
					
					$parentCat = get_category($category[0]->parent);
					
                    $site_url = network_site_url( '/' );
                    
                    $parent_url = $site_url.$parentCat->slug ;
					
					echo "<h2><a href='$parent_url'>".$parentCatName."</a></h2>";
					echo "<h2 class='subcat'><span style='color:#009d57;'> > </span><a href='".$site_url.$parentCat->slug."/".$category[0]->slug."'>".$category[0]->cat_name."</a></h2>";
					
					
					//echo $category[0]->slug;
				
					 //echo get_category_parents( get_query_var('cat') , true , '' );
				 ?>

         
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    						<h1 class="title"><?php the_title(); ?></h1>
    						<?php if ($productNumber = get_field('product_number')) { echo '<h4>(' . $productNumber . ')</h4>'; } ?>
    						<?php the_content(); ?>
    						<div id="mainProductImg">
    							<?php
    								for ($z = 1; $z <= 5; $z++)
    								{
    									if ($productImage[$z] = get_field('product_image_' . $z))
    									{
    										$imgData = wp_get_attachment_image_src($productImage[$z], 'full'); 
    										echo '<img ';
    										if ($z == 1)
    										{
    											echo 'style="display:block;" ';
    										}
    										echo 'id="product_image_' . $z . '" src="' . $imgData[0] . '" alt="Product &raquo; ' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
    									}
    								}
    							?>
    						</div>
    					</div>
    				<?php endwhile; else : ?>
    					<h2 class="center">Product Not Found</h2>
    					<p><?php _e('Sorry, this product was not found in the database.'); ?></p>
    				<?php endif; ?>
					<ul id="thumbnails">
					<?php 
						$thumbnailList = '';
						for ($x = 1; $x <= 5; $x++)
						{
							if ($productImage[$x] = get_field('product_image_' . $x))
							{
								$imgData = wp_get_attachment_image_src($productImage[$x], 'thumbnail'); 
								$thumbnailList .= '<li><a class="swapProductImg" href="#" rel="product_image_' . $x . '"><img src="' . $imgData[0] . '" alt="Product &raquo; ' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" /></a></li>';
							}
						}
						if (empty($thumbnailList)) { $thumbnailList = '<li>&nbsp;</li>'; }
						echo $thumbnailList;
					?>
					</ul>  
                    
            </div>
            
            
            
            <?php //wp_pagenavi(); ?>
            
			<?php get_sidebar(); ?>
            
            
            
      </div>
      
      	<?php get_sidebar(); ?>
</div>





<?php get_footer(); ?>