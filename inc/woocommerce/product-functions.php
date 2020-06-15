<?php

// Remove items from single product page
function remove_items_init() {

	remove_post_type_support( 'product', 'editor' ); //remove wp-editor from product
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
}
add_action( 'init', 'remove_items_init' );


// Open banner
function open_banner_container(){?>
	<div class="banner single-tour"><?php
}
add_action('woocommerce_before_single_product_summary', 'open_banner_container', 4);

function add_title_back(){
// Move title into a div for the banner
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5);
}
add_action( 'init', 'add_title_back' );

// Add banner image and close banner-container
function close_banner_container(){
	// Banner Image
		if( get_field('banner_image') ): ?>
				<img src="<?php the_field('banner_image'); ?>" alt="People river rafting" />
		<?php endif; ?>
	</div> <!-- end single-tour banner container --> <?php
}
add_action('woocommerce_before_single_product_summary', 'close_banner_container');

function remove_short_description() {
	remove_meta_box( 'postexcerpt', 'product', 'normal'); //remove short description field from product editor
}
add_action('add_meta_boxes', 'remove_short_description', 999);

// Add content to single product page
function add_content_to_single_product() {
	get_template_part( 'template-parts/product' );
	// Add title above calendar cart ?>
	<h2 class="book-trip">Book your trip</h2> <?php
}
add_action ('woocommerce_single_product_summary', 'add_content_to_single_product', 8);

// Add FAQ button after calendar cart
function add_faq() {?>
	<!-- CTAs -->
	<div class="faq-btn"><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a></div> <?php
}
add_action ('woocommerce_after_single_product_summary', 'add_faq', 10);