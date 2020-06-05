<?php

function akl_enqueue() {
    $uri = get_theme_file_uri();
    $ver = AKL_DEV_MODE ? time() : false;

    wp_register_style( 
        'akl_google_fonts', 
        'FONT', 
        [],
        $ver
    );
    wp_register_style( 
        'akl_bootstrap', 
        $uri . 
        '/assets/css/bootstrap.css',
        $ver 
    );

    wp_enqueue_style( 'akl_google_fonts' );
    wp_enqueue_style( 'akl_bootstrap' );

    wp_register_script( 
        'akl_plugins', 
        $uri . '/assets/js/plugins.js', 
        [], 
        $ver, 
        true 
    );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'akl_plugins' );
}