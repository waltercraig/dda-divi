<?php
function base22_scripts() {
    
    // wp_deregister_script('jquery');

    // Development Versions, prevents us from clearing browser cache when developing
    $main_js_version = 1; // filemtime(get_template_directory() . '/build/index.js'); //'1.0.0';
    $main_css_version = 1; // filemtime(get_template_directory() . '/build/index.css'); //'1.0.0';

    // Enqueue Style Sheet and Javascript
    // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'base22-style', get_stylesheet_directory_uri() . '/build/index.css', '', $main_css_version, 'all');
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/build/index.js', '', $main_js_version, true );

    // Remove Block Editor CSS 
    wp_dequeue_style( 'wp-block-library' );

    // Remove Wp Embeds
    // wp_deregister_script( 'wp-embed' );
}
add_action('wp_enqueue_scripts', 'base22_scripts');

/*
* Head clean up. Lets Remove below until we need them
* 1 - Remove Rest API from head
* 2 - Remove Emojis from head
* 3 - Remove External Blog Editor from head
* 4 - Remove External Blog Editor from head
* 5 - Remove what version of WP from head
* 6 - Remove oEmbed discovery links
*/

// 1
remove_action( 'wp_head','rest_output_link_wp_head', 10, 0 );
// 2
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
// 3
remove_action ('wp_head', 'rsd_link');
// 4
remove_action( 'wp_head', 'wlwmanifest_link');
// 5
remove_action('wp_head', 'wp_generator');
// 6
remove_action( 'wp_head','wp_oembed_add_discovery_links');
