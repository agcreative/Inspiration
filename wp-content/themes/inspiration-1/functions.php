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
		$furnitureTypeLabels = array(
			'name' => _x( 'Furniture Type', 'taxonomy general name' ),
			'singular_name' => _x( 'Furniture Type', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Furniture Types' ),
			'all_items' => __( 'All Furniture Types' ),
			'parent_item' => __( 'Parent Furniture Type' ),
			'parent_item_colon' => __( 'Parent Furniture Type:' ),
			'edit_item' => __( 'Edit Furniture Type' ),
			'update_item' => __( 'Update Furniture Type' ),
			'add_new_item' => __( 'Add New Furniture Type' ),
			'new_item_name' => __( 'New Make Furniture Type' ),
		);
		
		register_taxonomy(
			'furniture-type',
			array(),
			array(
				'hierarchical' 	=> true,
				'query_var' 	=> true,
				'labels' 		=> $furnitureTypeLabels,
				'rewrite'		=> array(
					'slug' 			=> 'furniture',
					'hierarchical'	=> true,
					'with_front'	=> false,
				),
			)
		);
		
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
			array(),
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
		
		$postTypeLabels = array(
			'name' => _x('Products', 'post type general name'),
			'singular_name' => _x('Products', 'post type singular name'),
			'add_new' => _x('Add New', 'Product'),
			'add_new_item' => __('Add New Product'),
			'edit_item' => __('Edit Product'),
			'new_item' => __('New Product'),
			'view_item' => __('View Product'),
			'search_items' => __('Search Products'),
			'not_found' =>  __('No Products found'),
			'not_found_in_trash' => __('No Products found in Trash'),
			'parent_item_colon' => ''
		);
		
		$supports = array('title', 'editor', 'custom-fields', 'excerpt');
		$rewrite = array(
			'slug'			=> '',
			'with_front' 	=> false,
		);
		
		register_post_type(
			'products',
			array(
				'labels' 		=> $postTypeLabels,
				'public' 		=> true,
				'supports' 		=> $supports,
				'has_archive' 	=> true,
				'rewrite'		=> true, //$rewrite,
				'taxonomies' => array( 'furniture-type', 'brand' ),
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

?>