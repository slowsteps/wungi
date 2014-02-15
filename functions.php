<?php


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );


add_theme_support( 'post-thumbnails' );


add_action('wp_insert_post', 'mk_set_default_custom_fields');
 
function mk_set_default_custom_fields($post_id)
{
    if ( $_GET['post_type'] != 'page' ) {
        add_post_meta($post_ID, 'subtitle', 'custom value', true);    
    }
 
    return true;
}

add_action('publish_post', 'add_custom_field_automatically');

function add_custom_field_automatically($post_ID) {
    global $wpdb;
    if(!wp_is_post_revision($post_ID)) {
        add_post_meta($post_ID, 'subtitle', 'custom value', true);    
	}
}


?>