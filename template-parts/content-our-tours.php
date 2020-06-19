<?php
	$args = array(
	'post_type'		 =>'product',
	'posts_per_page' => 15
		); 

	$product_query = new WP_Query($args); 
	if ($product_query->have_posts() ) : ?>
		<section class="tours-preview">
		<?php while ($product_query->have_posts() ) :
			$product_query->the_post(); ?>
			
			<article class="single-tour-preview"><a href="<?php echo get_permalink() ?>">
			
				<div class="z-single-tour-img">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="tours-overlay"></div>
				<h2 class='z-single-tour-title'><?php the_title(); ?></h2>
	
				<?php // support for ACF
				if ( function_exists( 'get_field' ) ) :
					if ( have_rows('product_summary') ):
						while ( have_rows('product_summary') ) : the_row();
							if(get_sub_field('duration') ) : ?>
								
								<div class="single-tour-detailed-info">
								<div class='tour-preview-element sts-tour-duration'>
									<p><b>Duration: </b><?php the_sub_field( 'duration' ); ?>h</p>
								</div><!-- end of sts-tour-duration -->

							<?php endif; // end of duration if

							if (get_sub_field('difficulty_level') ) : ?>
								
								<div class='tour-preview-element sts-tour-difficulty_level'>
									<p><b>Difficulty Level: </b><?php the_sub_field( 'difficulty_level' ); ?></p>
								</div><!-- end of sts-tour-difficulty_level -->

							<?php endif; // end of difficulty_level if

							if (get_sub_field('age_range') ) : ?>
								
								<div class='tour-preview-element sts-tour-age_range'>
									<p><b>Age Range: </b><?php the_sub_field( 'age_range' ); ?></p>
								</div> <!-- end of sts-tour-age_range -->

							<?php endif; // end of age_range if

							if (get_sub_field('minimum_weight') ) : ?>
								
								<div class='tour-preview-element sts-tour-minimum_weight'>
									<p><b>Minimum Weight: </b><?php the_sub_field( 'minimum_weight' ); ?>lbs</p>
								</div><!-- end of sts-tour-minimum_weight -->

							<?php endif; // end of minimum_weight if

							if (get_sub_field('price') ) : ?>
								
								<div class='tour-preview-element sts-tour-price'>
									<p><b>Price: </b>$<?php the_sub_field( 'price' ); ?></p>
								</div><!-- // end of sts-tour-price -->
								</div> 
								<!-- end of single-tour-datailed-info -->
							<?php endif; // end of price if

						endwhile;

					endif;
		
				endif; ?>

				<div class='tour-more-info-button'>
					<a href="<?php echo get_permalink() ?>">
						<p class="tour-details-button">View Tour Details</p>
					</a>
				</div><!-- end tour-more-info-button -->

			</a></article><!-- end single-tour-preview -->
		<?php endwhile; ?>

		</section>
	<?php endif; ?>
