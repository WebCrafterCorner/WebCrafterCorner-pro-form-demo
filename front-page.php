<?php
/**
 * The front page template file
 *
 * @package ProFrom
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section" style="background-color: #5B21B6; color: #ffffff; padding: 60px 20px; text-align: center;">
        <div class="hero-content" style="max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 42px; margin-bottom: 15px; font-weight: bold;">Welcome to PRO-FORM</h1>
            <p style="font-size: 18px; margin-bottom: 25px;">Fuel your passion with high-performance fitness supplements and apparel.</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn-shop-now" style="background-color: #ffffff; color: #5B21B6; padding: 12px 30px; text-decoration: none; font-weight: bold; border-radius: 25px; display: inline-block;">Shop Now</a>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="product-categories-section" style="padding: 50px 20px; max-width: 1200px; margin: 0 auto; text-align: center;">
        <h2 style="font-size: 28px; font-weight: bold; letter-spacing: 1px; margin-bottom: 30px; color: #1E293B;">PRODUCT CATEGORIES</h2>
        
        <div class="category-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; justify-content: center;">
            
            <!-- Whey Protein -->
            <a href="<?php echo esc_url( get_term_link( 'whey-protein', 'product_cat' ) ); ?>" class="cat-card" style="display: block; padding: 20px; background: #ffffff; border: 1px solid #E2E8F0; border-radius: 12px; text-decoration: none; color: #0F172A; font-weight: bold; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: transform 0.2s ease;">
                <span>Whey Protein</span>
            </a>

            <!-- Mass Gainer -->
            <a href="<?php echo esc_url( get_term_link( 'mass-gainer', 'product_cat' ) ); ?>" class="cat-card" style="display: block; padding: 20px; background: #ffffff; border: 1px solid #E2E8F0; border-radius: 12px; text-decoration: none; color: #0F172A; font-weight: bold; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: transform 0.2s ease;">
                <span>Mass Gainer</span>
            </a>

            <!-- Creatine -->
            <a href="<?php echo esc_url( get_term_link( 'creatine', 'product_cat' ) ); ?>" class="cat-card" style="display: block; padding: 20px; background: #ffffff; border: 1px solid #E2E8F0; border-radius: 12px; text-decoration: none; color: #0F172A; font-weight: bold; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: transform 0.2s ease;">
                <span>Creatine</span>
            </a>

            <!-- Pre-Workout -->
            <a href="<?php echo esc_url( get_term_link( 'pre-workout', 'product_cat' ) ); ?>" class="cat-card" style="display: block; padding: 20px; background: #ffffff; border: 1px solid #E2E8F0; border-radius: 12px; text-decoration: none; color: #0F172A; font-weight: bold; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: transform 0.2s ease;">
                <span>Pre-Workout</span>
            </a>

        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products-section" style="padding: 40px 20px; max-width: 1200px; margin: 0 auto; text-align: center;">
        <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 25px; color: #5B21B6;">Featured Products</h2>
        <?php
            echo do_shortcode('[featured_products per_page="4" columns="4"]');
        ?>
    </section>

</main>

<?php get_footer(); ?>