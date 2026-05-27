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
<section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 80px 0; color: var(--white); text-align: center;">
    <div class="container">
        <h1 style="font-size: 42px; margin-bottom: 15px;"><?php the_title(); ?></h1>
        <p style="font-size: 18px; max-width: 600px; margin: 0 auto;">A technology-driven leader in intelligent food packaging machinery since 2011.</p>
    </div>
</section>

<!-- Company Introduction -->
<section class="product-categories-section" style="padding: 80px 0;">
    <div class="container">
        <div class="custom-solutions-content" style="display: flex; align-items: center; gap: 50px;">
            <div class="solutions-text" style="flex: 1;">
                <h2 style="font-size: 36px; margin-bottom: 20px; color: var(--primary-color);">About TOP Y Machinery</h2>
                <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.8;">Founded in 2011, TOP Y Machinery Co., Ltd. is a technology-driven leading manufacturer of intelligent food packaging machinery. We specialize in designing, manufacturing, and delivering high-performance packaging solutions for the global food industry.</p>
                <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.8;">With a state-of-the-art manufacturing facility in Guangdong, China, and a dedicated R&D team of over 50 engineers, we continuously innovate to meet the evolving demands of food packaging automation.</p>
                <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.8;">Our machines are exported to over 60 countries worldwide, serving food manufacturers from small businesses to multinational corporations. We are committed to quality, innovation, and customer success.</p>
            </div>
            <div style="flex: 1;">
                <img src="<?php echo TOPY_URI; ?>/assets/images/custom-solutions.jpg" alt="TOP Y Machinery Factory" style="width: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Key Stats -->
<section class="services-section" style="padding: 60px 0; background: var(--bg-light);">
    <div class="container">
        <div class="choose-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div class="choose-number" style="font-size: 48px; font-weight: 700; color: var(--primary-color); margin-bottom: 15px;">13+</div>
                <h3 style="margin-bottom: 5px;">Years Experience</h3>
                <p style="color: var(--text-light); font-size: 14px;">Serving the food packaging industry since 2011</p>
            </div>
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div class="choose-number" style="font-size: 48px; font-weight: 700; color: var(--primary-color); margin-bottom: 15px;">60+</div>
                <h3 style="margin-bottom: 5px;">Countries Served</h3>
                <p style="color: var(--text-light); font-size: 14px;">Global export network across 6 continents</p>
            </div>
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div class="choose-number" style="font-size: 48px; font-weight: 700; color: var(--primary-color); margin-bottom: 15px;">5000+</div>
                <h3 style="margin-bottom: 5px;">Machines Delivered</h3>
                <p style="color: var(--text-light); font-size: 14px;">Installed and running worldwide</p>
            </div>
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div class="choose-number" style="font-size: 48px; font-weight: 700; color: var(--primary-color); margin-bottom: 15px;">50+</div>
                <h3 style="margin-bottom: 5px;">R&D Engineers</h3>
                <p style="color: var(--text-light); font-size: 14px;">Dedicated innovation team</p>
            </div>
        </div>
    </div>
</section>

