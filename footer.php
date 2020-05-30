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
        		<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
    		</nav>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
