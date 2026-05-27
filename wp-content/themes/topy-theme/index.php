<?php
/**
 * Main template file
 *
 * @package TopyTheme
 */

get_header(); 
?>

<!-- Hero Slider Section -->
<?php get_template_part('template-parts/hero-slider'); ?>

<!-- Services Section -->
<?php get_template_part('template-parts/services'); ?>

<!-- Product Categories Section -->
<?php get_template_part('template-parts/product-categories'); ?>

<!-- Custom Solutions Section -->
<?php get_template_part('template-parts/custom-solutions'); ?>

<!-- Innovation Section -->
<?php get_template_part('template-parts/innovation'); ?>

<!-- Why Choose Us Section -->
<?php get_template_part('template-parts/why-choose-us'); ?>

<!-- Testimonials Section -->
<?php get_template_part('template-parts/testimonials'); ?>

<!-- CTA Section -->
<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>
