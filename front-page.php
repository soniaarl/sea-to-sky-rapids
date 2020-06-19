<?php
/**
 * The template for displaying the home page
 *
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

	<div class="banner home">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( function_exists ( 'get_field' ) ) :

				if ( get_field( 'banner_video' ) ) : ?>
					<div class="video-container">
						<?php $video_mp4 = get_field( 'banner_video' ); ?>
						<video src="<?php echo $video_mp4['url']?>"autoplay muted loop></video>
					</div>
				<?php endif;

				if ( get_field( 'banner_slogan' ) ) : ?>
					<h1><?php the_field( 'banner_slogan' ); ?></h1>
				<?php endif;
			endif; ?>

			<!-- Book now link -->
			<?php $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>
			<div class="book-now-but">
				<a  href=<?php echo $shop_page_url ?>>
					<p class="book-now-button">Book Now</p>
				</a>
			</div>
			<!-- end of book-now-but -->
	</div><!-- end home-banner-->

	<div class="home-intro-text">
		<?php  the_content(); ?>
	</div>
	<!-- end of home-intro-text -->
	
	<?php
	get_template_part ( 'template-parts/content-our-tours' );
	get_template_part( 'template-parts/testimonials' ); 
			
		endwhile; ?>
			</main><!-- #main -->

<?php
get_footer();
