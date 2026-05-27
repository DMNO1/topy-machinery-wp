<?php
/**
 * Template Name: Solutions
 * Description: Food packaging solutions page
 *
 * @package TopyTheme
 */

get_header();
?>

<!-- Page Hero Banner -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 80px 0; color: var(--white); text-align: center;">
    <div class="container">
        <h1 style="font-size: 42px; margin-bottom: 15px;"><?php the_title(); ?></h1>
        <p style="font-size: 18px; max-width: 600px; margin: 0 auto;">Tailored food packaging solutions for every industry need — from granular snacks to liquid beverages.</p>
    </div>
</section>

<!-- Solutions Overview -->
<section class="product-categories-section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Food Packaging Solutions</h2>
            <p>TOP Y provides comprehensive packaging solutions tailored to different food product types and production requirements.</p>
        </div>

        <div class="categories-grid">
            <!-- Granular Solution -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-granular.jpg" alt="Granular Packaging Solutions">
                </div>
                <div class="category-content">
                    <h3>Granular Packaging Solutions</h3>
                    <p>Complete packaging lines for nuts, candies, chips, rice, and other granular products. Features multi-head weighers, VFFS machines, and auto-cartoning for high throughput and minimal giveaway.</p>
                    <a href="/solutions/granular" class="btn-link">Learn More →</a>
                </div>
            </div>

            <!-- Liquid/Sauce Solution -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-liquid.jpg" alt="Liquid/Sauce Packaging Solutions">
                </div>
                <div class="category-content">
                    <h3>Liquid/Sauce Packaging Solutions</h3>
                    <p>Specialized solutions for sauces, beverages, oils, and liquid foods. Includes piston fillers, doypack machines, and aseptic packaging systems for shelf-stable products.</p>
                    <a href="/solutions/liquid" class="btn-link">Learn More →</a>
                </div>
            </div>

            <!-- Solid Solution -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-solid.jpg" alt="Solid Packaging Solutions">
                </div>
                <div class="category-content">
                    <h3>Block/Solid Packaging Solutions</h3>
                    <p>Packaging solutions for meat, cheese, tofu, fruits, and solid food items. Tray sealing, vacuum packaging, and modified atmosphere packaging (MAP) for extended freshness.</p>
                    <a href="/solutions/solid" class="btn-link">Learn More →</a>
                </div>
            </div>

            <!-- Powder Solution -->
            <div class="category-card">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-powder.jpg" alt="Powder Packaging Solutions">
                </div>
                <div class="category-content">
                    <h3>Powder Packaging Solutions</h3>
                    <p>Dust-free packaging systems for milk powder, protein powder, flour, spices, and instant coffee. Auger fillers with nitrogen flushing for product freshness and safety.</p>
                    <a href="/solutions/powder" class="btn-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Solutions Section -->
<section class="custom-solutions-section" style="padding: 80px 0; background: var(--primary-color); color: var(--white);">
    <div class="container">
        <div class="custom-solutions-content" style="display: flex; align-items: center; gap: 50px;">
            <div class="solutions-text" style="flex: 1;">
                <h2 style="font-size: 36px; margin-bottom: 20px;">Custom Solutions for Your Unique Needs</h2>
                <p style="margin-bottom: 20px; font-size: 16px; line-height: 1.8;">Every food production line is different. TOP Y's engineering team works closely with you to design, build, and commission packaging solutions that fit your exact requirements — from single machines to complete turnkey lines.</p>
                <ul style="list-style: none; margin-bottom: 30px;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 10px;"></i> Free needs assessment and consultation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 10px;"></i> 3D simulation and layout design</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 10px;"></i> Prototype testing and validation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 10px;"></i> On-site installation and training</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 10px;"></i> Lifetime technical support</li>
                </ul>
                <a href="/contact" class="btn btn-primary" style="background: var(--secondary-color); color: var(--white); padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600;">Start Your Custom Project →</a>
            </div>
            <div class="solutions-image" style="flex: 1;">
                <img src="<?php echo TOPY_URI; ?>/assets/images/custom-solutions.jpg" alt="Custom Packaging Solutions" style="width: 100%; border-radius: 8px;">
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="innovation-section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Our Solution Process</h2>
            <p>From concept to commissioning, we ensure seamless project delivery.</p>
        </div>
        <div class="innovation-features" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 40px;">
            <div class="feature-item" style="text-align: center; padding: 30px; background: var(--bg-light); border-radius: 8px;">
                <div class="feature-icon" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-comments"></i></div>
                <h3 style="margin-bottom: 10px;">01. Consultation</h3>
                <p style="color: var(--text-light); font-size: 14px;">We analyze your production needs, product types, and space requirements.</p>
            </div>
            <div class="feature-item" style="text-align: center; padding: 30px; background: var(--bg-light); border-radius: 8px;">
                <div class="feature-icon" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-drafting-compass"></i></div>
                <h3 style="margin-bottom: 10px;">02. Design</h3>
                <p style="color: var(--text-light); font-size: 14px;">Custom engineering with 3D modeling and simulation for optimal performance.</p>
            </div>
            <div class="feature-item" style="text-align: center; padding: 30px; background: var(--bg-light); border-radius: 8px;">
                <div class="feature-icon" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-industry"></i></div>
                <h3 style="margin-bottom: 10px;">03. Manufacturing</h3>
                <p style="color: var(--text-light); font-size: 14px;">Precision manufacturing with food-grade materials and strict QC testing.</p>
            </div>
            <div class="feature-item" style="text-align: center; padding: 30px; background: var(--bg-light); border-radius: 8px;">
                <div class="feature-icon" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-rocket"></i></div>
                <h3 style="margin-bottom: 10px;">04. Delivery</h3>
                <p style="color: var(--text-light); font-size: 14px;">Installation, commissioning, and operator training at your facility.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 80px 0; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); color: var(--white); text-align: center;">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Optimize Your Packaging Line?</h2>
            <p>Tell us about your project and get a customized solution proposal within 24 hours.</p>
            <div class="cta-buttons" style="margin-top: 30px;">
                <a href="/contact" class="btn btn-secondary" style="background: transparent; color: var(--white); border: 2px solid var(--white); padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600;">Get Free Consultation</a>
                <a href="/quote" class="btn btn-primary" style="background: var(--secondary-color); color: var(--white); padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600; margin-left: 15px;">Request A Quote</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
