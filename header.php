<?php
	/*
	 * Setting up your parameters for your menu
	 * which you will use in your header
	 */
	$mainMenu = array(
		"theme_location" => "main_menu",
		"container" => "nav",
		"container_class" => "",
		"container_id" => "main_nav",
		"depth" => 2);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo("name") . wp_title("|"); ?></title> <!-- wp_title gets the page title -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!-- this is how we link the stylesheet -->
		
		<!-- linking to another stylesheet -->
		<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/secondstylesheet.css">  <!-- that gets you into the root directory of your theme 
			-->
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_enqueue_script("jquery"); ?> <!-- enables jquery. http://dev7studios.com/nivo-slider/ for image slider -->
		<?php wp_head(); ?> <!-- this allows javascript -->


	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1>
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo("name"); ?></a>
				</h1>
				<?php wp_nav_menu($mainMenu); ?>			 
			</header>