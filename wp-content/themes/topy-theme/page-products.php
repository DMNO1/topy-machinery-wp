<?php
/**
 * Template Name: Products
 * Description: Products listing page with category filters
 *
 * @package TopyTheme
 */

get_header();
?>

<!-- Page Hero Banner -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 80px 0; color: var(--white); text-align: center;">
    <div class="container">
        <h1 style="font-size: 42px; margin-bottom: 15px;"><?php the_title(); ?></h1>
        <p style="font-size: 18px; max-width: 600px; margin: 0 auto;">TOP Y provides comprehensive food packaging machinery for all product types — granular, liquid, solid, and powder.</p>
    </div>
</section>

<!-- Product Categories Section -->
<section class="product-categories-section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Our Product Categories</h2>
            <p>Explore our full range of intelligent food packaging machinery, categorized by product type.</p>
        </div>

        <div class="categories-grid">
            <!-- Granular -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-granular.jpg" alt="Granular Food Packaging Machines">
                </div>
                <div class="category-content">
                    <h3>Granular Food Packaging Machines</h3>
                    <p>Ideal for precise weighing and packaging of candies, nuts, potato chips, and other granular or irregular foods to maintain freshness and boost yield. Our granular machines support multi-head weighing and high-speed packaging for maximum efficiency.</p>
                    <a href="/products/granular" class="btn-link">Explore Granular Machines →</a>
                </div>
            </div>

            <!-- Liquid/Sauce -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-liquid.jpg" alt="Liquid/Sauce Food Packaging Machines">
                </div>
                <div class="category-content">
                    <h3>Liquid/Sauce Food Packaging Machines</h3>
                    <p>Designed for sauces, beverages, mayonnaise, and high-viscosity foods, ensuring leak-proof and contamination-free sealing. Perfect for hot-fill and cold-fill applications with consistent dosing accuracy.</p>
                    <a href="/products/liquid" class="btn-link">Explore Liquid Machines →</a>
                </div>
            </div>

            <!-- Block/Solid -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-solid.jpg" alt="Block/Solid Food Packaging Machines">
                </div>
                <div class="category-content">
                    <h3>Block/Solid Food Packaging Machines</h3>
                    <p>For meat chunks, fruits, vegetables, and solid foods, offering stable filling and multi-layer protection compliant with food safety standards. Versatile forming and sealing options for various product shapes.</p>
                    <a href="/products/solid" class="btn-link">Explore Solid Machines →</a>
                </div>
            </div>

            <!-- Powder -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-powder.jpg" alt="Powder Food Packaging Machines">
                </div>
                <div class="category-content">
                    <h3>Powder Food Packaging Machines</h3>
                    <p>For soy milk powder, flour, coffee powder, and other powders — precise metering and sealing to reduce dust and improve hygiene. Features auger filler technology for accurate and clean packaging.</p>
                    <a href="/products/powder" class="btn-link">Explore Powder Machines →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Machine Types Overview -->
<section class="services-section" style="padding: 80px 0; background: var(--bg-light);">
    <div class="container">
        <div class="section-header">
            <h2>Machine Types</h2>
            <p>We offer a complete lineup of packaging machinery types to meet every production requirement.</p>
        </div>
        <div class="services-grid">
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-box"></i></div>
                <h3>VFFS Machines</h3>
                <p>Vertical Form Fill Seal machines for high-speed bag packaging of food products.</p>
            </div>
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-shopping-bag"></i></div>
                <h3>Doypack Machines</h3>
                <p>Stand-up pouch packaging machines for premium food product presentation.</p>
            </div>
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-arrows-alt-h"></i></div>
                <h3>Horizontal Machines</h3>
                <p>Horizontal flow wrap machines for cookies, chocolates, and solid food items.</p>
            </div>
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-fill-drip"></i></div>
                <h3>Filling Machines</h3>
                <p>Precision filling equipment for liquid, paste, and granular food products.</p>
            </div>
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-tag"></i></div>
                <h3>Labeling Machines</h3>
                <p>Automatic labeling systems for food packaging compliance and branding.</p>
            </div>
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-cogs"></i></div>
                <h3>Complete Lines</h3>
                <p>Turnkey packaging line solutions integrating multiple machine types.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 80px 0; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); color: var(--white); text-align: center;">
    <div class="container">
        <div class="cta-content">
            <h2>Need Help Choosing the Right Machine?</h2>
            <p>Our experts will recommend the best packaging solution for your food products.</p>
            <div class="cta-buttons" style="margin-top: 30px;">
                <a href="/contact" class="btn btn-secondary" style="background: transparent; color: var(--white); border: 2px solid var(--white); padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600;">Contact Our Experts</a>
                <a href="/quote" class="btn btn-primary" style="background: var(--secondary-color); color: var(--white); padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; margin-left: 15px;">Get A Free Quote</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
