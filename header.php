<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pagina">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head() ?>
</head>

<body id="body" <?php body_class(); ?>>
<header>
    header.php
</header>