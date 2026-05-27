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
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Tailored food packaging solutions for every industry need — from granular snacks to liquid beverages.</p>
    </div>
</section>

<!-- Solutions Overview -->
<section class="product-categories-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Solutions</span>
            <h2>Food Packaging Solutions</h2>
            <p>TOP Y provides comprehensive packaging solutions tailored to different food product types and production requirements.</p>
        </div>

        <div class="categories-grid">
            <!-- Granular Solution -->
            <div class="category-card reveal delay-1">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-granular.svg" alt="Granular Packaging Solutions" loading="lazy">
                </div>
                <div class="category-content">
                    <h3>Granular Packaging Solutions</h3>
                    <p>Complete packaging lines for nuts, candies, chips, rice, and other granular products. Features multi-head weighers, VFFS machines, and auto-cartoning for high throughput and minimal giveaway.</p>
                    <a href="/solutions/granular" class="btn-link">Learn More →</a>
                </div>
            </div>

            <!-- Liquid/Sauce Solution -->
            <div class="category-card reveal delay-2">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-liquid.svg" alt="Liquid/Sauce Packaging Solutions" loading="lazy">
                </div>
                <div class="category-content">
                    <h3>Liquid/Sauce Packaging Solutions</h3>
                    <p>Specialized solutions for sauces, beverages, oils, and liquid foods. Includes piston fillers, doypack machines, and aseptic packaging systems for shelf-stable products.</p>
                    <a href="/solutions/liquid" class="btn-link">Learn More →</a>
                </div>
            </div>

            <!-- Solid Solution -->
            <div class="category-card reveal delay-3">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-solid.svg" alt="Solid Packaging Solutions" loading="lazy">
                </div>
                <div class="category-content">
                    <h3>Block/Solid Packaging Solutions</h3>
                    <p>Packaging solutions for meat, cheese, tofu, fruits, and solid food items. Tray sealing, vacuum packaging, and modified atmosphere packaging (MAP) for extended freshness.</p>
                    <a href="/solutions/solid" class="btn-link">Learn More →</a>
                </div>
            </div>

            <!-- Powder Solution -->
            <div class="category-card reveal delay-4">
                <div class="category-image">
                    <img src="<?php echo TOPY_URI; ?>/assets/images/cat-powder.svg" alt="Powder Packaging Solutions" loading="lazy">
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
<section class="custom-solutions-section">
    <div class="container">
        <div class="custom-solutions-content">
            <div class="solutions-text reveal-left">
                <h2>Custom Solutions for Your Unique Needs</h2>
                <p>Every food production line is different. TOP Y's engineering team works closely with you to design, build, and commission packaging solutions that fit your exact requirements — from single machines to complete turnkey lines.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Free needs assessment and consultation</li>
                    <li><i class="fas fa-check-circle"></i> 3D simulation and layout design</li>
                    <li><i class="fas fa-check-circle"></i> Prototype testing and validation</li>
                    <li><i class="fas fa-check-circle"></i> On-site installation and training</li>
                    <li><i class="fas fa-check-circle"></i> Lifetime technical support</li>
                </ul>
                <a href="/contact" class="btn btn-orange">Start Your Custom Project →</a>
            </div>
            <div class="solutions-image reveal-right">
                <img src="<?php echo TOPY_URI; ?>/assets/images/custom-solutions.svg" alt="Custom Packaging Solutions" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="innovation-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Our Process</span>
            <h2>Our Solution Process</h2>
            <p>From concept to commissioning, we ensure seamless project delivery.</p>
        </div>
        <div class="process-grid">
            <div class="process-step reveal delay-1">
                <span class="process-step-number">01</span>
                <div class="process-step-icon"><i class="fas fa-comments"></i></div>
                <h3>Consultation</h3>
                <p>We analyze your production needs, product types, and space requirements.</p>
            </div>
            <div class="process-step reveal delay-2">
                <span class="process-step-number">02</span>
                <div class="process-step-icon"><i class="fas fa-drafting-compass"></i></div>
                <h3>Design</h3>
                <p>Custom engineering with 3D modeling and simulation for optimal performance.</p>
            </div>
            <div class="process-step reveal delay-3">
                <span class="process-step-number">03</span>
                <div class="process-step-icon"><i class="fas fa-industry"></i></div>
                <h3>Manufacturing</h3>
                <p>Precision manufacturing with food-grade materials and strict QC testing.</p>
            </div>
            <div class="process-step reveal delay-4">
                <span class="process-step-number">04</span>
                <div class="process-step-icon"><i class="fas fa-rocket"></i></div>
                <h3>Delivery</h3>
                <p>Installation, commissioning, and operator training at your facility.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content reveal">
            <h2>Ready to Optimize Your Packaging Line?</h2>
            <p>Tell us about your project and get a customized solution proposal within 24 hours.</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-secondary">Get Free Consultation</a>
                <a href="/quote" class="btn btn-orange">Request A Quote</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
