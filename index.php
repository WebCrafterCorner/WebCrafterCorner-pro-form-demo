<?php get_header(); ?>

<div class="container" style="max-width:1200px; margin:40px auto; padding:0 20px;">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="proform-card" style="background:#fff; padding:30px; border-radius:12px; margin-bottom:20px; box-shadow:0 4px 15px rgba(0,0,0,0.05); border:1px solid #e2e8f0;">
            <h2 style="font-family:'Montserrat', sans-serif; margin-bottom:15px; color:#0F172A;"><?php the_title(); ?></h2>
            <div style="line-height:1.6; color:#475569;">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else: ?>
        <p>Koi content nahi mila.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>