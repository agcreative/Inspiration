<?php




	/* NOTE: THE PRODUCT STUFF REQUIRES USING THE ADVANCED CUSTOM FIELDS PLUGIN TO INSERT PRODUCT DATA */
	
	/* FILTERS AND HOOKS */
    remove_action('wp_head', 'feed_links_extra', 3 ); 				// Removes the links to the extra feeds such as category feeds
	remove_action('wp_head', 'feed_links', 2 ); 					// Removes links to the general feeds: Post and Comment Feed
	remove_action('wp_head', 'rsd_link'); 							// Removes the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action('wp_head', 'wlwmanifest_link'); 					// Removes the link to the Windows Live Writer manifest file.
	remove_action('wp_head', 'index_rel_link'); 					// Removes the index link
	remove_action('wp_head', 'parent_post_rel_link'); 				// Removes the prev link
	remove_action('wp_head', 'start_post_rel_link'); 				// Removes the start link
	remove_action('wp_head', 'adjacent_posts_rel_link'); 			// Removes the relational links for the posts adjacent to the current post.
	remove_action('wp_head', 'wp_generator'); 						// Removes the Wordpress version i.e. - WordPress 2.8.4
	
	add_action('widgets_init', 'digi_widgets_init');				// Register sidebars by running interfac_widgets_init() on the widgets_init hook.
	add_action('init', 'digi_custom_menu');							// Register custom menus by running digi_custom_menu() on the init hook
	//add_action('init', 'digi_create_product_posttype');			// add the digi_create_product_posttype function to the init
	//add_action('init', 'digi_create_furniture_type_taxonomy');	// add the digi_create_furniture_type_taxonomy function to the init
	add_action('init', 'digi_create_products');						// add the digi_create_products function to the init, which will create a taxonomy, a post type, and add taxonomy to post
	add_action('wp_print_scripts', 'disable_autosave' );			// disable the autosave script
	add_action( 'admin_head', 'digi_custom_favicon' );				// add favicon to the admin and login pages
	add_action( 'login_head', 'digi_custom_favicon' );				// add favicon to the admin and login pages
	
	function digi_create_products()
	{
		
		
		
		$brandsLabels = array(
			'name' => _x( 'Brand', 'taxonomy general name' ),
			'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Brands' ),
			'all_items' => __( 'All Brands' ),
			'parent_item' => __( 'Parent Brand' ),
			'parent_item_colon' => __( 'Parent Brand:' ),
			'edit_item' => __( 'Edit Brand' ),
			'update_item' => __( 'Update Brand' ),
			'add_new_item' => __( 'Add New Brand' ),
			'new_item_name' => __( 'New Make Brand' ),
		);
		
		register_taxonomy(
			'brand',
			array('furniture'),
			array(
				'hierarchical' 	=> true,
				'query_var' 	=> true,
				'labels' 		=> $brandsLabels,
				'rewrite'		=> array(
					'slug' 			=> 'brand',
					'hierarchical'	=> true,
					'with_front'	=> false,
				),
			)
		);
		
	
		
		

		
	

		
	}
	
	
	
	
	
	
	function disable_autosave()
	{
		wp_deregister_script('autosave');
	}
	
	function digi_custom_menu()
	{
		register_nav_menus(
			array(
				'top_nav' => __('Top Navigation'),
			)
		);
	}
	
	function digi_widgets_init()
	{
		register_sidebar( array(
			'name' => __('Right Sidebar'),
			'id' => 'right_sidebar',
			'description' => __('Container for the Right Sidebar'),
			'before_widget' => '<div id="%1$s" class="category widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => __('Right Sidebar Info Block'),
			'id' => 'right_sidebar_info_block',
			'description' => __('Container for the Right Sidebar Info Block'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => __('Masthead Block'),
			'id' => 'masthead_block',
			'description' => __('Container for the Masthead Block'),
			'before_widget' => '<div id="%1$s" class="masthead %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => __('Frontpage Left Box'),
			'id' => 'frontpage_left_box',
			'description' => __('Container for the Frontpage Left Box'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
		
		register_sidebar( array(
			'name' => __('Frontpage Right Box'),
			'id' => 'frontpage_right_box',
			'description' => __('Container for the Frontpage Right Box'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
	}
    
    function get_page_name_from_page_title($page_title)
    {
	 	return str_replace(" ", "-", strtolower(trim($page_title)));
    }
	
	// Specify favicon for Dashboard
	function digi_custom_favicon()
	{
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo('template_directory') . '/favicon.ico" />';
	}
    
    
    
    
    
    add_theme_support('post-thumbnails', array('post','page','trending-topics','promotion','new-arrivals'));
  
	// Add new image sizes
	if (function_exists('add_image_size'))
	{
     	add_image_size('mainSlider', 748, 308, TRUE);
        add_image_size('mainBlog_thumb', 220, 200, TRUE);
        add_image_size('promotion_thumb', 280, 200, TRUE);
	}
    
    
    function get_main_slider(){
    
        $args = array(
    	    'numberposts'     => 10, 
    		'offset'          => 0,
    		'orderby'         => 'post_date',
    		'post_type'       => 'mainslider',
    		'post_status'     => 'publish' );			 
        $mainSlider = get_posts($args);
        
        foreach( $mainSlider as $recent ){
           
           $imgData = wp_get_attachment_image_src($recent->slide_image, 'mainSlider');    
           echo "<li><a href=$recent->link_url><img src='$imgData[0]' /></a></li>";
           
        }
    
    
    }
    
    
    
    function get_lates_blog(){
    
        $args = array(
    	    'numberposts'     => 1, 
    		'offset'          => 0,
    		'orderby'         => 'post_date',
    		'post_type'       => 'trending-topics',
    		'post_status'     => 'publish' );			 
        $blogs = get_posts($args);
        
      
        foreach( $blogs as $recent ){

				echo get_the_post_thumbnail($recent->ID, 'mainBlog_thumb');
				
            	echo "<a href='".get_permalink($recent->ID)."'>";
                echo "<p><strong>".$recent->post_title."</strong></p>";
                echo "</a>";
                echo "<p>";
                echo substr($recent->post_content,0,230);
               
                echo "<p>";
                echo "<a href='".get_permalink($recent->ID)."'>";
                echo "Read More";
                echo "</a>";
                echo "</p>";
      
        }
    
    
    }
    
    function get_latest_promotion(){
    
        $args = array(
    	    'numberposts'     => 1, 
    		'offset'          => 0,
    		'orderby'         => 'post_date',
    		'post_type'       => 'promotion',
    		'post_status'     => 'publish' );			 
        $promotion = get_posts($args);
        
        foreach( $promotion as $recent ){
           
            //$imgData = wp_get_attachment_image_src($recent->promotion_image, 'promotion_thumb');    
            //echo "<a href=".get_permalink($recent->ID)."><img src='$imgData[0]' /></a>";
            
             echo "<a href=".get_permalink($recent->ID).">";
             echo get_the_post_thumbnail($recent->ID, 'fullsize');
             echo "</a>";
            
        }
    
    
    }
    
    
    function get_latest_video(){
    
        $args = array(
    	    'numberposts'     => 1, 
    		'offset'          => 0,
    		'orderby'         => 'post_date',
    		'post_type'       => 'video-gallery',
    		'post_status'     => 'publish' );			 
        $videos = get_posts($args);
        
        foreach( $videos as $recent ){
        
            $videoUrl = get_post_meta($recent->ID, 'video_url');
            $videoInfo = $videoUrl[0];
            //echo $videoInfo;
            
            echo do_shortcode('[youtube_sc url='.$videoInfo.']'); 
            
        }
    
    
    }
    
    
    
    
    function get_brand_new(){
        
        /*
        $post_id = "5432";
        $post = get_post($post_id); 
        
        //echo $post->post_title;
       
		echo "<a href=".get_permalink($post->ID).">";
        echo get_the_post_thumbnail($post->ID, 'brandnew_thumb');
        echo "</a>";


        
        echo "<p>";
        $content = preg_replace("/<img[^>]+\>/i", "", $post->post_content);
        echo $content;
        echo "</p>";
        */
        
        $args = array(
    	    'numberposts'     => 1, 
    		'offset'          => 0,
    		'orderby'         => 'post_date',
    		'post_type'       => 'new-arrivals',
    		'post_status'     => 'publish' );			 
        $newarrivals = get_posts($args);
        
        foreach( $newarrivals as $recent ){
           
            //$imgData = wp_get_attachment_image_src($recent->promotion_image, 'promotion_thumb');    
            //echo "<a href=".get_permalink($recent->ID)."><img src='$imgData[0]' /></a>";
            
            echo "<a href=".get_permalink($recent->ID).">";
            echo get_the_post_thumbnail($recent->ID, 'brandnew_thumb');
            echo "</a>";
            
        	echo "<a href='".get_permalink($recent->ID)."'>";
            echo "<p><strong>".$recent->post_title."</strong></p>";
            echo "</a>";
            echo "<p>";
            $content = preg_replace("/<img[^>]+\>/i", "", $recent->post_content);
            $content = substr($recent->post_content,0,160);
            echo $content;
            echo "</p>";
            
            echo "<p>";
            echo "<a href='".get_permalink($recent->ID)."'>";
            echo "Read More";
            echo "</a>";
            echo "</p>";
            
        }

        
    }
    
    
    add_rewrite_rule( 'promotion/page/([0-9]+)/?$', 'index.php?pagename=promotion&paged=$matches[1]', 'top' );
    add_rewrite_rule( 'trending-topics/page/([0-9]+)/?$', 'index.php?pagename=trending-topics&paged=$matches[1]', 'top' );
    add_rewrite_rule( 'new-arrivals/page/([0-9]+)/?$', 'index.php?pagename=new-arrivals&paged=$matches[1]', 'top' );
    add_rewrite_rule( 'video-gallery/page/([0-9]+)/?$', 'index.php?pagename=video-gallery&paged=$matches[1]', 'top' );
    
/**
 * Custom Menu Walker for Responsive Menus
 *
 * Creates a <select> menu instead of the default
 * unordered list menus.
 *
 **/

class Walker_Responsive_Menu extends Walker_Nav_Menu {

	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;		

		// Create a visual indent in the list if we have a child item.
		$visual_indent = ( $depth ) ? str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $depth) : '';

		// Load the item URL
		$attributes .= ! empty( $item->url ) ? ' value="'   . esc_attr( $item->url ) .'"' : '';


		// If we have hierarchy for the item, add the indent, if not, leave it out.
		// Loop through and output each menu item as this.
		if($depth != 0) {
			$item_output .= '<option ' . $attributes .'>'. $visual_indent . apply_filters( 'the_title', $item->title, $item->ID ) . '</option>';
		} else {
			$item_output .= '<option ' . $attributes .'>'.$prepend.apply_filters( 'the_title', $item->title, $item->ID ).'</option>';
		}



		// Make the output happen.
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
    
    

?>