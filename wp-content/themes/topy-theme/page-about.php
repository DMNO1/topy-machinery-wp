<?php
/**
 * Template Name: About
 * Description: About us page with company info, history, and team
 *
 * @package TopyTheme
 */

get_header();
?>

<!-- Page Hero Banner -->
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>A technology-driven leader in intelligent food packaging machinery since 2011.</p>
    </div>
</section>

<!-- Company Introduction -->
<section class="product-categories-section">
    <div class="container">
        <div class="custom-solutions-content">
            <div class="solutions-text reveal-left">
                <h2 style="color: var(--primary-color);">About TOP Y Machinery</h2>
                <p>Founded in 2011, TOP Y Machinery Co., Ltd. is a technology-driven leading manufacturer of intelligent food packaging machinery. We specialize in designing, manufacturing, and delivering high-performance packaging solutions for the global food industry.</p>
                <p>With a state-of-the-art manufacturing facility in Guangdong, China, and a dedicated R&D team of over 50 engineers, we continuously innovate to meet the evolving demands of food packaging automation.</p>
                <p>Our machines are exported to over 60 countries worldwide, serving food manufacturers from small businesses to multinational corporations. We are committed to quality, innovation, and customer success.</p>
            </div>
            <div class="solutions-image reveal-right">
                <img src="<?php echo TOPY_URI; ?>/assets/images/about-company.svg" alt="TOP Y Machinery Factory" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Key Stats -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item reveal delay-1">
                <div class="stat-number"><span class="counter" data-target="13" data-suffix="+">0</span></div>
                <h3>Years Experience</h3>
                <p>Serving the food packaging industry since 2011</p>
            </div>
            <div class="stat-item reveal delay-2">
                <div class="stat-number"><span class="counter" data-target="60" data-suffix="+">0</span></div>
                <h3>Countries Served</h3>
                <p>Global export network across 6 continents</p>
            </div>
            <div class="stat-item reveal delay-3">
                <div class="stat-number"><span class="counter" data-target="5000" data-suffix="+">0</span></div>
                <h3>Machines Delivered</h3>
                <p>Installed and running worldwide</p>
            </div>
            <div class="stat-item reveal delay-4">
                <div class="stat-number"><span class="counter" data-target="50" data-suffix="+">0</span></div>
                <h3>R&D Engineers</h3>
                <p>Dedicated innovation team</p>
            </div>
        </div>
    </div>
</section>

<!-- Development History -->
<section class="innovation-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Our Journey</span>
            <h2>Our Development History</h2>
            <p>Over a decade of continuous innovation and growth.</p>
        </div>
        <div class="timeline">
            <div class="timeline-item reveal delay-1">
                <div class="timeline-year"><span>2011</span></div>
                <div class="timeline-content">
                    <h3>Company Founded</h3>
                    <p>TOP Y Machinery established in Guangdong, China, focusing on basic food packaging equipment.</p>
                </div>
            </div>
            <div class="timeline-item reveal delay-2">
                <div class="timeline-year"><span>2014</span></div>
                <div class="timeline-content">
                    <h3>First Export Order</h3>
                    <p>Expanded into international markets, shipping first machines to Southeast Asia.</p>
                </div>
            </div>
            <div class="timeline-item reveal delay-3">
                <div class="timeline-year"><span>2017</span></div>
                <div class="timeline-content">
                    <h3>R&D Center Established</h3>
                    <p>Opened dedicated research and development center with 30+ engineers for smart packaging innovation.</p>
                </div>
            </div>
            <div class="timeline-item reveal delay-4">
                <div class="timeline-year"><span>2020</span></div>
                <div class="timeline-content">
                    <h3>Smart Factory Upgrade</h3>
                    <p>Invested in IoT-enabled manufacturing, achieving ISO 9001 and CE certifications.</p>
                </div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year"><span>2023</span></div>
                <div class="timeline-content">
                    <h3>Global Expansion</h3>
                    <p>Reached 60+ countries with over 5,000 machines installed. Opened overseas service centers.</p>
                </div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year"><span class="highlight">2025</span></div>
                <div class="timeline-content">
                    <h3>AI-Powered Packaging</h3>
                    <p>Launching next-generation AI-powered packaging machinery with predictive maintenance and remote monitoring.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-subtitle">Our People</span>
            <h2>Our Team</h2>
            <p>The people behind TOP Y's success — dedicated professionals committed to food packaging excellence.</p>
        </div>
        <div class="choose-grid">
            <div class="choose-item reveal delay-1">
                <div class="choose-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>Leadership Team</h3>
                <p>Experienced executives driving strategic growth and global market expansion.</p>
            </div>
            <div class="choose-item reveal delay-2">
                <div class="choose-icon">
                    <i class="fas fa-flask"></i>
                </div>
                <h3>R&D Engineers</h3>
                <p>50+ engineers innovating in automation, robotics, and smart packaging technology.</p>
            </div>
            <div class="choose-item reveal delay-3">
                <div class="choose-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3>Production Team</h3>
                <p>Skilled craftsmen ensuring precision manufacturing and quality control.</p>
            </div>
            <div class="choose-item reveal delay-4">
                <div class="choose-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Service Team</h3>
                <p>Global support engineers providing installation, training, and 24/7 after-sales service.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content reveal">
            <h2>Want to Join Our Team?</h2>
            <p>We're always looking for talented individuals to help shape the future of food packaging.</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
