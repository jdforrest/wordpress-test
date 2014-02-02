<?php get_header(); ?>	
	<div id="middle"> <!-- middle div ends in footer -->
		<div id="content"> <!-- content div ends in footer -->
				<div id="page-title">
					<?php wp_title(""); ?>
				</div>	
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
						<?php the_post_thumbnail(); //this inserts the featured image ?>
						<p><?php the_content(); ?></p>				
				<?php endwhile; else: ?>
					<p>Sorry, we found no posts.</p>
				<?php endif; ?>	
				
<?php get_footer(); ?>