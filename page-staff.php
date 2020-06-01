<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sea_to_Sky_Rapids
 */

get_header();
?>

	<?php
    		if ( function_exists ( 'get_field' ) ) {
        	if ( get_field( 'intro' ) ) {
            the_field( 'intro' );
        		}
    		}
	?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
		<!--Get Template Part-->
		<?php get_template_part( 'template-parts/testimonials', 'none' );?>

		<?php

		wp_reset_postdata();

		




		




	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
