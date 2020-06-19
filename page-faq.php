<?php
/**
 * The template for displaying the FAQ page
 * 
 *  Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sea_to_Sky_Rapids
 */

get_header(); ?>

<main id="primary" class="site-main">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="banner faq">
		<?php the_post_thumbnail( 'full' ); ?>
		<h1><?php the_title(); ?></h1>
	</div><!-- end faq-banner -->

	<?php the_content(); ?>
	<div id="faq" class="faq-page">
		<?php // check if the repeater field has rows of data
		if(function_exists( 'get_field' ) ) :
			if( have_rows('faqs') ) :
				while( have_rows('faqs') ): the_row();
						echo "<h3>";
							the_sub_field('category');
						echo "</h3>";
					if( have_rows('questions_answers') ):
						while( have_rows('questions_answers') ): the_row(); ?>
							<div class='question-box'>
								<?php if( get_sub_field('question') && get_sub_field('answer') ) : ?>
									<button class='accordion'>
										<?php the_sub_field('question'); ?>
									</button>					
									<p class = 'panel'>
										<?php the_sub_field('answer'); ?>
									</p>				
								<?php endif; ?>
							</div><!-- end question-box -->
						<?php endwhile;
					endif;
				endwhile;
			endif;
		endif;
	endwhile; ?>
	</div><!-- end faq -->

</main><!-- #main -->

<?php
get_footer();