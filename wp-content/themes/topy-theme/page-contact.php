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
<section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 80px 0; color: var(--white); text-align: center;">
    <div class="container">
        <h1 style="font-size: 42px; margin-bottom: 15px;"><?php the_title(); ?></h1>
        <p style="font-size: 18px; max-width: 600px; margin: 0 auto;">Get in touch with our team for inquiries, quotes, or technical support.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="product-categories-section" style="padding: 80px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
            <!-- Contact Form -->
            <div>
                <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--primary-color);">Send Us a Message</h2>
                <p style="margin-bottom: 30px; color: var(--text-light);">Fill out the form below and our team will respond within 24 hours.</p>
                
                <form class="contact-form" method="post" action="" style="background: var(--bg-light); padding: 30px; border-radius: 8px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--text-color);">Full Name *</label>
                            <input type="text" name="name" required style="width: 100%; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px; background: var(--white);">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--text-color);">Email *</label>
                            <input type="email" name="email" required style="width: 100%; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px; background: var(--white);">
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--text-color);">Phone</label>
                            <input type="tel" name="phone" style="width: 100%; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px; background: var(--white);">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--text-color);">Company</label>
                            <input type="text" name="company" style="width: 100%; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px; background: var(--white);">
                        </div>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--text-color);">Product Interest</label>
                        <select name="product_interest" style="width: 100%; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px; background: var(--white);">
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
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; color: var(--text-color);">Message *</label>
                        <textarea name="message" rows="5" required placeholder="Tell us about your packaging needs, product types, expected capacity, etc." style="width: 100%; padding: 12px 15px; border: 1px solid var(--border-color); border-radius: 4px; font-size: 15px; resize: vertical; background: var(--white);"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background: var(--primary-color); color: var(--white); padding: 14px 40px; border: none; border-radius: 4px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background 0.3s;">
                        <i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--primary-color);">Contact Information</h2>
                <p style="margin-bottom: 30px; color: var(--text-light);">Reach out to us through any of the following channels.</p>

                <!-- Address -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px; padding: 20px; background: var(--bg-light); border-radius: 8px;">
                    <div style="min-width: 50px; height: 50px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-map-marker-alt" style="color: var(--white); font-size: 20px;"></i>
                    </div>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 16px;">Factory Address</h3>
                        <p style="color: var(--text-light); font-size: 14px;">No.123 Industry Road, Guangdong, China</p>
                    </div>
                </div>

                <!-- Phone -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px; padding: 20px; background: var(--bg-light); border-radius: 8px;">
                    <div style="min-width: 50px; height: 50px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-phone" style="color: var(--white); font-size: 20px;"></i>
                    </div>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 16px;">Phone</h3>
                        <p style="color: var(--text-light); font-size: 14px;">+86 123 456 7890</p>
                        <p style="color: var(--text-light); font-size: 14px;">+86 987 654 3210 (WhatsApp)</p>
                    </div>
                </div>

                <!-- Email -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px; padding: 20px; background: var(--bg-light); border-radius: 8px;">
                    <div style="min-width: 50px; height: 50px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-envelope" style="color: var(--white); font-size: 20px;"></i>
                    </div>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 16px;">Email</h3>
                        <p style="color: var(--text-light); font-size: 14px;">info@topymachinery.com</p>
                        <p style="color: var(--text-light); font-size: 14px;">sales@topymachinery.com</p>
                    </div>
                </div>

                <!-- Working Hours -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px; padding: 20px; background: var(--bg-light); border-radius: 8px;">
                    <div style="min-width: 50px; height: 50px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-clock" style="color: var(--white); font-size: 20px;"></i>
                    </div>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 16px;">Working Hours</h3>
                        <p style="color: var(--text-light); font-size: 14px;">Monday - Saturday: 8:00 AM - 6:00 PM (GMT+8)</p>
                        <p style="color: var(--text-light); font-size: 14px;">Sunday: Closed</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div style="margin-top: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 16px;">Follow Us</h3>
                    <div style="display: flex; gap: 15px;">
                        <a href="#" style="width: 45px; height: 45px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); text-decoration: none; transition: background 0.3s;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="width: 45px; height: 45px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); text-decoration: none; transition: background 0.3s;"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" style="width: 45px; height: 45px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); text-decoration: none; transition: background 0.3s;"><i class="fab fa-youtube"></i></a>
                        <a href="#" style="width: 45px; height: 45px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); text-decoration: none; transition: background 0.3s;"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (placeholder) -->
<section style="padding: 0; background: var(--bg-light);">
    <div style="width: 100%; height: 400px; background: #e0e0e0; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center; color: var(--text-light);">
            <i class="fas fa-map-marked-alt" style="font-size: 48px; margin-bottom: 15px; color: var(--primary-color);"></i>
            <p>Google Maps integration area</p>
            <p style="font-size: 14px;">No.123 Industry Road, Guangdong, China</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
