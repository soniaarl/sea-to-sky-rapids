<?php 
			$args = array(
				'post_type' => 'sts-testimonials',
				'posts_per_page' => -1
			);

			$query = new WP_Query( $args );

			if ( $query -> have_posts() ){
				while ( $query -> have_posts() ) {
                    $query -> the_post();
                    the_post_thumbnail();
					the_content();
				}
				wp_reset_postdata();
			} 