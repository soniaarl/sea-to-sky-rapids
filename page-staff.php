<?php
/**
 * The template for displaying the Who We Are page
 *
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
<?php while ( have_posts() ) : the_post(); ?>
<main id="primary" class="site-main">

    <div class="banner who-we-are">
    
        <?php the_post_thumbnail( 'full' ); ?>
        <header class="page-header">
            <?php the_title( '<h1 class="contact-h1">', '</h1>' ); ?>
        </header>
    </div><!-- end who-we-are-banner -->
        
        <div class ="staff-about"><?php the_content(); ?></div>
        <?php get_template_part( 'template-parts/testimonials'); ?>
        
        <?php
            $args = array (
                'post_type' => 'sts-staff',
                'posts_per_page' => -1,
            );
            $staff_query = new WP_Query( $args );
            if ( $staff_query->have_posts() ): ?>
            	<h2>Meet The Team</h2>
                <div class="staff-card-group">
                    <?php while ( $staff_query->have_posts() ):
                        $staff_query->the_post() ?>
                        
                        <?php if (function_exists('the_field')) : ?>
                            <div class="staff-card">
                                <?php the_post_thumbnail('large'); ?>
                                <h3 class="staff-name"><?php the_title() ?> </h3>
                                <p class="staff-position"><?php the_field('position'); ?> </p>
                                <p class="field-label">Employee Since</p>
                                <p class="staff-employee"><?php the_field('employee_since'); ?> </p>
                                <p class="field-label">Hometown</p>
                                <p class="staff-hometown"><?php the_field('home_town'); ?> </p>
                                <p class="field-label">About</p>
                                <p class="staff-bio"><?php the_field('bio'); ?> </p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
    </main>
<?php endwhile; ?>

<?php
get_footer();

