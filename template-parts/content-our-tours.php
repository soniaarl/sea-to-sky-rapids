<?php
	$args = array(
	'post_type'		 =>'product',
	'posts_per_page' => 4
		); 

	$product_query = new WP_Query($args); 
	if ($product_query->have_posts()){ ?>
		<section class="tours-preview">
		<?php while ($product_query->have_posts()) {
			$product_query->the_post(); ?>
			
			<article class="single-tour-preview"><a href="<?php echo get_permalink() ?>">
			
				<?php the_post_thumbnail('full'); ?>
			
				<h2><?php the_title(); ?></h2>
		
				<?php // support for ACF
				if( function_exists( 'get_field' ) ){
					if( have_rows('product_summary') ):
						while ( have_rows('product_summary') ) : the_row();
							if(get_sub_field('duration') ){ ?>
								
								<div class='tour-preview-element sts-tour-duration'>
									<p><b>Duration: </b><?php the_sub_field( 'duration' ); ?></p>
								</div><!-- end of sts-tour-duration -->

							<?php } // end of duration if

							if(get_sub_field('difficulty_level') ){ ?>
								
								<div class='tour-preview-element sts-tour-difficulty_level'>
									<p><b>Difficulty Level: </b><?php the_sub_field( 'difficulty_level' ); ?></p>
								</div><!-- end of sts-tour-difficulty_level -->

							<?php } // end of difficulty_level if

							if(get_sub_field('age_range') ){ ?>
								
								<div class='tour-preview-element sts-tour-age_range'>
									<p><b>Age Range: </b><?php the_sub_field( 'age_range' ); ?></p>
								</div> <!-- end of sts-tour-age_range -->

							<?php } // end of age_range if

							if(get_sub_field('minimum_weight') ){ ?>
								
								<div class='tour-preview-element sts-tour-minimum_weight'>
									<p><b>Minimum Weight: </b><?php the_sub_field( 'minimum_weight' ); ?></p>
								</div><!-- end of sts-tour-minimum_weight -->

							<?php } // end of minimum_weight if

							if(get_sub_field('price') ){ ?>
								
								<div class='tour-preview-element sts-tour-price'>
									<p><b>Price: </b><?php the_sub_field( 'price' ); ?></p>
								</div><!-- // end of sts-tour-price -->

							<?php } // end of price if

						endwhile;

					endif;
		
				}//end of if ?>

				<div class='tour-more-info-button'>
					<a href="<?php echo get_permalink() ?>">
						<p class="tour-details-button">View Tour Details</p>
					</a>
				</div><!-- end tour-more-info-button -->

			</a></article><!-- end single-tour-preview -->
		<?php }// end of while ?>

		</section>
<?php }//end of if ?>
