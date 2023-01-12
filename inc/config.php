<?php

// Theme config

function dever_register_assets() {
    wp_enqueue_script('jquery');

    wp_enqueue_style(
        'dever_font_dosis',
        'https://fonts.googleapis.com/css?family=Dosis',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'dever_globals',
        get_template_directory_uri() . "/assets/css/globals.css",
        ['dever_font_dosis'],
        '1.0'
    );
    
    wp_enqueue_style(
        'dever_mainmenu',
        get_template_directory_uri() . "/assets/css/mainmenu.css",
        [],
        '1.0'
    );
    
    if(is_home() || is_single()) {
        wp_enqueue_style(
            'dever_blog',
            get_template_directory_uri() . "/assets/css/blog.css",
            [],
            '1.0'
        );
    }
    
    if(is_post_type_archive('portfolio')) {
        wp_enqueue_style(
            'dever_blog',
            get_template_directory_uri() . "/assets/css/portfolio.css",
            [],
            '1.0'
        );
    }
}

add_action( 'wp_enqueue_scripts', 'dever_register_assets');