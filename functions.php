<?php

if( ! function_exists('dds_setup') ) {

    function dds_setup() {

        // External files
        require 'includes/enqueue.php';

    }

}

add_action( 'after_setup_theme', 'dds_setup' );