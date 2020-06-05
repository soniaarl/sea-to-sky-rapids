<?php 

$args = array(
	'post_type' => 'sts-testimonials',
	'posts_per_page' => -1
);

$query = new WP_Query( $args );

if ( $query -> have_posts() ) : ?>
	<div class="slider"> <?php
	while ( $query -> have_posts() ) :
		$query -> the_post();?>
		<div class="testimonial-container"> <?php
		the_post_thumbnail();
		the_content(); ?>
		</div> <?php
	endwhile; ?>
	</div><!-- end of slider --> <?php
	wp_reset_postdata();
endif;