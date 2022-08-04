<?php

function lc_files()
{
    wp_enqueue_style('lc_style', get_stylesheet_uri());
    wp_enqueue_style('lc_main_style', get_template_directory_uri() . '/styles/main-style.css');
    wp_enqueue_style('bootstrap_css', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('tailwindcss', '//cdn.tailwindcss.com', NULL, '3.2', true);
    wp_enqueue_script('bootstrap_script', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'lc_files');
