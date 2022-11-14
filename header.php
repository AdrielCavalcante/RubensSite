<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0 !important;">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body id="body" <?php body_class(); ?>>
<header>
    <h1>LOGO</h1>
    <nav class="nav-menu d-none d-md-block">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main_menu', // identificador do menu
                'depth' => 1 // limita submenus
            )
        )
        ?>
    </nav>
    <nav class="nav-menu-mobile d-block d-md-none">
        <i class="fas fa-bars " id="hambuguer" onclick="menuMobile();"></i>
    </nav>
</header>
<div class="d-none flex-column" id="menu">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main_menu', // identificador do menu
                'depth' => 1 // limita submenus
            )
        )
        ?>
</div>