<?php

function Ghasedak_menus()
{
    $locations = array(
        'primary' => 'menu in the header',
        'footer' => 'menu in the footer'
    );
    register_nav_menus($locations);
}

add_action('init', 'Ghasedak_menus');


function Ghasedak_theme_support()
{
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'Ghasedak_theme_support');

function Ghasedak_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('ghasedak_bootstrap_rtl', get_template_directory_uri() . "/assets/css/bootstrap-rtl.min.css", array(), '4.6.0', 'all');
    wp_enqueue_style('ghasedak_fonts', get_template_directory_uri() . "/assets/css/persian_font.css", array(), '1.0', 'all');
    wp_enqueue_style('ghasedak_custom', get_template_directory_uri() . "/assets/css/custom.css", array(), '1.0.0', 'all');
    wp_enqueue_style('ghasedak_mycustom', get_template_directory_uri() . "/assets/css/mycustom.css", array(), '1.0.0', 'all');

}

add_action('wp_enqueue_scripts', 'Ghasedak_register_styles');


function Ghasedak_register_scripts()
{
    wp_enqueue_script('ghasedak_jquery_js', get_template_directory_uri() . "/assets/js/jquery-3.2.1.min.js", array(), '5.0.2', 'all');
    wp_enqueue_script('ghasedak_bootstrap.bundle', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array(), '4.6.2-1', 'all');
    wp_enqueue_script('ghasedak_custom', get_template_directory_uri() . "/assets/js/custom.js", array(), '4.6.2-1', 'all');
}

add_action('wp_enqueue_scripts', 'Ghasedak_register_scripts');


add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height' => 50,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'themename_custom_logo_setup');


function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

add_action('init', 'register_my_menus');


