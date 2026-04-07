<?php get_header(); ?>

<main class="single-project">
    <div class="project-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>


    <p class="site-email footer-email">
        <?php bloginfo('description'); ?>
    </p>
</main>
<?php get_footer(); ?>