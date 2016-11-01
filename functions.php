<?php

//JavaScript
function enqueue_scripts () {
    wp_register_script('html5-shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');
    wp_register_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script('slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js');
    wp_register_script('onepagenav', get_template_directory_uri() . '/js/jquery.onepagenav.js');
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('html5-shiv');
    wp_enqueue_script('respond');
    wp_enqueue_script('slick');
    wp_enqueue_script('onepagenav');
    wp_enqueue_script('custom');
    
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

//CSS
function enqueue_styles() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap');
    wp_register_style( 'slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
    wp_enqueue_style( 'slick');
    wp_enqueue_style( 'myDefaultStyle', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

//remove top bar
add_filter( 'show_admin_bar', '__return_false' );

//setting up featured images
add_theme_support( 'post-thumbnails' );

//setting up top menu
function register_my_menu() {
  register_nav_menu('gstc-top-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>