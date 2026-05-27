<?php
/**
 * 404 Error Page Template
 *
 * @package TopyTheme
 */

get_header();
?>

<!-- 404 Error Section -->
<section style="padding: 120px 0; text-align: center; min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <!-- Error Icon -->
            <div style="margin-bottom: 30px;">
                <i class="fas fa-exclamation-triangle" style="font-size: 80px; color: var(--secondary-color);"></i>
            </div>
            
            <!-- Error Code -->
            <h1 style="font-size: 120px; font-weight: 700; color: var(--primary-color); line-height: 1; margin-bottom: 10px;">404</h1>
            
            <!-- Error Message -->
            <h2 style="font-size: 28px; margin-bottom: 15px; color: var(--text-color);">Page Not Found</h2>
            <p style="font-size: 16px; color: var(--text-light); margin-bottom: 40px; line-height: 1.8;">
                Sorry, the page you are looking for doesn't exist or has been moved. 
                Please check the URL or navigate back to explore our food packaging solutions.
            </p>
            
            <!-- Action Buttons -->
            <div style="margin-bottom: 40px;">
                <a href="<?php echo home_url('/'); ?>" class="btn btn-primary" style="background: var(--primary-color); color: var(--white); padding: 14px 35px; border-radius: 4px; text-decoration: none; font-weight: 600; margin-right: 15px;">
                    <i class="fas fa-home" style="margin-right: 8px;"></i> Back to Home
                </a>
                <a href="/products" class="btn btn-secondary" style="background: transparent; color: var(--primary-color); border: 2px solid var(--primary-color); padding: 14px 35px; border-radius: 4px; text-decoration: none; font-weight: 600;">
                    <i class="fas fa-box" style="margin-right: 8px;"></i> View Products
                </a>
            </div>
            
            <!-- Search Box -->
            <div style="background: var(--bg-light); padding: 30px; border-radius: 8px;">
                <h3 style="margin-bottom: 15px; font-size: 18px;">Search Our Website</h3>
                <form role="search" method="get" action="<?php echo home_url('/'); ?>" style="display: flex; gap: 10px; max-width: 450px; margin: 0 auto;">
                    <input type="text" name="s" placeholder="Search for products, solutions..." style="flex: 1; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px;">
                    <button type="submit" style="background: var(--primary-color); color: var(--white); border: none; padding: 12px 25px; border-radius: 4px; cursor: pointer; font-size: 15px;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            
            <!-- Quick Links -->
            <div style="margin-top: 40px;">
                <h3 style="margin-bottom: 15px; font-size: 16px; color: var(--text-light);">Popular Pages</h3>
                <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                    <a href="/products" style="color: var(--primary-color); text-decoration: none; font-weight: 500;">Products</a>
                    <a href="/solutions" style="color: var(--primary-color); text-decoration: none; font-weight: 500;">Solutions</a>
                    <a href="/about" style="color: var(--primary-color); text-decoration: none; font-weight: 500;">About Us</a>
                    <a href="/contact" style="color: var(--primary-color); text-decoration: none; font-weight: 500;">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
