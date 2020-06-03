<?php
/**
 * The template for displaying the home page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sea_to_Sky_Rapids
 */

get_header();

if ( function_exists ( 'get_field' ) ) {
	if ( get_field( 'banner_slogan' ) ) { ?>
		<h1><?php the_field( 'banner_slogan' ); ?></h1>
		<?php }
	}
?>

<!-- Book now link -->
<a href=<?php echo esc_url( home_url( '/our-tours' ) ); ?>>
	<p class="book-now-button">Book Now</p>
</a>

<main id="primary" class="site-main">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			get_template_part ( 'template-parts/content-our-tours', 'none');

			get_template_part( 'template-parts/testimonials', 'none' );

		endwhile; // End of the loop. ?>
				
	</main><!-- #main -->

<?php
get_footer();
