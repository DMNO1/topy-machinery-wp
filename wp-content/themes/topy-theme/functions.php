<?php
/**
 * TOP Y Machinery Theme Functions
 *
 * @package TopyTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

// Theme constants
define('TOPY_VERSION', '1.0.0');
define('TOPY_DIR', get_template_directory());
define('TOPY_URI', get_template_directory_uri());

// Theme setup
function topy_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('editor-styles');
    
    register_nav_menus(array(
        'primary'    => __('Primary Menu', 'topy'),
        'footer'     => __('Footer Menu', 'topy'),
        'products'   => __('Products Menu', 'topy'),
    ));
}
add_action('after_setup_theme', 'topy_theme_setup');

// Enqueue styles and scripts
function topy_scripts() {
    wp_enqueue_style('topy-style', get_stylesheet_uri(), array(), TOPY_VERSION);
    wp_enqueue_style('topy-main', TOPY_URI . '/assets/css/main.css', array(), TOPY_VERSION);
    wp_enqueue_style('topy-responsive', TOPY_URI . '/assets/css/responsive.css', array(), TOPY_VERSION);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    wp_enqueue_script('topy-main', TOPY_URI . '/assets/js/main.js', array('jquery'), TOPY_VERSION, true);
    wp_enqueue_script('topy-slider', TOPY_URI . '/assets/js/slider.js', array('jquery'), TOPY_VERSION, true);
}
add_action('wp_enqueue_scripts', 'topy_scripts');

// Include theme modules
require_once TOPY_DIR . '/inc/custom-post-types.php';
require_once TOPY_DIR . '/inc/theme-options.php';
require_once TOPY_DIR . '/inc/widgets.php';
