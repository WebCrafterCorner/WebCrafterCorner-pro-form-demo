<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Announcement Bar -->
<div class="top-announcement">
    ⚡ Use Coupon Code <span>PROFORM10</span> to get 10% OFF on all orders!
</div>

<!-- Main Header -->
<header class="main-header">
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">PRO-<span>FORM</span></a>
    </div>

    <nav class="nav-links">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a href="<?php echo esc_url(home_url('/shop')); ?>">Products</a>
        <a href="<?php echo esc_url(home_url('/about-us')); ?>">About Us</a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a>
    </nav>

    <div class="header-icons">
        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="xoo-wsc-cart-trigger cart-btn">🛒 Cart</a>
    </div>
</header>