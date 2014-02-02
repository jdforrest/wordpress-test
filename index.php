<?php get_header(); ?>	
	<div id="middle"> <!-- middle div ends in footer -->
		<div id="content"> <!-- content div ends in footer -->
				<div id="page-title">
					<?php wp_title(""); ?>
				</div>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class("post left"); ?>>						
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<a href="<?php comments_link(); ?>">
							<?php comments_number("0 user reviews", "1 user review", "% user reviews"); ?>
						</a>
						<p>
							<?php the_content(); ?>
						</p>
					</article>			
				<?php endwhile; else: ?>
					<p>Sorry, we found no reviews.</p>
				<?php endif; ?>	
				
<?php get_footer(); ?>