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

get_header(); ?>

<main id="primary" class="site-main">
	<?php the_post_thumbnail( 'full' );
	?>


	<?php
	while ( have_posts() ) :
		the_post(); ?>

		<header class="page-header">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header><!-- .page-header -->

	<div class="entry-content">

		<div class="contact-info-section-one">

			<?php if ( function_exists ( 'get_field') ) :

				if ( get_field( 'contact_book_online' ) ) :
					get_template_part( 'images/check' );
					the_field( 'contact_book_online' );
				endif;

				if ( get_field( 'contact_faq' ) ) :
					get_template_part( 'images/faq' );
					the_field( 'contact_faq' );
				endif;

			endif; ?>

		</div><!-- end contact-info-section-one -->

		
		<?php the_content(); ?>

		<div class="contact-info-section-two">

			<?php if ( function_exists ( 'get_field') ) :

			if ( get_field( 'contact_email' ) ) :
				get_template_part( 'images/email' );
				the_field( 'contact_email' );
			endif;

			if ( get_field( 'contact_phone' ) ) :
				get_template_part( 'images/phone' );
				the_field( 'contact_phone' );
			endif;

			endif; ?>

		</div><!-- end contact-info-section-two -->

		<h2>Connect with us</h2>
		<a href="https://www.instagram.com/" target="_blank"><?php get_template_part( 'images/instagram' ); ?></a>
		<a href="https://twitter.com/home/" target="_blank"><?php get_template_part('images/twitter'); ?></a>
		<a href="https://www.facebook.com/" target="_blank"><?php get_template_part('images/facebook');?></a>

	</div><!-- .entry-content -->

	<?php endwhile; // End of the loop. ?>

</main><!-- #main -->

<?php
get_footer();