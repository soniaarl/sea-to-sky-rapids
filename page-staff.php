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
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<header class="page-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header>

		<?php endwhile; ?>

	<!--testimonial-->
	<?php get_template_part( 'template-parts/testimonials', 'none' ); ?>

	<h2>Meet The Team</h2>

		
	


		
	<?php
		
	wp_reset_postdata()

	?>


	</main>

<?php

		// ACF 
    	if ( function_exists ( 'get_field' ) ) {
        	if ( get_field( 'intro' ) ) {
            the_field( 'intro' );
        		}
    		}
?>


<?php
get_footer();

