<?php

function theme_add_scripts()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'); 
    wp_enqueue_style('fontawesome', 'https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('vuejs', 'https://unpkg.com/vue@3/dist/vue.global.js');
    wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-1.11.3.min.js');
}

add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_config()
{
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
    );

    add_theme_support('custom-logo', array(
        'flex-height' => false,
        'flex-width' => true
    ));

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_add_config', 0);