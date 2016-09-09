<?php

wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '3.0.1', 'all' );

wp_enqueue_script( 'bootstrap-js' );

wp_enqueue_style( 'bootstrap-css' );