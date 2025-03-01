<?php
/**
 * Plugin Name: Show Sponsors 
 * Description: A simple plugin to display text "Sponsored" at the end of your post.
 * Version: 1.0
 */


 function modify_content($content){
    if (is_single() && has_category('sponsor')) {
        return  '<span class="Sponsored-text">Sponsored</span>' . $content;
    }
    return $content;
 } 
 add_filter('the_content', 'modify_content');

?> 
<style>
    span.Sponsored-text{
        background-color: grey;
        color: white !important;
        padding: 10px 5px;
        border-radius: 5px;
    }
</style>