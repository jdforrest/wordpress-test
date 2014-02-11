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
	
	
	//function to get calculate the average ratings from the comments of a post from the data in the DB
	//wordpress-test DB is "jdforrest_net_1"
	function average_rating() {
	    global $wpdb;
	    $post_id = get_the_ID();
	    $ratings = $wpdb->get_results("
	
	        SELECT $wpdb->commentmeta.meta_value
	        FROM $wpdb->commentmeta
	        INNER JOIN $wpdb->comments on $wpdb->comments.comment_id=$wpdb->commentmeta.comment_id
	        WHERE $wpdb->commentmeta.meta_key='rating' 
	        AND $wpdb->comments.comment_post_id=$post_id 
	        AND $wpdb->comments.comment_approved =1
	
	        ");
	    $counter = 0;
	    $average_rating = 0;    
	    if ($ratings) {
	        foreach ($ratings as $rating) {
	            $average_rating = $average_rating + $rating->meta_value;
	            $counter++;
	        } 
	        //round the average to the nearast 1/2 point
	        return (round(($average_rating/$counter)*2,0)/2);  
	    } else {
	        //no ratings
	        return 'no rating';
	    }
	}
	
?>