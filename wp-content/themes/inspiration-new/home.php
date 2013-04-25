<?php get_header(); ?>

     <!--- Start new add script ---------------------------------------------------------------------------->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.css" type="text/css" />
    
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
    
    
    <script type="text/javascript"> 
    $(document).ready(function() {
       $('#slider1').bxSlider({
              mode: 'fade',
              auto: true,
              autoControls: false
            });
        });
    </script>
    <!--- End new add script ----------------------------------------------------------------------------> 

	<div id="wrap" class="clearfix">
		<div id="columns" class="clearfix">
			<div id="content" style="height:780px;">
            
                <div id="main_slider">
                    <ul id="slider1">
                        <?php
                            get_main_slider();
                        ?>
                    </ul>
                </div>
                
                   <div class="main_section" style="border: none; margin-top: 10px;">
                   
                        <div class="main_section_left">
                          
                            <h1><a href="<?php bloginfo('url'); ?>/video-gallery">OUR NEW VIDEO GALLERY</a></h1>
                            <?php
                                get_latest_video();
                            ?>
                        </div>
                        
                      
                        
                        <div class="main_section_right">
                           <h1><a href="<?php bloginfo('url'); ?>/trending-topics">TRENDING TOPICS</a></h1>
                           <?php
                                get_lates_blog();
                           ?>
                        </div>
       
                </div>
                
               
              
                <div class="main_section">
                   
                   <div class="main_section_left">
                       
                       <h1><a href="<?php bloginfo('url'); ?>/promotion">PROMOTIONS</a></h1>
                       <?
                          get_latest_promotion();
                       ?>
                   </div>
                   
                 
                   
                   <div class="main_section_right">  
                      <h1><a href="<?php bloginfo('url'); ?>/new-arrivals">BRAND NEW ARRIVALS</a></h1>
                      <?php
                          get_brand_new();
                      ?>
                   </div>
                </div>
             
                
                
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>