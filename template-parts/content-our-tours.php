<?php


$args = array(
		    'post_type'			=>'product',
			'posts_per_page'    => 4
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
					
					echo "<div class='tour-preview-element sts-tour-durtion'>";
						echo '<p> <b> Duration: </b>';

						the_sub_field( 'duration' );
						echo '</p>';
						echo "</div>";// end of sts-tour-durtion

				} // end of duration if

				if(get_sub_field('difficulty_level') ){
					
					echo "<div class='tour-preview-element sts-tour-difficulty_level'>";
						echo '<p> <b> Difficulty Level: </b>';

						the_sub_field( 'difficulty_level' );
						echo '</p>';
						echo "</div>";// end of sts-tour-difficulty_level

				} // end of difficulty_level if

				if(get_sub_field('age_range') ){
					
					echo "<div class=' tour-preview-element sts-tour-age_range'>";
						echo '<p> <b> Age Range: </b>';

						
						the_sub_field( 'age_range' );
						echo '</p>';
						echo "</div>";// end of sts-tour-age_range

				} // end of age_range if

				if(get_sub_field('minimum_weight') ){
					
					echo "<div class='tour-preview-element sts-tour-minimum_weight'>";
						echo '<p> <b> Minimum Weight: </b>';

				
						the_sub_field( 'minimum_weight' );
						echo '</p>';
						echo "</div>";// end of sts-tour-minimum_weight

				} // end of minimum_weight if

				if(get_sub_field('price') ){
					
					echo "<div class='tour-preview-element sts-tour-price'>";
						echo '<p> <b> Price: </b>';

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
