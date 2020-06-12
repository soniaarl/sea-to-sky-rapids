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
						<nav id="social-navigation" class="social-navigation"></nav>
						<?php wp_nav_menu(array('theme_location' => 'social'));	
						if(function_exists( 'get_field') ) :
							if ( get_field( 'contact_phone_title' ) ) : ?>
								<p><?php the_field( 'contact_phone_title' ); ?></p>
							<?php endif; ?>
							<?php if ( get_field ( 'contact_phone_text') ) : ?>
								<p><a href="tel:<?php the_field('contact_phone_text')?>"><?php the_field( 'contact_phone_text' ); ?></a></p>
							<?php endif; 
							if ( get_field( 'contact_email_title' ) ) : ?>
								<p><?php the_field( 'contact_email_title' ); ?></p>
							<?php endif; ?>
						<?php if ( get_field ( 'contact_email_text') ) : ?>
							<p><a href="mailto:<?php the_field('contact_email_text')?>"><?php the_field( 'contact_email_text' ); ?></a></p>
						<?php endif; 
						endif;
					endif; ?>
				</div><!-- end footer-contact -->
			</nav>
		</div><!-- end footer-navigation-->
	</div><!-- .site-info -->

	<button id="scroll-top" class="scroll-top">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" transform='rotate(270)' >
		<path d="M6.028 0v6.425l5.549 5.575-5.549 5.575v6.425l11.944-12z"/>
	</svg>
		<span class="screen-reader-text">Scroll To Top</span>
	</button>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
