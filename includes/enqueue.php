<?php

if( ! function_exists('dds_scripts') ) {

    function dds_scripts() {

        // Bootstrap
        wp_enqueue_style( 'bootstrap-css', get_theme_file_uri('/vendor/bootstrap/css/bootstrap.min.css'), null, null, 'all' );
        wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/vendor/bootstrap/js/bootstrap.bundle.min.js'), null, null, true );

        // Main stylesheet
        wp_enqueue_style( 'base', get_theme_file_uri('/styles/css/base.min.css'), null, null, 'all' );

    }

}

add_action( 'wp_enqueue_scripts', 'dds_scripts' );