<?php

function theme_add_scripts()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'); 
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('vuejs', 'https://unpkg.com/vue@3/dist/vue.global.js');
}

add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_config()
{
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
            // 'identificador' => 'nome'
        )
    );

    add_theme_support('custom-logo', array(
        'width' => 238,
        'height' => 80,
        'flex-height' => false,
        'flex-width' => true
    ));

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_add_config', 0);