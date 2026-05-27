<?php
/**
 * Custom Widgets
 *
 * @package TopyTheme
 */

// Contact Info Widget
class Topy_Contact_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'topy_contact',
            'TOP Y Contact Info',
            array('description' => 'Display company contact information')
        );
    }
    
    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo '<h3>' . esc_html($instance['title'] ?? 'Contact Us') . '</h3>';
        echo '<ul class="contact-info">';
        echo '<li><i class="fas fa-phone"></i> ' . esc_html(get_option('topy_company_phone', '+86 123 456 7890')) . '</li>';
        echo '<li><i class="fas fa-envelope"></i> ' . esc_html(get_option('topy_company_email', 'info@topymachinery.com')) . '</li>';
        echo '<li><i class="fas fa-map-marker-alt"></i> ' . esc_html(get_option('topy_company_address', 'Guangdong, China')) . '</li>';
        echo '</ul>';
        echo $args['after_widget'];
    }
    
    public function form($instance) {
        $title = $instance['title'] ?? 'Contact Us';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }
}

function topy_register_widgets() {
    register_widget('Topy_Contact_Widget');
}
add_action('widgets_init', 'topy_register_widgets');
