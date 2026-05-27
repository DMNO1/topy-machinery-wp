<?php
/**
 * Custom Post Types for TOP Y Machinery
 *
 * @package TopyTheme
 */

// Products Post Type
function topy_register_products() {
    $args = array(
        'labels' => array(
            'name'          => 'Products',
            'singular_name' => 'Product',
            'add_new'       => 'Add New Product',
            'add_new_item'  => 'Add New Product',
            'edit_item'     => 'Edit Product',
            'new_item'      => 'New Product',
            'view_item'     => 'View Product',
            'search_items'  => 'Search Products',
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-products',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'      => array('slug' => 'products'),
        'show_in_rest' => true,
    );
    register_post_type('product', $args);
}
add_action('init', 'topy_register_products');

// Product Categories Taxonomy
function topy_register_product_categories() {
    $args = array(
        'labels' => array(
            'name'          => 'Product Categories',
            'singular_name' => 'Product Category',
        ),
        'public'       => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'product-category'),
    );
    register_taxonomy('product_category', 'product', $args);
}
add_action('init', 'topy_register_product_categories');

// Solutions Post Type
function topy_register_solutions() {
    $args = array(
        'labels' => array(
            'name'          => 'Solutions',
            'singular_name' => 'Solution',
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-lightbulb',
        'supports'     => array('title', 'editor', 'thumbnail'),
        'rewrite'      => array('slug' => 'solutions'),
        'show_in_rest' => true,
    );
    register_post_type('solution', $args);
}
add_action('init', 'topy_register_solutions');

// Testimonials Post Type
function topy_register_testimonials() {
    $args = array(
        'labels' => array(
            'name'          => 'Testimonials',
            'singular_name' => 'Testimonial',
        ),
        'public'       => false,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array('title', 'editor'),
        'show_in_rest' => true,
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'topy_register_testimonials');
