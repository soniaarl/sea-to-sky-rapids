<?php


function sts_register_custom_post_types() {

    //register staff cpt


    $labels = array(
        'name'               => _x( 'staff', 'post type general name' ),
        'singular_name'      => _x( 'staff', 'post type singular name'),
        'menu_name'          => _x( 'staff', 'admin menu' ),
        'name_admin_bar'     => _x( 'staff', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'stafs' ),
        'add_new_item'       => __( 'Add New Student' ),
        'new_item'           => __( 'New Student' ),
        'edit_item'          => __( 'Edit Student' ),
        'view_item'          => __( 'View Student' ),
        'all_items'          => __( 'All staff' ),
        'search_items'       => __( 'Search staff' ),
        'parent_item_colon'  => __( 'Parent staff:' ),
        'not_found'          => __( 'No staff found.' ),
        'not_found_in_trash' => __( 'No staff found in Trash.' ),
        'archives'           => __( 'Student Archives'),
        'insert_into_item'   => __( 'Insert into Student'),
        'uploaded_to_this_item' => __( 'Uploaded to this Student'),
        'filter_item_list'   => __( 'Filter staff list'),
        'items_list_navigation' => __( 'staff list navigation'),
        'items_list'         => __( 'staff list'),
        'featured_image'     => __( 'Student feature image'),
        'set_featured_image' => __( 'Set Student feature image'),
        'remove_featured_image' => __( 'Remove Student feature image'),
        'use_featured_image' => __( 'Use as feature image'),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'meet-the-team' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
    );
    register_post_type( 'sts-staff', $args );


    //register testimonial CPT
    $labels = array(
        'name'               => _x( 'Testimonials', 'post type general name'  ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name'  ),
        'menu_name'          => _x( 'Testimonials', 'admin menu'  ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'testimonial' ),
        'add_new_item'       => __( 'Add New Testimonial' ),
        'new_item'           => __( 'New Testimonial' ),
        'edit_item'          => __( 'Edit Testimonial' ),
        'view_item'          => __( 'View Testimonial'  ),
        'all_items'          => __( 'All Testimonials' ),
        'search_items'       => __( 'Search Testimonials' ),
        'parent_item_colon'  => __( 'Parent Testimonials:' ),
        'not_found'          => __( 'No testimonials found.' ),
        'not_found_in_trash' => __( 'No testimonials found in Trash.' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array( array( 'core/quote' ) ),
        'template_lock'      => 'all'
    );

    register_post_type( 'sts-testimonials', $args );

    }
    add_action( 'init', 'sts_register_custom_post_types' );