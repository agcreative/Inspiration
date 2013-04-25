<?php get_header(); ?>
	<div id="wrap" class="clearfix">
	  <div id="columns" class="clearfix">
			<?php if (!empty($parentTerm->name)) { echo '<h1>' . $parentTerm->name . '</h1>'; } ?><!-- top level furniture type -->
			<?php if (!empty($childTerm->name)) { echo '<h2>' . $childTerm->name . '</h2>'; } ?><!-- second level furniture type, if required -->
			<div id="left_sidebar">
				<ul>
					<?php
					
						// list all products in this category
						$args = array(
							'tax_query' => array(
								array(
									'taxonomy' => 'furniture-type',
									'field' => 'slug',
									'terms' => $childTerm->slug
								)
							),
							'posts_per_page' => 30,
						);
						
						$productQuery = new WP_Query( $args );
						
						if ( $productQuery->have_posts() ) :
							while ( $productQuery->have_posts() ) : $productQuery->the_post();
								echo '<li><a href="';
								// construct permalink
								the_permalink();
								echo '">';
								the_title();
								echo '</a></li>';
							endwhile;
						else :
							echo '<li>&nbsp;</li>';
						endif;
							
						// Reset Post Data
						wp_reset_postdata();
					
					?>
				</ul>
                <!--
				<p><a href="<?php echo $viewAllPermalink; ?>">view all</a></p>
                -->
			</div>
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        
                        <?php
                            if($post->post_type == "trending-topics" || $post->post_type == "promotion")
                            {
                        ?>
                             <h2><a href="<?php bloginfo('url'); ?>/<?=$post->post_type?>"> Archive List</a></h2>
                        
                        <?php
                            }
                        ?>
                        
                        
						<h3><?php the_title(); ?></h3>
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
			</div>
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
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>