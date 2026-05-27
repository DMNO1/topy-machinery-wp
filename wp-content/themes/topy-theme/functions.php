<?php
/**
 * TOP Y Machinery Theme Functions
 *
 * @package TopyTheme
 * @version 1.2.0
 */

defined('ABSPATH') || exit;

// Theme constants
define('TOPY_VERSION', '1.2.0');
define('TOPY_DIR', get_template_directory());
define('TOPY_URI', get_template_directory_uri());

// Theme setup
function topy_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    
    register_nav_menus(array(
        'primary'    => __('Primary Menu', 'topy'),
        'footer'     => __('Footer Menu', 'topy'),
        'products'   => __('Products Menu', 'topy'),
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'topy_theme_setup');

// Enqueue styles and scripts
function topy_scripts() {
    wp_enqueue_style('topy-style', get_stylesheet_uri(), array(), TOPY_VERSION);
    wp_enqueue_style('topy-main', TOPY_URI . '/assets/css/main.css', array(), TOPY_VERSION);
    wp_enqueue_style('topy-responsive', TOPY_URI . '/assets/css/responsive.css', array(), TOPY_VERSION);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Google Fonts - Inter for modern look
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    
    wp_enqueue_script('topy-main', TOPY_URI . '/assets/js/main.js', array('jquery'), TOPY_VERSION, true);
    wp_enqueue_script('topy-slider', TOPY_URI . '/assets/js/slider.js', array('jquery'), TOPY_VERSION, true);
    
    // Pass AJAX URL to JavaScript
    wp_localize_script('topy-main', 'topy_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('topy_contact_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'topy_scripts');

// Fallback menu
function topy_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="' . home_url('/products') . '">Products</a></li>';
    echo '<li><a href="' . home_url('/solutions') . '">Solutions</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About</a></li>';
    echo '<li><a href="' . home_url('/contact') . '">Contact</a></li>';
    echo '</ul>';
}

// Contact form AJAX handler
function topy_handle_contact_form() {
    check_ajax_referer('topy_contact_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $product_interest = sanitize_text_field($_POST['product_interest'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
    }
    
    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
    }
    
    // Send email to admin
    $to = get_option('admin_email');
    $subject = '[TOP Y Website] New Contact Form Submission from ' . $name;
    
    $body = "New contact form submission:\n\n";
    $body .= "Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n";
    $body .= "Company: {$company}\n";
    $body .= "Product Interest: {$product_interest}\n";
    $body .= "Message:\n{$message}\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: {$name} <{$email}>");
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Message sent successfully.');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_topy_contact_form', 'topy_handle_contact_form');
add_action('wp_ajax_nopriv_topy_contact_form', 'topy_handle_contact_form');

// Add preload hints for performance
function topy_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://cdnjs.cloudflare.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'topy_resource_hints', 10, 2);

// Remove WordPress version from head for security
remove_action('wp_head', 'wp_generator');

// Add custom meta tags
function topy_meta_tags() {
    echo '<meta name="theme-color" content="#0066cc">' . "\n";
    echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">' . "\n";
}
add_action('wp_head', 'topy_meta_tags');

// Include theme modules
require_once TOPY_DIR . '/inc/custom-post-types.php';
require_once TOPY_DIR . '/inc/theme-options.php';
require_once TOPY_DIR . '/inc/widgets.php';
