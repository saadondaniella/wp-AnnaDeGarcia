<?php get_header(); ?>

<main class="site-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <p class="site-email footer-email">
        <?php echo esc_html(get_bloginfo('description')); ?>
    </p>
</main>

<?php get_footer(); ?>