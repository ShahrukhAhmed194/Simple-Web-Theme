<?php

function simple_web_theme_support(){
    // adds dynamic theme support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    
}
add_action('after_setup_theme', 'simple_web_theme_support');

function simple_web_theme_menus(){

    $locations = array(
        'primary' => "Primary Left SideBar",
        'footer'  => "Footer Items"
    );

    register_nav_menus($locations);
}
add_action('init','simple_web_theme_menus');

function simple_web_theme_register_styles() {

    $version = wp_get_theme()->get('Version' );

    wp_enqueue_style('simple_web_theme-style', get_template_directory_uri().'/style.css',array('simple_web_theme-bootstrap'), $version , 'all');//here array loads the dependency
    wp_enqueue_style('simple_web_theme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(), '4.4.1','all');
    wp_enqueue_style('simple_web_theme-fontawsomw', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',array(), '5.13.0','all');

}
add_action('wp_enqueue_scripts','simple_web_theme_register_styles');

function simple_web_theme_register_scripts() {

    wp_enqueue_script('simple_web_theme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);

    wp_enqueue_script('simple_web_theme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);

    wp_enqueue_script('simple_web_theme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);

    wp_enqueue_script('simple_web_theme-minjs', get_template_directory_uri().'/assets/js/main.js', array(), $version, true);

}
add_action('wp_enqueue_scripts','simple_web_theme_register_scripts');