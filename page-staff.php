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

			<p><?php the_content(); ?></p>

		<?php endwhile; ?>


		<?php get_template_part( 'template-parts/testimonials', 'none' ); ?>


		<h2>Meet The Team</h2>

		<?php
			$args = array (
				'post_type' => 'sts-staff',
				'posts_per_page' => -1,
			);
			$staff_query = new WP_Query( $args );
			if ( $staff_query->have_posts() ): ?>
				<div class="staff-card">
					<?php while ( $staff_query->have_posts() ):
						$staff_query->the_post() ?>
						<h3><?php the_field('staff_name') ?> </h3>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
			 	</div>
		<?php endif; ?>





	


	</main>




<?php
get_footer();

