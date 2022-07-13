<?php

if( ! function_exists('dds_scripts') ) {

    function dds_scripts() {

        // Main stylesheet
        wp_enqueue_style( 'base', get_theme_file_uri('/styles/css/base.min.css'), null, null, 'all' );

    }

}

add_action( 'wp_enqueue_scripts', 'dds_scripts' );