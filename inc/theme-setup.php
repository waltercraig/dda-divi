<?php

function base22_theme_setup(){
	// Theme Support
	// https://developer.wordpress.org/reference/functions/add_theme_support/

	// Add Featured Image support
	// https://codex.wordpress.org/Post_Thumbnails
	// add_theme_support('post-thumbnails');

	// Adds Logo field to the Customiser section
	// https://developer.wordpress.org/themes/functionality/custom-logo/
	// add_theme_support( 'custom-logo', array(
	// 	'unlink-homepage-logo' => false, 
	// ) );
	
	// https://developer.wordpress.org/reference/functions/register_nav_menus/
	// register_nav_menus([
	// 	'main_menu' => 'Main Menu',
	// 	'footer_menu' => 'Footer Menu',
	// ]);

	// https://developer.wordpress.org/reference/functions/register_sidebar/
	// register_sidebar([
	// 	'name' => 'Blog Sidebar',
	// 	'id' => 'blog-sidebar',
	// 	'before_widget' => '<div class="blog-sidebar">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h3 class="h3">',
	// 	'after_title' => '</h3>',
	// ]);

	// Image sizes
	// https://developer.wordpress.org/reference/functions/add_image_size/ 
	
	// Updating the default medium image size
	// update_option( 'thumbnail_size_w', 316 );
	
	// add_image_size('page_header', 1728, 250, true);
	// add_image_size('blur', 20, 20, true);
	// add_image_size('general', 864, 470, true); //around 16 * 9
	// add_image_size('general_no_crop', 864, 470, false); //around 16 * 9
	// add_image_size('hero', 1728, 855, false);
}
add_action('after_setup_theme', 'base22_theme_setup' );