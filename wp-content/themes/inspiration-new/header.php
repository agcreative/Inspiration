<!DOCTYPE HTML>
<html>
<head>
<title>
<?
   if(is_archive()){
      //echo "test";
       $category = get_category( get_query_var( 'cat' ) );
       $cat_id = $category->cat_ID;
  	   
       if(get_cat_name($category->parent)){
           echo $category->name." | ".get_cat_name($category->parent)." | ".get_bloginfo('name');
       }else{
            wp_title('');
       }
       
       
   }else{
       
       wp_title('');
       
   }

?>

</title>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="Shortcut Icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<!--[if lt IE 9]>
	<script src="http://themify.me/demo/themes/fullscreen/wp-content/themes/fullscreen/js/respond.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	<![endif]-->
<link href="style.css" rel="stylesheet" type="text/css" />


<?php wp_deregister_script('jquery'); wp_head(); ?>
<script>
<!--
function goto(choose){
var selected=choose.options[choose.selectedIndex].value;
    if(selected != ""){
    location.href=selected;
    }
}
//-->
</script>
</head>
<body <?php body_class("product"); ?>>
<div id="header">
<a href="<?php bloginfo('url'); ?>/" id="logo"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="INspiration"></a> 
<?php wp_nav_menu(array('theme_location' => 'top_nav', 'container' => '', 'menu_class' => 'menu-nav')); ?>

<div id="responsivemenu">
<form name="menu_selector" method="post" action="#">
<SELECT onChange="goto(this);">
<option selected>Explore</option>
<optgroup label="Living">
<?php wp_nav_menu(array(	
	'menu' => 'Living Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="Dining">
<?php wp_nav_menu(array(	
	'menu' => 'Dining Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="Bedroom">
<?php wp_nav_menu(array(	
	'menu' => 'Sleeping Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="Office">
<?php wp_nav_menu(array(	
	'menu' => 'Working Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="Complements">
<?php wp_nav_menu(array(	
	'menu' => 'Complements Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="Brands">
<?php wp_nav_menu(array(	
	'menu' => 'Brand Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="Brands">
<?php wp_nav_menu(array(	
	'menu' => 'Brand Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
<optgroup label="More">
<?php wp_nav_menu(array(	
	'menu' => 'Side Menu',
	'container' => false,
	'walker' => new Walker_Responsive_Menu())
); ?>
</optgroup>
</select>
</form>
</div>

</div>
  <div id="transwrap">
