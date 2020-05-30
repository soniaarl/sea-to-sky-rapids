<?php
/**
 * The template for displaying the contact page
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWJ3is5bKLjAPuPJCletV91JgpvXomVW4" type="text/javascript"></script>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<header class="page-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<?php endwhile; // End of the loop. 

		the_field('map');

		if ( function_exists ( 'get_field' ) ) {
					the_field( 'map' );
			}

		$location = get_field('location');
		if( $location ): ?>
			<div class="acf-map" data-zoom="16">
				<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
			</div>
		<?php endif; ?>


	</main><!-- #main -->

<?php
get_footer();