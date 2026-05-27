<?php
/**
 * 404 Error Page Template
 *
 * @package TopyTheme
 */

get_header();
?>

<!-- 404 Error Section -->
<section class="error-404-section">
    <div class="container">
        <div class="error-404-content">
            <!-- Error Icon -->
            <div class="error-404-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            
            <!-- Error Code -->
            <h1 class="error-404-code">404</h1>
            
            <!-- Error Message -->
            <h2>Page Not Found</h2>
            <p>
                Sorry, the page you are looking for doesn't exist or has been moved. 
                Please check the URL or navigate back to explore our food packaging solutions.
            </p>
            
            <!-- Action Buttons -->
            <div style="margin-bottom: 40px;">
                <a href="<?php echo home_url('/'); ?>" class="btn btn-primary" style="margin-right: 15px;">
                    <i class="fas fa-home" style="margin-right: 8px;"></i> Back to Home
                </a>
                <a href="/products" class="btn btn-outline">
                    <i class="fas fa-box" style="margin-right: 8px;"></i> View Products
                </a>
            </div>
            
            <!-- Search Box -->
            <div class="error-search-box">
                <h3>Search Our Website</h3>
                <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="error-search-form">
                    <input type="text" name="s" placeholder="Search for products, solutions...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 style="margin-bottom: 15px; font-size: 16px; color: var(--text-light);">Popular Pages</h3>
                <div class="quick-links">
                    <a href="/products">Products</a>
                    <a href="/solutions">Solutions</a>
                    <a href="/about">About Us</a>
                    <a href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
