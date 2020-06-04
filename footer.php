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
					<p>Plan your trip</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
				</div><!-- end trip-info -->
				<div class="trip-after">
					<p>After your trip</p>
					<a href="https://www.yelp.ca/vancouver">Leave a review</a>
				</div> <!-- end trip-after -->
				<div class="footer-contact">
					<p>Connect with us</p>
					<?php if ( is_page() ) : ?>
						<a href="https://www.facebook.com/" target="_blank"><?php get_template_part('images/facebook'); ?></a>
						<a href="https://www.instagram.com/" target="_blank"><?php get_template_part('images/instagram'); ?></a>
						<a href="https://twitter.com/home" target="_blank"><?php get_template_part('images/twitter'); ?></a>
						<?php echo the_field('contact_phone', 39); 
						echo the_field('contact_email', 39);
					endif; ?>
				</div><!-- end footer-contact -->
			</nav>
		</div><!-- end footer-navigation-->
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
