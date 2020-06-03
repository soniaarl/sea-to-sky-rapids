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
		the_post_thumbnail( 'full' );
		while ( have_posts() ) :
			the_post(); ?>

			<header class="page-header">
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->

		<div class="entry-content">
			<?php if ( function_exists ( 'get_field') ) :
				if ( get_field( 'contact_book_online' ) ) :
					the_field( 'contact_book_online' );
				endif;
			endif;
			the_content(); ?>
		</div><!-- .entry-content -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();