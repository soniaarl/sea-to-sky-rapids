<?php

// Remove items from single product page
function remove_items_init() {

	remove_post_type_support( 'product', 'editor' ); //remove wp-editor from product
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
}
add_action( 'init', 'remove_items_init' );

function remove_short_description() {
	remove_meta_box( 'postexcerpt', 'product', 'normal'); //remove short description field from product editor
}
add_action('add_meta_boxes', 'remove_short_description', 999);

// Add content to single product page
function add_content_to_single_product() {
	get_template_part( 'template-parts/product', 'none' );
}
add_action ('woocommerce_single_product_summary', 'add_content_to_single_product', 8);