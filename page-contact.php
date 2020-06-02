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
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<header class="page-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->

		<div class="entry-content">
			<?php the_content(); ?>

			<?php if ( function_exists ( 'get_field') ) :
				$location = get_field( 'map' ); ?>

					<div class="acf-map">
						<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
					</div><!-- end acf-map -->

			<?php endif; ?>

		</div><!-- .entry-content -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();