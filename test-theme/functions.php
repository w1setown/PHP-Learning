<?php
function register_nav() {
    register_nav_menus(
        array(
            'header' => __( 'Header' ),
            'footer' => __( 'Footer' )
        )
    );

    register_nav_menu('footer', 'Footer Menu');
    register_nav_menu('404', '404 Menu');
}

if (! function_exists('setup')) {
    function setup(){
        register_nav();
        add_theme_support('post-thumbnails');
        add_image_size('gabriel', 200, 200, array('center', 'center'));
    }
}


function scripts_header(){
    wp_enqueue_style('init', get_stylesheet_uri());
}

function scripts_footer(){
    //wp_enqueue_script('init', get_template_directory_uri() . '/js/init.js'); kommenteret ud, da det ikke bliver brugt i dette projekt
}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'scripts_header');
//add_action('wp_enqueue_scripts', 'scripts_footer');