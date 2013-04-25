<?php get_header(); ?>
<?php

	$taxonomyBase = 'brand';

	$thisTerm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	/*if ($thisTerm->parent != 0)	// this is not a parent taxonomy
	{
		$parentTerm = get_term_by( 'id', $thisTerm->parent, get_query_var( 'taxonomy' ) );
		$childTerm = $thisTerm;
		$topLevelPage = false;
	}
	else
	{
		$parentTerm = $thisTerm;
		$childTerm = '';
		$topLevelPage = true;
	}*/	
	
?>

<div id="wrap" class="clearfix">
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
	  <div id="columns" class="clearfix">
			<h1><?php echo $thisTerm->name; ?></h1><!-- top level brand -->
			<div id="left_sidebar">
				<ul>
					<?php 
					
						// list all products of this brand
						$args = array(
							'tax_query' => array(
								array(
									'taxonomy' => get_query_var( 'taxonomy' ),
									'field' => 'slug',
									'terms' => $thisTerm->slug
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
			</div>
			<div id="content">
				<?php if ($topLevelPage) : $tdCtr = 1; ?>
					<table>
					<?php global $query_string; query_posts( $query_string . '&posts_per_page=12' ); if (have_posts()) : ?>
						<?php while (have_posts()) : ?>
							<?php if ($tdCtr%3 == 1) : ?><tr><?php endif; ?>
							<?php the_post(); ?>
							<td>
								<a class="imgBox" href="<?php the_permalink(); ?>">
									<?php if (get_field('product_image_1')) : 
										$imgData = wp_get_attachment_image_src(get_field('product_image_1'), 'medium'); 
										echo '<img src="' . $imgData[0] . '" alt="' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
									?>
									<?php else : ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/placeholder-coming-soon.jpg" alt="" />
									<?php endif; ?>
								</a>
							</td>
							<?php if ($tdCtr%3 == 0) : ?></tr><?php endif; $tdCtr++; ?>
						<?php endwhile; ?>
						<?php 
							/* cleanup */ 
							$tdCtr--;
							if ($tdCtr%3 == 1) :
								echo '<td colspan="2">&nbsp;</td></tr>';
							elseif ($tdCtr%3 == 2) :
								echo '<td>&nbsp;</td></tr>';
							else : // ($tdCtr%3 == 0)
								//echo '<td colspan="3">tdCtr MOD 3 == 0</td></tr>';
							endif;
						?>
					<?php else : ?>
						<tr><td colspan="3">Sorry, no furniture has been added to this category.</td></tr>
					<?php endif; ?>
					</table>
				<?php else : $tdCtr = 1;?>
					<table>
					<?php global $query_string; query_posts( $query_string . '&posts_per_page=12' ); if (have_posts()) : ?>
						<?php while (have_posts()) : ?>
							<?php if ($tdCtr%3 == 1) : ?><tr><?php endif; ?>
							<?php the_post(); ?>
							<td>
								<a class="imgBox" href="<?php the_permalink(); ?>">
									<?php if (get_field('product_image_1')) : 
										$imgData = wp_get_attachment_image_src(get_field('product_image_1'), 'medium'); 
										echo '<img src="' . $imgData[0] . '" alt="' . the_title('', '', false) . '" width="' . $imgData[1] . '" height="' . $imgData[2] . '" />';
									?>
									<?php else : ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/placeholder-coming-soon.jpg" alt="" />
									<?php endif; ?>
								</a>
							</td>
							<?php if ($tdCtr%3 == 0) : ?></tr><?php endif; $tdCtr++; ?>
						<?php endwhile; ?>
						<?php 
							/* cleanup */ 
							$tdCtr--;
							if ($tdCtr%3 == 1) :
								echo '<td colspan="2">&nbsp;</td></tr>';
							elseif ($tdCtr%3 == 2) :
								echo '<td>&nbsp;</td></tr>';
							else : // ($tdCtr%3 == 0)
								//echo '<td colspan="3">tdCtr MOD 3 == 0</td></tr>';
							endif;
						?>
					<?php else : ?>
						<tr><td colspan="3">Sorry, no furniture has been added to this category.</td></tr>
					<?php endif; ?>
					</table>
					<?php 
					
						/*echo '<strong>' . get_query_var( 'taxonomy' ) . '</strong><br /><br />';
						echo '<strong>' . $childTerm->slug . '</strong><br />';*/
					?>
				<?php endif; ?>
                

            <div id="brand-banner"><?php if (is_tax('brand', 'natuzzi')): ?>
   <!--your ad code for the natuzzi page-->
<!--your ad code for the natuzzi page-->
   <!--<img src="http://rapport.digicoyote.net/wp-content/uploads/Natuzzi-flat-image-banner.jpg" />-->
<script language="javascript" type="text/javascript">
/*INSERT REDIRECT INTO gi_redir VARIABLE*/
var gi_redir = "";
var gi_dasrc = "http://www.getinteractive.tv/displayserve/?dsid=27220122755442637&pid=111&skid=11&if=0&at=0&alid=728_90&adtype=0&exty=0&special=0&redir=" + gi_redir + "&r=" + Math.random();
document.write("<scr"+"ipt language='javascript' type='text/javascript' src='" + gi_dasrc + "'><\/scr"+"ipt>");
</script>
<?php elseif (is_tax('brand', 'italsofa')): ?>
<script language="javascript" type="text/javascript">
/*INSERT REDIRECT INTO gi_redir VARIABLE*/
var gi_redir = "";
var gi_dasrc = "http://www.getinteractive.tv/displayserve/?dsid=2712012276553673&pid=111&skid=76&if=0&at=0&alid=728_90&adtype=0&exty=0&special=0&redir=" + gi_redir + "&r=" + Math.random();
document.write("<scr"+"ipt language='javascript' type='text/javascript' src='" + gi_dasrc + "'><\/scr"+"ipt>");
</script>
<?php elseif (is_tax('brand', 'stressless')): ?>

<img src="http://www.StresslessBanners.com/728x90adCAN.gif" border="0" alt="Ekornes Stressless®" style="width:521px;">
<?php else: ?>
   ... default brand page code...
<?php endif; ?></div>


	</div>

    
			<div id="pagination">

				<?php
					$big = 999999999;
					$pagination = paginate_links( array(
						'base' 			=> str_replace( $big, '%#%', get_pagenum_link( $big ) ),
						'format' 		=> '?paged=%#%',
						'current' 		=> max( 1, get_query_var('paged') ),
						'total' 		=> $wp_query->max_num_pages,
						'prev_next'    	=> false,
						'show_all'    	=> true,
						'type'			=> 'array',
					) );

					if ($pagination)
					{
						foreach ($pagination as $key=>$pagelink)
						{
							$linkinfo = explode('>', $pagelink);
							echo $linkinfo[0] . '>Page ' . $linkinfo[1] . '>' . $linkinfo[2];
						}
					}
				?><?php wp_pagenavi(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
</div>

<?php get_footer(); ?>