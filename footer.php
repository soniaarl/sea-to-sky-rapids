<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sea_to_Sky_Rapids
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<div class="footer-menus">
			<nav id="footer-navigation" class="footer-navigation">
				<div class="trip-info">
					<?php				 
					echo '<p>Plan your trip</p>';
					wp_nav_menu( array( 'theme_location' => 'footer') ); 
					?>
				</div>
				<div class="trip-after">
					<?php 
					echo '<p>After your trip</p>';
					echo '<a href="#0">Leave a review</a>'
					?>
				</div>
				<div class="footer-contact">
				<?php 
				echo '<p>Connect with us</p>';
				if(is_page()){
					
					get_template_part('images/facebook');
					get_template_part('images/instagram');
					get_template_part('images/twitter');
				}
	
				?>
				</div>
    		</nav>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
