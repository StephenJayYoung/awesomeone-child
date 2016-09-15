<?php

function theme_styles() {
wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '3.0.1', 'all' );
}

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-jquery', get_stylesheet_directory_uri() . '/bootstrap/jquery.min.js' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'awesomeone' ),
) );




