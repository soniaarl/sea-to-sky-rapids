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
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<?php
    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'trip_prep' ) ) {
            the_field( 'trip_prep' );
        }
    }

    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'getting_here' ) ) {
            the_field( 'getting_here' );
        }
    }

    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'difficulty_levels' ) ) {
            the_field( 'difficulty_levels' );
        }
    }

    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'guide_training' ) ) {
            the_field( 'guide_training' );
        }
    }

    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'rafting_safety' ) ) {
            the_field( 'rafting_safety' );
        }
    }

  if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'conditions' ) ) {
            the_field( 'conditions' );
        }
    }

      if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'cancelations' ) ) {
            the_field( 'cancelations' );
        }
    }

?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();