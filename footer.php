<!-- Content div opened on main page -->
		
				</div> <!-- / content div -->
				<?php get_sidebar("right"); ?>
			</div> <!-- /middle -->
			<footer id="bottom">
				<?php
					$footerMenu = array(
					"theme_location" => "footer_menu",
					"container" => "nav",
					"container_class" => "",
					"container_id" => "footer_nav",
					"depth" => 1);
				?>
				<?php wp_nav_menu($footerMenu); ?>
			</footer>
		</div> <!-- /wrapper -->
		<?php wp_footer(); ?> <!-- plugins like Google Analytics rely on this -->
	</body>
</html>