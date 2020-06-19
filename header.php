<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sea_to_Sky_Rapids
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'seatosky' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="inner-width">
		<div class="site-branding">
			
			<a  href=" <?php echo esc_url( home_url( '/' ) ); ?>"><div class="custome-logo"><?php the_custom_logo(); ?></div></a>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$seatosky_description = get_bloginfo( 'description', 'display' );
			if ( $seatosky_description || is_customize_preview() ) :?>
				
			<?php endif; ?>
		</div><!-- .site-branding -->
			
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'seatosky' ); ?></span>
			<div class="button-line"></div>
			<div class="button-line"></div>
			<div class="button-line"></div>
		</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu_id'        => 'header-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div> <!-- .inner width -->
	</header><!-- #masthead -->
