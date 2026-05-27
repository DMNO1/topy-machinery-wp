<?php
/**
 * Header template
 *
 * @package TopyTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TOP Y Machinery - Leading Manufacturer of Intelligent Food Packaging Machinery">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span><i class="fas fa-phone"></i> +86 123 456 7890</span>
            <span><i class="fas fa-envelope"></i> info@topymachinery.com</span>
        </div>
        <div class="top-bar-right">
            <a href="/quote"><i class="fas fa-file-alt"></i> Get A Quote</a>
            <a href="/partner"><i class="fas fa-handshake"></i> Become Our Partner</a>
            <a href="/tracking"><i class="fas fa-truck"></i> Order Tracking</a>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="main-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo home_url(); ?>">
                        <h1>TOP Y MACHINERY</h1>
                        <span>Innovation Drives Food Packaging Evolution</span>
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Navigation -->
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => 'topy_fallback_menu',
                ));
                ?>
            </nav>
            
            <!-- Search -->
            <div class="header-search">
                <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <input type="text" name="s" placeholder="Search products...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            
            <!-- Language Switcher -->
            <div class="lang-switcher">
                <a href="#" class="active">English</a>
            </div>
            
            <!-- Mobile Toggle -->
            <button class="mobile-toggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<main class="site-main">
