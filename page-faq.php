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

get_header(); ?>


<main id="primary" class="site-main">

	<?php the_post_thumbnail( 'full' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

	<div id="faq">

<?php // check if the repeater field has rows of data
if( have_rows('faqs') ):

	while( have_rows('faqs') ): the_row();
	
	echo "<h3>";
	the_sub_field('category');
	echo "</h3>";

	if( have_rows('questions_answers') ):

	while( have_rows('questions_answers') ): the_row();
	
 	if( get_sub_field('question') && get_sub_field('answer') );
	
	echo "<button class='accordion'>";
	the_sub_field('question');
	echo "</button>";
	echo "<p>";
	
	the_sub_field('answer');
	echo "</p>";
	
	  
endwhile;
endif;
endwhile;
endif;
endwhile;
?>
</div>




	</main><!-- #main -->

<?php
get_sidebar();
get_footer();