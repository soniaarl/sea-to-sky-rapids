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

			//I have commented the next 3 lines for now -- Zahra
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		<?php
		$args = array(
			'post_type'			=>'product',
				'posts_per_page' => 4
			); 

		$product_query = new WP_Query($args); 
		if ($product_query->have_posts()){
			while ($product_query->have_posts()) {
				$product_query->the_post(); 
				
				echo '<article class="front-news">';
				echo '<a href="'.get_permalink() . '">';
				the_post_thumbnail('medium');
				echo '</a>';
				echo '<p>'. get_the_title() .'</p>';
				?>
				 <div class="duration">
				 
				 <p> Duration: </p>
				<?php  echo '<p>'. get_the_content() .'</p>';  ?>
				</div>

				 </div> 
				
				<div class="difficulty_level">
				
				<p> difficulty Level: </p>
				<?php   ?>
				</div>

				<div class="Age_range">
				
				<p> Age Range: </p>
				<?php   ?>

				</div>

				<div class="min_weight">

				<p> Minimum Weight: </p>
				<?php   ?>

				</div>

				<div class="price">
				
				<p> Price: </p>
				<?php   ?>

				</div>


				<?php
			
				echo '</article>';
			}
			wp_reset_postdata();
		} 
		
		?>
		





	</main><!-- #main -->

	<?php
    if ( function_exists ( 'get_field' ) ) {
        if ( get_field( 'banner_slogan' ) ) {
            the_field( 'banner_slogan' );
        }
    }
?>

<?php
get_footer();
