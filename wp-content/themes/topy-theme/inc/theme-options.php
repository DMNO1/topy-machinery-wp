<?php
/**
 * Theme Options Page
 *
 * @package TopyTheme
 */

function topy_theme_options() {
    add_theme_page(
        'TOP Y Settings',
        'TOP Y Settings',
        'manage_options',
        'topy-settings',
        'topy_settings_page'
    );
}
add_action('admin_menu', 'topy_theme_options');

function topy_settings_page() {
    ?>
    <div class="wrap">
        <h1>TOP Y Machinery Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('topy_options_group');
            do_settings_sections('topy-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function topy_register_settings() {
    register_setting('topy_options_group', 'topy_company_phone');
    register_setting('topy_options_group', 'topy_company_email');
    register_setting('topy_options_group', 'topy_company_address');
    register_setting('topy_options_group', 'topy_whatsapp');
    register_setting('topy_options_group', 'topy_facebook');
    register_setting('topy_options_group', 'topy_linkedin');
    register_setting('topy_options_group', 'topy_youtube');
}
add_action('admin_init', 'topy_register_settings');
