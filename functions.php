<?php
	//this line will also allow us to edit our menus in the dashboard
	//Parameters: "main_menu" is name you will use in your code
	//            "Main Navigation Menu" is the name you will see in the dashboard
	//register_nav_menu("main_menu", "Main Navigation Menu");
	
	//if we wanna register more than one nav, we need to make an array first:
	$menuList = array(
		"main_menu" => "Main Navigation Menu",
		"footer_menu" => "Footer Menu"		
	);

	register_nav_menus($menuList);
	
	add_theme_support('post-thumbnails'); //this allows featured images in posts
	
	set_post_thumbnail_size(300, 300, true); //default thumbnail setting, can change later
	
	//add_image_size("post-thumb", 300, 300, true);
	
	$rightsidebar = array(
		"name" => "Right Sidebar",
		"id" => "right_aside",
		"description" => "Sidebar for the right",
		"before_widget" => "<div class='widget'>",
		"after_widget" => "</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>"
	);
	
	register_sidebar($rightsidebar);
?>