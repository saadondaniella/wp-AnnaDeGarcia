<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">
    <title><?= get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="header-inner">
            <div class="header-left">
                <a class="header-logo" href="<?php echo home_url('/'); ?>">Anna De Garcia, Makeup Artist</a>
            </div>

            <?php if (is_single()) : ?>
                <div class="header-center">
                    <?php the_title(); ?>
                </div>
            <?php endif; ?>

            <nav class="header-right">
                <a class="header-link" href="<?php echo home_url('/about-me/'); ?>">About me</a>
            </nav>
        </div>
    </header>