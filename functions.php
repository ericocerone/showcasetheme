<?php
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

function my_files() {
    $dep_path = get_template_directory_uri() . '/dep';

    // Enfileirar o CSS do Bootstrap
    wp_enqueue_style('bootstrap-css', $dep_path . '/bootstrap/css/bootstrap.min.css');
        
    // Enfileirar o JS do Bootstrap e o meu próprio script
    wp_enqueue_script('bootstrap-js', $dep_path . '/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('my-js', get_template_directory_uri() . '/script.js', array(), null, true);
    
    wp_enqueue_style('my_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_files');



