<?php get_header(); ?>
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class("single-post left"); ?>>	
						<?php the_post_thumbnail(); //this inserts the featured image ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<a href="<?php comments_link(); ?>">
							<?php comments_number("0 user reviews", "1 user review", "% user reviews"); ?>
						</a>							
						<p>
							<?php the_content(); ?>
						</p>							
						<div id="comments-div">
							<?php comments_template(); ?> <!-- references comments.php (originally in includes folder, brought it over into theme folder) -->
						</div>
					</article>			
			<?php endwhile; else: ?>
				<p>WRITE MOAR POSTS!!!!!1</p>
			<?php endif; ?>			
<?php get_footer(); ?>