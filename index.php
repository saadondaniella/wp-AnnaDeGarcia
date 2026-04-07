<?php get_header(); ?>

<main>
    <section class="containers">
        <div>
            <P><?= bloginfo('description'); ?></P>

            <?php
            if (have_posts()) {
                print '<ul>';
                while (have_posts()) {
                    the_post(); ?>
                    <li>
                        <a href=" <?= get_the_permalink(); ?>">
                            <h2>
                                <?= get_the_title(); ?>
                            </h2>
                            <?= the_excerpt(); ?>
                        </a>
                    </li>

            <?php }
                print '</ul>';
            }

            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>