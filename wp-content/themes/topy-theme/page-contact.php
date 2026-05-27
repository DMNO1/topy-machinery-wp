<?php
/**
 * Template Name: Contact
 * Description: Contact page with form, address, and contact info
 *
 * @package TopyTheme
 */

get_header();
?>

<!-- Page Hero Banner -->
<section class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Get in touch with our team for inquiries, quotes, or technical support.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-wrapper reveal-left">
                <h2>Send Us a Message</h2>
                <p>Fill out the form below and our team will respond within 24 hours.</p>
                
                <form class="contact-form" method="post" action="">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" name="name" required placeholder="Your full name">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" required placeholder="your@email.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="+1 234 567 890">
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" placeholder="Your company name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Product Interest</label>
                        <select name="product_interest">
                            <option value="">Select a product category...</option>
                            <option value="granular">Granular Packaging Machines</option>
                            <option value="liquid">Liquid/Sauce Packaging Machines</option>
                            <option value="solid">Block/Solid Packaging Machines</option>
                            <option value="powder">Powder Packaging Machines</option>
                            <option value="vffs">VFFS Machines</option>
                            <option value="doypack">Doypack Machines</option>
                            <option value="custom">Custom Solution</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" rows="5" required placeholder="Tell us about your packaging needs, product types, expected capacity, etc."></textarea>
                    </div>
                    <button type="submit" class="form-submit">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-wrapper reveal-right">
                <h2>Contact Information</h2>
                <p>Reach out to us through any of the following channels.</p>

                <!-- Address -->
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-info-text">
                        <h3>Factory Address</h3>
                        <p>No.123 Industry Road, Guangdong, China</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-info-text">
                        <h3>Phone</h3>
                        <p>+86 123 456 7890</p>
                        <p>+86 987 654 3210 (WhatsApp)</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-info-text">
                        <h3>Email</h3>
                        <p>info@topymachinery.com</p>
                        <p>sales@topymachinery.com</p>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-info-text">
                        <h3>Working Hours</h3>
                        <p>Monday - Saturday: 8:00 AM - 6:00 PM (GMT+8)</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div style="margin-top: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 16px;">Follow Us</h3>
                    <div class="social-links-inline">
                        <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-link" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="map-placeholder">
        <i class="fas fa-map-marked-alt"></i>
        <p>Google Maps integration area</p>
        <p style="font-size: 14px;">No.123 Industry Road, Guangdong, China</p>
    </div>
</section>

<?php get_footer(); ?>
