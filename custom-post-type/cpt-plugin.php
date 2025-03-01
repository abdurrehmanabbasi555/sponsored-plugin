<?php
/**
 * Plugin Name: CPT Plugin
 * Description: CPT Plugin registers post type
 * Version: 1.0
 * Author:Me 
 */

add_action('init', 'register_custom_post_type');

function register_custom_post_type(){
    $args = array(
        'label' => 'Movies',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('movie', $args);
}

add_filter('pre_get_posts', 'include_movies_in_main_query');

function include_movies_in_main_query($query){
    if (!is_admin() && $query->is_main_query() && is_home()) {
        $query->set('post_type', array('post', 'movie'));
        get_template_part('content' , get_post_format());
    }
}

?>