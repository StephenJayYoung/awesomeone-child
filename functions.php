<?php

function theme_styles() {
wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '3.0.1', 'all' );
}

//Load the theme JS
function theme_js() {
    //Adds JQuery from Google's CDN. Code pulled from www.http://css-tricks.com/snippets/wordpress/include-jquery-in-wordpress-theme/
    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
    function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array('jquery'), '', true );
}

wp_enqueue_script( 'theme_styles' );

wp_enqueue_style( 'theme_js' );


?>