<!-- Development History -->
<section class="innovation-section" style="padding: 80px 0;">
    <div class="container">
        <div class="section-header">
            <h2>Our Development History</h2>
            <p>Over a decade of continuous innovation and growth.</p>
        </div>
        <div style="max-width: 800px; margin: 40px auto 0;">
            <div style="display: flex; gap: 30px; margin-bottom: 30px; align-items: flex-start;">
                <div style="min-width: 100px; text-align: center;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 8px 16px; border-radius: 4px; font-weight: 700; font-size: 18px;">2011</span>
                </div>
                <div style="background: var(--bg-light); padding: 20px; border-radius: 8px; flex: 1;">
                    <h3 style="margin-bottom: 8px; color: var(--primary-color);">Company Founded</h3>
                    <p style="color: var(--text-light); font-size: 14px;">TOP Y Machinery established in Guangdong, China, focusing on basic food packaging equipment.</p>
                </div>
            </div>
            <div style="display: flex; gap: 30px; margin-bottom: 30px; align-items: flex-start;">
                <div style="min-width: 100px; text-align: center;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 8px 16px; border-radius: 4px; font-weight: 700; font-size: 18px;">2014</span>
                </div>
                <div style="background: var(--bg-light); padding: 20px; border-radius: 8px; flex: 1;">
                    <h3 style="margin-bottom: 8px; color: var(--primary-color);">First Export Order</h3>
                    <p style="color: var(--text-light); font-size: 14px;">Expanded into international markets, shipping first machines to Southeast Asia.</p>
                </div>
            </div>
            <div style="display: flex; gap: 30px; margin-bottom: 30px; align-items: flex-start;">
                <div style="min-width: 100px; text-align: center;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 8px 16px; border-radius: 4px; font-weight: 700; font-size: 18px;">2017</span>
                </div>
                <div style="background: var(--bg-light); padding: 20px; border-radius: 8px; flex: 1;">
                    <h3 style="margin-bottom: 8px; color: var(--primary-color);">R&D Center Established</h3>
                    <p style="color: var(--text-light); font-size: 14px;">Opened dedicated research and development center with 30+ engineers for smart packaging innovation.</p>
                </div>
            </div>
            <div style="display: flex; gap: 30px; margin-bottom: 30px; align-items: flex-start;">
                <div style="min-width: 100px; text-align: center;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 8px 16px; border-radius: 4px; font-weight: 700; font-size: 18px;">2020</span>
                </div>
                <div style="background: var(--bg-light); padding: 20px; border-radius: 8px; flex: 1;">
                    <h3 style="margin-bottom: 8px; color: var(--primary-color);">Smart Factory Upgrade</h3>
                    <p style="color: var(--text-light); font-size: 14px;">Invested in IoT-enabled manufacturing, achieving ISO 9001 and CE certifications.</p>
                </div>
            </div>
            <div style="display: flex; gap: 30px; margin-bottom: 30px; align-items: flex-start;">
                <div style="min-width: 100px; text-align: center;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 8px 16px; border-radius: 4px; font-weight: 700; font-size: 18px;">2023</span>
                </div>
                <div style="background: var(--bg-light); padding: 20px; border-radius: 8px; flex: 1;">
                    <h3 style="margin-bottom: 8px; color: var(--primary-color);">Global Expansion</h3>
                    <p style="color: var(--text-light); font-size: 14px;">Reached 60+ countries with over 5,000 machines installed. Opened overseas service centers.</p>
                </div>
            </div>
            <div style="display: flex; gap: 30px; align-items: flex-start;">
                <div style="min-width: 100px; text-align: center;">
                    <span style="display: inline-block; background: var(--secondary-color); color: var(--white); padding: 8px 16px; border-radius: 4px; font-weight: 700; font-size: 18px;">2025</span>
                </div>
                <div style="background: var(--bg-light); padding: 20px; border-radius: 8px; flex: 1;">
                    <h3 style="margin-bottom: 8px; color: var(--primary-color);">AI-Powered Packaging</h3>
                    <p style="color: var(--text-light); font-size: 14px;">Launching next-generation AI-powered packaging machinery with predictive maintenance and remote monitoring.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="why-choose-section" style="padding: 80px 0; background: var(--bg-light);">
    <div class="container">
        <div class="section-header">
            <h2>Our Team</h2>
            <p>The people behind TOP Y's success — dedicated professionals committed to food packaging excellence.</p>
        </div>
        <div class="choose-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div style="width: 80px; height: 80px; background: var(--primary-color); border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user-tie" style="font-size: 32px; color: var(--white);"></i>
                </div>
                <h3 style="margin-bottom: 5px;">Leadership Team</h3>
                <p style="color: var(--text-light); font-size: 14px;">Experienced executives driving strategic growth and global market expansion.</p>
            </div>
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div style="width: 80px; height: 80px; background: var(--primary-color); border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-flask" style="font-size: 32px; color: var(--white);"></i>
                </div>
                <h3 style="margin-bottom: 5px;">R&D Engineers</h3>
                <p style="color: var(--text-light); font-size: 14px;">50+ engineers innovating in automation, robotics, and smart packaging technology.</p>
            </div>
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div style="width: 80px; height: 80px; background: var(--primary-color); border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-hard-hat" style="font-size: 32px; color: var(--white);"></i>
                </div>
                <h3 style="margin-bottom: 5px;">Production Team</h3>
                <p style="color: var(--text-light); font-size: 14px;">Skilled craftsmen ensuring precision manufacturing and quality control.</p>
            </div>
            <div class="choose-item" style="text-align: center; padding: 30px; background: var(--white); border-radius: 8px;">
                <div style="width: 80px; height: 80px; background: var(--primary-color); border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-headset" style="font-size: 32px; color: var(--white);"></i>
                </div>
                <h3 style="margin-bottom: 5px;">Service Team</h3>
                <p style="color: var(--text-light); font-size: 14px;">Global support engineers providing installation, training, and 24/7 after-sales service.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 80px 0; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); color: var(--white); text-align: center;">
    <div class="container">
        <div class="cta-content">
            <h2>Want to Join Our Team?</h2>
            <p>We're always looking for talented individuals to help shape the future of food packaging.</p>
            <div class="cta-buttons" style="margin-top: 30px;">
                <a href="/contact" class="btn btn-secondary" style="background: transparent; color: var(--white); border: 2px solid var(--white); padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: 600;">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
