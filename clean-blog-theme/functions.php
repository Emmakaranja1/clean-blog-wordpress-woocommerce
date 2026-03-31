<?php
error_log('functions.php loaded'); 

function clean_blog_theme_setup() {
    add_theme_support('menus');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

    
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'clean_blog_theme_setup');





function clean_blog_assets() {
    
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css'
    );

    
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('bootstrap') 
    );

    
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        array('jquery'), 
        false,
        true
    );


    wp_enqueue_script(
        'theme-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array('jquery'),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'clean_blog_assets');
