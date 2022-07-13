<?php

if( ! function_exists('dds_setup') ) {

    function dds_setup() {

        // Theme support
        add_theme_support( 'title-tag' );

        // External files
        require 'includes/enqueue.php';

    }

}

add_action( 'after_setup_theme', 'dds_setup' );