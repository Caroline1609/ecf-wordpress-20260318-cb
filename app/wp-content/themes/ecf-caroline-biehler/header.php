<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header-nav">
        <nav class="site-navigation">
            <div>
                <p class="titre-wp"><?php bloginfo('name'); ?></p>
            </div>
            <div>
                <?php wp_nav_menu(['theme_location' => 'menuPrincipal']); ?>
            </div>

        </nav>

    </header>

<div class="position">


    <aside class="site-aside">
        <!-- SIDEBAR -->
        <?php dynamic_sidebar('left'); ?>
    </aside>

    <main>
        <!-- FIN HEADER -->