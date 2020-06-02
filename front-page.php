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
			echo '<section class="tours-preview">';
			while ($product_query->have_posts()) {
				$product_query->the_post(); 
				
				echo '<article class="=single-tour-preview">';
				
				the_post_thumbnail('medium');
			
				echo '<p>'. get_the_title() .'</p>';
			
			// support for ACF
			if( function_exists( 'get_field' ) ){
				if( have_rows('product_summary') ):
					while ( have_rows('product_summary') ) : the_row();
					if(get_sub_field('duration') ){
						
						echo "<div class='sts-tour-durtion'>";
							echo '<p> <b> Duration: </b></p>';

							echo '<p>';
							the_sub_field( 'duration' );
							echo '</p>';
							echo "</div>";// end of sts-tour-durtion

					} // end of duration if

					if(get_sub_field('difficulty_level') ){
						
						echo "<div class='sts-tour-difficulty_level'>";
							echo '<p> <b> Difficulty Level: </b></p>';

							echo '<p>';
							the_sub_field( 'difficulty_level' );
							echo '</p>';
							echo "</div>";// end of sts-tour-difficulty_level

					} // end of difficulty_level if

					if(get_sub_field('age_range') ){
						
						echo "<div class='sts-tour-age_range'>";
							echo '<p> <b> Age Range: </b></p>';

							echo '<p>';
							the_sub_field( 'age_range' );
							echo '</p>';
							echo "</div>";// end of sts-tour-age_range

					} // end of age_range if

					if(get_sub_field('minimum_weight') ){
						
						echo "<div class='sts-tour-minimum_weight'>";
							echo '<p> <b> Minimum Weight: </b></p>';

							echo '<p>';
							the_sub_field( 'minimum_weight' );
							echo '</p>';
							echo "</div>";// end of sts-tour-minimum_weight

					} // end of minimum_weight if

					if(get_sub_field('price') ){
						
						echo "<div class='sts-tour-price'>";
							echo '<p> <b> Price: </b></p>';

							echo '<p>';
							the_sub_field( 'price' );
							echo '</p>';
							echo "</div>";// end of sts-tour-price

					} // end of price if

					
				endwhile;
					endif;
	
			}//end of if
			echo "<div class='tour-more-info-button'>";
			echo '<a href="'.get_permalink() . '">';
				echo '<p>  VIEW TOUR DETAILS </p>' ;
				echo '</a>';
			echo "</div>";
			echo '</article>';
		}// end of while
		echo '</section>';
	}//end of if
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
