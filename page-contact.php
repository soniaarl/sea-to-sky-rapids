<?php
/**
 * The template for displaying the contact page
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

<main id="primary" class="site-main contact">

	<div class="banner contact">
		<?php while ( have_posts() ) : the_post(); 
		the_post_thumbnail( 'full' ); ?>
		<header class="page-header">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header><!-- .page-header -->
	</div><!-- end contact-banner -->

	<div class="contact-main-content">

		<div class="entry-content">

			<div class="contact-info-section-one">

				<?php if(function_exists( 'get_field' ) ) : ?>

					<div class="contact-book-online">
						<div class="contact-titles">
							<?php get_template_part( 'images/check' );
							if ( get_field( 'contact_book_online_title' ) ) : ?>
								<h2><a href="<?php echo esc_url( get_page_link(39) );?>"><?php the_field( 'contact_book_online_title' ); ?></a></h2>
							<?php endif; ?>
						</div><!-- end contact-titles -->
						<?php if ( get_field ( 'contact_book_online_text') ) : ?>
							<p><?php the_field( 'contact_book_online_text' ); ?></p>
						<?php endif; ?>
					</div><!-- end contact-book-online -->

					<div class="contact-faq">
						<div class="contact-titles">
							<?php get_template_part( 'images/faq' );
							if ( get_field( 'contact_faq_title' ) ) : ?>
								<h2><a href="<?php echo esc_url( get_page_link(41) );?>"><?php the_field( 'contact_faq_title' ); ?></a></h2>
							<?php endif; ?>
						</div><!-- end contact-titles -->
						<?php if ( get_field ( 'contact_faq_text') ) : ?>
							<p><?php the_field( 'contact_faq_text' ); ?></p>
						<?php endif; ?>
					</div><!-- end contact-faq -->

			</div><!-- end contact-info-section-one -->

			<div class="office-address">
				<?php 
					$location = get_field('map');
					if( $location ) {
						// Loop over segments and construct HTML.
						$address = '';
						foreach( array('street_number', 'street_name', 'city', 'state', 'post_code') as $i => $k ) {
							if( isset( $location[ $k ] ) ) {
								$address .= sprintf( '<span class="segment-%s">%s</span> ', $k, $location[ $k ] );
							}
						}
						// Trim trailing comma.
						$address = trim( $address, ', ' ); 
						// Display HTML. ?>
						<h2 class="office-location">Office Location / Tour Meeting Point</h2>
						<p class="company-title">Sea to Sky Rapids</p>
						<p class="address"><?php echo $address ?></p>
					<?php } ?>
			</div><!-- end office-address --></div>

				<?php the_content(); ?>

			<div class="contact-info-section-two">

					<div class="contact-email">
						<div class="contact-email-title">
							<div class="contact-titles">
								<?php get_template_part( 'images/email' );
								if ( get_field( 'contact_email_title' ) ) : ?>
									<h2><?php the_field( 'contact_email_title' ); ?></h2>
								<?php endif; ?>
							</div><!-- end contact-titles -->
							<?php if ( get_field ( 'contact_email_text') ) : ?>
								<p><a href="mailto:<?php the_field('contact_email_text')?>"><?php the_field( 'contact_email_text' ); ?></a></p>
							<?php endif; ?>
						</div>
					</div><!-- end contact-email -->

					<div class="contact-phone">
						<div class="contact-phone-title">
							<div class="contact-titles">
								<?php get_template_part( 'images/phone' );
								if ( get_field( 'contact_phone_title' ) ) : ?>
									<h2><?php the_field( 'contact_phone_title' ); ?></h2>
								<?php endif; ?>
							</div><!-- end contact-titles -->
							<?php if ( get_field ( 'contact_phone_text') ) : ?>
								<p><a href="tel:<?php the_field('contact_phone_text')?>"><?php the_field( 'contact_phone_text' ); ?></a></p>
							<?php endif; ?>
						</div>
					</div><!-- end contact-email -->

				</div><!-- end contact-info-section-two -->

				<div class="contact-social">
				<h2>Connect with us</h2>
				<?php if ( have_rows ('social') ) :
					while( have_rows( 'social' ) ): the_row();
						if ( get_sub_field( 'social_link' ) && get_sub_field('social_platform') ) : ?>
						<a href="<?php the_sub_field('social_link') ?>" target="_blank"><?php get_template_part( './images/'.get_sub_field('social_platform', 39).''); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				</div><!-- end contact-social-->

				<?php endif; ?>

		</div><!-- .entry-content -->
	
	</div><!-- end contact-main-content -->

	<?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();